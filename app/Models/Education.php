<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Education extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'institution',
        'degree',
        'field_of_study',
        'start_date',
        'end_date',
        'grade',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFormattedStartDateAttribute()
    {
        return \Carbon\Carbon::parse($this->start_date)->format('F Y');
    }

    public function getFormattedEndDateAttribute()
    {
        return $this->end_date ? \Carbon\Carbon::parse($this->end_date)->format('F Y') : 'Present';
    }
    public function getDurationAttribute()
    {
        $start = \Carbon\Carbon::parse($this->start_date);
        $end = $this->end_date ? \Carbon\Carbon::parse($this->end_date) : now();

        return $start->diffInMonths($end) . ' months';
    }
}
