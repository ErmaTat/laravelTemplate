@extends('auth.layouts.app')
@section('title', 'Register')
@section('content')
    <div class="loginbox">
        <div class="login-right">
            <div class="login-right-wrap">
                <h1>Register</h1>
                <p class="account-subtitle">Access to our dashboard</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="input-block mb-3">
                        <label class="form-control-label">Display Name: <span class="text-danger">*</span></label>
                        <input class="form-control" required name="name" placeholder="John Doe" type="text" />
                        @if ($errors->has('name'))
                            <span class="text-danger mt-2">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="input-block mb-3">
                        <label class="form-control-label">Email Address: <span class="text-danger">*</span></label>
                        <input class="form-control" required name="email" placeholder="email@email.com" type="text" />
                        @if ($errors->has('email'))
                            <span class="text-danger mt-2">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="input-block mb-3">
                        <label class="form-control-label">Password: <span class="text-danger">*</span></label>
                        <input class="form-control" required name="password" placeholder="********" type="password" />
                        @if ($errors->has('password'))
                            <span class="text-danger mt-2">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="input-block mb-3">
                        <label class="form-control-label">Confirm Password: <span class="text-danger">*</span></label>
                        <input class="form-control" required name="password_confirmation" placeholder="********"
                            type="password" />
                        @if ($errors->has('password_confirmation'))
                            <span class="text-danger mt-2">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>
                    <div class="input-block mb-0">
                        <button class="btn btn-lg btn-primary w-100" type="submit">
                            Register
                        </button>
                    </div>
                </form>

                <div class="login-or">
                    <span class="or-line"></span>
                    <span class="span-or">or</span>
                </div>

                <div class="social-login">
                    <span>Register with</span>
                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#"
                        class="google"><i class="fab fa-google"></i></a>
                </div>

                <div class="text-center dont-have">
                    Already have an account? <a href="{{ route('login') }}">Login</a>
                </div>
            </div>
        </div>
    </div>
@endsection
