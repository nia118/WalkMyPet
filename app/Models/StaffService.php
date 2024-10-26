<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StaffService extends Model
{
    use HasFactory;

    // Belongs to one staff
    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class);
    }

    // Belongs to one service
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
