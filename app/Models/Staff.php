<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Staff extends Model
{
    use HasFactory;

    // Many-to-Many relationship with services via staff_services
    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, 'staff_services', 'staff_id', 'service_id');
    }

    // Many-to-Many relationship with schedules via staff_schedules
    public function schedules(): BelongsToMany
    {
        return $this->belongsToMany(Schedule::class, 'staff_schedules', 'staff_id', 'schedule_id')
                    ->orderBy('schedules.date');
    }

    // Many-to-Many relationship with bookings via staff_schedules (non-null booking_id)
    public function bookings(): BelongsToMany
    {
        return $this->belongsToMany(Booking::class, 'staff_schedules', 'staff_id', 'booking_id')
                    ->whereNotNull('staff_schedules.booking_id')
                    ->orderBy('schedules.date');
    }

    // One-to-Many relationship with staff_schedules
    public function staffSchedules(): HasMany
    {
        return $this->hasMany(StaffSchedule::class);
    }

    // One-to-Many relationship with staff_services
    public function staffServices(): HasMany
    {
        return $this->hasMany(StaffService::class);
    }

    // One-to-Many relationship with feedbacks
    public function feedbacks(): HasMany
    {
        return $this->hasMany(Feedback::class);
    }
}