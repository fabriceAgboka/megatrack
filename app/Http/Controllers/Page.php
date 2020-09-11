<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Camion;

class Page extends Controller
{
    public function accueil(){
    	$camion=Camion::find(2);
    	return view('welcome',[
    		'camion'=>$camion
    	]);
    }

    public function new(){
    	return view('nouveau');
    }
}
