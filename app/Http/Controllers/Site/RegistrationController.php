<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Jobs\RegistrationJob;
use App\Models\Registration;
use Illuminate\Http\Request;
use PDF;
use App\Apis\Minfin\GerarDC;
use App\Apis\Minfin\ObterDC;

class RegistrationController extends Controller
{
    private $GerarDC;
    private $ObterDC;

    public function __construct()
    {
        $this->GerarDC = new GerarDC;
        $this->ObterDC = new ObterDC;
    }
    public function create(){


        $response['registrations'] = Registration::count();

        if($response['registrations'] < 400){

            $response['STATUS'] = 'EM ABERTO';

        }else{
            $response['STATUS'] = 'LOTADO';
        }
        return view('site.registration.index', $response);
    }

    public function store(Request $request){

        $request->validate([
            'idCard' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'function' => 'required|string|max:255',
            'tel' => 'required',
            'email' => 'required|email'
        ]);



        //senha de homologação e de acompanhamento
        $key = 'FGI' . "-" . rand() . "-" . date('y');

        $data = Registration::create([
            'idCard' => $request->idCard,
            'type' => $request->type,
            'quantity' => $request->quantity,
            'name' => $request->name,
            'company' => $request->company,
            'function' => $request->function,
            'tel' => $request->tel,
            'email' => $request->email,
            'code' =>  $key
        ]);



        $registration = Registration::find($data->id);

        if ($registration->type == 'Empresa') {

            $amount = 100000 * $registration->quantity;
            $this->GerarDC->index($amount, $key);

        }else{
            $this->GerarDC->index(100000, $key);
        }

        return redirect()->back()->with('create', ['codetype' => $registration->code, 'idCardtype' => $registration->idCard]);

    }

    /**
     * Display a invoice with certified QrScan
     *
     * @return \Illuminate\Http\Response
     */
    public function invoice($code)
    {

        $response['registration'] = Registration::where('code',$code)->first();
        $response['payment'] = $this->ObterDC->index($code);

        $pdf = PDF::loadView('pdf/invoice/participant/index', $response);

        return $pdf->stream('RUPE -' . $code. '.pdf');

    }

}
