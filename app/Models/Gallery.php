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

    public static function activity_type($title_id)
    {
        return static::where('titleid',$title_id)->get();
    }

}
