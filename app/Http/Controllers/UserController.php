<?php

namespace Ohana\Http\Controllers;

use Auth;
use Ohana\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home() {
        $users = User::all()->sortBy('id');
        $id = Auth::id();
        $user = User::find($id);

        // return $user;
        return view('home', compact('user'));
    }

    public function index() {
        $users = User::all()->sortBy('id');

        return $users;
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('genealogy', compact('user'));
    }
}
