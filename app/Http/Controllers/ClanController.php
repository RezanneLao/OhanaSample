<?php

namespace Ohana\Http\Controllers;

use Ohana\Clan;
use Illuminate\Http\Request;

class ClanController extends Controller
{
    public function index() {
        $clans = Clan::all()->sortBy('clanId');

        return $clans;
    }
}
