<?php

namespace App\Http\Controllers\Dashboard\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    
    public function index()
    {
        return view('dashboard.pages.post.all');
    }

    
    public function create()
    {
        return view('dashboard.pages.post.new');
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
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

    public function posttype($type)
    {
        return view('dashboard.pages.post.all');
    }

}
