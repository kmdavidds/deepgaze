<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    protected $fillable = [
        'chapter_attempt_id',
        'answer_id',
        'answer_text',
        'score',
    ];

    public function chapterAttempt()
    {
        return $this->belongsTo(ChapterAttempt::class);
    }

    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }
}
