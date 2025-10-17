<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Announcement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredPosts = Post::where('status', 'published')
            ->where('is_featured', true)
            ->with(['category', 'user'])
            ->latest('published_at')
            ->take(3)
            ->get();

        $latestPosts = Post::where('status', 'published')
            ->with(['category', 'user'])
            ->latest('published_at')
            ->take(6)
            ->get();

        $upcomingEvents = Event::where('status', 'upcoming')
            ->orderBy('start_date')
            ->take(4)
            ->get();

        $latestGalleries = Gallery::with('event')
            ->latest()
            ->take(8)
            ->get();

        $announcements = Announcement::where('is_pinned', true)
            ->orWhere(function($query) {
                $query->where('start_date', '<=', now())
                      ->where('end_date', '>=', now());
            })
            ->latest()
            ->take(3)
            ->get();

        return view('home', compact(
            'featuredPosts',
            'latestPosts',
            'upcomingEvents',
            'latestGalleries',
            'announcements'
        ));
    }
}
