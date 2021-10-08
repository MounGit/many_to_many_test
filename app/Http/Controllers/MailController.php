<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request){
        $contenuMail = [
            "name" => $request->name,
            "email" => $request->email,
            "message" => $request->message
        ];
        Mail::to('a-mouna@live.fr')->send(new Email($contenuMail));
        return redirect()->route('home')->with('message', 'Message envoyé avec succès');
    }
}
