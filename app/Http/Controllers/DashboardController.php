<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $totalEvents = $events->count();
        $upcomingEvents = $events->where('date', '>=', Carbon::now())->count();
        $pastEvents = $events->where('date', '<', Carbon::now())->count();

        return view('dashboard', compact('events', 'totalEvents', 'upcomingEvents', 'pastEvents'));
    }
}
