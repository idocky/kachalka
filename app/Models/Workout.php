<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;

    public function workout_types()
    {
        return $this->belongsTo(WorkoutType::class, 'workout_type_id');
    }

    public function coaches()
    {
        return $this->belongsTo(Coach::class, 'coach_id');
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function assignUser($user_id)
    {
        $this->user_id = $user_id;
        $this->save();
    }
}
