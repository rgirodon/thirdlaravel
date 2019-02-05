@extends('layout')

@section('title', 'Schools')

@section('header')
	
	<h1>Schools</h1>

@endsection

@section('content')

	<div>
	
		<table class="table">
		
        	<thead>
            	<tr>
              		<th scope="col">#</th>
              		<th scope="col">Name</th>
              		<th scope="col">City</th>
            	</tr>
          	</thead>
          	
          	<tbody>
          	
          		@foreach ($schools as $school)
          	
                <tr>
                  <th scope="row">{{ $school->id }}</th>
                  <td>{{ $school->name }}</td>
                  <td>{{ $school->city }}</td>
                </tr>
                
                @endforeach
                
            </tbody>
            
        </table>	

	</div>

@endsection
