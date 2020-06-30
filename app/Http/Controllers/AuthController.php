<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
    	return view('register');
    }

    public function welcome(request $request){
    	$nama = $request["nama1"]." ".$request["nama2"];
    	return view('welcome', ["nama" => $nama]);
    	// return $nama;
    }
}
