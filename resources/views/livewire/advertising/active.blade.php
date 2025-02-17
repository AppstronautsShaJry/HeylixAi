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
            {{--            <x-tabs.url-content />--}}
            <x-tabs.url-content label="Meta Ads" url="/meta-ads"/>
            <x-tabs.url-content label="Google Ads" url="/google-ads"/>
            <x-tabs.url-content label="Active Ads" url="/active-ads" rounded="rounded-r-sm" class=""/>
        </x-tabs.url-tab>

{{--        <div x-data="{ currentPage: window.location.pathname }" class="box flex flex-row p-4">--}}
{{--            <div--}}
{{--                :class="currentPage === '/meta-ads' ? 'bg-[#FF5D9F]  rounded-l-sm text-white ' : ' hover:text-gray-400 dark:text-gray-400 dark:bg-[#252528] bg-[#F8F9FB]  rounded-l-sm '"--}}
{{--                class="max-w-max py-3 px-2 group">--}}
{{--                <a href="/meta-ads" class="text-sm flex items-center gap-x-3 dark:hover:text-white">--}}
{{--                    Meta Ads--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div--}}
{{--                :class="currentPage === '/google-ads' ? 'bg-[#FF5D9F] text-white ' : 'hover:text-gray-400  dark:text-gray-400 dark:bg-[#252528] bg-[#F8F9FB] '"--}}
{{--                class="max-w-max py-3 px-2 group">--}}
{{--                <a href="/google-ads" class="text-sm flex items-center gap-x-3 dark:hover:text-white">--}}
{{--                    Google Ads--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div--}}
{{--                :class="currentPage === '/active-ads' ? 'bg-[#FF5D9F] rounded-r-sm text-white ' : ' hover:text-gray-400  dark:text-gray-400 dark:bg-[#252528] bg-[#F8F9FB] rounded-md '"--}}
{{--                class="max-w-max py-3 px-2 group">--}}
{{--                <a href="/active-ads" class="text-sm flex items-center gap-x-3 dark:hover:text-white">--}}
{{--                    Active Ads--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}

    </div>
</div>

