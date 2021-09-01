<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;
use App\Models\Vendor;
use App\Models\Regione;
use App\Models\Comuna;
use App\Http\Requests\ValidationRequest;

class VendorController extends Controller
{
    public function index()
    {
        $vendors = Vendor::get();
        return view('proveedores',compact('vendors'));
    }

    public function create()
    {   
        $regiones = Regione::get();
        $comunas = Comuna::get();

        return view('crearProvedores', compact('regiones','comunas'));
    }
    public function store(ValidationRequest $request)
    {
        
        Vendor::create($request->validated());

        return redirect()->route('vendors.index');
    }
    public function edit(Vendor $vendorsitem)
    {
        $regiones = $regiones = Regione::get();
        $comunas = Comuna::get();

        return view('editar',[
            'vendorsitem' => $vendorsitem,
            'regiones' => $regiones,
            'comunas' => $comunas,
        ]);
    }
    public function update(Vendor $vendorsitem, ValidationRequest $request)
    {
        $vendorsitem->update($request->validated());
        return redirect()->route('vendors.index');
    }
    public function destroy(Vendor $vendorsitem)
    {
        $vendorsitem->delete();
        return redirect()->route('vendors.index');
    }
}
