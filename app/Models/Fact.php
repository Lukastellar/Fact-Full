<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Fact extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'category_id', 'status_id', 'user_id', 'guest_id'
    ];

    public function voted(){
        return $this->belongsToMany(User::class, 'likes')->withPivot('is_like')->where('user_id', Auth::user()->id);
    }
    public function likes(){
        return $this->hasMany(Like::class, 'fact_id','id')->where('is_like', 1);
    }
    public function dislikes(){
        return $this->hasMany(Like::class, 'fact_id','id')->where('is_like', 0);
    }

}
