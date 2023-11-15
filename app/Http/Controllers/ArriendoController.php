<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArriendoController extends Controller
{
    public function listArriendo(){
        return view("arriendo");
    }
}
