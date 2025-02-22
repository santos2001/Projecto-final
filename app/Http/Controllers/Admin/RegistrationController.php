<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;
use PDF;
use App\Apis\Minfin\ObterDC;

class RegistrationController extends Controller
{
    private $Logger;
    private $ObterDC;

    public function __construct()
    {
        $this->Logger = new Logger();
        $this->ObterDC = new ObterDC;
    }
    public function index()
    {

        $response['registrations'] = Registration::orderBy('id', 'desc')->get();

        //Logger
        $this->Logger->log('emergency', 'Listou os Inscritos para o Fórum');
        return view('admin.registration.list.index', $response);
    }


    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em cadastrar um participante');
        return view('admin.registration.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'quantity' => 'required|numeric',
            'level' => 'required|max:255',
            'type' => 'required|string|max:255',

        ]);

        $key = 'FGI' . "-" . rand() . "-" . date('y');


        for($i=1; $i <= $request->quantity; $i++){

            $participant = Registration::create([
                'name' => $request->name,
                'type' => $request->type,
                'level' => $request->level,
                'company' => $request->company,
                'quantity' => $request->quantity,
                'code'=>$key,
                'status' => 'PAGO'
            ]);

        }

        //Logger
        $this->Logger->log('info', 'Cadastrou um participante com o nome ' . $participant->name);

        return redirect()->route("admin.registration.show",$participant->id)->with('create', '1');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $response['registration'] = Registration::find($id);
        $response['payment'] = $this->ObterDC->index($response['registration']->code);

        //Logger
        $this->Logger->log(
            'emergency',
            'Visualizar um inscrito com o identificador ' . $id
        );
        return view('admin.registration.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['registration'] = Registration::find($id);
        //Logger
        $this->Logger->log(
            'emergency',
            'Entrou em editar um inscrito com o identificador ' . $id
        );
        return view('admin.registration.edit.index', $response);
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
        $validation = $request->validate([
            'idCard' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'function' => 'nullable|string|max:255',
            'tel' => 'nullable',
            'email' => 'nullable|email',
            'level' => 'required|string|max:255',

        ]);


        Registration::find($id)->update([

            'idCard' => $request->idCard,
            'name' => $request->name,
            'type' => $request->type,

            'company' => $request->company,
            'function' => $request->function,
            'tel' => $request->tel,
            'email' => $request->email,
            'level' => $request->level,
            'status' => $request->status,
        ]);
        //Logger
        $this->Logger->log('emergency', 'Editou um inscrito com o identificador ' . $id);

        return redirect()->route('admin.registration.show', $id)->with('edit', '1');
    }


    /**
     * Print the Certified
     *
     * @return \Illuminate\Http\Response
     */
    public function print($code)
    {

        $response['registration'] = Registration::where('code', $code)->first();
        if($response['registration']->status == 'PAGO' || $response['registration']->status == 'EMITIDO'){



            Registration::where('code', $code)->update([
                'status' => "EMITIDO",
                'printed_at'=>now(),
            ]);
            $pdf = PDF::loadView('pdf.credencial.guest.index', $response);
            $pdf->setPaper('A6', 'portrait');

            //Logger
            $this->Logger->log('emergency', 'Imprimiu uma credencial com o identificador: '.$response['registration']->code);

            return $pdf->stream('credenciamento-' . $response['registration']->code . ".pdf");

        }else{

            return redirect()->route('login')->with('NoAuth', '1');
        }

    }





    public function list (Request $request){

        $response['checkbox'] = $request->all();

        if ($request->status == 'TODAS') {

            $response['registrations'] = Registration::orderBy('name', 'ASC')->get();
        }elseif($request->status == 'PAGO'){
            $response['registrations'] = Registration::orderBy('name', 'ASC')->where('status', 'PAGO')->get();

        }elseif($request->status == 'N/PAGO'){
            $response['registrations'] = Registration::orderBy('name', 'ASC')->where('status', 'RECEBIDO')->get();

        }


        $pdf = PDF::loadView('pdf.participant.index', $response);
        $pdf->setPaper('A4', 'landscape');

        //Logger
        $this->Logger->log('emergency', 'Imprimiu a lista de participantes');

        return $pdf->stream("Lista de Participantes.pdf");


    }

}
