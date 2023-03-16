<?php

namespace App\Repository;

use App\Models\Expense;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class ExpensesRepository
{
    public static function expensesByMonthes(): Collection
    {
        $expenses = Expense::all(['id', 'subject', 'money', 'created_at', 'updated_at'])
            ->groupBy(function ($expense) {
                return $expense->created_at->format('n');
            });

        return $expenses;
    }
}
