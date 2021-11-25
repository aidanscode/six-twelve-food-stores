<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Location;

class LocationManagementController extends Controller {

  public function index() {
    $locations = Location::all();

    return view('admin.location.index', [
      'locations' => $locations
    ]);
  }

  public function create() {
    return view('admin.location.create');
  }

  public function store(Request $request) {
    $request->validate([
      'name' => 'required|string|min:1',
      'address' => 'required|string|min:1'
    ]);

    $location = Location::create([
      'name' => $request->input('name'),
      'address' => $request->input('address')
    ]);

    return redirect(route('location.manage', ['location' => $location]))->with('success', 'Successfully created new location!');
  }

  public function manageMenu(Location $location) {
    return view('admin.location.manage', [
      'location' => $location
    ]);
  }

  public function edit(Location $location) {
    return view('admin.location.edit', [
      'location' => $location
    ]);
  }

  public function update(Request $request, Location $location) {
    $request->validate([
      'name' => 'required|string|min:1',
      'address' => 'required|string|min:1',
    ]);

    $location->name = $request->input('name');
    $location->address = $request->input('address');
    $location->save();

    return redirect(route('location.edit', ['location' => $location]))->with('success', 'Successfully updated location');
  }

  public function delete(Location $location) {
    $location->fullyDelete();

    return redirect(route('location.index'))->with('success', 'Successfully deleted location!');
  }

}
