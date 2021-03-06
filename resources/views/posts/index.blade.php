@extends('layouts.app')

@section('content')
	<h1>Posts</h1>
	@if(count($posts) > 0)
		@foreach($posts as $post)
			<div class="well">
				<h3><a href="./posts/{{$post->id}}">{{$post->lname . "," . " " . $post->fname}}</a></h3>
			</div>
		@endforeach
		{{$posts->links()}}
	@else
		<p>No Posts Found</p>
	@endif	
@endsection