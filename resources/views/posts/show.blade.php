@extends('layouts.app')

@section('content')
	<h1>Client</h1>
		<a href="/access/public/posts" class="btn btn-default">Go Back</a>
		<h1>{{$posts->lname . "," . " " .$posts->fname}}</h1>
	<div>
		{{$posts->notes}}
	</div>
	<hr>
	<small>Creation Date: {{$posts->created_at}}</small>
	<hr>
	<a href="/posts/{{$posts->id}}/edit" class="btn btn-default">Edit</a>

	{!! Form::open(['action' => ['PostsController@destroy', $posts->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
		{{Form::hidden('_method', 'DELETE')}}
		{{form::submit('Delete', ['class' => 'btn btn-danger'])}}
	{!! Form::close() !!}
@endsection