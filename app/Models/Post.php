<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //One to Many
    // public function comments(){
    //     return $this->hasMany(Comment::class);
    // }

    //Many to Many
    public function catagories(){
        return $this->belongsToMany(Catagorie::class);
    }
} 
