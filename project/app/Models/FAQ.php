<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use HasFactory;

    protected $fillable = [
        'category'
    ];

    public function FAQ_answers(){
        return $this->hasMany(FAQ_answers::class, 'FAQ_id');
    }
}
