<?php

namespace Ohana\Http\Controllers\Auth;

use Ohana\User;
use Ohana\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/genealogy';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            // 'firstName' => 'required|string|firstName|max:255',
            // 'middleName' => 'string|middleName|max:255',
            // 'lastName' => 'required|string|lastName|max:255',
            // 'gender' => 'required',
            // 'livingStatus' => 'required|string|livingStatus|max:255',
            // 'birthDate' => 'required|date|birthDate|max:255',
            // 'birthPlace' => 'string|birthPlace|max:255',
            // 'photoURL' => 'string|photoURL|max:255',
            // 'barangay' => 'string|barangay|max:255',
            // 'city' => 'string|city|max:255',
            // 'postalCode' => 'integer|postalCode|min:4',
            // 'streetAddress' => 'string|streetAddress|max:255',
            // 'merged' => 'boolean|merged',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \Ohana\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'firstName' => $data['firstName'],
            'middleName' => $data['middleName'],
            'lastName' => $data['lastName'],
            'gender' => $data['gender'],
            'birthDate' => $data['birthDate'],
            'birthPlace' => $data['birthPlace'],
            // 'photoURL' => $data['photoURL'],
            'barangay' => $data['barangay'],
            'city' => $data['city'],
            'postalCode' => $data['postalCode'],
            'streetAddress' => $data['streetAddress'],
        ]);

        // $user->family = Family::create([
        //     'id' => $data['id'],
        // ]);

        // $user->clan = Clan::create([
        //     'id' => $data['id'],
        // ]);

        $userClan = array('id' => $id);
        Clan::insert($userClan);

        $userFamily = array('id' => $id);
        Family::insert($userFamily);

        return $user;
    }
}
