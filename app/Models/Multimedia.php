<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    use HasFactory;
    protected $fillable =[
        'title', 'presentername', 'filetype', 'file'
    ];

    public static function mp3()
    {
        return Multimedia::where('filetype','3')->get();
    }

    public static function mp4()
    {
        return Multimedia::where('filetype','4')->get();
    }
}
