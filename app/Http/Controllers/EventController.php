<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Display the latest event and its images.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch the latest event
        $latestEvent = DB::table('event_main')
                         ->orderBy('seq', 'DESC')
                         ->first();

        // Fetch images for the latest event if it exists
        $latestEventImages = $latestEvent
            ? DB::table('event_handling')
                ->where('event_id', $latestEvent->id)
                ->select('image_name', DB::raw('MAX(created_at) as created_at'))
                ->groupBy('image_name') // Ensure no duplicate images
                ->orderBy('created_at', 'DESC')
                ->get()
            : collect();

        return view('welcome', compact('latestEvent', 'latestEventImages'));
    }

    /**
     * Display the details for a specific event and its images.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // Fetch the specific event
        $event = DB::table('event_main')->where('id', $id)->first();

        if (!$event) {
            abort(404);
        }

        // Fetch images for the specific event
        $images = DB::table('event_handling')
                    ->where('event_id', $id)
                    ->select('image_name', DB::raw('MAX(seq) as seq'))
                    ->groupBy('image_name') // Ensure no duplicate images
                    ->orderBy('seq', 'ASC')
                    ->get();

        // Fetch other events except the current one
        $events = DB::table('event_main')
                    ->where('id', '!=', $id)
                    ->orderBy('seq', 'ASC')
                    ->get();

        return view('events.show', compact('event', 'images', 'events'));
    }

    /**
     * Display all events except the latest one.
     *
     * @return \Illuminate\View\View
     */
    public function allEvents()
    {
        // Fetch all events except the latest one
        $latestEventId = DB::table('event_main')->orderBy('seq', 'DESC')->value('id');
        $events = DB::table('event_main')
                    ->where('id', '!=', $latestEventId)
                    ->orderBy('seq', 'ASC')
                    ->get();

        return view('events.index', compact('events'));
    }
}
