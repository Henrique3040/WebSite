<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ_answers extends Model
{
    use HasFactory;

    public function FAQ_questions(){
        return $this->belongsTo(FAQ::class, 'FAQ_id');
    }

    protected $fillable = [
        'answer',
        'FAQ_id'
    ];
}
