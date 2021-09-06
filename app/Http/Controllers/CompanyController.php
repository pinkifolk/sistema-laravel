<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\City;
use App\Models\Commune;
use App\Http\Requests\ValidationRequestCompany;



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
    public function store(ValidationRequestCompany $request)
    {

        $companycount = Company::count();

        if ($companycount == 0){
            
            Company::create($request->validated());

            return redirect()->route('company.index');
            
        }else{
            return redirect()->route('company.index')->with('status','Solo puede existir un registro en la tabla');            
        }
        return ;
       
    }
    public function edit(Company $companyGetitem)
    {
        $regiones = $regiones = City::get();
        $comunas = Commune::get();

        return view('editarempresa',[
            'companyGetitem' => $companyGetitem,
            'regiones' => $regiones,
            'comunas' => $comunas,
        ]);
        
    }
    public function update(Company $companyGetitem, ValidationRequestCompany $request  )
    {
        $companyGetitem->update($request->validated());
        return redirect()->route('company.index');
    }
}
