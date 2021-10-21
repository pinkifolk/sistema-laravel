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
        $getRut= Vendor::get('rut');
        return view('crearorden',compact('getRut'));
    }
}
