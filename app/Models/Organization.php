<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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
        if ($this->photo && Storage::exists('organizations/images/'.$this->photo)) {
            return '/storage/organizations/images/'.$this->photo;
        }
        // Photos uploaded before the move to storage still live in public/.
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
