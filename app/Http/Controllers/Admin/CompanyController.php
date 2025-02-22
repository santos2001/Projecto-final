<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\Logger;
use App\Models\Company;
use PDF;


class CompanyController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();

    }

    public function index()
    {

        $response['companies'] = Company::orderBy('id', 'desc')->get();

        //Logger
        $this->Logger->log('emergency', 'Listou as Empresas');
        return view('admin.company.list.index', $response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['company'] = Company::with('members')->find($id);

        //Logger
        $this->Logger->log('emergency', 'Visualizar uma empresa com o identificador ' . $id);
        return view('admin.company.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['company'] = Company::find($id);
        //Logger
        $this->Logger->log('emergency','Entrou em editar uma empresa com o identificador ' . $id);
        return view('admin.company.edit.index', $response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'nif' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'logo' => 'mimes:png,jpeg,jpg,svg',
            'lineBusiness' => 'required|string|max:255',
            'Website' => 'string|max:255',
        ]);


        if ($file = $request->file('logo')) {
            $file = $file->store('companies');
        } else {
            $file = Company::find($id)->logo;
        }


        Company::find($id)->update([

            'nif' => $request->nif,
            'company' => $request->company,
            'phone' => $request->phone,
            'email' => $request->email,
            'logo' =>  $file,
            'status' => $request->status,
            'lineBusiness' => $request->lineBusiness,
            'Website' => $request->Website,
            'issued' => $request->issued
        ]);

        //Logger
        $this->Logger->log('emergency', 'Editou uma empresa com o identificador ' . $id);

        return redirect()->route('admin.company.show', $id)->with('edit', '1');
    }

    public function list (Request $request){

        $response['checkbox'] = $request->all();

        if ($request->status == 'TODAS') {

            $response['companies'] = Company::get();
        }elseif($request->status == 'PAGO'){
            $response['companies'] = Company::where('status', 'PAGO')->get();

        }elseif($request->status == 'EMITIDO'){
            $response['companies'] = Company::where('issued', 'Sim')->get();

        }elseif($request->status == 'RECEBIDO'){
            $response['companies'] = Company::where('status', 'RECEBIDO')->get();

        }elseif($request->status == 'DUPLICADO'){
            $response['companies'] = Company::where('status', 'DUPLICADO')->get();

        }elseif($request->status == 'APROVADO'){
            $response['companies'] = Company::where('status', 'APROVADO')->get();

        }


        $pdf = PDF::loadView('pdf.company.index', $response);
        $pdf->setPaper('A4', 'landscape');

        //Logger
        $this->Logger->log('emergency', 'Imprimiu a lista de Empresas');

        return $pdf->stream("Lista de empresas.pdf");


    }


}
