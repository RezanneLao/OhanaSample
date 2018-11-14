<?php

namespace Ohana;

use Illuminate\Database\Eloquent\Model;

class PotentialUser extends Model
{
    protected $table = 'potentialUsers';
    protected $primaryKey = 'pid';
    public $timestamps = false;

    protected $fillable = [
        'email', 
        'firstName',
        'middleName',
        'lastName',
        'gender',
        'livingStatus',
        'birthDate',
        'birthPlace',
        'photoURL',
    ];

    public function family()
    {
        return $this->belongsTo('Ohana\Family', 'pid');
    }

    public function clan()
    {
        return $this->belongsTo('Ohana\Clan', 'pid');
    }
}
