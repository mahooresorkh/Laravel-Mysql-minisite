@extends('layouts.app')

@section('content')

    <div class="card text-white border-success mb-3" style="max-width: 25rem; margin: 0px auto;">
        <div class="card-header text-success" style="font-size: 20px;">Registration Form</div>
        <div class="card-body">

            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
                    <label class="col-form-label text-info" for="name" style="font-size: 18px;">
                        Name
                    </label>
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('email') ? 'has-danger' : '' }}">
                    <label class="col-form-label text-info" for="email" style="font-size: 18px;">
                        Email
                    </label>
                    <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('username') ? 'has-danger' : '' }}">
                    <label class="col-form-label text-info" for="username" style="font-size: 18px;">
                        Username
                    </label>
                    <input type="text" class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" id="username" name="username" value="{{ old('username') }}" required>
                    @if ($errors->has('username'))
                        <div class="invalid-feedback">{{ $errors->first('username') }}</div>
                    @endif
                </div>


                <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                    <label for="password" class="col-form-label text-info" style="font-size: 18px;">
                        Password
                    </label>
                    <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" name="password" required>
                    @if ($errors->has('password'))
                        <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="password_confirm" class="col-form-label text-info" style="font-size: 18px;">
                        Retype Password
                    </label>
                    <input type="password" class="form-control" id="password_confirm" name="password_confirmation" required>
                </div>

                
                <div class="custom-control custom-checkbox d-flex justify-content-center" style="padding-left:0px !important">
                    <div>
                        <button type="submit" class="btn btn-outline-primary btn-lg">Register</button>
                    </div>
                    
                </div>
            </form>
        </div>    
    </div>

@endsection
