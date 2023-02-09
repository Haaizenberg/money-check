<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MoneyCheckController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.money-check', [
            'expenses' => [],
        ]);
    }
}
