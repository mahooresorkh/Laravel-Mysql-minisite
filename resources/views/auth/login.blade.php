@extends('layouts.app')

@section('content')

    <div class="card text-white border-dark mb-3" style="max-width: 25rem; margin: 0px auto;">
        <div class="card-header text-success" style="font-size: 20px;">Login Form</div>
        <div class="card-body">

            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('username') ? 'has-danger' : '' }}">
                    <label class="col-form-label text-info" for="username" style="font-size: 18px;">
                        Username
                    </label>
                    <input type="text" class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" id="username" name="username" value="{{ old('username') }}" required autofocus>
                    @if ($errors->has('username'))
                        <div class="invalid-feedback">{{ $errors->first('username') }}</div>
                    @endif
                </div>


                <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                    <label for="password" class="col-form-label text-info" style="font-size: 18px;">
                        Password
                    </label>
                    <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" name="password">
                    @if ($errors->has('password'))
                        <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                    @endif
                </div>


                <div class="custom-control custom-checkbox d-flex" style="padding-left:0px !important">
                    <div>
                        <button type="submit" class="btn btn-outline-primary btn-lg">Login</button>
                    </div>

                    <div class="ml-auto pt-3">
                        <a class="btn btn-link text-warning" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                    
                </div>
            </form>
        </div>    
    </div>

@endsection