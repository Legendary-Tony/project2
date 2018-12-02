    @extends('layouts.app')

    @section('content')

    <!-- login-page -->
    <div class="clearfix"></div>
    <div class="login">
        <div class="login-grids">
            <div class="col-md-6 log">

                <h3>Login</h3>
                <p>Welcome, please enter the following to continue.</p>
                <p>If you have previously Login with us, <a href="/">click here</a></p>
                <div>
                    @if ($errors->has('invalid'))                  
                        <ul id="invalid" class=" alert alert-danger">
                            <li>{{ $errors->first('invalid') }}</li>
                        </ul>        
                    @endif
                </div>

                <form  method="POST" action="{{ route('login.store') }}">
                    @csrf 
                    <h5>Email:</h5>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>


                    <h5>Password:</h5>
                    <input id="password" type="password" name="password" required>
                    <input type="submit" value="Login">
            </form>
           <a href="{{ route('password.request') }}">Forgot Password ?</a>
        </div>

        <div class="col-md-6 login-right">
            <h3>New Registration</h3>
            <p>By creating an account with us, you will have access to more features and also  post and reply comments.</p>
            <a href="{{ route('registerIndex') }}" class="hvr-bounce-to-bottom button">Create An Account</a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //login-page -->

@endsection