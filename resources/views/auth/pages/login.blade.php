@extends('auth.layouts.app')
@section('title', 'Login')
@section('content')
    <div class="loginbox">
        <div class="login-right">
            <div class="login-right-wrap">
                <h1>Login</h1>
                <p class="account-subtitle">Access to our dashboard</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="input-block mb-3">
                        <label class="form-control-label">Email Address: <span class="text-danger">*</span></label>
                        <input type="email" name="email" required placeholder="email@email.com" class="form-control">
                        @if ($errors->has('email'))
                            <span class="text-danger mt-2">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="input-block mb-3">
                        <label class="form-control-label">Password: <span class="text-danger">*</span></label>
                        <div class="pass-group">
                            <input type="password" placeholder="********" name="password" required class="form-control pass-input">
                            <span class="fas fa-eye toggle-password"></span>
                        </div>
                        @if ($errors->has('password'))
                            <span class="text-danger mt-2">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="input-block mb-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-check custom-checkbox">
                                    <input type="checkbox" class="form-check-input" name="remember" id="cb1">
                                    <label class="custom-control-label" for="cb1">Remember me</label>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                @if (Route::has('password.request'))
                                    <a class="forgot-link" href="{{ route('password.request') }}">Forgot Password ?</a>
                                @endif


                            </div>
                        </div>
                    </div>
                    <button class="btn btn-lg  btn-primary w-100" type="submit">Login</button>
                    <div class="login-or">
                        <span class="or-line"></span>
                        <span class="span-or">or</span>
                    </div>

                    <div class="social-login mb-3">
                        <span>Login with</span>
                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#"
                            class="google"><i class="fab fa-google"></i></a>
                    </div>

                    <div class="text-center dont-have">Don't have an account yet? <a
                            href="{{ route('register') }}">Register</a></div>
                </form>
            </div>
        </div>
    </div>
@endsection
