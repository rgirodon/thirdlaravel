@extends('layout')

@section('title', 'Vue Demo')

@section('header')
	
	<h1>Main Vue</h1>
		
@endsection

@section('content')

<div id="app">
	<welcome-component message="Hello All !"></welcome-component>

    <nav class="navbar navbar-default">

        <ul class="nav navbar-nav">

            <li>
                <router-link to="/counter">Counter Demo</router-link>
            </li>

            <li>
                <router-link to="/shoppingList/epicerie">Shopping List Epicerie</router-link>
            </li>

            <li>
                <router-link to="/shoppingList/bricolage">Shopping List Bricolage</router-link>
            </li>

        </ul>

    </nav>

    <main>
        <router-view></router-view>
    </main>

    <footer-component></footer-component>
</div>

@endsection