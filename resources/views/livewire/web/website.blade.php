@section('styles')

@endsection
<div>
    <x-form.layout>
        <x-breadcrumb.nav>
            <x-breadcrumb.list list="Dashboard" route="dashboard"/>
            <x-breadcrumb.list list="Website" route="web-website"/>
        </x-breadcrumb.nav>
        <x-tabs.url-tab>
            <x-tabs.url-content label="Website" url="/web-website" rounded="rounded-l-sm"/>
            <x-tabs.url-content label="App" url="/web-app" rounded="rounded-r-sm" class=""/>
        </x-tabs.url-tab>

        <x-form.body>
                <div class="col-span-12">
                    <div class="box space-y-8 p-5">

                        <div class="flex justify-end w-full h-auto mr-8">
                            <div class="ti-btn-list flex align-center">
                                <div class="hs-dropdown ti-dropdown ">
                                    <button class="ti-btn btn-wave  ti-btn-primary ti-dropdown-toggle"
                                            type="button" id="dropdownMenuButton1" aria-expanded="false">
                                        Select<i
                                            class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                    </button>
                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                        aria-labelledby="dropdownMenuButton1">
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Web Page</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Website</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Dynamic Web Page</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div x-cloak x-data="{ tab: 'tab1' }" class="h-auto gapp-5 flex flex-col justify-between">
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
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
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

@endsection
