<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
		$title = 'GeneSys';
		// return view('pages.index', compact('title'));
		return view('pages.index')->with('title', $title);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function contact()
    {
		$title = 'Contacts';
		return view('pages.contact')->with('title', $title);
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
