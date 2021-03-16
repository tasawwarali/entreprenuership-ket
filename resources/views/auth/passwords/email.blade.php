@include('layouts.header')

<body>
    <div class="limiter login">
        <div class="container-login100" >

            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <span class="login100-form-title p-b-49">
                        Reset Password
                    </span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Email is reauired">
                        <span class="label-input100">Email</span>
                        <input class="input100 @error('email') is-invalid @enderror" type="text" name="email" value="{{ $email ?? old('email') }}" placeholder="Type your email" required autocomplete="email" autofocus>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
                    @error('email')
                        <span class="invalid-feedback-custom">
                            {{ $message }}
                        </span>
                    @enderror

                    <br>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Send Password Reset Link
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