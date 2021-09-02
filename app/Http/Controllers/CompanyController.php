<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\City;
use App\Models\Commune;
use App\Http\Requests\ValidationRequest;



class CompanyController extends Controller
{
    public function index()
    {
        $companyGet = Company::get();
       return view('empresa', compact('companyGet'));
    }
    public function create()
    {
        $regiones = City::get();
        $comunas = Commune::get();
        return view('crearempresa',compact('regiones','comunas'));
    }
    public function store($request)
    {
        // Company::create($request->validated());
        // return redirect()->route('company.index');
        return $request;
    }
}
