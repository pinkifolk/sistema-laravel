<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Http;
use App\Models\city;

class CityController extends Controller
{

    public function index()
    {
        $regionesGet = city::get();
        return view('regiones',compact('regionesGet'));
    }

    public function store()
    {
        
        $regioneslist = city::count('id');

        $resultRegiones = Http::get('https://apis.digital.gob.cl/dpa/regiones?orderBy=codigo&orderDir=asc');
        
        $regiones = $resultRegiones->json();
        $totalReg = count($regiones);
        

        if($regioneslist == $totalReg){
            
            $mensaje ="Las regiones ya estan actualizadas";
           
        }else{

            city::truncate();

            $resultRegiones = Http::get('https://apis.digital.gob.cl/dpa/regiones?orderBy=codigo&orderDir=asc');
            $regiones = $resultRegiones->json();

                foreach($regiones as $row){
                    city::create(['codigo' => $row['codigo'],
                                    'nombre' => $row["nombre"]                
                    ]);
                }
               $mensaje ="Se actualizaron correctamente";
            }        
            return back()->with('status',$mensaje);
    }
}
