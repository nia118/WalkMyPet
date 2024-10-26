<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StaffSchedule extends Model
{
    use HasFactory;

    // Many-to-One relationship with Staff
    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class);
    }

    // Many-to-One relationship with Schedule
    public function schedule(): BelongsTo
    {
        return $this->belongsTo(Schedule::class);
    }

    // Many-to-One relationship with Booking
    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }
}