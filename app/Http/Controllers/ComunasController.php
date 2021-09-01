<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;
use App\Models\Comuna;

class ComunasController extends Controller
{
    public function index()
    {   
        $comunasGet= Comuna::paginate(15);
        return view('comunas', compact('comunasGet'));
    }
    public function store()
    {
        $comunaslist = Comuna::count('id');

        $resultComunas = Http::get('https://apis.digital.gob.cl/dpa/comunas');
        
        $comunas = $resultComunas->json();
        $totalCom = count($comunas);
        

        if($comunaslist == $totalCom){
            
            $mensaje ="Las Comunas ya estan actualizadas";
           
        }else{

            Comuna::truncate();

            $resultComunas = Http::get('https://apis.digital.gob.cl/dpa/comunas');
            $comunas = $resultComunas->json();

                foreach($comunas as $row){
                    Comuna::create(['nombre' => $row["nombre"]                
                    ]);
                }
               $mensaje ="Se actualizaron correctamente";
            }        
            return back()->with('status',$mensaje);
    }
}
