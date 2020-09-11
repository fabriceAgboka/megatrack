<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Message;
use Session;
use DB;
use \App\Camion;

class MessageController extends Controller
{
    public function post(Request $request){	
    	$message=Message::create([
    		'numero'=>request('numero'),
    		'message'=>request('message'),
    		'type'=>request('type'),
    	]);
    	if($message->type=="GPS"){
		  $this->updategpscamion($message->message, $message->numero);
    	}
		return response()->json(['message' => 'succes']);
    }

    public function get(){
        $numero="90909090";
        $numero1="90774454";
    	$texte="http://maps.google.com/maps?q=6.17709,1.20671 date:20-08-27 12:12:16,speed:11";
    	$this->updategpscamion($texte,$numero);
        $this->updategpscamion($texte,$numero1);
		return response()->json(['message' => 'succes']);
    }









    #Fonction update camion
    private function updategpscamion($message, $numero){
        $coordonnees=substr($message, 30, 15);
        $gps=explode(',',$coordonnees);
        $vitesse=substr($message,-2);
        $lat=$gps[0];
        $lng=$gps[1];
        $val = DB::Update('update camions set lat=?, lng=?, vitesse=? where numero=?',[$lat, $lng, $vitesse, $numero]);
        
        return $val;
    }
}