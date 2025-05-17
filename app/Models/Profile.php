<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'job_title',
        'about_me',
        'photo',
        'email',
        'phone',
        'social_media', // JSON column for social media links
    ];

    protected $casts = [
        'social_media' => 'array', // Cast the social_media attribute to an array
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getSocialMediaLinksAttribute()
    {
        return json_decode($this->social_media, true);
    }

    public function setSocialMediaLinksAttribute($value)
    {
        $this->attributes['social_media'] = json_encode($value);
    }

    public function getPhotoUrlAttribute()
    {
        return $this->photo ? asset('storage/' . $this->photo) : null;
    }
}
