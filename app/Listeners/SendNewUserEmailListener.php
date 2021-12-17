<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Mail;

use App\Events\NewUserEvent;
use App\Mail\NewUserMail;

class SendNewUserEmailListener {

  public function handle(NewUserEvent $event) {
    Mail::to($event->getUser())->send(new NewUserMail($event->getUser(), $event->getDefaultPassword()));
  }

}
