<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    
    public function index()
    {
		$posts = Post::latest()->paginate(10);
		return view('posts.index',compact('posts'))
			->with('i', (request()->input('page', 1) - 1) * 5);
    }

    
    public function create()
    {
        return view('posts.create');
    }

    
    public function store(Request $request)
    {
		$this->validate($request, [
			'fname' => 'required',
			'lname' => 'required',
			'address' => 'required',
		]);

		// Create Post
			// Create Post
		$posts = new Post;
		$posts->title = $request->input('title');
		$posts->fname = $request->input('fname');
		$posts->lname = $request->input('lname');
		$posts->address = $request->input('address');
		$posts->suite = $request->input('suite');
		$posts->city = $request->input('city');
		$posts->province = $request->input('province');
		$posts->postalcode = $request->input('postalcode');
		$posts->country = $request->input('country');
		$posts->gender = $request->input('gender');
		$posts->notes = $request->input('notes');
		$posts->save();

		return redirect('/posts')->with('success', 'Client Created');
		
    }

    
    public function show($id)
    {
		$posts =  Post::find($id);
		return view('posts.show')->with('posts', $posts);
    }

    
    public function edit($id)
    {
		$posts =  Post::find($id);
        return view('posts.edit')->with('posts', $posts);
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'fname' => 'required',
			'lname' => 'required',
			'address' => 'required'
		]);

		// Update Post
		$posts =  Post::find($id);
		$posts->title = $request->input('title');
		$posts->fname = $request->input('fname');
		$posts->lname = $request->input('lname');
		$posts->address = $request->input('address');
		$posts->suite = $request->input('suite');
		$posts->city = $request->input('city');
		$posts->province = $request->input('province');
		$posts->postalcode = $request->input('postalcode');
		$posts->country = $request->input('country');
		$posts->gender = $request->input('gender');
		$posts->notes = $request->input('notes');
		$posts->save();

		return redirect('/posts')->with('success', 'Client Updated');

    }

    
    public function destroy($id)
    {
		$posts = Post::find($id);
		$posts->delete();
		return redirect('/posts')->with('success', 'Client Deleted');
    }
}
