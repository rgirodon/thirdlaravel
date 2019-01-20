@extends('layout')

@section('title', 'Users')

@section('header')
	
	<h1>Contacts</h1>

@endsection

@section('content')

	<div>
	
		<table class="table">
		
        	<thead>
            	<tr>
              		<th scope="col">#</th>
              		<th scope="col">First</th>
              		<th scope="col">Last</th>
              		<th scope="col">Mail</th>
              		<th scope="col">Phone</th>
              		<th scope="col">#User</th>
            	</tr>
          	</thead>
          	
          	<tbody>
          	
          		@foreach ($contacts as $contact)
          	
                <tr>
                  <th scope="row">{{ $contact->id }}</th>
                  <td>{{ $contact->firstname }}</td>
                  <td>{{ $contact->lastname }}</td>
                  <td>{{ $contact->email }}</td>
                  <td>{{ $contact->phone }}</td>
                  <td>{{ $contact->user->getFullName() }}</td>
                </tr>
                
                @endforeach
                
            </tbody>
            
        </table>	

	</div>

@endsection
