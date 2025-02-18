@section('styles')

    <!-- Prism CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

<div>
    <x-form.layout>

        <x-breadcrumb.nav>
            <x-breadcrumb.list list="Dashboard" route="dashboard"/>
            <x-breadcrumb.list list="Website" route="web-website"/>
        </x-breadcrumb.nav>

        <x-tabs.url-tab>
            <x-tabs.url-content label="Website" url="/web-website" rounded="rounded-l-sm"/>
            <x-tabs.url-content label="App" url="/web-app" rounded="rounded-r-sm"/>
        </x-tabs.url-tab>

        <x-form.body>

                {{--            <x-form.col1>--}}
                <div class="col-span-12">
                    <div class="box space-y-8 p-5">

                        <div class="flex justify-end w-full h-auto">
                            <div class="ti-btn-list flex align-center">
                                <div class="hs-dropdown ti-dropdown ">
                                    <button class="ti-btn btn-wave  ti-btn-primary ti-dropdown-toggle !py-2"
                                            type="button" id="dropdownMenuButton1" aria-expanded="false">
                                        Select<i
                                            class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                    </button>
                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                        aria-labelledby="dropdownMenuButton1">
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Ecommerce
                                                action</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Finance</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Business</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Management</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Accounting</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Manufacturing</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Transportation</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Transportation</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Transportation</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        {{--                    <div x-clodata="{ tab: 'tab1' }" class="h-auto gap-5 flex flex-col justify-between">--}}

                        <div x-cloak x-data="{ tab: 'tab1' }">
                            <!-- Dropdown -->
{{--                            <x-dropdown.default>--}}
{{--                                <x-dropdown.option value="1">--}}
{{--                                    <button @click="tab = 'tab1'" class="w-full">Ecommerce</button>--}}
{{--                                </x-dropdown.option>--}}
{{--                                <x-dropdown.option value="2">--}}
{{--                                    <button @click="tab = 'tab2'" class="w-full">Finance</button>--}}
{{--                                </x-dropdown.option>--}}
{{--                                <x-dropdown.option value="3">--}}
{{--                                    <button @click="tab = 'tab3'" class="w-full">Business</button>--}}
{{--                                </x-dropdown.option>--}}
{{--                                <x-dropdown.option value="4">--}}
{{--                                    <button @click="tab = 'tab4'" class="w-full">Management</button>--}}
{{--                                </x-dropdown.option>--}}
{{--                                <x-dropdown.option value="5">--}}
{{--                                    <button @click="tab = 'tab5'" class="w-full">Accounting</button>--}}
{{--                                </x-dropdown.option>--}}
{{--                                <x-dropdown.option value="6">--}}
{{--                                    <button @click="tab = 'tab6'" class="w-full">Manufacturing</button>--}}
{{--                                </x-dropdown.option>--}}
{{--                                <x-dropdown.option value="6">--}}
{{--                                    <button @click="tab = 'tab6'" class="w-full">Transportation</button>--}}
{{--                                </x-dropdown.option>--}}
{{--                            </x-dropdown.default>ak x---}}

                            <!-- Tab Buttons -->
                            {{--                        <div--}}
                            {{--                            class="px- w-full overflow-x-auto flex items-center font-medium rounded-sm pb-2.5 justify-between gap-x-5">--}}
                            {{--                            <button @click="tab = 'tab1'"--}}
                            {{--                                    class="max-w-max inline-flex items-center px-4 py-2 rounded-l-sm focus:outline-none dark:hover:text-white hover:text-black space-x-3"--}}
                            {{--                                    :class="tab === 'tab1' ? 'bg-[#FF5D9F] text-white' : 'dark:bg-black bg-gray-200 text-gray-400'">--}}
                            {{--                                <input type="radio" name="tab" value="tab1" class="" :checked="tab === 'tab1'">--}}
                            {{--                                <span>Ecommerce</span>--}}
                            {{--                            </button>--}}
                            {{--                            <button @click="tab = 'tab2'"--}}
                            {{--                                    class="max-w-max inline-flex items-center px-4 py-2 focus:outline-none dark:hover:text-white hover:text-black space-x-3"--}}
                            {{--                                    :class="tab === 'tab2' ? 'bg-[#FF5D9F] text-white' : 'dark:bg-black bg-gray-200 text-gray-400'">--}}
                            {{--                                <input type="radio" name="tab" value="tab2" class="" :checked="tab === 'tab2'">--}}
                            {{--                                <span class="inline-flex items-center">SocialMedia</span>--}}
                            {{--                            </button>--}}
                            {{--                            <button @click="tab = 'tab3'"--}}
                            {{--                                    class="max-w-max inline-flex items-center px-4 py-2 rounded-r-sm focus:outline-none dark:hover:text-white hover:text-black space-x-3"--}}
                            {{--                                    :class="tab === 'tab3' ? 'bg-[#FF5D9F] text-white' : 'dark:bg-black bg-gray-200 text-gray-400'">--}}
                            {{--                                <input type="radio" name="tab" value="tab3" class="" :checked="tab === 'tab3'">--}}
                            {{--                                <span>Management</span>--}}
                            {{--                            </button>--}}
                            {{--                            <button @click="tab = 'tab4'"--}}
                            {{--                                    class="max-w-max inline-flex items-center px-4 py-2 rounded-r-sm focus:outline-none dark:hover:text-white hover:text-black space-x-3"--}}
                            {{--                                    :class="tab === 'tab4' ? 'bg-[#FF5D9F] text-white' : 'dark:bg-black bg-gray-200 text-gray-400'">--}}
                            {{--                                <input type="radio" name="tab" value="tab4" class="" :checked="tab === 'tab4'">--}}
                            {{--                                <span>Accounting</span>--}}
                            {{--                            </button>--}}
                            {{--                            <button @click="tab = 'tab5'"--}}
                            {{--                                    class="max-w-max inline-flex items-center px-4 py-2 rounded-r-sm focus:outline-none dark:hover:text-white hover:text-black space-x-3"--}}
                            {{--                                    :class="tab === 'tab5' ? 'bg-[#FF5D9F] text-white' : 'dark:bg-black bg-gray-200 text-gray-400'">--}}
                            {{--                                <input type="radio" name="tab" value="tab5" class="" :checked="tab === 'tab5'">--}}
                            {{--                                <span>Manufacturing</span>--}}
                            {{--                            </button>--}}
                            {{--                            <button @click="tab = 'tab6'"--}}
                            {{--                                    class="max-w-max inline-flex items-center px-4 py-2 rounded-r-sm focus:outline-none dark:hover:text-white hover:text-black space-x-3"--}}
                            {{--                                    :class="tab === 'tab6' ? 'bg-[#FF5D9F] text-white' : 'dark:bg-black bg-gray-200 text-gray-400'">--}}
                            {{--                                <input type="radio" name="tab" value="tab6" class="" :checked="tab === 'tab6'">--}}
                            {{--                                <span>Transportation</span>--}}
                            {{--                            </button>--}}
                            {{--                            <button @click="tab = 'tab7'"--}}
                            {{--                                    class="max-w-max inline-flex items-center px-4 py-2 rounded-r-sm focus:outline-none dark:hover:text-white hover:text-black space-x-3"--}}
                            {{--                                    :class="tab === 'tab7' ? 'bg-[#FF5D9F] text-white' : 'dark:bg-black bg-gray-200 text-gray-400'">--}}
                            {{--                                <input type="radio" name="tab" value="tab7" class="" :checked="tab === 'tab7'">--}}
                            {{--                                <span>Others</span>--}}
                            {{--                            </button>--}}
                            {{--                        </div>--}}

                            <!-- Tab Content -->
                            <div class="text-md">
                                <div x-cloak x-show="tab === 'tab1'" class="flex gap-x-2 items-center">
                                    <div class="grid grid-cols-3 gap-5 pb-12">
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div x-cloak x-show="tab === 'tab2'" class="flex gap-x-2">
                                    <div class="grid grid-cols-3 gap-5 pb-12">
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div x-cloak x-show="tab === 'tab3'" class="flex gap-x-2">
                                    <div class="grid grid-cols-3 gap-5 pb-12">
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div x-cloak x-show="tab === 'tab4'" class="flex gap-x-2">
                                    <div class="grid grid-cols-3 gap-5 pb-12">
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div x-cloak x-show="tab === 'tab5'" class="flex gap-x-2">
                                    <div class="grid grid-cols-3 gap-5 pb-12">
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div x-cloak x-show="tab === 'tab6'" class="flex gap-x-2">
                                    <div class="grid grid-cols-3 gap-5 pb-12">
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div x-cloak x-show="tab === 'tab7'" class="flex gap-x-2">
                                    <div class="grid grid-cols-3 gap-5 pb-12">
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" w-full max-w-xs shadow " x-data="sliderComponent">
                                            <div
                                                class="relative overflow-hidden rounded-sm group bg-white dark:bg-gray-800 transition-colors">
                                                <!-- Slides -->
                                                <div class="flex transition-transform duration-700 ease-in-out"
                                                     :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <div class="w-full flex-shrink-0">
                                                            <img :src="slide.image"
                                                                 class="w-full h-[300px] object-cover object-center rounded-sm"
                                                                 alt="Slide">
                                                        </div>
                                                    </template>
                                                </div>

                                                <!-- Next/Prev Buttons (visible on hover) -->
                                                <button @click="prevSlide"
                                                        class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10094;
                                                </button>
                                                <button @click="nextSlide"
                                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gray-900 bg-opacity-50 dark:bg-gray-200 dark:bg-opacity-50 text-white dark:text-gray-900 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    &#10095;
                                                </button>

                                                <!-- Indicators -->
                                                <div
                                                    class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
                                                    <template x-for="(slide, index) in slides" :key="index">
                                                        <button @click="setSlide(index)"
                                                                :class="activeIndex === index ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400 dark:bg-gray-600'"
                                                                class="w-3 h-1 rounded-lg"></button>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            {{--            </x-form.col1>--}}
            {{--            <x-form.col2>--}}

            {{--            </x-form.col2>--}}
        </x-form.body>


    </x-form.layout>
</div>

@section('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('sliderComponent', () => ({
                slides: [
                    {image: '{{ asset('images/partials/img1.jpg') }}'},
                    {image: '{{ asset('images/partials/img2.jpg') }}'},
                    {image: '{{ asset('images/partials/img3.jpeg') }}'},
                    {image: '{{ asset('images/partials/img4.jpeg') }}'},
                ],
                activeIndex: 0,
                interval: null,
                startAutoSlide() {
                    this.interval = setInterval(() => {
                        this.nextSlide();
                    }, 20000);
                },
                stopAutoSlide() {
                    clearInterval(this.interval);
                },
                nextSlide() {
                    this.activeIndex = (this.activeIndex + 1) % this.slides.length;
                },
                prevSlide() {
                    this.activeIndex = (this.activeIndex - 1 + this.slides.length) % this.slides.length;
                },
                setSlide(index) {
                    this.activeIndex = index;
                },
                init() {
                    this.startAutoSlide();
                    this.$watch('activeIndex', () => {
                        this.stopAutoSlide();
                        this.startAutoSlide();
                    });
                }
            }));
        });
    </script>

    <!-- Prism JS -->
    <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
    @vite('resources/assets/js/prism-custom.js')

@endsection
