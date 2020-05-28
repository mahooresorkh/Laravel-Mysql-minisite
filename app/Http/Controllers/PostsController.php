<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth', ['except'=>['index','show']]);
    }

    public function index()
    {
        try{
            // $posts = Post::all();
            $posts = Post::orderBy('created_at','desc')->paginate(5);
            return view('posts.index')->with('posts',$posts);
        }
        catch (\Exception $e) {
            return redirect('/')->with('error',"☹️Looks like something's wrong☹️");
        }    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title'=> 'required',
            'body'=> 'required',
            'image-upload' => 'image|nullable|max:1999'
        ]);

        
        if($request->hasFile('image-upload')){
            $fileNameWithExt = $request->file('image-upload')->getClientOriginalName();
            
            //get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('image-upload')->getClientOriginalExtension();

            //Filename to store 
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //Upload Image
            $path = $request->file('image-upload')->storeAs('public/cover_image',$fileNameToStore);

        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }


        try{
            
            $post = new Post;
            $post->title = $request->input('title');
            $post->body  = $request->input('body');
            $post->cover_image = $fileNameToStore;
            $post->user_id = auth()->user()->id;
            $post->save();
            return redirect('/posts')->with('success','😊The post has been created successfully😊');
        }

        catch (\Exception $e) {
           
            return redirect('/posts')->with('error','☹️Post creation failed☹️');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $post = Post::findOrFail($id);
            return view('posts.show')->with('post',$post);
        }
        catch (\Exception $e) {
            return redirect('/posts')->with('error',"☹️Looks like something's wrong☹️");
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $post = Post::findOrFail($id);
            if (auth()->user()->id == $post->user_id) {
                return view('posts/edit')->with('post',$post); 
            }
            else{
                return redirect('/posts')->with('error','Unauthorized Request');
            }
        }
        catch (\Exception $e) {
            return redirect('/posts')->with('error',"☹️Looks like something's wrong☹️");
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title'=> 'required',
            'body'=> 'required',
            'image-upload' => 'image|nullable|max:1999'
        ]);


        if($request->hasFile('image-upload')){
            $fileNameWithExt = $request->file('image-upload')->getClientOriginalName();
            
            //get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('image-upload')->getClientOriginalExtension();

            //Filename to store 
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //Upload Image
            $path = $request->file('image-upload')->storeAs('public/cover_image',$fileNameToStore);

        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }

        try{
            $post = Post::findOrFail($id);
            if (auth()->user()->id == $post->user_id) {
                $post->title = $request->input('title');
                $post->body = $request->input('body');
                $post->cover_image = $fileNameToStore;
                $post->save();
                return redirect('/posts')->with('success','😊The post has been changed successfully😊');
            }
            else{
                return redirect('/posts')->with('error','Unauthorized Request');
            }
            
        }

        catch (\Exception $e) {
            return redirect('/posts')->with('error','☹️Edit failed☹️');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $post = Post::findOrFail($id);
            if (auth()->user()->id == $post->user_id) {
                $post->delete();
                return redirect('/posts')->with('success','😊The post has been removed successfully😊');
            }
            else{
                return redirect('/posts')->with('error','Unauthorized Request');
            }
            
        }

        catch (\Exception $e) {
            return redirect('/posts')->with('error','☹️Remove failed☹️');
        }
    }
}
