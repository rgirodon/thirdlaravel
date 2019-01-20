@extends('layout')

@section('title', 'Users')

@section('header')
	
	<h1>User details</h1>

@endsection

@section('content')
	
	<div class="panel panel-default" style="width: 18rem;">
    	
    	<div class="panel-heading">
    		User #{{ $user->id }}
        </div>
        
        <div class="panel-body">
            {{ $user->firstname }} {{ $user->lastname }}
      	</div>
      	
    </div>	

@endsection
