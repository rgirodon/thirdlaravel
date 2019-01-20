@extends('layout')

@section('title', 'Users')

@section('header')
	
	<h1>Users</h1>

@endsection

@section('content')

	<div>
	
		<table class="table">
		
        	<thead>
            	<tr>
              		<th scope="col">#</th>
              		<th scope="col">First</th>
              		<th scope="col">Last</th>
            	</tr>
          	</thead>
          	
          	<tbody>
          	
          		@foreach ($users as $user)
          	
                <tr>
                  <th scope="row">{{ $user->id }}</th>
                  <td>{{ $user->firstname }}</td>
                  <td>{{ $user->lastname }}</td>
                </tr>
                
                @endforeach
                
            </tbody>
            
        </table>	

	</div>

@endsection
