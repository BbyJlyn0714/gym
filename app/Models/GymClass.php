<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GymClass extends Model
{
    use HasFactory;

    public function members() {
        return $this->belongsToMany(Member::class, 'class_registrations');
    }
}
