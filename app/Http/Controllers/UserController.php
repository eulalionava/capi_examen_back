<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    
    public function getDatos(){

        $datos = DB::table('users')
        ->join('user_domicilio','users.id_domicilio','=','user_domicilio.user_id')
        ->get();

        // print_r($datos);
        return response()->json($datos);
    }
}
