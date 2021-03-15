<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPassword extends Mailable {

  use Queueable, SerializesModels;
  public function __construct($name, $token) {
    $this->name = $name;
    $this->token = $token;
  }
  public function build()
  {
    return $this->from('support@exilednoname.com')
    ->view('emailku')
    ->with(
      [
        'name'    => $this->name,
        'token'    => $this->token,
        'text_1'  => 'Gunakan link URL di bawah ini untuk melakukan reset password',
        'text_2'  => 'Abaikan email ini jika anda tidak melakukan permintaan reset password.'
      ]);
    }

  }
