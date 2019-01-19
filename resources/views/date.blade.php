@extends('layout')

@section('title', 'Date')

@section('header')
	
	<h1>You asked the date ?</h1>

@endsection

@section('content')

	Right now it is : {{ date('d/m/Y H:i:s') }}

@endsection
