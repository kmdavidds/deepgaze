<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = ['title', 'icon', 'color', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
