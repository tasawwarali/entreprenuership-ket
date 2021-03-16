@include('layouts.header')

<body>
    <div class="limiter login">
        <h1>Verify Your Email Address</h1>
        <div class="container-login100" >
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        'A fresh verification link has been sent to your email address.
                    </div>
                @endif
                <form class="login100-form validate-form" method="POST" action="{{ route('password.resend') }}">
                    @csrf

                    <span class="login100-form-title p-b-49">
                        Request Another
                    </span>

                    <div class="wrap-input100 validate-input m-b-23">
                        <span class="label-input100">Before proceeding, please check your email for a verification link.</span>
                    </div>

                    <div>
                        If you did not receive the email
                    </div>
                    <br>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Click Here To Request Another
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