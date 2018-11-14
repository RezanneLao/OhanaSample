<?php

namespace Ohana\Http\Controllers;

use Ohana\Family;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
	public function index() {
	    $families = Family::all()->sortBy('familyId');

	    return $families;
	}
}
