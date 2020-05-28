@extends('layouts.app')

@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<h1 style="text-align: center" class="text-info"> Dashboard </h1>
@if (count($posts))
    <table class="table table-hover" style="max-width:1400px;">
        <thead>
            <tr class="table-secondary" style="box-shadow: 0px -1px 5px grey;">
            <th scope="col" style="width:44%; font-size:20px;"> Post Title</th>
            <th scope="col" style="width:5%; text-align:center; font-size:20px;">Edit Post</th>
            <th scope="col" style="width:5%; text-align:center; font-size:20px;">Delete Post</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($posts as $key=>$post)
                <tr class="table-{{ ($key%2==0) ? 'info' : 'success'}}">
                    <th scope="row"><a href={{url('/posts/'.$post->id)}}>{{$post->title}}</a></th>
                    <td style="width:5%; text-align:center;">
                        <a class="btn btn-info" href="{{url('/posts/'.$post->id.'/edit')}}" role="button">Edit</a>
                    </td>
                    <td style="width:5%; text-align:center;">
                        <form action="{{url('/posts/'.$post->id)}}" method="POST" style="display: inline-block !important;">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> 
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

       
@endsection
