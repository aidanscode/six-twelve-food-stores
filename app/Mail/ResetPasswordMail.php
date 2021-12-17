<?php

namespace App\Mail;

use Illuminate\Queue\SerializesModels;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;

use App\Models\User;

class ResetPasswordMail extends Mailable {

  use Queueable, SerializesModels;

  public $user, $newPassword;

  public function __construct(User $user, string $newPassword) {
    $this->user = $user;
    $this->newPassword = $newPassword;
  }

  public function build() {
    return $this->subject('Your Password Has Been Reset')
      ->from('no-reply@sixtwelve.com', 'No-Reply')
      ->view('mail.password_reset');
  }

}
