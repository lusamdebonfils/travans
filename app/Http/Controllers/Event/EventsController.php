<?php

namespace App\Http\Controllers\Event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Modules\Event\Event;

class EventsController extends Controller
{
   public function intio(){

      return view('events.index');
   }

   public function index() {

   	$today = Carbon::today()->format('Y-m-d');

   	$upcomingEvents = Event::where('end_date', '>', $today)->orderBy('start_date','desc')->get();
   	$pastEvents =  Event::where('end_date', '<', $today)->orderBy('start_date','desc')->limit(3)->get();


   	return view('events.events-list')->with('upcomingEvents',$upcomingEvents)->with('pastEvents',$pastEvents);
   }
}
