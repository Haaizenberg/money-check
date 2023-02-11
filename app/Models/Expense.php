<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'subject',
        'money',
    ];

    public static function add(array $attributes): ?self
    {
        $newOne = self::create($attributes);

        return $newOne;
    }
}
