<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use App\Classes\Logger;
use App\Classes\Random;
use App\Models\Moderators;
use PDF;

class ModeratorsController extends Controller
{
    private $Logger;
    private $random;
    public function __construct()
    {
        $this->random = new Random();
        $this->Logger = new Logger;
    }

    public function index()
    {

        $response['moderators'] = Moderators::orderBy('id', 'desc')->get();

        //Logger
        $this->Logger->log('info', 'Listou os moderadores');
        return view('admin.moderators.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em cadastrar um moderador');
        return view('admin.moderators.create.index');
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
            'function' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'photo' => 'required|mimes:jpg,jpeg,png',
            'description' => 'nullable|string'
        ]);

        //RESIZE DA IMAGEM E GUARDAR A IMAGEM
        $file = $request->file('photo');
        $img = Image::make($file)->resize(400, 400);

        $namefile = $this->random->AlphaNumeric(8) . '.jpg';
        $img->save('../storage/app/public/moderators/' . $namefile);
        $file = 'moderators/' . $namefile;

        $moderator = Moderators::create([
            'name' => $request->name,
            'function' => $request->function,
            'company' => $request->company,
            'photo' => $file,
            'description' => $request->description
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou um moderador com o nome ' . $moderator->name);

        return redirect()->route("admin.moderators.show",$moderator->id)->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $response['moderators'] = Moderators::find($id);

        //Logger
        $this->Logger->log('info', 'Visualizar um orador com o identificador ' . $id);
        return view('admin.moderators.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $response['moderators'] = Moderators::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar um orador com o identificador ' . $id);
        return view('admin.moderators.edit.index', $response);
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
            'name' => 'required|string|max:255',
            'function' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'photo' => 'mimes:jpg,jpeg,png',
            'description' => 'nullable|string'
        ]);



        if ($file = $request->file('photo')) {
            $img = Image::make($file)->resize(400, 400);
            $namefile = $this->random->AlphaNumeric(8) . '.jpg';
            $img->save('../storage/app/public/moderators/' . $namefile);
            $file = 'moderators/' . $namefile;
        } else {
            $file = Moderators::find($id)->photo;
        }

        moderators::find($id)->update([
            'name' => $request->name,
            'function' => $request->function,
            'company' => $request->company,
            'photo' => $file,
            'description' => $request->description
        ]);

        //Logger
        $this->Logger->log('info', 'Editou uma pergunta frequente com o identificador ' . $id);
        return redirect()->route("admin.moderators.show", $id)->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um orador com o identificador ' . $id);
        Moderators::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }

     /**
     * Print the Certified
     *
     * @return \Illuminate\Http\Response
     */
    public function print($id)
    {

        $response['moderator'] = Moderators::where('id', $id)->first();
        $pdf = PDF::loadView('pdf.credencial.moderator.index', $response);
        $pdf->setPaper('A6', 'portrait');

        //Logger
        $this->Logger->log('emergency', 'Imprimiu uma credencial com o identificador: '.$response['moderator']->id);

        return $pdf->stream('credenciamento-' . $response['moderator']->id . ".pdf");

    }
}

