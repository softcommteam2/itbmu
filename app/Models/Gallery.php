<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable=[
        'titleid', 'photo','label'
    ];

    public function activity()
    {
        return $this->belongsTo('App\Models\ActivityTitle','titleid')->withDefault();
    }

    public static function get_photo_by_type()
    {
       
    }

}
