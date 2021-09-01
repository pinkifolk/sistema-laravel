<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;
use App\Models\Regione;

class RegionesController extends Controller
{

    public function index()
    {
        $regionesGet = Regione::get();
        return view('regiones',compact('regionesGet'));
    }

    public function store()
    {
        
        $regioneslist = Regione::count('id');

        $resultRegiones = Http::get('https://apis.digital.gob.cl/dpa/regiones?orderBy=codigo&orderDir=asc');
        
        $regiones = $resultRegiones->json();
        $totalReg = count($regiones);
        

        if($regioneslist == $totalReg){
            
            $mensaje ="Las regiones ya estan actualizadas";
           
        }else{

            Regione::truncate();

            $resultRegiones = Http::get('https://apis.digital.gob.cl/dpa/regiones?orderBy=codigo&orderDir=asc');
            $regiones = $resultRegiones->json();

                foreach($regiones as $row){
                    Regione::create(['codigo' => $row['codigo'],
                                    'nombre' => $row["nombre"]                
                    ]);
                }
               $mensaje ="Se actualizaron correctamente";
            }        
            return back()->with('status',$mensaje);
    }
}
