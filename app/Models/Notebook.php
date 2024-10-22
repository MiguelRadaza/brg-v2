<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    use HasFactory;

    public $fillable = [
        'title', // nullable
        'description',
        'verse_id',
        'user_id',
        'day',
        'month',
        'year',
        'journal_type', // [morning , evening]
    ];
}