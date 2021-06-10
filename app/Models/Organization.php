<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    // [
        // {{  }}
    //]
    use HasFactory;
    protected $fillable =[
        'name','photo', 'biography', 'status', 'rank'
    ];
    public function photoUrl() // each
    {
        return '/organizations/images/'.$this->photo;
    }
    public static function rectors() // the whole
    {
        return static::where('rank', 'rector');
    }
    public static function prorectors()
    {
        return static::where('rank', 'prorector');
    }
    public static function deans()
    {
        return static::where('rank', 'dean');
    }

    public static function rank($rank)
    {
        return static::where('rank',$rank)->pluck('rank');
    }


}
