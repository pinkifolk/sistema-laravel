<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class quotationController extends Controller
{
    public function index()
    {
       return view('ordendecompra');
    }

    public function create()
    {
        return view('crearorden');
    }
    public function search(request $request)
    {
        $rut = $request->get('rut');
        $getData = Vendor::where('rut','=',$rut)->get();
        return view('crearorden',compact('getData'));
    }
}
