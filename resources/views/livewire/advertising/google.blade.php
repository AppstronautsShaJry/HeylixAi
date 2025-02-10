<div class="main-content app-content px-5 space-y-5">
    <div class="container-fluid">

        <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item active" aria-current="page"><a href="/calender-social">Assets</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All</li>
                </ol>
            </div>
            <div class="flex gap-2 flex-wrap">
            </div>
        </div>

        <div x-data="{ currentPage: window.location.pathname }" class="p-2 py-6 flex items-center font-medium">
            <div
                :class="currentPage === '/meta-ads' ? 'bg-[#FF5D9F]  rounded-l-sm text-white ' : ' hover:text-gray-400 dark:text-gray-400  rounded-md '"
                class="max-w-max py-3 px-2 group">
                <a href="/meta-ads" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    Meta Ads
                </a>
            </div>
            <div
                :class="currentPage === '/google-ads' ? 'bg-[#FF5D9F] text-white ' : 'hover:text-gray-400  dark:text-gray-400  rounded-md '"
                class="max-w-max py-3 px-2 group">
                <a href="/google-ads" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    Google Ads
                </a>
            </div>
            <div
                :class="currentPage === '/active-ads' ? 'bg-[#FF5D9F] rounded-r-sm text-white ' : ' hover:text-gray-400  dark:text-gray-400  rounded-md '"
                class="max-w-max py-3 px-2 group">
                <a href="/active-ads" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    Active Ads
                </a>
            </div>
        </div>

        <div class="gap-5 grid grid-cols-12 w-full h-auto">

            <div class="box xxl:col-span-9 xl:col-span-8 col-span-12">

                <span class="p-4 text-lg font-semibold">Choose your Goal</span>

                {{--                <div x-data="{ activeTab: 'website' }">--}}
                {{--                    <!-- Tabs Navigation -->--}}
                {{--                    <div class="flex space-x-4 border-b border-gray-400 p-4">--}}
                {{--                        <button class="px-4 py-2 cursor-pointer"--}}
                {{--                                :class="activeTab === 'website' ? 'border-b-2 border-blue-500 font-bold' : 'text-gray-500'"--}}
                {{--                                @click="activeTab = 'website'">Website Traffic--}}
                {{--                        </button>--}}

                {{--                        <button class="px-4 py-2 cursor-pointer"--}}
                {{--                                :class="activeTab === 'lead' ? 'border-b-2 border-blue-500 font-bold' : 'text-gray-500'"--}}
                {{--                                @click="activeTab = 'lead'">Lead Generation--}}
                {{--                        </button>--}}

                {{--                        <button class="px-4 py-2 cursor-pointer"--}}
                {{--                                :class="activeTab === 'app' ? 'border-b-2 border-blue-500 font-bold' : 'text-gray-500'"--}}
                {{--                                @click="activeTab = 'app'">App Promotion--}}
                {{--                        </button>--}}
                {{--                    </div>--}}

                {{--                    <!-- Tab Content -->--}}
                {{--                    <div class="p-4">--}}
                {{--                        <!-- Website Traffic Tab -->--}}
                {{--                        <div x-show="activeTab === 'website'" x-transition class="grid grid-cols-1 xl:grid-cols-3 sm:grid-cols-3 lg:grid-cols-3 gap-5">--}}
                {{--                            <x-cards.card2 :title="'Website Traffic'" description="Website Traffic details..." route="website"></x-cards.card2>--}}
                {{--                        </div>--}}

                {{--                        <!-- Lead Generation Tab -->--}}
                {{--                        <div x-show="activeTab === 'lead'" x-transition class="grid grid-cols-1 xl:grid-cols-3 sm:grid-cols-3 lg:grid-cols-3 gap-5">--}}
                {{--                            <x-cards.card2 :title="'Lead Generation'" description="Lead Generation details..." route="lead"></x-cards.card2>--}}
                {{--                        </div>--}}

                {{--                        <!-- App Promotion Tab -->--}}
                {{--                        <div x-show="activeTab === 'app'" x-transition class="grid grid-cols-1 xl:grid-cols-3 sm:grid-cols-3 lg:grid-cols-3 gap-5">--}}
                {{--                            <x-cards.card2 :title="'App Promotion'" description="App Promotion details..." route="app"></x-cards.card2>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}


{{--                <div x-data="{ activeTab: 'website' }">--}}
{{--                    <div--}}
{{--                        class=" grid grid-cols-1 xl:grid-cols-3 sm:grid-cols-3 lg:grid-cols-3 gap-5 p-4 w-full h-auto mb-2.5 pb-6 border-b border-gray-400">--}}
{{--                        <!-- Row 1 -->--}}

{{--                        <x-cards.card2 :title="'Website Traffic'"--}}
{{--                                       description="defre trew dfijl defre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijl"--}}
{{--                                       @click="activeTab = 'website'" />--}}


{{--                        <x-cards.card2 :title="'Lead Generation'"--}}
{{--                                       description="defre trew dfijl defre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijl"--}}
{{--                                       @click="activeTab = 'lead'" />--}}

{{--                        <x-cards.card2 :title="'App Promotion'"--}}
{{--                                       description="defre trew dfijl defre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijl"--}}
{{--                                       @click="activeTab = 'app'" />--}}
{{--                    </div>--}}

{{--                    <!-- Tab Content -->--}}
{{--                    <div class="p-4">--}}
{{--                        <div x-show="activeTab === 'website'"--}}
{{--                             class="grid grid-cols-1 xl:grid-cols-3 sm:grid-cols-3 lg:grid-cols-3 gap-5">--}}
{{--                            <x-cards.card1 :title="'Search Ad'" description="..." route="google.ads"></x-cards.card1>--}}
{{--                            <x-cards.card1 :title="'Display Ad'" description="..." route="google.ads"></x-cards.card1>--}}
{{--                            <x-cards.card1 :title="'Gmail & Youtube'" description="..."--}}
{{--                                           route="google.ads"></x-cards.card1>--}}
{{--                            <x-cards.card1 :title="'Shopping'" description="..." route="google.ads"></x-cards.card1>--}}
{{--                            <x-cards.card1 :title="'Youtube Video'" description="..."--}}
{{--                                           route="google.ads"></x-cards.card1>--}}
{{--                        </div>--}}

{{--                        <div x-show="activeTab === 'lead'"--}}
{{--                             class="grid grid-cols-1 xl:grid-cols-3 sm:grid-cols-3 lg:grid-cols-3 gap-5">--}}
{{--                            <x-cards.card1 :title="'Search Ad'" description="..." route="google.ads"></x-cards.card1>--}}
{{--                            <x-cards.card1 :title="'Display Ad'" description="..." route="google.ads"></x-cards.card1>--}}
{{--                            <x-cards.card1 :title="'Gmail & Youtube'" description="..."--}}
{{--                                           route="google.ads"></x-cards.card1>--}}
{{--                            <x-cards.card1 :title="'Shopping'" description="..." route="google.ads"></x-cards.card1>--}}
{{--                            <x-cards.card1 :title="'Youtube Video'" description="..."--}}
{{--                                           route="google.ads"></x-cards.card1>--}}
{{--                        </div>--}}

{{--                        <div x-show="activeTab === 'app'"--}}
{{--                             class="grid grid-cols-1 xl:grid-cols-3 sm:grid-cols-3 lg:grid-cols-3 gap-5">--}}
{{--                            <x-cards.card1 :title="'Search Ad'" description="..." route="google.ads"></x-cards.card1>--}}
{{--                            <x-cards.card1 :title="'Display Ad'" description="..." route="google.ads"></x-cards.card1>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div x-data="{ activeTab: 'website' }">
                    <!-- Cards2 Section (Tabs) -->
                    <div id="cards2-section" class="grid grid-cols-1 xl:grid-cols-3 sm:grid-cols-3 lg:grid-cols-3 gap-5 p-4 w-full h-auto mb-2.5 pb-6 border-b border-gray-400">
                        <x-cards.card2 :title="'Website Traffic'"
                                       description="Website Traffic details..."
                                       @click="activeTab = 'website'; $nextTick(() => document.getElementById('cards1-section').scrollIntoView({ behavior: 'smooth' }));">
                        </x-cards.card2>

                        <x-cards.card2 :title="'Lead Generation'"
                                       description="Lead Generation details..."
                                       @click="activeTab = 'lead'; $nextTick(() => document.getElementById('cards1-section').scrollIntoView({ behavior: 'smooth' }));">
                        </x-cards.card2>

                        <x-cards.card2 :title="'App Promotion'"
                                       description="App Promotion details..."
                                       @click="activeTab = 'app'; $nextTick(() => document.getElementById('cards1-section').scrollIntoView({ behavior: 'smooth' }));">
                        </x-cards.card2>
                    </div>

                    <!-- Cards1 Section (Target Scroll Area) -->

                    <div id="cards1-section"
                         x-show="activeTab"
                         x-transition:enter="transform transition duration-600 ease-out"
                         x-transition:enter-start="opacity-0 translate-y-10"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         class="p-4">

                        <div x-show="activeTab === 'website'"
                             class="grid grid-cols-1 xl:grid-cols-3 sm:grid-cols-3 lg:grid-cols-3 gap-5">
                            <x-cards.card1 :title="'Search Ad'" description="..." route="google.ads"></x-cards.card1>
                            <x-cards.card1 :title="'Display Ad'" description="..." route="google.ads"></x-cards.card1>
                            <x-cards.card1 :title="'Gmail & Youtube'" description="..."
                                           route="google.ads"></x-cards.card1>
                            <x-cards.card1 :title="'Shopping'" description="..." route="google.ads"></x-cards.card1>
                            <x-cards.card1 :title="'Youtube Video'" description="..."
                                           route="google.ads"></x-cards.card1>
                        </div>

                        <div x-show="activeTab === 'lead'"
                             class="grid grid-cols-1 xl:grid-cols-3 sm:grid-cols-3 lg:grid-cols-3 gap-5">
                            <x-cards.card1 :title="'Search Ad'" description="..." route="google.ads"></x-cards.card1>
                            <x-cards.card1 :title="'Display Ad'" description="..." route="google.ads"></x-cards.card1>
                            <x-cards.card1 :title="'Gmail & Youtube'" description="..."
                                           route="google.ads"></x-cards.card1>
                            <x-cards.card1 :title="'Shopping'" description="..." route="google.ads"></x-cards.card1>
                            <x-cards.card1 :title="'Youtube Video'" description="..."
                                           route="google.ads"></x-cards.card1>
                        </div>

                        <div x-show="activeTab === 'app'"
                             class="grid grid-cols-1 xl:grid-cols-3 sm:grid-cols-3 lg:grid-cols-3 gap-5">
                            <x-cards.card1 :title="'Search Ad'" description="..." route="google.ads"></x-cards.card1>
                            <x-cards.card1 :title="'Display Ad'" description="..." route="google.ads"></x-cards.card1>
                        </div>
                    </div>
                </div>

            </div>

            <div class="xxl:col-span-3 sm:col-span-4 col-span-12  flex flex-col">
                <div class="w-full">
                    <div class="box">
                        <div class="box-body">
                            <div class="sm:col-span-6 xl:col-span-3 col-span-12">
                                <div class="box overflow-hidden">
                                    <div class="box-body text-center ">
                                        <p class="mb-1 text-lg font-semibold">Total AD Balance</p>
                                        <h4 class="font-semibold">₹10,000 </h4>
                                    </div>
                                </div>
                                <div class="flex justify-center gap-5">
                                    <button type="button" class="hs-dropdown-toggle ti-btn btn-wave ti-btn-primary">
                                        Add Fund
                                    </button>

                                    <button type="button" class="hs-dropdown-toggle ti-btn btn-wave ti-btn-primary">
                                        Transactions
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="xxl:col-span-3 sm:col-span-4 col-span-12 ">
                    <div class="w-full">
                        <div class="box">
                            <div class="box-body">
                                <div class=" w-full text-center ">
                                        <span class="block mb-3 pb-1 rounded-2 w-full">
                                            <img
                                                src="{{asset('build/assets/images/media/file-manager/2.png')}}" alt=""
                                                class="!inline-flex w-full">
                                        </span>

                                    <div class="flex justify-center ">
                                        <button type="button" class="hs-dropdown-toggle ti-btn btn-wave ti-btn-primary">
                                            Hire Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

