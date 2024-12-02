<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'service_id',
        'pet_id',
        'location',
        'amount',
        'total_price',
        'is_accepted',
        'is_additional',
    ];

    public function customer(): BelongsTo{
        return $this->belongsTo(Customer::class);
    }

    public function payment(): HasOne{
        return $this->hasOne(Payment::class);
    }

    public function service(): BelongsTo{
        return $this->belongsTo(Service::class);
    }

    public function staffSchedules(): HasMany{
        return $this->hasMany(StaffSchedule::class);
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}
