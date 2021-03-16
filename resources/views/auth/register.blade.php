@include('layouts.header')

<body>
    <div class="limiter login">
        <div class="container-login100" >
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf

                    <span class="login100-form-title p-b-49">
                        Sign Up
                    </span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Full name is reauired">
                        <span class="label-input100">Full Name</span>
                        <input class="input100 @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="Type your full name" required autocomplete="name" autofocus>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
                    @error('name')
                        <span class="invalid-feedback-custom">
                            {{ $message }}
                        </span>
                    @enderror

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                        <span class="label-input100">Email</span>
                        <input class="input100 @error('email') is-invalid @enderror" type="text" name="email" value="{{ old('email') }}" placeholder="Type your email" required autocomplete="email">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
                    @error('email')
                        <span class="invalid-feedback-custom">
                            {{ $message }}
                        </span>
                    @enderror
    
                    <div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Type your password" required autocomplete="new-password">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>
                    @error('password')
                        <span class="invalid-feedback-custom">
                            {{ $message }}
                        </span>
                    @enderror

                    <div class="wrap-input100 validate-input " data-validate="Password is required">
                        <span class="label-input100">Confirm Password</span>
                        <input class="input100" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Type confirm password">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <div class="txt1 text-center p-t-54 p-b-20">
                        <span>
                            Or sign up using
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

                    <br>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Register
                            </button>
                        </div>
                    </div>


                    <div class="flex-col-c p-t-20">

                        <a href="{{ route('login') }}" class="txt2">
                            Login 
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
    @include('layouts.scripts')
</body>
</html>