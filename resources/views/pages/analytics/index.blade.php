@extends('layouts.master')

@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">

            <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                <div>
                    <nav>
                        <ol class="breadcrumb mb-1">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">HeyLix</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Analytics</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="box w-full">
            <div class="w-full flex justify-between p-5 ">
                <div>
                    <div class="text-xl font-semibold ">Analytics</div>
                    <span class="text-sm lead-loose">Review performance results and more</span>
                </div>

                <div x-data="theme" :class="{ 'dark': darkMode }" class="">

                    <div x-data="dropdown" class="relative w-48">  <!-- Set fixed width -->
                        <!-- Dropdown Button -->
                        <button @click="open = !open" @keydown.escape="open = false"
                                class="w-48 px-4 py-2 bg-primary-gradient text-white rounded-md shadow-md flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-400">
                            <span class="flex items-center gap-2 truncate">
                                <span x-html="selectedIcon"></span>
                                <span x-text="selectedText"></span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div x-show="open" @click.outside="open = false"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 scale-90"
                             x-transition:enter-end="opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 scale-100"
                             x-transition:leave-end="opacity-0 scale-90"
                             class="absolute w-48 mt-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-lg shadow-md">

                            <!-- Dropdown Options -->
                            <div @click="select('Home', homeIcon)"
                                 class="px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 cursor-pointer flex items-center gap-2">
                                <span x-html="homeIcon"></span> <span>Home</span>
                            </div>
                            <div @click="select('Profile', profileIcon)"
                                 class="px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 cursor-pointer flex items-center gap-2">
                                <span x-html="profileIcon"></span> <span>Profile</span>
                            </div>
                            <div @click="select('Settings', settingsIcon)"
                                 class="px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 cursor-pointer flex items-center gap-2">
                                <span x-html="settingsIcon"></span> <span>Settings</span>
                            </div>
                            <div @click="select('Logout', logoutIcon)"
                                 class="px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 cursor-pointer flex items-center gap-2">
                                <span x-html="logoutIcon"></span> <span>Logout</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="">
                    <label for="hs-hidden-select" class="sr-only">Label</label>
                    <select id="hs-hidden-select" class="ti-form-select rounded-sm ">
                        <option selected>Open this select menu</option>
                        <option>
                                <span class="inline-flex items-center">
                                </span></option>
                        <option>
                            Instagram
                        </option>
                        <option>Twitter</option>
                        <option>Linked In</option>
                    </select>
                </div>

                {{--                <div class="flex flex-row">--}}
                {{--                    <div class="ti-btn-group !p-0 !border-0 !m-0">--}}
                {{--                        <div class="hs-dropdown ti-dropdown">--}}
                {{--                            <button class="ti-btn btn-wave  ti-btn-outline-primary ti-dropdown-toggle"--}}
                {{--                                    type="button" id="dropdownMenuButton14" aria-expanded="false">--}}
                {{--                                <span class="py-0.5">--}}
                {{--                                <svg width="90" height="90" viewBox="0 0 90 90" fill="none"--}}
                {{--                                     xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">--}}
                {{--                                    <path--}}
                {{--                                        d="M85 45C85 22.9086 67.0914 5 45 5C22.9086 5 5 22.9086 5 45C5 64.9649 19.6273 81.5133 38.75 84.5141V56.5625H28.5938V45H38.75V36.1875C38.75 26.1625 44.7219 20.625 53.8586 20.625C58.2352 20.625 62.8125 21.4063 62.8125 21.4063V31.25H57.7687C52.8 31.25 51.25 34.3336 51.25 37.4969V45H62.3438L60.5703 56.5625H51.25V84.5141C70.3727 81.5133 85 64.9656 85 45Z"--}}
                {{--                                        fill="#1877F2"/>--}}
                {{--                                    <path--}}
                {{--                                        d="M60.5703 56.5625L62.3438 45H51.25V37.4969C51.25 34.3336 52.8 31.25 57.7687 31.25H62.8125V21.4062C62.8125 21.4062 58.2352 20.625 53.8586 20.625C44.7219 20.625 38.75 26.1625 38.75 36.1875V45H28.5938V56.5625H38.75V84.5141C40.7867 84.8336 42.8734 85 45 85C47.1266 85 49.2133 84.8336 51.25 84.5141V56.5625H60.5703Z"--}}
                {{--                                        fill="white"/>--}}
                {{--                                </svg>--}}
                {{--                                    </span>--}}
                {{--                                <span>--}}
                {{--                                facebook</span>--}}
                {{--                                <i class="ri-arrow-down-s-line align-middle inline-block"></i>--}}
                {{--                            </button>--}}
                {{--                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"--}}
                {{--                                aria-labelledby="dropdownMenuButton14">--}}
                {{--                                <li><a class="ti-dropdown-item" href="javascript:void(0);">--}}
                {{--                                        <i class="ri-instagram-line"></i>--}}
                {{--                                        Instagram</a>--}}
                {{--                                </li>--}}
                {{--                                <li><a class="ti-dropdown-item" href="javascript:void(0);">--}}
                {{--                                        <svg xmlns="http://www.w3.org/2000/svg"--}}
                {{--                                             xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"--}}
                {{--                                             id="Layer_1" class="text-white bg-white w-4 h-3.5 mt-0.5"--}}
                {{--                                             viewBox="0 0 24 24"--}}
                {{--                                             style="enable-background:new 0 0 24 24;" xml:space="preserve">--}}
                {{--                                                 <g>--}}
                {{--                                                     <polygon--}}
                {{--                                                         points="12.153992,10.729553 8.088684,5.041199 5.92041,5.041199 10.956299,12.087097 11.59021,12.97345 15.900635,19.009583 18.068909,19.009583 12.785217,11.615906"/>--}}
                {{--                                                     <path--}}
                {{--                                                         d="M21.15979,1H2.84021C1.823853,1,1,1.823853,1,2.84021v18.31958C1,22.176147,1.823853,23,2.84021,23h18.31958 C22.176147,23,23,22.176147,23,21.15979V2.84021C23,1.823853,22.176147,1,21.15979,1z M15.235352,20l-4.362549-6.213013 L5.411438,20H4l6.246887-7.104675L4,4h4.764648l4.130127,5.881958L18.06958,4h1.411377l-5.95697,6.775635L20,20H15.235352z"/>--}}
                {{--                                                 </g>--}}
                {{--                                                </svg>--}}
                {{--                                        Twitter</a></li>--}}
                {{--                                <li>--}}
                {{--                                    <a class="ti-dropdown-item" href="javascript:void(0);">--}}
                {{--                                        <svg width="99" height="90" viewBox="0 0 99 90" fill="none"--}}
                {{--                                             xmlns="http://www.w3.org/2000/svg" class="w-4 h-5">--}}
                {{--                                            <path--}}
                {{--                                                d="M92.7853 74.1664C91.3532 74.1802 89.9849 74.7605 88.9796 75.7804C87.9742 76.8004 87.4137 78.177 87.4205 79.6091C87.4274 81.0412 88.0012 82.4124 89.0163 83.4226C90.0314 84.4329 91.4053 85 92.8374 85C94.2696 85 95.6434 84.4329 96.6585 83.4226C97.6736 82.4124 98.2474 81.0412 98.2543 79.6091C98.2612 78.177 97.7006 76.8004 96.6953 75.7804C95.69 74.7605 94.3216 74.1802 92.8895 74.1664H92.7853ZM92.7853 84.3798C91.846 84.3955 90.9231 84.1322 90.1334 83.6234C89.3437 83.1145 88.7227 82.3829 88.3488 81.5211C87.9748 80.6592 87.8649 79.7059 88.0328 78.7816C88.2007 77.8573 88.639 77.0035 89.2921 76.3282C89.9452 75.653 90.784 75.1866 91.7022 74.988C92.6204 74.7894 93.5769 74.8675 94.4507 75.2125C95.3245 75.5575 96.0763 76.1539 96.6112 76.9262C97.146 77.6985 97.4399 78.6121 97.4555 79.5514V79.6311C97.4818 80.8634 97.0177 82.0556 96.1651 82.9456C95.3125 83.8357 94.1414 84.3507 92.9091 84.3774H92.7865M71.9918 72.6865H60.2212V54.2532C60.2212 49.8576 60.1427 44.1991 54.0993 44.1991C47.9687 44.1991 47.0307 48.9883 47.0307 53.9332V72.6852H35.2601V34.7789H46.5599V39.9592H46.7181C47.8489 38.0257 49.483 36.4351 51.4463 35.3568C53.4097 34.2786 55.6287 33.753 57.8671 33.8361C69.7971 33.8361 71.9967 41.6831 71.9967 51.8917L71.9918 72.6865ZM21.979 29.5974C20.628 29.5977 19.3073 29.1973 18.1839 28.4469C17.0604 27.6966 16.1848 26.6299 15.6675 25.3819C15.1503 24.1338 15.0148 22.7605 15.2781 21.4354C15.5415 20.1103 16.1918 18.8931 17.1469 17.9377C18.102 16.9822 19.319 16.3314 20.644 16.0676C21.9689 15.8038 23.3424 15.9389 24.5906 16.4556C25.8388 16.9724 26.9058 17.8477 27.6565 18.9709C28.4073 20.094 28.8081 21.4146 28.8084 22.7656C28.8085 23.6626 28.632 24.5508 28.2889 25.3796C27.9458 26.2084 27.4428 26.9615 26.8086 27.5959C26.1744 28.2303 25.4215 28.7336 24.5929 29.077C23.7642 29.4204 22.876 29.5973 21.979 29.5974ZM27.8643 72.6865H16.0814V34.7789H27.8643V72.6865ZM77.8599 5.00541H10.1667C8.63024 4.98807 7.14977 5.58143 6.05058 6.65509C4.9514 7.72876 4.32344 9.1949 4.30469 10.7313V78.7054C4.3228 80.2426 4.95036 81.7097 6.04951 82.7845C7.14866 83.8593 8.62948 84.4538 10.1667 84.4375H77.8599C79.4002 84.4568 80.8852 83.864 81.9886 82.7892C83.0921 81.7145 83.7239 80.2457 83.7452 78.7054V10.7264C83.7233 9.18694 83.0911 7.71915 81.9875 6.6455C80.884 5.57186 79.3994 4.9802 77.8599 5.00051M93.6448 79.9266C93.8464 79.9286 94.0462 79.8892 94.2319 79.8108C94.4176 79.7324 94.5853 79.6166 94.7244 79.4707C94.8635 79.3248 94.9711 79.1519 95.0406 78.9627C95.1101 78.7734 95.14 78.5719 95.1284 78.3707C95.1284 77.2672 94.4626 76.74 93.0967 76.74H90.8897V82.5174H91.7198V79.999H92.7399L92.7632 80.0296L94.3462 82.5174H95.2339L93.5308 79.9426L93.6448 79.9266ZM92.6848 79.3479H91.7223V77.3947H92.9422C93.5725 77.3947 94.2909 77.4977 94.2909 78.3229C94.2909 79.2719 93.5639 79.3479 92.6799 79.3479"--}}
                {{--                                                fill="#2867B2"/>--}}
                {{--                                        </svg>--}}
                {{--                                        Linked In</a>--}}
                {{--                                </li>--}}
                {{--                            </ul>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="ti-btn-group !p-0 !border-0 !m-0">--}}
                {{--                        <div class="hs-dropdown ti-dropdown">--}}
                {{--                            <button class="ti-btn btn-wave  ti-btn-outline-primary ti-dropdown-toggle"--}}
                {{--                                    type="button" id="dropdownMenuButton14" aria-expanded="false">--}}
                {{--                                This Week<i class="ri-arrow-down-s-line align-middle inline-block"></i>--}}
                {{--                            </button>--}}
                {{--                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"--}}
                {{--                                aria-labelledby="dropdownMenuButton14">--}}
                {{--                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Yesterday</a>--}}
                {{--                                </li>--}}
                {{--                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Last Week</a></li>--}}
                {{--                                <li><a class="ti-dropdown-item" href="javascript:void(0);">This Month</a></li>--}}
                {{--                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Last Month</a></li>--}}
                {{--                                <li><a class="ti-dropdown-item" href="javascript:void(0);">This Year</a></li>--}}
                {{--                            </ul>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
        @endsection
        @section('scripts')
            <script>
                document.addEventListener("alpine:init", () => {
                    Alpine.data("dropdown", () => ({
                        open: false,
                        selectedText: "Select an option",
                        selectedIcon: "",
                        homeIcon: `<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600 dark:text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/><path d="M9 22V12h6v10"/></svg>`,
                        profileIcon: `<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600 dark:text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zM6 18c0-2.67 5.33-4 6-4s6 1.33 6 4"/></svg>`,
                        settingsIcon: `<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600 dark:text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a9 9 0 01-14.8 0M4.6 9a9 9 0 0114.8 0M3 12h1m16 0h1"/></svg>`,
                        logoutIcon: `<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600 dark:text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 2H4a2 2 0 00-2 2v16a2 2 0 002 2h6"/><polyline points="17 16 21 12 17 8"/><line x1="21" y1="12" x2="9" y2="12"/></svg>`,

                        select(optionText, optionIcon) {
                            this.selectedText = optionText;
                            this.selectedIcon = optionIcon;
                            this.open = false;
                        }
                    }));

                    Alpine.data("theme", () => ({
                        darkMode: localStorage.getItem("darkMode") === "true",
                        toggleTheme() {
                            this.darkMode = !this.darkMode;
                            localStorage.setItem("darkMode", this.darkMode);
                            document.documentElement.classList.toggle("dark", this.darkMode);
                        }
                    }));
                });
            </script>
@endsection
