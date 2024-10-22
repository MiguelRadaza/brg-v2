<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verse extends Model
{
    use HasFactory;


    public function notebook()
    {
        return $this->hasMany(Notebook::class, 'verse_id');
    }
}