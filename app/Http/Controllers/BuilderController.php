<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BuilderController extends Controller {

  public function index() {
    return redirect(route('home.coming_soon'));
  }

}
