@extends('layout')

@section('title', 'Newsletter')

@section('header')
	
	<h1>You want to subscribe to our newsletter ?</h1>

@endsection

@section('content')

	@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

	<div>
    	<form action="{{ route('newsletter_subscribe') }}" method="POST">
    	
            {{ csrf_field() }}
        
            <label for="mail">Enter your mail : </label>
        
            <input type="text" name="mail" id="mail" value="{{ old('mail') }}">
        
            <input type="submit" value="Subscribe !">
        
        </form>
    </div>

@endsection
