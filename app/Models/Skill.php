<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
        'level',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
