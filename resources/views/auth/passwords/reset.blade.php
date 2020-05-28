@extends('layouts.app')

@section('content')

    <div class="card text-white bg-success mb-3" style="max-width: 25rem; margin: 0px auto;">
        <div class="card-header text-primary" style="font-size: 20px;">Reset Password</div>
        <div class="card-body">

            <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group {{ $errors->has('email') ? 'has-danger' : '' }}">
                    <label class="col-form-label text-secondary" for="email" style="font-size: 18px;">
                        Email Address
                    </label>
                    <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                    @endif
                </div>


                <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                    <label for="password" class="col-form-label text-secondary" style="font-size: 18px;">
                        Password
                    </label>
                    <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" name="password" required>
                    @if ($errors->has('password'))
                        <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                    @endif
                </div>


                <div class="form-group {{ $errors->has('password_confirmation') ? ' has-danger' : '' }}">
                    <label for="password_confirmation" class="col-form-label text-secondary" style="font-size: 18px;">
                        Retype Password
                    </label>
                    <input type="password" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" id="password_confirmation" name="password_confirmation" required>
                    @if ($errors->has('password_confirmation'))
                        <div class="invalid-feedback">{{ $errors->first('password_confirmation') }}</div>
                    @endif
                </div>


                <div class="custom-control custom-checkbox d-flex justify-content-center" style="padding-left:0px !important">
                    <div>
                        <button type="submit" class="btn btn-primary">Reset Password</button>
                    </div>
                </div>
            </form>
        </div>    
    </div>

@endsection