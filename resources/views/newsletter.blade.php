@extends('layout')

@section('title', 'Newsletter')

@section('header')
	
	<h1>You want to subscribe to our newsletter ?</h1>

@endsection

@section('content')

	<form action="{{ route('newsletter_subscribe') }}" method="POST">
	
        {{ csrf_field() }}
    
        <label for="mail">Enter your mail : </label>
    
        <input type="text" name="mail" id="mail">
    
        <input type="submit" value="Subscribe !">
    
    </form>

@endsection
