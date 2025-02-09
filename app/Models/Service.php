<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory;

    public function works(): HasMany
    {
        return $this->hasMany(Work::class);
    }

    public function mails(): HasMany
    {
        return $this->hasMany(Mail::class);
    }
}
