@include('layouts.header')

<body>
    <div class="limiter login">
        <div class="container-login100" >
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form" method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <span class="login100-form-title p-b-49">
                        Confirm Password Before Continuing
                    </span>
    
                    <div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Type your password" required autocomplete="current-password">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>
                    @error('password')
                        <span class="invalid-feedback-custom">
                            {{ $message }}
                        </span>
                    @enderror

                    @if (Route::has('password.request'))                    
                        <div class="text-right p-t-8 p-b-31">
                            <a href="{{ route('password.request') }}">
                                Forgot Password?
                            </a>
                        </div>
                    @endif
                    <br>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Confirm Password
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
    @include('layouts.scripts')
</body>
</html>