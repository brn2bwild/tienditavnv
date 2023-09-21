<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmacionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $datos_mail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datos_mail)
    {
      $this->datos_mail = $datos_mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('La Tiendita VNV - Confirmación de reservación')->view('emails.confirmacion-reservacion');
    }
}
