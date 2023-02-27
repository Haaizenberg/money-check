<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        
        // dump(time());

        // dump(date('l j F Y G:i:s', time()));
        // dump(date('l j F Y G:i:s', strtotime('+ 3 month')));
        // dump(date('l j F Y G:i:s', strtotime('last Friday')));
        // dump(Carbon::now()->translatedFormat('l j F Y H:i:s'));
        dump(request()->route()->named('a'));
    }
}
