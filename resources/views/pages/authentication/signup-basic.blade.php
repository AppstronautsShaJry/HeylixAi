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
                                    <img src="{{asset('build/assets/images/brand-logos/heylix_ai.svg')}}" alt="logo" class="desktop-logo">
                                    <img src="{{asset('build/assets/images/brand-logos/heylix_ai.svg')}}" alt="logo" class="desktop-white">
                                </a>
                            </div>
                            <p class="h5 mb-2 text-center">Sign Up</p>
                            <p class="mb-4 text-textmuted dark:text-textmuted/50 opacity-70 font-normal text-center">Welcome! Begin by creating your account.</p>
                            <div class="flex mb-3 justify-between gap-2 flex-wrap flex-lg-nowrap">
                                <button class="ti-btn ti-btn-lg border border-defaultborder dark:border-defaultborder/10 flex items-center justify-center flex-auto ti-btn-light">
                                    <span class="avatar avatar-xs">
                                        <img src="{{asset('build/assets/images/media/apps/google.png')}}" alt="">
                                    </span>
                                    <span class="leading-[1.2rem] ms-2 text-[13px] text-defaulttextcolor">Signup with Google</span>
                                </button>
                            </div>
                            <div class="text-center my-3 authentication-barrier">
                                <span>OR</span>
                            </div>
                            <form method="POST" action="/signup" onsubmit="return validatePasswords()">
                                @csrf
                                <div class="grid grid-cols-12 gap-y-4">
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="signup-firstname" class="form-label text-defaulttextcolor">Full Name<sup class="text-xs text-danger">*</sup></label>
                                        <input type="text" class="form-control" id="signup-firstname" name="name" placeholder="Full Name" required>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="signup-email" class="form-label text-defaulttextcolor">Email<sup class="text-xs text-danger">*</sup></label>
                                        <input type="email" class="form-control" id="signup-email" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="signup-password" class="form-label text-defaulttextcolor">Password<sup class="text-xs text-danger">*</sup></label>
                                        <div class="relative">
                                            <input type="password" class="form-control create-password-input" id="signup-password" name="password" placeholder="Password" required>
                                            <a href="javascript:void(0);" class="show-password-button text-textmuted dark:text-textmuted/50" onclick="togglePasswordVisibility('signup-password', this)" id="button-addon2">
                                                <i class="ri-eye-off-line align-middle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="signup-confirmpassword" class="form-label text-defaulttextcolor">Confirm Password<sup class="text-xs text-danger">*</sup></label>
                                        <div class="relative">
                                            <input type="password" class="form-control create-password-input" id="signup-confirmpassword" name="password_confirmation" placeholder="Confirm Password" required>
                                            <a href="javascript:void(0);" class="show-password-button text-textmuted dark:text-textmuted/50" onclick="togglePasswordVisibility('signup-confirmpassword', this)" id="button-addon21">
                                                <i class="ri-eye-off-line align-middle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
                                        <label class="form-check-label text-textmuted dark:text-textmuted/50 font-normal text-[14px]" for="defaultCheck1">
                                            By creating an account, you agree to our
                                            <a href="{{ url('terms-conditions') }}" class="text-success"><u>Terms & Conditions</u></a> and
                                            <a href="{{ url('privacy-policy') }}" class="text-success"><u>Privacy Policy</u></a>.
                                        </label>
                                    </div>
                                </div>
                                <div class="grid mt-4">
                                    <button type="submit" class="ti-btn ti-btn-primary">Create Account</button>
                                </div>
                            </form>
                            <div class="text-center">
                                <p class="text-textmuted dark:text-textmuted/50 mt-3 mb-0">Already have an account? <a href="{{url('signin')}}" class="text-primary">Sign In</a></p>
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
