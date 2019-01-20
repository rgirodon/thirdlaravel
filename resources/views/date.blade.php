@extends('layout')

@section('title', 'Date')

@section('header')
	
	<h1>You asked the date ?</h1>

@endsection

@section('content')

	<div class="alert alert-success">Right now it is : {{ $now }}</div>
	
	<div>
		You already asked the date these times :
		<ul>
			@foreach ($past as $pastItem)
			
			<li>{{ $pastItem }}</li>
			
			@endforeach
		</ul>
	</div>

@endsection
