@extends('layouts.app')

@section('content')
            {{-- Your name is : {{ $name }} and you are {{ $age }} years old and also you are a {{ $job }}. --}}

            {{-- @foreach ($names as $name)
               <h4>user: {{ $name }}</h4>    
            @endforeach --}}
            
            
            {{-- Your name is : {{ $my_name }}. --}}
            
            <br>
            <br>
            <div class="jumbotron bg-info">
                <h1 class="display-3">Welcome to Minisite☺</h1>
                <p class="lead">This is a full-CRUD website which is powered by Laravel</p>
                <hr class="my-4">
                <p>You can learn about Laravel framework here: </p>
                <p class="lead">
                  <a class="btn btn-primary btn-lg" href="https://laravel.com" role="button">Learn Laravel</a>
                </p>
            </div>
            
@endsection

