<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CovenantCompany extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'user_id',
        'church_id'
    ];
}
