<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->hasMany('App\Models\Comment','post_id','id');
    }
    public function user()
    {
        # code...
        return $this->hasOne('App\Models\User','id','user_id');
    }
 
}


?>
