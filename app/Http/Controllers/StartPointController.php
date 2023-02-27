<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartPointController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.start-points');
    }
}
