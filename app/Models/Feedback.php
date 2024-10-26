<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Feedback extends Model
{
    use HasFactory;

    public function customer(): BelongsTo{
        return $this->belongsTo(Customer::class);
    }

    public function staff(): BelongsTo{
        return $this->belongsTo(Staff::class);
    }
}
