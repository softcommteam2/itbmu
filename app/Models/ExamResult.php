<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class ExamResult extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=['year','date', 'pdf', 'deleted_at'];
}
