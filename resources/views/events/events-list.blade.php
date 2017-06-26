
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 ">
            <div class="panel panel-default">
                <div class="panel-heading">Upcoming Events</div>

                <div class="panel-body">
                    @foreach($upcomingEvents as $upcomingEvent)

						<h4>{{$upcomingEvent->title}}</h4>
						
					
					@endforeach

                </div>
            </div>
        </div>
        <div class="col-md-9 ">
            <div class="panel panel-default">
                <div class="panel-heading">Upcoming Events</div>

                <div class="panel-body">
                    @foreach($upcomingEvents as $upcomingEvent)

						<h4>{{$upcomingEvent->title}}</h4>
						{{$upcomingEvent->description}}
						<small>{{$upcomingEvent->address}}</small>
					
					@endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
