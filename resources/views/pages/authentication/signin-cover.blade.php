@extends('layouts.custom-master')

@section('styles')


@endsection

@section('content')

@section('error-body')
<body class="bg-white">
@endsection

        <div class="grid grid-cols-12 authentication authentication-cover-main mx-0">
            <!-- left -->
            <div class="xxl:col-span-6 xl:col-span-5 lg:col-span-12 xl:block hidden px-0 ">
                <div class="authentication-cover overflow-hidden h-screen" style="background: url('{{asset('build/assets/images/cust_partials/signin_cover_image.jpg')}}');">
                    <div class="authentication-cover-logo">
                        <a href="{{url('index')}}">
                            <img src="{{asset('/images/logo/Heylix_white.svg')}}" alt="" class="authentication-brand desktop-white">
                        </a>
                    </div>
                    <div class="aunthentication-cover-content flex items-center justify-center">
                        <div>
                            <h3 class="text-white mb-1 font-medium">Welcome to Heylix AI!</h3>
                            <h6 class="text-white mb-3 font-medium">Login to Your Account</h6>
                            <p class="text-white mb-1 op-6">Welcome to the Admin Dashboard. Please log in to securely manage your administrative tools and oversee platform activities. Your credentials ensure system integrity and functionality.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- right -->
            <div class="xxl:col-span-6 xl:col-span-7 col-span-12">
                <div class="grid grid-cols-12 justify-center items-center h-full">
                    <div class="xxl:col-span-3 xl:col-span-2 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
                    <div class="xxl:col-span-6 xl:col-span-8 lg:col-span-6 md:col-span-6 sm:col-span-8 col-span-12 px-3">
                        <div class="box my-auto border border-defaultborder dark:border-defaultborder/10">
                            <div class="box-body p-[3rem]">
                                <p class="h5 mb-2 text-center">Sign In</p>
                                <p class="mb-4 text-textmuted dark:text-textmuted/50 opacity-70 font-normal text-center">Welcome back Henry !</p>
                                <div class="flex mb-3 justify-between gap-2 flex-wrap flex-lg-nowrap">
                                    <a href="{{url('auth/google')}}" class="ti-btn ti-btn-lg border border-defaultborder dark:border-defaultborder/10 flex items-center justify-center flex-auto bg-light">
                                        <span class="avatar avatar-xs flex-shrink-0">
                                             <svg width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M45.9997 37.7273V53.2183H67.527C66.5817 58.2002 63.745 62.4186 59.4905 65.2549L72.4724 75.3278C80.036 68.3461 84.3997 58.0914 84.3997 45.9096C84.3997 43.0733 84.1453 40.3457 83.6724 37.7278L45.9997 37.7273Z" fill="#4285F4"/>
                                <path d="M23.5822 52.6137L20.6543 54.855L10.2904 62.9276C16.8722 75.9821 30.3622 85.0005 45.9986 85.0005C56.7984 85.0005 65.8529 81.4368 72.4713 75.3278L59.4894 65.255C55.9258 67.655 51.3802 69.1097 45.9986 69.1097C35.5986 69.1097 26.7624 62.0915 23.5985 52.6368L23.5822 52.6137Z" fill="#34A853"/>
                                <path d="M10.2906 27.0729C7.56349 32.4545 6 38.5274 6 45C6 51.4727 7.56323 57.546 10.2904 62.9276C10.2904 62.9637 23.6001 52.5998 23.6001 52.5998C22.8001 50.1998 22.3272 47.6545 22.3272 44.9996C22.3272 42.3447 22.8001 39.7994 23.6001 37.3994L10.2906 27.0729Z" fill="#FBBC05"/>
                                <path d="M45.9994 20.9274C51.8905 20.9274 57.1268 22.9637 61.3086 26.891L72.7631 15.4366C65.8176 8.96391 56.7997 5 45.9994 5C30.3631 5 16.8725 13.9819 10.2906 27.0729L23.5994 37.4002C26.7629 27.9455 35.5994 20.9274 45.9994 20.9274Z" fill="#EA4335"/>
                            </svg>
{{--                                            <img src="{{asset('build/assets/images/media/apps/google.png')}}" alt="">--}}
                                        </span>
                                        <span class="leading-[1.2rem] ms-2 text-[13px] text-defaulttextcolor">Signin with Google</span>
                                    </a>
                                </div>
                                <div class="text-center my-3 authentication-barrier">
                                    <span>OR</span>
                                </div>
                                <form method="POST" action="{{ route('signin.login') }}">
                                    @csrf
                                    <div class="grid grid-cols-12 gap-y-4">
                                        <!-- Username Field -->
                                        <div class="xl:col-span-12 col-span-12">
                                            <label for="signin-username" class="form-label text-defaulttextcolor">User Name</label>
                                            <input
                                                type="text"
                                                class="form-control @error('username') is-invalid @enderror"
                                                id="signin-username"
                                                name="username"
                                                placeholder="User Name"
                                                value="{{ old('username') }}"
                                                required>
                                            @error('username')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Password Field -->
                                        <div class="xl:col-span-12 col-span-12 mb-2">
                                            <label for="signin-password" class="form-label text-defaulttextcolor block">
                                                Password
                                                <a href="{{ url('reset-password-cover') }}" class="float-end font-normal text-textmuted dark:text-textmuted/50">Forget password?</a>
                                            </label>
                                            <div class="relative">
                                                <input
                                                    type="password"
                                                    class="form-control create-password-input @error('password') is-invalid @enderror"
                                                    id="signin-password"
                                                    name="password"
                                                    placeholder="Password"
                                                    required>
                                                <a href="javascript:void(0);" class="show-password-button text-textmuted dark:text-textmuted/50" onclick="createpassword('signin-password', this)" id="button-addon2">
                                                    <i class="ri-eye-off-line align-middle"></i>
                                                </a>
                                            </div>
                                            @error('password')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Show Authentication Error -->
                                    @if ($errors->has('error'))
                                        <div class="alert alert-danger mt-4">
                                            {{ $errors->first('error') }}
                                        </div>
                                    @endif

                                    <div class="grid mt-4">
                                        <button type="submit" class="ti-btn ti-btn-primary">Sign In</button>
                                    </div>
                                </form>

                                <div class="text-center">
                                    <p class="text-textmuted dark:text-textmuted/50 mt-3 mb-0">Dont have an account? <a href="{{url('signup')}}" class="text-primary">Sign Up</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-2 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
                </div>
            </div>

        </div>

@endsection

@section('scripts')
        <!-- Show Password JS -->
        <script src="{{asset('build/assets/show-password.js')}}"></script>
        <script>
            function createpassword(inputId, toggleButton) {
                let passwordInput = document.getElementById(inputId);
                let icon = toggleButton.querySelector("i");

                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    icon.classList.remove("ri-eye-off-line");
                    icon.classList.add("ri-eye-line");
                } else {
                    passwordInput.type = "password";
                    icon.classList.remove("ri-eye-line");
                    icon.classList.add("ri-eye-off-line");
                }
            }
        </script>
@endsection
