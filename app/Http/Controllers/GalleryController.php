<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Event;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $query = Gallery::with('event')->orderBy('order');

        if ($request->has('event')) {
            $query->whereHas('event', function($q) use ($request) {
                $q->where('slug', $request->event);
            });
        }

        $galleries = $query->paginate(24);
        $events = Event::has('galleries')->get();

        return view('gallery.index', compact('galleries', 'events'));
    }
}
