<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Hash;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller {

  public function index() {
    $users = User::all();

    return view('admin.user.index', [
    'users' => $users
    ]);
  }

  public function create() {
    return view('admin.user.create');
  }

  public function store(Request $request) {
    $request->validate([
      'email' => 'required|email|unique:' . User::class . ',email',
      'name' => 'required|string|min:1'
    ]);

    $user = User::createNewUser($request->input('email'), $request->input('name'));
    return redirect(route('user.edit', ['user' => $user]))->with('success', 'Successfully created new user');
  }

  public function edit(User $user) {
    return view('admin.user.edit', [
    'user' => $user
    ]);
  }

  public function update(Request $request, User $user) {
    $request->validate([
      'email' => [
        'required', 'email', Rule::unique('users', 'email')->ignore($user)
      ],
      'name' => 'required|string|min:1'
    ]);

    $user->email = $request->input('email');
    $user->name = $request->input('name');
    $user->save();

    return redirect(route('user.edit', ['user' => $user]))->with('success', 'Successfully updated user');
  }

  public function delete(User $user) {
    $user->delete();

    return redirect(route('user.index'))->with('success', 'Successfully deleted user!');
  }

  public function resetPassword(User $user) {
    $user->resetUserPassword();

    return back()->with('success', 'Successfully reset user password.');
  }

  public function change_password(User $user) {
    return view('admin.user.change_password', [
      'user' => $user
    ]);
  }

  public function update_password(Request $request, User $user) {
    $request->validate([
      'password' => 'required|confirmed|string|min:6',
    ]);

    $user->password = Hash::make($request->input('password'));
    $user->force_password_reset = 0;
    $user->save();

    return redirect(route('location.index', ['user' => $user]))->with('success', 'Successfully updated password');
  }

}
