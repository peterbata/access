<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    
    public function index()
    {
		$posts = Post::all();
		return view('posts.index')->with('posts', $posts);
    }

    
    public function create()
    {
        return view('posts.create');
    }

    
    public function store(Request $request)
    {
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
		// return view('pages.contact', ['post' => Post::findOrFail($id)]);
		$posts =  Post::find($id);
		return view('posts.show')->with('posts', $posts);
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
