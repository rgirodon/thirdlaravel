@extends('layout')

@section('title', 'Ajax Demo')

@section('header')
	
	<h1>Please enter a number ?</h1>
	
@endsection

@section('content')

<input type="text" name="number" id="number">
        
<input id="submit" type="submit" value="Submit !">

<div id="result"></div>

<script type="text/javascript" src="{{ url('js/array.js') }}"></script>

@endsection