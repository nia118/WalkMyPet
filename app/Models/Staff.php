<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Staff extends Model
{
    use HasFactory;

    public function services(): HasManyThrough{
        return $this->hasManyThrough( //hubungan ManytoMany
        Service::class, //model staff ini relate ke mana
        StaffService::class, // tapi lewat model StaffService
        'staff_id', //foreignkey yang berhubungan di staff id di tabel staff_service
        'id', //primary key services
        'id', //primary key staff
        'service_id', //foreign key yang berhubungan dengan services di tabel staff_service
        );
    }

    public function schedules(): HasManyThrough{
        return $this->hasManyThrough( 
        Schedule::class, 
        StaffSchedule::class, 
        'staff_id', 
        'id',
        'id',
        'schedule_id', 
        )->orderBy('schedules.date');
    }

    public function bookings(): HasManyThrough{
        return $this->hasManyThrough( 
        Booking::class, 
        StaffSchedule::class, 
        'staff_id', 
        'id',
        'id',
        'booking_id', 
        )->whereNot('staff_schedules.booking_id', null
        )->orderBy('schedules.date');
    }

    public function staff_schedules(): HasMany{
        return $this->hasMany(StaffSchedule::class);
    }

    public function staff_services(): HasMany{
        return $this->hasMany(StaffService::class);
    }

    public function feedbacks(): HasMany{
        return $this->hasMany(Feedback::class);
    }
}
