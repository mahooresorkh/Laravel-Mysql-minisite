<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class DashboardController extends Controller
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
        try{
            $posts = Post::where('user_id',auth()->user()->id)->orderBy('created_at','desc')->get();
            return view('dashboard')->with('posts',$posts);
        }
        catch (\Exception $e) {
            return redirect('/')->with('error',"☹️Looks like something's wrong☹️");
        } 
    }

    
}
