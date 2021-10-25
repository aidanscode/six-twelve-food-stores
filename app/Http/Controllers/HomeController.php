<?php

namespace App\Http\Controllers;

class HomeController extends Controller {

  public function index() {
    return view('home.index');
  }

  public function menu() {
    return redirect(route('home.coming_soon'));
  }

  public function contact() {
    return view('home.contact');
  }

  public function hiring() {
    return view('home.hiring');
  }

  public function shipping() {
    return redirect(route('home.coming_soon'));
  }

  public function fresh() {
    return redirect(route('home.coming_soon'));
  }

  public function covid() {
    return view('home.covid');
  }

  public function comingSoon() {
    return view('home.coming_soon');
  }

}
