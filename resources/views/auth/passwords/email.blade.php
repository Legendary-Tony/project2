@extends('layouts.app')

@section('content')
<div class="sign-up-form">
    <div class="clearfix"></div>
    <div class="card-header">{{ __('Reset Password') }}</div>

    
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="sign-up">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="sign-u">
                <div class="sign-up1">
                    <h4 class="c">Email Address* :</h4>
                </div>
                <div class="sign-up2">
                    <input type="text" placeholder=" " class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>               
            </div>
            <div class="submitreset">
                <input type="submit"  value="Send Password Reset Link">
            </div>
        </form>
    </div>

</div>

@endsection
