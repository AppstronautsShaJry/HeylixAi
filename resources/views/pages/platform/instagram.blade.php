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
                        <li class="breadcrumb-item active" aria-current="page">Instgram</li>
                    </ol>
                </div>
                <div class="flex gap-2 flex-wrap">
                </div>
            </div>
        </div>
        <div x-data="{ currentPage: window.location.pathname }" class="box-tab p-5 py-10 gap-x-5 items-center">
            <div :class="currentPage === '/facebook' ? 'border-b-4 border-blue-500' : 'border-none'"
                 class="max-w-max pb-4 px-2">
                <a href="/facebook" class="text-lg inline-flex items-center gap-x-3 dark:text-white">
                    <svg width="90" height="90" viewBox="0 0 90 90" fill="none"
                         xmlns="http://www.w3.org/2000/svg" class="w-8 h-8">
                        <path
                            d="M85 45C85 22.9086 67.0914 5 45 5C22.9086 5 5 22.9086 5 45C5 64.9649 19.6273 81.5133 38.75 84.5141V56.5625H28.5938V45H38.75V36.1875C38.75 26.1625 44.7219 20.625 53.8586 20.625C58.2352 20.625 62.8125 21.4063 62.8125 21.4063V31.25H57.7687C52.8 31.25 51.25 34.3336 51.25 37.4969V45H62.3438L60.5703 56.5625H51.25V84.5141C70.3727 81.5133 85 64.9656 85 45Z"
                            fill="#1877F2"/>
                        <path
                            d="M60.5703 56.5625L62.3438 45H51.25V37.4969C51.25 34.3336 52.8 31.25 57.7687 31.25H62.8125V21.4062C62.8125 21.4062 58.2352 20.625 53.8586 20.625C44.7219 20.625 38.75 26.1625 38.75 36.1875V45H28.5938V56.5625H38.75V84.5141C40.7867 84.8336 42.8734 85 45 85C47.1266 85 49.2133 84.8336 51.25 84.5141V56.5625H60.5703Z"
                            fill="white"/>
                    </svg>
                    Facebook
                </a>

            </div>
            <div :class="currentPage === '/instagram' ? 'border-b-4 border-blue-500' : 'border-none'"
                 class="max-w-max pb-4 px-2">
                <a href="/instagram" class="text-lg inline-flex items-center gap-x-3 dark:text-white">
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
                    Instagram
                </a>
            </div>
            <!-- Twitter Tab -->
            <div :class="currentPage === '/twitter' ? 'border-b-4 border-blue-500' : 'border-none'"
                 class="max-w-max pb-4 px-2">
                <a href="/twitter" class="text-lg inline-flex items-center gap-x-3 dark:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         id="Layer_1" width="24px" class="text-white bg-white" height="24px" viewBox="0 0 24 24"
                         style="enable-background:new 0 0 24 24;" xml:space="preserve">
                <g>
                    <polygon
                        points="12.153992,10.729553 8.088684,5.041199 5.92041,5.041199 10.956299,12.087097 11.59021,12.97345 15.900635,19.009583 18.068909,19.009583 12.785217,11.615906"/>
                    <path
                        d="M21.15979,1H2.84021C1.823853,1,1,1.823853,1,2.84021v18.31958C1,22.176147,1.823853,23,2.84021,23h18.31958 C22.176147,23,23,22.176147,23,21.15979V2.84021C23,1.823853,22.176147,1,21.15979,1z M15.235352,20l-4.362549-6.213013 L5.411438,20H4l6.246887-7.104675L4,4h4.764648l4.130127,5.881958L18.06958,4h1.411377l-5.95697,6.775635L20,20H15.235352z"/>
                </g>
            </svg>
                    Twitter
                </a>
            </div>

            <!-- LinkedIn Tab -->
            <div :class="currentPage === '/linkedin' ? 'border-b-4 border-blue-500' : 'border-none'"
                 class="max-w-max pb-4 px-2">
                <a href="/linkedin" class="text-lg inline-flex text-white items-center gap-x-3">
                    <svg width="99" height="90" viewBox="0 0 99 90" fill="none"
                         xmlns="http://www.w3.org/2000/svg" class="w-8 h-8">
                        <path
                            d="M92.7853 74.1664C91.3532 74.1802 89.9849 74.7605 88.9796 75.7804C87.9742 76.8004 87.4137 78.177 87.4205 79.6091C87.4274 81.0412 88.0012 82.4124 89.0163 83.4226C90.0314 84.4329 91.4053 85 92.8374 85C94.2696 85 95.6434 84.4329 96.6585 83.4226C97.6736 82.4124 98.2474 81.0412 98.2543 79.6091C98.2612 78.177 97.7006 76.8004 96.6953 75.7804C95.69 74.7605 94.3216 74.1802 92.8895 74.1664H92.7853ZM92.7853 84.3798C91.846 84.3955 90.9231 84.1322 90.1334 83.6234C89.3437 83.1145 88.7227 82.3829 88.3488 81.5211C87.9748 80.6592 87.8649 79.7059 88.0328 78.7816C88.2007 77.8573 88.639 77.0035 89.2921 76.3282C89.9452 75.653 90.784 75.1866 91.7022 74.988C92.6204 74.7894 93.5769 74.8675 94.4507 75.2125C95.3245 75.5575 96.0763 76.1539 96.6112 76.9262C97.146 77.6985 97.4399 78.6121 97.4555 79.5514V79.6311C97.4818 80.8634 97.0177 82.0556 96.1651 82.9456C95.3125 83.8357 94.1414 84.3507 92.9091 84.3774H92.7865M71.9918 72.6865H60.2212V54.2532C60.2212 49.8576 60.1427 44.1991 54.0993 44.1991C47.9687 44.1991 47.0307 48.9883 47.0307 53.9332V72.6852H35.2601V34.7789H46.5599V39.9592H46.7181C47.8489 38.0257 49.483 36.4351 51.4463 35.3568C53.4097 34.2786 55.6287 33.753 57.8671 33.8361C69.7971 33.8361 71.9967 41.6831 71.9967 51.8917L71.9918 72.6865ZM21.979 29.5974C20.628 29.5977 19.3073 29.1973 18.1839 28.4469C17.0604 27.6966 16.1848 26.6299 15.6675 25.3819C15.1503 24.1338 15.0148 22.7605 15.2781 21.4354C15.5415 20.1103 16.1918 18.8931 17.1469 17.9377C18.102 16.9822 19.319 16.3314 20.644 16.0676C21.9689 15.8038 23.3424 15.9389 24.5906 16.4556C25.8388 16.9724 26.9058 17.8477 27.6565 18.9709C28.4073 20.094 28.8081 21.4146 28.8084 22.7656C28.8085 23.6626 28.632 24.5508 28.2889 25.3796C27.9458 26.2084 27.4428 26.9615 26.8086 27.5959C26.1744 28.2303 25.4215 28.7336 24.5929 29.077C23.7642 29.4204 22.876 29.5973 21.979 29.5974ZM27.8643 72.6865H16.0814V34.7789H27.8643V72.6865ZM77.8599 5.00541H10.1667C8.63024 4.98807 7.14977 5.58143 6.05058 6.65509C4.9514 7.72876 4.32344 9.1949 4.30469 10.7313V78.7054C4.3228 80.2426 4.95036 81.7097 6.04951 82.7845C7.14866 83.8593 8.62948 84.4538 10.1667 84.4375H77.8599C79.4002 84.4568 80.8852 83.864 81.9886 82.7892C83.0921 81.7145 83.7239 80.2457 83.7452 78.7054V10.7264C83.7233 9.18694 83.0911 7.71915 81.9875 6.6455C80.884 5.57186 79.3994 4.9802 77.8599 5.00051M93.6448 79.9266C93.8464 79.9286 94.0462 79.8892 94.2319 79.8108C94.4176 79.7324 94.5853 79.6166 94.7244 79.4707C94.8635 79.3248 94.9711 79.1519 95.0406 78.9627C95.1101 78.7734 95.14 78.5719 95.1284 78.3707C95.1284 77.2672 94.4626 76.74 93.0967 76.74H90.8897V82.5174H91.7198V79.999H92.7399L92.7632 80.0296L94.3462 82.5174H95.2339L93.5308 79.9426L93.6448 79.9266ZM92.6848 79.3479H91.7223V77.3947H92.9422C93.5725 77.3947 94.2909 77.4977 94.2909 78.3229C94.2909 79.2719 93.5639 79.3479 92.6799 79.3479"
                            fill="#2867B2"/>
                    </svg>
                    Linked In
                </a>
            </div>
        </div>

        <div class="box w-full">
            <div class="w-full flex justify-between items-center p-5 border-b">
                <div class="text-lg font-semibold ">Manage You Accounts</div>
                <div>
                    <a href="/authFacebook">
                        <button type="button" class="ti-btn ti-btn-primary label-ti-btn">
                            <i class="ri-add-line label-ti-btn-icon  me-2"></i>
                            Add Account
                        </button>
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-x-6">
                <div class="xl:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header justify-end">
                            <div class="flex flex-wrap gap-2">
                                <div class="ti-dropdown hs-dropdown">
                                    <a href="javascript:void(0);" class="ti-btn bg-light ti-btn-sm btn-wave"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        Sort By<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                    </a>
                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Newest</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Date Added</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">A - Z</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="box-body p-0">
                            <div class="table-responsive whitespace-nowrap">
                                <table class="ti-custom-table ti-custom-table-head">
                                    <thead>
                                    <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                        <th scope="col">
                                            #
                                        </th>
                                        <th scope="col">Account Info</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Connection Status</th>
                                        <th scope="col">Connection Type</th>
                                        <th scope="col">Account Type</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($pages as $account)
                                        <tr class="crm-contact companies-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                            <td class="companies-checkbox">
                                                1
                                            </td>
                                            <td>
                                                <div class="flex items-center gap-2">
                                                    <div class="leading-none">
                                                                        <span
                                                                            class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                            <img
                                                                                src="{{asset('build/assets/images/company-logos/2.png')}}"
                                                                                alt="">
                                                                        </span>
                                                    </div>
                                                    <div>
                                                        <a data-bs-toggle="offcanvas"
                                                           data-hs-overlay="#offcanvasExample">{{$account->account_name}}</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="">

                                                @if($account->active_status == 1)
                                                    <span class="badge bg-success/10 text-success">Active</span>
                                                @elseif($account->active_status == 0)
                                                    <span class="badge bg-danger/10 text-danger">In Active</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="flex items-center flex-wrap gap-1">
                                                    @if($account->connection_status == 'Connected')
                                                        <span
                                                            class="badge bg-primarytint1color/10 text-primarytint1color">Connected</span>
                                                    @elseif($account->connection_status == 'Disconnceted')
                                                        <span
                                                            class="badge bg-primarytint2color/10 text-primarytint2color">Disconnected</span>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex items-center flex-wrap gap-1">
                                                    @if($account->connection_type == 'personal')
                                                        <span
                                                            class="badge bg-primarytint1color/10 text-primarytint1color">Personal</span>
                                                    @elseif($account->connection_type == 'Official')
                                                        <span
                                                            class="badge bg-primarytint2color/10 text-primarytint2color">Official</span>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex items-center flex-wrap gap-1">
                                                    @if($account->account_type == 'Profile')
                                                        <span
                                                            class="badge bg-primarytint1color/10 text-primarytint1color">Profile</span>
                                                    @elseif($account->account_type == 'page')
                                                        <span
                                                            class="badge bg-primarytint2color/10 text-primarytint2color">Page</span>
                                                    @elseif($account->account_type == 'group')
                                                        <span
                                                            class="badge bg-primarytint3color/10 text-primarytint3color">Group</span>
                                                    @endif
                                                </div>
                                            </td>

                                            <td>
                                                <div class="btn-list">
                                                    <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample"
                                                       class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon"><i
                                                            class="ri-eye-line"></i></a>
                                                    <button class="ti-btn ti-btn-sm ti-btn-soft-info ti-btn-icon"><i
                                                            class="ri-pencil-line"></i></button>
                                                    <button
                                                        class="ti-btn ti-btn-sm ti-btn-soft-primary2 ti-btn-icon contact-delete">
                                                        <i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{--                                    <tr class="crm-contact companies-list border-b !border-defaultborder dark:!border-defaultborder/10">--}}
                                    {{--                                        <td class="companies-checkbox">--}}
                                    {{--                                            1--}}
                                    {{--                                        </td>--}}
                                    {{--                                        <td>--}}
                                    {{--                                            <div class="flex items-center gap-2">--}}
                                    {{--                                                <div class="leading-none">--}}
                                    {{--                                                                        <span class="avatar avatar-sm p-1 bg-light avatar-rounded">--}}
                                    {{--                                                                            <img src="{{asset('build/assets/images/company-logos/2.png')}}" alt="">--}}
                                    {{--                                                                        </span>--}}
                                    {{--                                                </div>--}}
                                    {{--                                                <div>--}}
                                    {{--                                                    <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample">Beta Solutions</a>--}}
                                    {{--                                                </div>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </td>--}}
                                    {{--                                        <td class="text-center">--}}
                                    {{--                                            <div class="xl:col-span-4">--}}
                                    {{--                                                <div class="toggle on mb-4">--}}
                                    {{--                                                    <span></span>--}}
                                    {{--                                                </div>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </td>--}}
                                    {{--                                        <td>--}}
                                    {{--                                            <div class="flex items-center flex-wrap gap-1">--}}
                                    {{--                                                <span class="badge bg-primarytint1color/10 text-primarytint1color">Connected</span>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </td>--}}
                                    {{--                                        <td>--}}
                                    {{--                                            <div class="flex items-center flex-wrap gap-1">--}}
                                    {{--                                                <span class="badge bg-primarytint1color/10 text-primarytint1color">Official</span>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </td>--}}
                                    {{--                                        <td>--}}
                                    {{--                                            <div class="flex items-center flex-wrap gap-1">--}}
                                    {{--                                                <span class="badge bg-primarytint1color/10 text-primarytint1color">Profile</span>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </td>--}}

                                    {{--                                        <td>--}}
                                    {{--                                            <div class="btn-list">--}}
                                    {{--                                                <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample" class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon"><i class="ri-eye-line"></i></a>--}}
                                    {{--                                                <button class="ti-btn ti-btn-sm ti-btn-soft-info ti-btn-icon"><i class="ri-pencil-line"></i></button>--}}
                                    {{--                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary2 ti-btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </td>--}}
                                    {{--                                    </tr>--}}

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="box-footer border-t-0">
                            <div class="flex items-center">
                                <div>
                                    Showing 9 Entries <i class="bi bi-arrow-right ms-2 font-medium"></i>
                                </div>
                                <div class="ms-auto">
                                    <nav aria-label="Page navigation" class="pagination-style-4">
                                        <ul class="ti-pagination mb-0 flex-wrap">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0);">
                                                    Prev
                                                </a>
                                            </li>
                                            <li class="page-item "><a class="page-link active"
                                                                      href="javascript:void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link !text-primary" href="javascript:void(0);">
                                                    next
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


@endsection

