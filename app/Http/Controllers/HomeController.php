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
    return redirect(route('home.coming_soon'));
  }

  public function hiring() {
    return redirect(route('home.coming_soon'));
  }

  public function shipping() {
    return redirect(route('home.coming_soon'));
  }

  public function fresh() {
    return redirect(route('home.coming_soon'));
  }

  public function covid() {
    return redirect(route('home.coming_soon'));
  }

  public function comingSoon() {
    return view('home.coming_soon');
  }

}