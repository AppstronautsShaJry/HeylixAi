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

            <div
                class="xxl:col-span-9 xl:col-span-8 col-span-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 box p-4 w-full h-auto">
                <!-- Row 1 -->
                <div class="box-new dark:bg-gray-800 w-full">
                    <div class="box-body">
                        <img src="{{asset('build/assets/images/media/media-4.jpg')}}" class="card-img mb-3" alt="...">
                        <h6 class="box-title font-medium mb-3">Mountains<span
                                class="badge bg-primary float-end text-[10px]">New</span></h6>
                        <p class="card-text">With supporting text below as a natural lead-in.</p>
                    </div>
                </div>
                <div class="box-new dark:bg-gray-800 w-full">
                    <div class="box-body">
                        <img src="{{asset('build/assets/images/media/media-9.jpg')}}" class="card-img mb-3" alt="...">
                        <h6 class="box-title font-medium mb-3">Hills<span
                                class="badge bg-secondary float-end text-[10px]">Hot</span></h6>
                        <p class="card-text">With supporting text below as a natural lead-in.</p>
                    </div>
                </div>
                <div class="box-new dark:bg-gray-800 w-full">
                    <div class="box-body">
                        <img src="{{asset('build/assets/images/media/media-15.jpg')}}" class="card-img mb-3" alt="...">
                        <h6 class="box-title font-medium mb-3">Nature<span
                                class="badge bg-light text-dark float-end text-[10px]">Offer</span></h6>
                        <p class="card-text">With supporting text below as a natural lead-in.</p>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="box-new dark:bg-gray-800 w-full">
                    <div class="box-body">
                        <img src="{{asset('build/assets/images/media/media-4.jpg')}}" class="card-img mb-3" alt="...">
                        <h6 class="box-title font-medium mb-3">Mountains<span
                                class="badge bg-primary float-end text-[10px]">New</span></h6>
                        <p class="card-text">With supporting text below as a natural lead-in.</p>
                    </div>
                </div>
                <div class="box-new dark:bg-gray-800 w-full">
                    <div class="box-body">
                        <img src="{{asset('build/assets/images/media/media-9.jpg')}}" class="card-img mb-3" alt="...">
                        <h6 class="box-title font-medium mb-3">Hills<span
                                class="badge bg-secondary float-end text-[10px]">Hot</span></h6>
                        <p class="card-text">With supporting text below as a natural lead-in.</p>
                    </div>
                </div>
                <div class="box-new dark:bg-gray-800 w-full">
                    <div class="box-body">
                        <img src="{{asset('build/assets/images/media/media-15.jpg')}}" class="card-img mb-3" alt="...">
                        <h6 class="box-title font-medium mb-3">Nature<span
                                class="badge bg-light text-dark float-end text-[10px]">Offer</span></h6>
                        <p class="card-text">With supporting text below as a natural lead-in.</p>
                    </div>
                </div>
            </div>


            <div class="xxl:col-span-3 sm:col-span-4 col-span-12  flex flex-col">
                <div class="w-full">
                    <div class="box">
                        <div class="box-body">
                            <div class="sm:col-span-6 xl:col-span-3 col-span-12">
                                <div class="box overflow-hidden">
                                    <div class="box-body text-center">
                                        {{--                                            <span class="avatar avatar-md bg-primary  svg-white avatar-rounded">--}}
                                        {{--                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"--}}
                                        {{--                                                     fill="#000000" viewBox="0 0 256 256"><path--}}
                                        {{--                                                        d="M152,120H136V56h8a32,32,0,0,1,32,32,8,8,0,0,0,16,0,48.05,48.05,0,0,0-48-48h-8V24a8,8,0,0,0-16,0V40h-8a48,48,0,0,0,0,96h8v64H104a32,32,0,0,1-32-32,8,8,0,0,0-16,0,48.05,48.05,0,0,0,48,48h16v16a8,8,0,0,0,16,0V216h16a48,48,0,0,0,0-96Zm-40,0a32,32,0,0,1,0-64h8v64Zm40,80H136V136h16a32,32,0,0,1,0,64Z"></path></svg>--}}
                                        {{--                                            </span>--}}
                                        <p class="mb-1 text-lg font-semibold">Total AD Balance</p>
                                        <h4 class="font-semibold">₹10,000 </h4>
                                        {{--                                        <div class="text-textmuted dark:text-textmuted/50 text-[13px] mt-2">Increased By--}}
                                        {{--                                            <span class="mb-0 badge bg-success/10 text-success rounded-full">--}}
                                        {{--                                                        +5.35%--}}
                                        {{--                                                    <i class="ri-arrow-up-line text-[10px] align-middle ms-1"></i>--}}
                                        {{--                                                </span>--}}
                                        {{--                                        </div>--}}

                                    </div>

                                </div>
                                <div class="flex justify-center ">
                                    <button type="button" class="hs-dropdown-toggle ti-btn btn-wave ti-btn-primary"
                                            data-hs-overlay="#exampleModalgrid">
                                        Add Fund
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
                                <div class="filemanager-upgrade-storage w-full text-center ">
                                        <span class="block mb-3 pb-1 bg-primarytint1color/10 rounded-2"> <img
                                                src="{{asset('build/assets/images/media/file-manager/2.png')}}" alt=""
                                                class="!inline-flex">
                                        </span>
                                    <span
                                        class="text-[1rem] font-semibold text-defaulttextcolor">Standard and Premium</span>
                                    <span
                                        class="block text-[1rem] font-semibold  text-gray-800 dark:text-textmuted/50 mt-2 text-start">Notice</span>
                                    <span class="block text-textmuted dark:text-textmuted/50 mt-2 text-start">With supporting text below as a natural</span>
                                    <span class="block text-textmuted dark:text-textmuted/50 mt-2 text-start">With supporting text below as a natural</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

