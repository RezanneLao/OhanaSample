<?php

namespace Ohana;

use Illuminate\Database\Eloquent\Model;

class Clan extends Model
{
    protected $table = 'clans';
    protected $primaryKey = 'clanId';
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
