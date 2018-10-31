<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistaController extends Controller
{
    public function index()
    {
        return view('vista1');
    }
    public function store(Request $request){
       $vista =new Vista();
        $vista ->name=$request->input('name');
        $vista ->apellido=$request->input('apellido');
       $vista->mail=$request->input('mail');  
       $vista->direccion=$request->input('direccion');      
       $vista->save();

       $ticket=vista::All();
       return view('registro1',compact(Vista));
 

    }
}
