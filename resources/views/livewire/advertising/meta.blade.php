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

        <x-tabs.url-tab>
            <x-tabs.url-content label="Meta Ads" url="/meta-ads" rounded="rounded-l-md"/>
            <x-tabs.url-content label="Google Ads" url="/google-ads" rounded=""/>
            <x-tabs.url-content label="Active Ads" url="/active-ads" rounded="rounded-r-md"/>
        </x-tabs.url-tab>

{{--        <div x-data="{ currentPage: window.location.pathname }" class="box flex flex-row p-4">--}}
{{--            <div--}}
{{--                :class="currentPage === '/meta-ads' ? 'bg-[#FF5D9F]  rounded-l-sm text-white ' : ' hover:text-gray-400 dark:text-gray-400  rounded-md '"--}}
{{--                class="max-w-max py-3 px-2 group">--}}
{{--                <a href="/meta-ads" class="text-sm flex items-center gap-x-3 dark:hover:text-white">--}}
{{--                    Meta Ads--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div--}}
{{--                :class="currentPage === '/google-ads' ? 'bg-[#FF5D9F] text-white ' : 'hover:text-gray-400  dark:text-gray-400 dark:bg-[#252528] bg-[#F8F9FB]'"--}}
{{--                class="max-w-max py-3 px-2 group">--}}
{{--                <a href="/google-ads" class="text-sm flex items-center gap-x-3 dark:hover:text-white">--}}
{{--                    Google Ads--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div--}}
{{--                :class="currentPage === '/active-ads' ? 'bg-[#FF5D9F] rounded-r-sm text-white ' : ' hover:text-gray-400  dark:text-gray-400 dark:bg-[#252528] bg-[#F8F9FB] rounded-r-sm '"--}}
{{--                class="max-w-max py-3 px-2 group">--}}
{{--                <a href="/active-ads" class="text-sm flex items-center gap-x-3 dark:hover:text-white">--}}
{{--                    Active Ads--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="gap-5 grid grid-cols-12 w-full h-auto">

            <div class="box xxl:col-span-9 xl:col-span-8 col-span-12">

                <span class="p-4 text-lg font-semibold">Select your Goal</span>

                <div
                    class=" grid grid-cols-1 xl:grid-cols-3 sm:grid-cols-3 lg:grid-cols-3 gap-5 p-4 w-full h-auto">
                    <!-- Row 1 -->
                    <x-cards.card1 :title="'Awarness'"
                                   description="defre trew dfijl defre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijl"
                                   route="awarness">

                    </x-cards.card1>

                    <x-cards.card1 :title="'Drive Traffic'"
                                   description="defre trew dfijl defre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijl"
                                   route="drive"/>

                    <x-cards.card1 :title="'Get Message'"
                                   description="defre trew dfijl defre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijl"
                                   route="messages"/>

                    <x-cards.card1 :title="'Generate Leads'"
                                   description="defre trew dfijl defre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijl"
                                   route="leads"/>

                    <x-cards.card1 :title="'Get Calls'"
                                   description="defre trew dfijl defre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijl"
                                   route="call"/>

                    <x-cards.card1 :title="'Post/Video Likes'"
                                   description="defre trew dfijl defre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijl"
                                   route="post"/>

                    <x-cards.card1 :title="'Promote App'"
                                   description="defre trew dfijl defre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijl"
                                   route="app"/>

                    <x-cards.card1 :title="'Whatsapp'"
                                   description="defre trew dfijl defre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijldefre trew dfijl"
                                   route="whatsapp"/>
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



