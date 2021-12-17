<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

use App\Models\User;

class NewUserEvent {

  use Dispatchable, SerializesModels;

  private $user, $defaultPassword;

  public function __construct(User $user, string $defaultPassword) {
    $this->user = $user;
    $this->defaultPassword = $defaultPassword;
  }

  public function getUser() : User {
    return $this->user;
  }

  public function getDefaultPassword() : string {
    return $this->defaultPassword;
  }

}
