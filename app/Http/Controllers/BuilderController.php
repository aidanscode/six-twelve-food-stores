<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BuilderController extends Controller {

  public function index() {
    return view('builder.builder');
  }

}
