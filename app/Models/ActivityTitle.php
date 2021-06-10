<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityTitle extends Model
{
    use HasFactory;
    protected $fillable = [
        'title'
    ];
}
