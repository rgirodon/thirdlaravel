@extends('layout')

@section('title', 'Newsletter')

@section('header')
	
	<h1>Thank you !</h1>

@endsection

@section('content')

	Your mail {{ $mail }} has been successfully added to our newsletter diffusion list.

@endsection
