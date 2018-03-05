<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request) {
        $nom = $request->input('nom');
        $mail = $request->input('mail');
        $msg = $request->input('message');
        
        try {
       \Mail::send('emails.send', ['nom' => $nom, 'msg' => $msg], function($envoi) use($mail, $nom){
            $envoi->from($mail, $nom);
            
            $envoi->to('axel.deneu@gmail.com');
        });
        }
        catch(\Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
        
        return response()->json(['message' => 'Request completed']);
    }
}
