<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Customer extends Model
{
    use HasFactory;

    public function pets(): HasMany{ //namafungsi
        return $this->hasMany(Pet::class); //model
    }

    public function messages(): HasMany{
        return $this->hasMany(Message::class);
    }

    public function feedbacks(): HasMany{
        return $this->hasMany(Feedback::class);
    }

    public function payments(): HasMany{
        return $this->hasMany(Payment::class);
    }

    public function bookings(): HasMany{
        return $this->hasMany(Booking::class);
    }
}
