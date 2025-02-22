<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Jobs\CompanyJob;
use App\Models\Company;
use Illuminate\Http\Request;
use PDF;

class CompanyController extends Controller
{

    public function create()
    {
        return view('site.company.index');
    }

    public function store(Request $request)
    {

        $request->validate([
            'plafond' => 'required|string',
            'nif' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'lineBusiness' => 'required|string|max:255',
            'Website' => 'string|max:255',
            'logo' => 'required|mimes:png,jpeg,jpg,svg'
        ]);


        $file = $request->file('logo')->store('companies');

        $key = 'FGI' . "-" . rand() . "-" . date('y');

        $company = Company::create([
            'plafond' =>  $request->plafond,
            'nif' => $request->nif,
            'company' => $request->company,
            'phone' => $request->phone,
            'email' => $request->email,
            'logo' =>  $file,
            'code' =>  $key,
            'lineBusiness' => $request->lineBusiness,
            'Website' => $request->Website
        ]);

       return redirect()->back()->with('create', 1);
    }


}
