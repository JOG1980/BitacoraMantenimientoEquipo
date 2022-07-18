<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdenController extends Controller
{
    //__invoke() solo se ocupa cuando es una sola funcion
    public function __invoke(){
        return "lista de ordenes de trabajo"; 
    }
}
