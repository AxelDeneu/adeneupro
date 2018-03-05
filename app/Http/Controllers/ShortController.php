<?php

namespace App\Http\Controllers;

use App\ShortUrl;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class ShortController extends Controller
{
    public function index($id = null) {
		if(isset($id)) {
			$ShortUrl = ShortUrl::where('code', $id)->first();
			if($ShortUrl) {
				return Redirect::to($ShortUrl->url);
			} else {
				$error = array('alertType' => "alert-danger", 'title' => 'Oups ! ', 'text' => "Le lien que vous cherchez n'existe pas ! :/");
				return view('short')->with('info', $error);
			}
		} else {
			return view('short');
		}
	}

	public function addShort(Request $request) {
				
		$urlToShort = $request->input('urlToShort');		
		
		$ShortUrl = new ShortUrl;
		$ShortUrl->url = $urlToShort;
		$ShortUrl->code = ShortController::generateRandomString(8);	
			
		if($ShortUrl->save()) {
			$success = array('alertType' => "alert-success", 'title' => "Super ! ", 'text' => "Votre lien raccourci est disponible <a href='/short/". $ShortUrl->code . "' class='alert-link'>ici</a>");
			return view('short')->with('info', $success);
		} else {
			$error = array('alertType' => "alert-danger", 'title' => "Oups ! ", 'text' => "Une erreur est survenue lors de la création de votre lien... Veuillez réessayer dans quelques instants.");
			return view('short')->with('info', $error);
		}
	}


	public function generateRandomString($length = 10) {
		$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    	$charactersLength = strlen($characters);
    	$randomString = '';
    	for ($i = 0; $i < $length; $i++) {
        	$randomString .= $characters[rand(0, $charactersLength - 1)];
    	}
    	return $randomString;
	}
}
