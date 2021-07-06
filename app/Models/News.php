<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable= ['newstitleeng','newstitlemyan','newseng','newsmyan','upcomedate','type','photo'];

    public static function first_photo($new)
    {
        $photos = unserialize($new->photo);
        return $photos[0];
       
    }
}
