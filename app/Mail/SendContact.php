<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendContact extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $subject;
    public $description;

    //Passer les paramètres à l'instance
    public function __construct($data) {
        $this->email = $data['email'];
        $this->subject = $data['subject'];
        $this->description = $data['description'];
    }

    //Créer le template du mail
    public function build() {
        return $this->markdown('emails.contact.send');
    }
}
