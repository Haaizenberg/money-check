<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddExpenseRequest;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MoneyCheckController extends Controller
{
    public function index(Request $request)
    {
        $expenses = Expense::all();

        return view('pages.money-check', [
            'expenses' => $expenses,
        ]);
    }

    public function addExpense(AddExpenseRequest $request)
    {
        Expense::add($request->validated());
    }
}
