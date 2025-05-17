<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'technologies', // JSON column for technologies used
        'demo_link',
        'repository_link',
        'image',
    ];

    protected $casts = [
        'technologies' => 'array', // Cast the technologies attribute to an array
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTechnologiesAttribute()
    {
        return json_decode($this->technologies, true);
    }

    public function setTechnologiesAttribute($value)
    {
        $this->attributes['technologies'] = json_encode($value);
    }

    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }
}
