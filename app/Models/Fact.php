<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fact extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'category_id', 'status_id', 'user_id', 'guest_id'
    ];

    public function votedUsers(){
        return $this->belongsToMany(User::class, 'likes')->withPivot('is_like')->withTimestamps();
    }
    public function likes(){
        return $this->hasMany(Like::class, 'fact_id','id');
    }
}
