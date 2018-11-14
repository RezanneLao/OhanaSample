<?php

namespace Ohana;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $table = 'families';
    protected $primaryKey = 'familyId';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('Ohana\User', 'id');
    }

    public function potentialUser()
    {
        return $this->belongsTo('Ohana\PotentialUser', 'pid');
    }
}
