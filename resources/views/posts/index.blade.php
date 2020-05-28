@extends('layouts.app')

@section('content')

<br>

@if (count($posts))
    @foreach ($posts as $key=>$post)
        <div class="card text-white bg-{{ ($key%2==0) ? 'info' : 'success'}} mb-3">
            <div class="card-header">
                <h4 class="card-title" style="color:black !important;">{{$post->title}}</h4>
            </div>
            <div class="card-body">
                <div class="well">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/storage/cover_image/{{$post->cover_image}}" alt="jungle" style="width:100%; border-radius: 5px 1px 0px 8px; box-shadow: 0px 0px 5px black;">
                        </div>

                        <div class="col-md-8">
                            <p class="card-text" style="color:black !important; font-size:20px;">
                                {{substr($post->body,0,30)}}...
                                <br> 
                                <a href={{url('/posts/'.$post->id)}}>Read more</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
            <p class="card-title" style="color:black !important;">created at: {{$post->created_at}}</p>
            </div>
            
        </div>
        
    @endforeach

@else    
    <div class="card text-white bg-danger mb-3" style="max-width: 250px; margin:0px auto;">
        <div class="card-header">
            <h4 class="card-title" style="color:black !important;">Message</h4>
        </div>
        <div class="card-body">
            <h4>There is no post...</h4>
        </div>
        
    </div>
@endif    

{{$posts->links()}}
 
@endsection