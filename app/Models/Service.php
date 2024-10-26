<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Service extends Model
{
    use HasFactory;
    
    public function bookings(): HasMany {
        return $this->hasMany(Booking::class);
    }

    public function staff_services():HasMany {
        return $this->hasMany(StaffService::class);
    }
}
