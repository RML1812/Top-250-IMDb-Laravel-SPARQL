<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieDetailController extends Controller
{
    public function movieDetail()
    {
        return view('movieDetail');
    }
}
