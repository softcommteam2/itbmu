<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable= ['newstitleeng','newstitlemyan','newseng','newsmyan','upcomedate','photo1','photo2','photo3','photo4','photo5'];
}
