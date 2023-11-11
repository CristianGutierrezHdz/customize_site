<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VerificacionCorreo extends Mailable
{
    use Queueable, SerializesModels;

    public $token;  // Declarar la variable que recibirás como parámetro

    // Constructor para recibir el parámetro
    public function __construct($token)
    {
        $this->token = $token;
    }


    public function build()
    {

        $Codigo = "http://127.0.0.1:8000/verificar-email/" . $this->token;

        return $this->view('Correo', ['Codigo' => $Codigo]);
    }
}
