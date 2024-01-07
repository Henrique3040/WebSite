<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Posts;

class Likes extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function posts(){
        return $this->belongsTo(Posts::class);
    }

    protected $fillable = [
        'posts_id',
        'user_id'
    ];
}
