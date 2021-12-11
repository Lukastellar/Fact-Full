<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'fact_id', 'is_like',
    ];

    public function post(){
        return $this->belongsTo(Fact::class, 'fact_id');
    }
}
