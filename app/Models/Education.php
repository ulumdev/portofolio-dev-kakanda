<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Education extends Model
{
    use HasFactory, SoftDeletes;

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
        return $this->start_date
            ? \Carbon\Carbon::createFromFormat('Y-m', $this->start_date)->format('F Y')
            : null;
    }

    public function getFormattedEndDateAttribute()
    {
        return $this->end_date
            ? \Carbon\Carbon::createFromFormat('Y-m', $this->end_date)->format('F Y')
            : 'Present';
    }

    public function getDurationAttribute()
    {
        $start = $this->start_date
            ? \Carbon\Carbon::createFromFormat('Y-m', $this->start_date)
            : null;
        $end = $this->end_date
            ? \Carbon\Carbon::createFromFormat('Y-m', $this->end_date)
            : now();

        return $start && $end ? $start->diffInMonths($end) . ' months' : null;
    }
}
