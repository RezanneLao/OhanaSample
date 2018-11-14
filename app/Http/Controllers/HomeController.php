<?php

namespace Ohana\Http\Controllers;

use Auth;
use Ohana\User;
use Ohana\Family;
use Ohana\Clan;
use Ohana\PotentialUser;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function events()
    {
        return view('events');
    }

    public function help()
    {
        return view('help');
    }

    public function settings()
    {
        return view('settings');
    }

    public function homeindex()
    {
        if (Auth::check())
        {
            // users
            $users = User::all()->sortBy('id');
            $id = Auth::id();
            $user = User::find($id);

            // clans
            $clans = Clan::all()->sortBy('clanId');
            // $clans = Clan::where('id', $id)->get();
            $userClanExists = Clan::where('id', $id)->first();
            // $potentialUserClanExists = Clan::where('pid', $pid)->first();

            // families
            $families = Family::all()->sortBy('familyId');
            $userFamilyExists = Family::where('id', $id)->first();
            // $potentialUserFamilyExists = Family::where('pid', $pid)->first();

            $potentialUsers = PotentialUser::all()->sortBy('pid');

            if(count($userClanExists) > 0 || count($userFamilyExists) > 0) {                          
                return view('home', compact('users', 'user', 'clans', 'userClanExists', 'potentialUserClanExists', 'families', 'userFamilyExists', 'potentialUsers'));
            }
            // else {
            //     $userClan = array('id' => $id);
            //     Clan::insert($userClan);

            //     $userFamily = array('id' => $id);
            //     Family::insert($userFamily);

            //     return view('genealogy', compact('users', 'user', 'userClan', 'userFamily'));
            // }
        }
    }
}
