@extends('layouts.app')

@section('content')

    <div class="card text-white bg-warning mb-3" style="max-width: 25rem; margin: 0px auto;">
        <div class="card-header text-danger" style="font-size: 20px;">Reset Password</div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('email') ? 'has-danger' : '' }}">
                    <label class="col-form-label text-info" for="email" style="font-size: 18px;">
                        Email Address
                    </label>
                    <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                    @endif
                </div>


                <div class="custom-control custom-checkbox d-flex justify-content-center" style="padding-left:0px !important">
                    <div>
                        <button type="submit" class="btn btn-secondary">Send Password Reset Link</button>
                    </div>
                </div>
            </form>
        </div>    
    </div>

@endsection