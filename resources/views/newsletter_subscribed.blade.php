@extends('layout')

@section('title', 'Newsletter')

@section('header')
	
	<h1>Thank you !</h1>

@endsection

@section('content')

	Your mail {{ $mail }} has been successfully added to our newsletter diffusion list.
	
	<br>
	
	Click <a id='openDialogLink'>here</a> to see how to unsubscribe.
	
	<div id="dialog" title="How to unsubscribe">
      <p>This is impossible AHAHAH !!!</p>
    </div>
	
	<script type="text/javascript" src="{{ url('js/newsletter_subscribed.js') }}"></script>

@endsection
