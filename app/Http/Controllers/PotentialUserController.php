<?php

namespace Ohana\Http\Controllers;

use Ohana\PotentialUser;
use Illuminate\Http\Request;

class PotentialUserController extends Controller
{
    public function index() {
        $potentialUsers = PotentialUser::all()->sortBy('pid');

        return $potentialUsers;
    }
    
    public function create() {
        $potentialUser = new PotentialUser;
        $potentialUser->email = Input::get('email');
        $potentialUser->firstName = Input::get('firstName');
        $potentialUser->password = Hash::make(Input::get('password'));
        $potentialUser->save();

        // PotentialUser::insert($potentialUser);
    	return view('genealogy', compact('potentialUser'));
    }
}
