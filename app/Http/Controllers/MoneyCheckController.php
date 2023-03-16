<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddExpenseRequest;
use App\Models\Expense;
use App\Repository\ExpensesRepository;
use Illuminate\Http\Request;

class MoneyCheckController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.money-check', [
            'expenses' => ExpensesRepository::expensesByMonthes(),
        ]);
    }

    public function addExpense(AddExpenseRequest $request)
    {
        Expense::add($request->validated());
    }
}
