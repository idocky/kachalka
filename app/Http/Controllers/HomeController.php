<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Workout;
use App\Models\WorkoutType;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $coaches = Coach::all();
        $workout_types = WorkoutType::all();

        $date = $request->input('date');


        if($date) {
            $targetDate = Carbon::createFromFormat('Y-m-d', $date);
        } else {
            $targetDate = Carbon::today();
        }

        $workouts = Workout::whereDate('start_time', '=', $targetDate)->get();

        foreach ($workouts as $workout) {
            $workout->start_time = Carbon::parse($workout->start_time);
            $workout->end_time = Carbon::parse($workout->end_time);
        }

        $today = Carbon::now();
        $tomorrow = $today->copy()->addDay();
        $dayAfterTomorrow = $tomorrow->copy()->addDay();
        $dayAfterDayAfterTomorrow = $dayAfterTomorrow->copy()->addDay();

        $dates = [
            'today' => [$today->format('Y-m-d'), $today->day],
            'tomorrow' => [$tomorrow->format('Y-m-d'), $tomorrow->day],
            'dayAfterTomorrow' => [$dayAfterTomorrow->format('Y-m-d'), $dayAfterTomorrow->day],
            'dayAfterDayAfterTomorrow' => [$dayAfterDayAfterTomorrow->format('Y-m-d'), $dayAfterDayAfterTomorrow->day]
        ];


        return view('home_page', [
            'coaches' => $coaches,
            'workout_types' => $workout_types,
            'workouts' => $workouts,
            'dates' => $dates
        ]);
    }
}
