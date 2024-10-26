<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Schedule extends Model
{
    use HasFactory;

    // One-to-Many relationship with StaffSchedule
    public function staffSchedules(): HasMany
    {
        return $this->hasMany(StaffSchedule::class);
    }

    // Many-to-Many relationship with Staff via staff_schedules
    public function staffs(): BelongsToMany
    {
        return $this->belongsToMany(Staff::class, 'staff_schedules', 'schedule_id', 'staff_id')
                    ->where('staff.is_active', 1); // Only active staff members
    }

    // Many-to-Many relationship with Booking via staff_schedules (through booking_id)
    public function bookings(): BelongsToMany
    {
        return $this->belongsToMany(Booking::class, 'staff_schedule', 'schedule_id', 'booking_id');
    }
}