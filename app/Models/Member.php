<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function subscriptions() {
        return $this->hasMany(Subscription::class);
    }

    public function payments() {
        return $this->hasMany(Payment::class);
    }

    public function classes() {
        return $this->belongsToMany(GymClass::class, 'class_registrations');
    }

    /**
     * Get the full name of the member.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
