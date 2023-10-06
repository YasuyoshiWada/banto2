{{-- @section('styles')
<link rel="stylesheet" href="{{ mix('/css/login-forget.css') }}">
@endsection --}}

<style>
    .resend-color {
        background-color:#ccccff;
        border-radius: 0.5vw;
    }
    .btn-color1 {
        background-color:#003366;
    }
</style>


<div id="login-forget" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal">
        <div class="modal-content">
                <div class="modal-body container-fluid">
                    <div class="row">&nbsp;</div>
                    <div class="row">&nbsp;</div>
                    <div class="row text-center">
                        <h3 class="modal-title">Forgot Password?</h3>
                    </div>
                    <div class="row text-center opacity-75">
                        <a>No worries, we'll send you reset instructions</a>
                    </div>
                    <div class="row text-email ms-4">
                        <label for="email" class="email">Enter your email</label>
                    </div>
                    <div class="row mx-4">
                        <input type="email" id="email" class="form-control form-control-xl">
                    </div>
                    <div class="row resend-color text-center mx-4">
                        <p class="opacity-50">
                            !  &nbsp;We can't seem to find the right email address for<br>
                            &nbsp;&nbsp;&nbsp;you.resend the email that you have registreted
                        </p>
                    </div>
                    <div class="d-grid gap-2 col-11 mx-auto">
                        <button type="submit" class="btn btn-color1 shadow mt-4">
                            {{-- デフォルトで実装されているpasswordのreset.blade.phpへの password.request --}}
                            <a href="{{ route('password.request') }}" class="text-white">Reset Password</a>
                        </button>
                        <button class="btn button-close btn-white mt-1 shadow" data-bs-dismiss="modal">
                            <a href="{{ route('login')}}" class="">Back to Login</a>
                        </button>
                    </div>
                </div>
                <div class="row sing-up mx-auto">
                    <div class="col">
                        <span>Don't have account?</span>
                        &nbsp;&nbsp;
                        <a href="{{ route('register')}}" class="text-dark">Sign Up</a>
                    </div>
                    <div class="row">&nbsp;</div>
                </div>
        </div>
    </div>
</div>
