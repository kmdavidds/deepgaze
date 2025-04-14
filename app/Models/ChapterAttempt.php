<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChapterAttempt extends Model
{
    protected $table = 'chapter_attempts';

    protected $fillable = [
        'user_id',
        'chapter_id',
        'created_at',
    ];
}
