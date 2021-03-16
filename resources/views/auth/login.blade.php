@include('layouts.header')

<body>
    <div class="limiter login">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    @csrf

                    <span class="login100-form-title p-b-49">
                        Login
                    </span>
                    <div class="wrap-input100 validate-input m-b-23" data-validate="Email is reauired">
                        <span class="label-input100">Email</span>
                        <input class="input100 @error('email') is-invalid @enderror" type="text" name="email" value="{{ old('email') }}" placeholder="Type your email" type="email" autocomplete="email" autofocus required>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
                    @error('email')
                        <span class="invalid-feedback-custom">
                            {{ $message }}
                        </span>
                    @enderror

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Type your password"  required autocomplete="current-password">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>
                    @error('password')
                        <span class="invalid-feedback-custom" style="top: 0px">
                            {{ $message }}
                        </span>
                    @enderror

                    <div class="text-right p-t-8 p-b-31">
                        <a href="{{ route('password.request') }}">
                            Forgot password?
                        </a>
                    </div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </div>
                    <div class="txt1 text-center p-t-54 p-b-20">
                        <span>
                            Or login using
                        </span>
                    </div>
                    <div class="flex-c-m">
                        <a href="#" class="login100-social-item bg1">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="login100-social-item bg2">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="login100-social-item bg3">
                            <i class="fa fa-google"></i>
                        </a>
                    </div>
                    <br/>
                    <div class="flex-col-c">
                        <a href="{{ route('register') }}" class="txt2">
                            Sign Up With Email
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('layouts.scripts')
</body>
</html>
