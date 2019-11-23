<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contacto extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     * 
     * @return void
     */
    public $contenido;
    public function __construct($data)
    {
        $this->contenido=$data;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.restcontacto');
    }
}
