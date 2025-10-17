<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $upcomingEvents = Event::where('status', 'upcoming')
            ->orderBy('start_date')
            ->paginate(12);

        $ongoingEvents = Event::where('status', 'ongoing')
            ->orderBy('start_date', 'desc')
            ->get();

        $completedEvents = Event::where('status', 'completed')
            ->orderBy('start_date', 'desc')
            ->paginate(12);

        return view('events.index', compact('upcomingEvents', 'ongoingEvents', 'completedEvents'));
    }

    public function show($slug)
    {
        $event = Event::where('slug', $slug)
            ->with('galleries')
            ->firstOrFail();

        return view('events.show', compact('event'));
    }
}
