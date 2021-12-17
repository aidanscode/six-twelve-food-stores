<?php

namespace App\Mail;

use Illuminate\Queue\SerializesModels;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;

use App\Models\User;

class NewUserMail extends Mailable {

  use Queueable, SerializesModels;

  public $user, $defaultPassword;

  public function __construct(User $user, string $defaultPassword) {
    $this->user = $user;
    $this->defaultPassword = $defaultPassword;
  }

  public function build() {
    return $this->subject('Your New SixTwelve Admin Account')
      ->from('no-reply@sixtwelve.com', 'No-Reply')
      ->view('mail.new_user');
  }

}
