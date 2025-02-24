@extends('layouts.custom-master')

@section('styles')

@endsection

@section('content')

    @section('error-body')
        <body class="authentication-background">
        @endsection
        <div class="container">
            <div class="flex justify-center items-center authentication authentication-basic h-full">
                <div class="xl:max-w-[41.66666667%] md:max-w-[60%]">
                    <div class="box my-4">
                        <div class="box-body p-[3rem]">
                            <div class="mb-4 flex justify-center">
                                <a href="{{url('index')}}">
                                    <img src="{{asset('/images/logo/heylix_white.png')}}" alt="{{asset('/images/logo/heylix-white.png')}}"
                                         class="desktop-logo">
                                    <img src="{{asset('/images/logo/heylix_white.png')}}" alt="{{asset('/images/logo/heylix-white.png')}}"
                                         class="desktop-white">
                                </a>
                            </div>
                            <p class="h5 mb-2 text-center">Sign Up</p>
                            <p class="mb-4 text-textmuted dark:text-textmuted/50 opacity-70 font-normal text-center">
                                Welcome! Begin by creating your account.</p>
                            <div class="flex mb-3 justify-between gap-2 flex-wrap flex-lg-nowrap">
                                <a href="{{url('auth/google')}}"
                                    class="ti-btn ti-btn-lg border border-defaultborder dark:border-defaultborder/10 flex items-center justify-center flex-auto ti-btn-light">
                                    <span class="avatar avatar-xs">
                                          <svg width="90" height="90" viewBox="0 0 90 90" fill="none"
                                               xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M45.9997 37.7273V53.2183H67.527C66.5817 58.2002 63.745 62.4186 59.4905 65.2549L72.4724 75.3278C80.036 68.3461 84.3997 58.0914 84.3997 45.9096C84.3997 43.0733 84.1453 40.3457 83.6724 37.7278L45.9997 37.7273Z"
                                                    fill="#4285F4"/>
                                                <path
                                                    d="M23.5822 52.6137L20.6543 54.855L10.2904 62.9276C16.8722 75.9821 30.3622 85.0005 45.9986 85.0005C56.7984 85.0005 65.8529 81.4368 72.4713 75.3278L59.4894 65.255C55.9258 67.655 51.3802 69.1097 45.9986 69.1097C35.5986 69.1097 26.7624 62.0915 23.5985 52.6368L23.5822 52.6137Z"
                                                    fill="#34A853"/>
                                                <path
                                                    d="M10.2906 27.0729C7.56349 32.4545 6 38.5274 6 45C6 51.4727 7.56323 57.546 10.2904 62.9276C10.2904 62.9637 23.6001 52.5998 23.6001 52.5998C22.8001 50.1998 22.3272 47.6545 22.3272 44.9996C22.3272 42.3447 22.8001 39.7994 23.6001 37.3994L10.2906 27.0729Z"
                                                    fill="#FBBC05"/>
                                                <path
                                                    d="M45.9994 20.9274C51.8905 20.9274 57.1268 22.9637 61.3086 26.891L72.7631 15.4366C65.8176 8.96391 56.7997 5 45.9994 5C30.3631 5 16.8725 13.9819 10.2906 27.0729L23.5994 37.4002C26.7629 27.9455 35.5994 20.9274 45.9994 20.9274Z"
                                                    fill="#EA4335"/>
                                            </svg>
                                    </span>
                                    <span class="leading-[1.2rem] ms-2 text-[13px] text-defaulttextcolor">Signup with Google</span>
                                </a>
                            </div>
                            <div class="text-center my-3 authentication-barrier">
                                <span>OR</span>
                            </div>
                            <form method="POST" action="/signup" onsubmit="return validatePasswords()">
                                @csrf
                                <div class="grid grid-cols-12 gap-y-4">
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="signup-firstname" class="form-label text-defaulttextcolor">Full Name<sup
                                                class="text-xs text-danger">*</sup></label>
                                        <input type="text" class="form-control" id="signup-firstname" name="name"
                                               placeholder="Full Name" required>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="signup-email" class="form-label text-defaulttextcolor">Email<sup
                                                class="text-xs text-danger">*</sup></label>
                                        <input type="email" class="form-control" id="signup-email" name="email"
                                               placeholder="Email" required>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="signup-password"
                                               class="form-label text-defaulttextcolor">Password<sup
                                                class="text-xs text-danger">*</sup></label>
                                        <div class="relative">
                                            <input type="password" class="form-control create-password-input"
                                                   id="signup-password" name="password" placeholder="Password" required>
                                            <a href="javascript:void(0);"
                                               class="show-password-button text-textmuted dark:text-textmuted/50"
                                               onclick="togglePasswordVisibility('signup-password', this)"
                                               id="button-addon2">
                                                <i class="ri-eye-off-line align-middle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="signup-confirmpassword" class="form-label text-defaulttextcolor">Confirm
                                            Password<sup class="text-xs text-danger">*</sup></label>
                                        <div class="relative">
                                            <input type="password" class="form-control create-password-input"
                                                   id="signup-confirmpassword" name="password_confirmation"
                                                   placeholder="Confirm Password" required>
                                            <a href="javascript:void(0);"
                                               class="show-password-button text-textmuted dark:text-textmuted/50"
                                               onclick="togglePasswordVisibility('signup-confirmpassword', this)"
                                               id="button-addon21">
                                                <i class="ri-eye-off-line align-middle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="form-check mt-3 xl:col-span-12 col-span-12">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1"
                                               required>
                                        <label
                                            class="form-check-label text-textmuted dark:text-textmuted/50 font-normal text-[14px]"
                                            for="defaultCheck1">
                                            By creating an account, you agree to our
                                            <a href="{{ url('terms-conditions') }}" class="text-success"><u>Terms &
                                                    Conditions</u></a> and
                                            <a href="{{ url('privacy-policy') }}" class="text-success"><u>Privacy
                                                    Policy</u></a>.
                                        </label>
                                    </div>
                                </div>
                                <div class="grid mt-4">
                                    <button type="submit" class="ti-btn ti-btn-primary">Create Account</button>
                                </div>
                            </form>
                            <div class="text-center">
                                <p class="text-textmuted dark:text-textmuted/50 mt-3 mb-0">Already have an account? <a
                                        href="{{url('signin')}}" class="text-primary">Sign In</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection

        @section('scripts')

            <!-- Show Password JS -->
            <script src="{{asset('build/assets/show-password.js')}}"></script>
            <script>
                function validatePasswords() {
                    const password = document.getElementById('signup-password').value;
                    const confirmPassword = document.getElementById('signup-confirmpassword').value;

                    if (password !== confirmPassword) {
                        alert('Passwords do not match.');
                        return false;
                    }

                    if (password.length < 8) {
                        alert('Password must be at least 8 characters long.');
                        return false;
                    }

                    return true;
                }

                function togglePasswordVisibility(id, element) {
                    const input = document.getElementById(id);
                    const icon = element.querySelector('i');
                    if (input.type === 'password') {
                        input.type = 'text';
                        icon.classList.replace('ri-eye-off-line', 'ri-eye-line');
                    } else {
                        input.type = 'password';
                        icon.classList.replace('ri-eye-line', 'ri-eye-off-line');
                    }
                }
            </script>

    @endsection
