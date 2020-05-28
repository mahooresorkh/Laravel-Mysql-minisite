@extends('layouts.app')

@section('content')
    <br>
    <div class="jumbotron" style="background-color:teal; padding-bottom:15px !important; padding-top:30px !important; ">
        <h1 class="display-3">
            {{$post->title}}
        </h1>
        <div class="jumbotron" style="
            background-image:url('/storage/cover_image/{{$post->cover_image}}');
            background-repeat:no-repeat;
            background-size:cover;
            background-position:center;
            max-width:600px; height:400px;
            margin:0px auto;
            box-shadow:0px 0px 5px black;">
        </div>
        <br>
        <p class="lead" style="font-size: 25px;">
            {{$post->body}}
        </p>
        <hr class="my-4">
        <div class="d-flex">
            @if (!Auth::guest() && Auth::user()->id == $post->user_id)
                <div class="mr-auto">
                    <a class="btn btn-info btn-lg" href="{{url('/posts/'.$post->id.'/edit')}}" role="button">Edit</a>
                    &nbsp;
                    <form action="{{url('/posts/'.$post->id)}}" method="POST" style="display: inline-block !important;">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger btn-lg">Delete</button>
                    </form>
                </div>  
            @endif
        
            <p>
                Created By: {{$post->user->name}}
                <br/>
                at: {{$post->created_at}}
            </p>
        </div>
    </div>
@endsection