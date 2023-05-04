<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Tag;
use App\Models\Listing;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;

class CalendarController extends Controller
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      if (!$request->user()) abort(400, 'Unauthenticated');

      // get all future events on a calendar
      $events = Event::get();

      return view('calendar', compact('events'));
    }
}
