<?php

namespace Ohana\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function album_clan()
    {
        return view('albums.album_clan');
    }

    public function album_user()
    {
        return view('albums.album_user');
    }

}
