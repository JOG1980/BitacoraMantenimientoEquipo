<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    //__invoke() solo se ocupa cuando es una sola funcion
    //public function __invoke(){
    //    return "lista de equipos"; 
    //}

    //por convencion el metodo que muestra la pagina principal es index()
    public function index(){
        //return "lista de equipos";

        //$equipos = Equipo::all();
        $equipos = Equipo::paginate(20);  //mostramos 20 registros por pagina
        
        //return $equipos;
        return view('equipos.index',compact('equipos')); 
    }

    //por convencion el metodo que crea es create()
    public function create(){
        return "Agregar equipo"; 
    }

    //por convencion el metodo que muestra es show($elemento)
    public function show($equipo){
        return "mostrar equipo $equipo"; 
    }

}
