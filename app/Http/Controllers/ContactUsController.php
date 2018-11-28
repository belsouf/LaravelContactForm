<?php

namespace App\Http\Controllers;

use Session;
use App\message;
use App\Mail\SendContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    //Afficher la page contact (/contact)
    public function contactForm() {
        return view('contact.form');
    }

    //Afficher la page contact (/contact)
    public function sendEmail(Request $request) {

        //Règles de vaidation
        $rules = [
            'email' => 'required|email',
            'subject' => 'required',
            'description' => 'max:200'
        ];

        //Validation
        $this -> validate($request, $rules);
        
        //Envoi du mail
        Mail::to('contacthicham.bennouna@dkgroup.fr')
            ->send(new SendContact($request->only(['email', 'subject', 'description'])));

        //Enregistrer le message sur la BD
        message::create($request->all());
        
        //Redirection avec message de confirmation
        return redirect()->back()->with('success', 'Message envoyé !');
        
    }
}
