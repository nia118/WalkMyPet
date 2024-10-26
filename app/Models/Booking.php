<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Booking extends Model
{
    use HasFactory;

    public function customer(): BelongsTo{
        return $this->belongsTo(Customer::class);
    }

    public function payment(): HasOne{
        return $this->hasOne(Payment::class);
    }

    public function service(): BelongsTo{
        return $this->belongsTo(Service::class);
    }

    public function Staffschedules(): HasMany{
        return $this->hasMany(StaffSchedule::class);
    }

    public function staff(): HasOneThrough{
        return $this->hasOneThrough(
            Staff::class,
            StaffSchedule::class,
            'booking_id',
            'id',
            'id',
            'staff_id',
        )->whereNot('staff_schedules.booking_id', null);
    }

    public function schedules(): HasManyThrough{
        return $this->hasManyThrough(
            Schedule::class,
            StaffSchedule::class,
            'booking_id',
            'id',
            'id',
            'schedule_id'
        )->where('staff_schedules.booking_id', null);
    }
    
}
