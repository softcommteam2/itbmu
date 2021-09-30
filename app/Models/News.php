<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable= ['newtitle','description','upcomedate','type','photo','cover_photo', 'pdf','deleted_at'];

    public static function first_photo($new)
    {
        $photos = unserialize($new);
        return $photos[0];
       
    }
}
