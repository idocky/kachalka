<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkoutController extends Controller
{
    public function assignClientToWorkout($workout_id)
    {
        $workout = Workout::find($workout_id);
        $workout->assignUser(Auth::id());

        return response()->json(['message' => 'success'], 200);
    }
}
