<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;
use App\Models\Commune;

class CommuneController extends Controller
{
    public function index()
    {   
        $comunasGet= Commune::paginate(15);
        return view('comunas', compact('comunasGet'));
    }
    public function store()
    {
        $comunaslist = Commune::count('id');

        $resultComunas = Http::get('https://apis.digital.gob.cl/dpa/comunas');
        
        $comunas = $resultComunas->json();
        $totalCom = count($comunas);
        

        if($comunaslist == $totalCom){
            
            $mensaje ="Las Comunas ya estan actualizadas";
           
        }else{

            Commune::truncate();

            $resultComunas = Http::get('https://apis.digital.gob.cl/dpa/comunas');
            $comunas = $resultComunas->json();

                foreach($comunas as $row){
                    Commune::create(['nombre' => $row["nombre"]                
                    ]);
                }
               $mensaje ="Se actualizaron correctamente";
            }        
            return back()->with('status',$mensaje);
    }
}
