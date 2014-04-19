@extends('layouts.base')

@section('content')
<div class="page-title">	
	<h3>Master Page</h3>

	<div>
		<label>Name:</label>
		<input type="text" ng-model="yourName" placeholder="Enter a name here">
		<hr>
		<h1>[['Hola']] {{yourName}}!</h1>
	</div>
@stop