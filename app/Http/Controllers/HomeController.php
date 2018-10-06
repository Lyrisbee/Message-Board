<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();
        return view('home', ['post' => $post, 'test' => '123']);
    }

    public function post(Request $request)
    {
        $post = new Post();
        $post->users_id = \Auth::user()->id;
        $post->content = $request->input('content');
        $post->save();
        return redirect()->action(
            'HomeController@index'
        );
    }
}
