<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Hash;
use Auth;

class AuthController extends Controller {

  public function viewLogin() {
    return view('admin.auth.login');
  }

  public function login(Request $request) {
    $request->validate([
      'email' => 'required|email',
      'password' => 'required|string'
    ]);
    $user = User::where('email', $request->input('email'))->first();

    $errorMessage = 'Invalid email/password combination';

    if (is_null($user)) {
      return back()->withErrors([$errorMessage]);
    }

    if (!Hash::check($request->input('password'), $user->password)) {
      return back()->withErrors([$errorMessage]);
    }

    Auth::login($user);
	
	if ($user->force_password_reset == 1) {
		return redirect(route('user.change_password', ['user' => $user]));
	}
    return redirect(route('location.index'))->with('success', 'Successfully logged in');
  }

  public function logout() {
    if (!Auth::check()) {
      return redirect(route('home.index'))->withErrors(['You must be logged in to log out']);
    }

    Auth::logout();
    return redirect(route('home.index'))->with('success', 'Successfully logged out!');
  }

}
