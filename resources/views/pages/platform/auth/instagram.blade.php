@extends('layouts.master')

@section('styles')

@endsection

@section('content')

    <!-- Start::app-content -->
    <div class="main-content app-content px-5">
        <div class="container-fluid">
            <!-- Start::page-header -->
            <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="/">
                                Dashboards
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Platform</li>
                        <li class="breadcrumb-item active" aria-current="page">Connect Account</li>
                    </ol>
                </div>
                <div class="flex gap-2 flex-wrap">
                </div>
            </div>
        </div>

        <div class="box px-1">
            <div class="flex justify-between items-center p-5 border-b ">
                <div class="text-lg">Instagram</div>
                <a href="/instagram">
{{--                    <button type="button" class="ti-btn ti-btn-primary-gradient btn-wave ">--}}
{{--                        View Account--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"--}}
{{--                             stroke="currentColor" class="size-6">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                  d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>--}}
{{--                        </svg>--}}
{{--                    </button>--}}
                    <button type="button" class="ti-btn ti-btn-primary label-ti-btn">
                        <i class="ri-eye-line label-ti-btn-icon  me-2"></i>
                        View Account
                    </button>
                </a>
            </div>
            <x-tabs.tab-panel>
                <x-slot name="tabs">
                    <x-tabs.tab>
                        <div class=" text-lg inline-flex items-center gap-x-3">
                            <svg width="90" height="90" class="w-8 h-8" viewBox="0 0 90 90" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_799_5500" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="4"
                                      y="4" width="81" height="81">
                                    <path
                                        d="M28.2542 5.09731C23.9981 5.29819 21.0912 5.9799 18.551 6.97524C15.9214 8.00037 13.6923 9.37419 11.4749 11.6007C9.2548 13.8286 7.89141 16.0616 6.87408 18.6938C5.8891 21.2405 5.22165 24.1488 5.0337 28.4075C4.8471 32.674 4.80431 34.0348 4.82511 44.8968C4.84583 55.7574 4.89377 57.1208 5.09722 61.3886C5.30067 65.6435 5.97984 68.5491 6.97517 71.0906C8.0016 73.7202 9.37401 75.9481 11.6018 78.1669C13.8284 80.3857 16.0627 81.7478 18.6961 82.7665C21.2402 83.7502 24.1497 84.4202 28.4071 84.6068C32.6736 84.7947 34.0356 84.8362 44.8949 84.8155C55.7592 84.7947 57.1214 84.7468 61.3878 84.5446C65.6439 84.3411 68.5482 83.6594 71.091 82.6667C73.7205 81.6376 75.9496 80.2677 78.1671 78.0399C80.3846 75.8133 81.7479 73.579 82.7654 70.9455C83.7503 68.4014 84.4203 65.4918 84.6057 61.237C84.7923 56.9679 84.8364 55.6045 84.8156 44.7438C84.7949 33.8819 84.7457 32.5211 84.5435 28.2559C84.3413 23.9972 83.6596 21.0928 82.6655 18.55C81.6378 15.9204 80.2667 13.6938 78.0401 11.4737C75.8136 9.25625 73.5793 7.89023 70.9458 6.87546C68.4005 5.89047 65.4922 5.21912 61.2348 5.03509C56.9684 4.84587 55.6063 4.80443 44.7432 4.82515C33.8827 4.84588 32.5207 4.89255 28.2542 5.09731ZM28.7208 77.4074C24.8211 77.2376 22.7034 76.5896 21.2921 76.0466C19.4232 75.3234 18.0897 74.4564 16.6861 73.0632C15.2851 71.6647 14.4155 70.335 13.6858 68.4701C13.1376 67.0587 12.478 64.9436 12.2952 61.0439C12.0969 56.8279 12.0516 55.563 12.0321 44.8825C12.0114 34.2046 12.0502 32.9397 12.2343 28.7199C12.4015 24.8227 13.0534 22.7024 13.5951 21.2924C14.3182 19.4209 15.1827 18.0899 16.5785 16.6863C17.9769 15.2827 19.3066 14.4157 21.1728 13.686C22.5829 13.1352 24.698 12.4807 28.5963 12.2954C32.8148 12.0958 34.0784 12.053 44.7562 12.0323C55.4365 12.0115 56.7014 12.0492 60.9212 12.2345C64.8183 12.4043 66.9385 13.0497 68.3473 13.5953C70.2174 14.3185 71.551 15.1803 72.9533 16.5787C74.3556 17.9772 75.2252 19.3043 75.9548 21.1744C76.5056 22.5806 77.1601 24.6983 77.3442 28.5954C77.545 32.814 77.5904 34.0789 77.6098 44.7568C77.6305 55.4373 77.5917 56.7022 77.4064 60.9194C77.2366 64.8191 76.5899 66.9382 76.0456 68.3508C75.3224 70.2184 74.4579 71.552 73.0608 72.9556C71.6638 74.354 70.3341 75.2262 68.4665 75.9559C67.0591 76.5053 64.9414 77.1611 61.0456 77.3465C56.8272 77.5448 55.5635 77.5901 44.8819 77.6096C34.2041 77.6303 32.9405 77.5901 28.7208 77.4074ZM61.3295 23.4386C61.3346 26.0877 63.4886 28.2326 66.1376 28.2274C68.7879 28.2222 70.9328 26.0695 70.929 23.4204C70.9237 20.7714 68.7698 18.6252 66.1195 18.6304C63.4692 18.6355 61.3243 20.7895 61.3295 23.4386ZM24.282 44.8592C24.304 56.2032 33.5173 65.379 44.8586 65.357C56.2012 65.335 65.382 56.1242 65.3601 44.7801C65.338 33.44 56.1234 24.259 44.7795 24.281C33.4382 24.303 24.2599 33.5177 24.282 44.8592ZM31.4864 44.8449C31.4734 37.4822 37.4325 31.5011 44.7938 31.4882C52.1564 31.4739 58.1387 37.4304 58.1529 44.7944C58.1673 52.1584 52.2082 58.1382 44.8443 58.1525C37.483 58.1667 31.5007 52.2089 31.4864 44.8449Z"
                                        fill="#000008"/>
                                </mask>
                                <g mask="url(#mask0_799_5500)">
                                    <rect x="1.46875" y="1.47168" width="87.1" height="87.1"
                                          fill="url(#paint0_radial_799_5500)"/>
                                    <g filter="url(#filter0_f_799_5500)">
                                        <ellipse cx="17.769" cy="-1.84334" rx="50.25" ry="35.175"
                                                 transform="rotate(-14.9317 17.769 -1.84334)" fill="#7334FF"/>
                                    </g>
                                    <g filter="url(#filter1_f_799_5500)">
                                        <circle cx="85.7786" cy="2.02962" r="47.4583" fill="#B202F5"/>
                                    </g>
                                    <g filter="url(#filter2_f_799_5500)">
                                        <circle cx="18.218" cy="79.6379" r="26.8" fill="#FFB401"/>
                                    </g>
                                </g>
                                <defs>
                                    <filter id="filter0_f_799_5500" x="-68.4828" y="-75.0736" width="172.501"
                                            height="146.46" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                 result="shape"/>
                                        <feGaussianBlur stdDeviation="18.425"
                                                        result="effect1_foregroundBlur_799_5500"/>
                                    </filter>
                                    <filter id="filter1_f_799_5500" x="-6.34636" y="-90.0954" width="184.251"
                                            height="184.25" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                 result="shape"/>
                                        <feGaussianBlur stdDeviation="22.3333"
                                                        result="effect1_foregroundBlur_799_5500"/>
                                    </filter>
                                    <filter id="filter2_f_799_5500" x="-44.3154" y="17.1046" width="125.068"
                                            height="125.066" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                 result="shape"/>
                                        <feGaussianBlur stdDeviation="17.8667"
                                                        result="effect1_foregroundBlur_799_5500"/>
                                    </filter>
                                    <radialGradient id="paint0_radial_799_5500" cx="0" cy="0" r="1"
                                                    gradientUnits="userSpaceOnUse"
                                                    gradientTransform="translate(36.0854 84.6633) rotate(-61.8868) scale(46.2103)">
                                        <stop stop-color="#FFD502"/>
                                        <stop offset="0.869374" stop-color="#FF1154"/>
                                    </radialGradient>
                                </defs>
                            </svg>
                            Instagram Auth
                        </div>
                    </x-tabs.tab>
                </x-slot>
                <x-slot name="content">
                    <x-tabs.content>
                        <div class="w-full h-auto flex justify-between items-center">
                            <div class="xl:w-3/4 flex justify-center items-center">
                                {{--                                <button type="button" class="ti-btn ti-btn-purple-gradient !rounded-full btn-wave ">--}}
                                {{--                                    Create Account--}}
                                {{--                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
                                {{--                                         stroke-width="1.5" stroke="currentColor" class="size-6">--}}
                                {{--                                        <path stroke-linecap="round" stroke-linejoin="round"--}}
                                {{--                                              d="M12 4.5v15m7.5-7.5h-15"/>--}}
                                {{--                                    </svg>--}}
                                {{--                                </button>--}}
                                <button type="button" class="ti-btn ti-btn-primary label-ti-btn">
                                    <i class="ri-links-line label-ti-btn-icon  me-2"></i>
                                    Connect Account
                                </button>
                            </div>
                            <div class="xl:w-1/4">
                                <div class="box ">
                                    <a href="javascript:void(0);" class="card-anchor"></a>
                                    <img src="{{asset('build/assets/images/media/media-23.jpg')}}" class="card-img-top" alt="...">
                                    <div class="box-body">
                                        <h6 class="box-title font-medium mb-0">Forests are Awesome.</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </x-tabs.content>

                </x-slot>
            </x-tabs.tab-panel>
        </div>

    </div>
@endsection
