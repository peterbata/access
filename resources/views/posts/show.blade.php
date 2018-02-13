@extends('layouts.app')

@section('content')
	<h1>Client</h1>
		<a href="/access/public/posts" class="btn btn-default">Go Back</a>
		<h1>{{$posts->lname . "," . " " .$posts->fname}}</h1>
			
	<div>
		{{$posts->notes}}
	</div>
	
@endsection