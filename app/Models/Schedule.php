<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Schedule extends Model
{
    use HasFactory;

    public function staffSchedules(): HasMany{
        return $this->hasMany(StaffSchedule::class);
    }

    public function staffs(): HasManyThrough{
        return $this->hasManyThrough(
            Staff::class,
            StaffSchedule::class,
            'schedule_id',
            'id',
            'id',
            'staff_id'
            )->where('staffs.is_active', 1);
    }

    public function bookings(): HasManyThrough{
        return $this->hasManyThrough(
            Booking::class,
            StaffSchedule::class,
            'schedule_id',
            'id',
            'id',
            'booking_id');
    }
}
