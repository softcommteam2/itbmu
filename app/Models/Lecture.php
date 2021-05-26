<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'address', 'phone'
    ];
    public function subjects()
    {
        return $this->belongsTo('App\Models\Subject', 'subject_id')->withDefault();
    }
}
