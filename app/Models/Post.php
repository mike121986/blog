<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // relacion uno a mucho uinversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cateogory(){
        return $this->belongsTo(Category::class);
    }

    // relacion muchois a muchos
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    // relacion uno a uno polimiorfica
    public function image(){
        return $this->morphTo(Image::class, 'imageable');
    }
}
