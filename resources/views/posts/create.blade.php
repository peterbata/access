@extends('layouts.app')


@section('content')
	<h1>Create Client</h1>
	
	{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
		
		<div class="form-group">
			{{Form::label('title', 'Title')}}
			{{Form::text('title', '', ['class' => 'form-control', 'col-md-6', 'placeholder' => 'Title'])}}
		</div>

		<div class="form-group">
			{{Form::label('fname', 'First Name')}}
			{{Form::text('fname', '', ['class' => 'form-control', 'placeholder' => 'First Name'])}}
		</div>

		<div class="form-group">	
			{{Form::label('lname', 'Last Name')}}
			{{Form::text('lname', '', ['class' => 'form-control', 'placeholder' => 'Last Name'])}}
		</div>

		<div class="form-group">
			{{Form::label('address', 'Address')}}
			{{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Address'])}}
		</div>
		
		<div class="form-group">
			{{Form::label('suite', 'Suite')}}
			{{Form::text('suite', '', ['class' => 'form-control', 'placeholder' => 'Suite'])}}
		</div>

		<div class="form-group">
			{{Form::label('city', 'City')}}
			{{Form::text('city', '', ['class' => 'form-control', 'placeholder' => 'City'])}}
		</div>

		<div class="form-group">
			{{Form::label('province', 'Province')}}
			{{Form::text('province', '', ['class' => 'form-control', 'placeholder' => 'Province'])}}
		</div>

		<div class="form-group">
			{{Form::label('postalcode', 'Postal Code')}}
			{{Form::text('postalcode', '', ['class' => 'form-control', 'placeholder' => 'Postal Code'])}}
		</div>
		<div class="form-group">
			{{Form::label('country', 'Country')}}
			{{Form::text('country', '', ['class' => 'form-control', 'placeholder' => 'Country'])}}
		</div>
		<div class="form-group">
			{{Form::label('gender', 'Gender')}}
			{{Form::text('gender', '', ['class' => 'form-control', 'placeholder' => 'Gender'])}}
		</div>

		<div class="form-group">
			{{Form::label('notes', 'Notes')}}
			{{Form::textarea('notes', '', ['class' => 'form-control', 'placeholder' => 'Notes'])}}
		</div>

		{{form::submit('Submit', ['class' => 'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection