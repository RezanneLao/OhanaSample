<?php

namespace Ohana;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 
        'password',
        'firstName',
        'middleName',
        'lastName',
        'gender',
        'livingStatus',
        'birthDate',
        'birthPlace',
        'photoURL',
        'barangay',
        'city',
        'postalCode',
        'streetAddress',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
    ];

    public function family()
    {
        return $this->belongsTo('Ohana\Family', 'id');
    }

    public function clan()
    {
        return $this->belongsTo('Ohana\Clan', 'id');
    }
}
