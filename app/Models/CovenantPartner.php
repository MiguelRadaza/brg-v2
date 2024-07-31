<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CovenantPartner extends Model
{
    use HasFactory;

    public $fillable = [
        'user_id',
        'covenant_company_id'
    ];
}