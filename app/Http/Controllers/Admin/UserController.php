<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;

class UserController extends Controller
{
   
    public function index()
    {
        $users = User::all();
		
		return view('admin.user.index', [
			'users' => $users
		]);
    }
	
	public function create() {
		return view('admin.user.create');
	}
	
	public function store(Request $request){
		$request->validate([
			'email' => 'required|string|min:1',
			'name' => 'required|string|min:1',
			'password' => 'required|string|min:1'
		]);
		
		$user = User::create([
			'name' => $request->input('name'),
			'email' => $request->input('email'),
			'password' => Hash::make($request->input('password')),
			'force_password_reset' => 1
		]);
		
		return redirect(route('user.edit', ['user' => $user]))->with('success', 'Successfully created new user');
	}
	
    public function edit(User $user)
    {
        return view('admin.user.edit', [
			'user' => $user
		]);
    }
	
	public function update(Request $request, User $user){
		$request->validate([
			'email' => 'required|string|min:1',
			'name' => 'required|string|min:1',
			'password' => 'required|string|min:1',
		]);
		
		$user->email = $request->input('email');
		$user->name = $request->input('name');
		$user->password = Hash::make($request->input('password'));
		$user->save();
		
		return redirect(route('user.edit', ['user' => $user]))->with('success', 'Successfully updated user');
		
	}
	
	

}
