<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    public function tracks()
    {
        return $this->hasMany('App\Models\Track','id','artist_id');
    }
}
