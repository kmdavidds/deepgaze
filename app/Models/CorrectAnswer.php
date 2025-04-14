<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CorrectAnswer extends Model
{
    protected $fillable = [
        'question_id',
        'answer_id',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }
}
