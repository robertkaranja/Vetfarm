@extends('layouts.app')

@section('content')

@if (count($notifications)>0)

@foreach($notifications as $notification)


		<p>
			{{$notification->description}}
		</p>
		<p>
			{{count($notifications)}}
		</p>

@endforeach
@endif

@endsection