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

            {{--            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 p-4 w-full h-auto">--}}
            {{--                <!-- Card 1 -->--}}
            {{--                <div class="bg-gray-200 dark:bg-gray-800 rounded-md w-full">--}}
            {{--                    <div class="p-4">--}}
            {{--                        <img src="{{asset('build/assets/images/media/media-4.jpg')}}" class="mb-3" alt="...">--}}
            {{--                        <h6 class="font-medium mb-3">Mountains<span class="badge bg-primary float-end text-[10px]">New</span></h6>--}}
            {{--                        <p>With supporting text below as a natural lead-in.</p>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <!-- Repeat similar structure for other cards -->--}}
            {{--            </div>--}}

            <div
                class="xxl:col-span-9 xl:col-span-8 col-span-12 grid grid-cols-1 xl:grid-cols-4 sm:grid-cols-3 lg:grid-cols-3 gap-5 box p-4 w-full h-auto">
                <!-- Row 1 -->
                <div class="box-new dark:bg-gray-800 bg-gray-200 rounded-md w-full">
                    <a href="{{route('meta.upsert')}}">
                        <div class="box-body">
                            <img src="{{asset('build/assets/images/media/media-4.jpg')}}" class="card-img mb-3"
                                 alt="...">
                            <h6 class="box-title font-medium mb-3">Mountains<span
                                    class="badge bg-primary float-end text-[10px]">New</span></h6>
                            <p class="card-text">With supporting text below as a natural lead-in.</p>
                        </div>
                    </a>
                </div>
                <div class="box-new dark:bg-gray-800 bg-gray-200 rounded-md w-full">
                    <a href="{{route('google.upsert')}}">
                        <div class="box-body">
                            <img src="{{asset('build/assets/images/media/media-9.jpg')}}" class="card-img mb-3"
                                 alt="...">
                            <h6 class="box-title font-medium mb-3">Hills<span
                                    class="badge bg-secondary float-end text-[10px]">Hot</span></h6>
                            <p class="card-text">With supporting text below as a natural lead-in.</p>
                        </div>
                    </a>
                </div>

                <div class="box-new dark:bg-gray-800 bg-gray-200 rounded-md w-full">
                    <div class="box-body">
                        <img src="{{asset('build/assets/images/media/media-15.jpg')}}" class="card-img mb-3" alt="...">
                        <h6 class="box-title font-medium mb-3">Nature<span
                                class="badge bg-light text-dark float-end text-[10px]">Offer</span></h6>
                        <p class="card-text">With supporting text below as a natural lead-in.</p>
                    </div>
                </div>

                <div class="box-new dark:bg-gray-800 bg-gray-200 rounded-md w-full">
                    <div class="box-body">
                        <img src="{{asset('build/assets/images/media/media-4.jpg')}}" class="card-img mb-3" alt="...">
                        <h6 class="box-title font-medium mb-3">Mountains<span
                                class="badge bg-primary float-end text-[10px]">New</span></h6>
                        <p class="card-text">With supporting text below as a natural lead-in.</p>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="box-new dark:bg-gray-800 bg-gray-200 rounded-md w-full">
                    <div class="box-body">
                        <img src="{{asset('build/assets/images/media/media-9.jpg')}}" class="card-img mb-3" alt="...">
                        <h6 class="box-title font-medium mb-3">Hills<span
                                class="badge bg-secondary float-end text-[10px]">Hot</span></h6>
                        <p class="card-text">With supporting text below as a natural lead-in.</p>
                    </div>
                </div>
                <div class="box-new dark:bg-gray-800 bg-gray-200 rounded-md w-full">
                    <div class="box-body">
                        <img src="{{asset('build/assets/images/media/media-15.jpg')}}" class="card-img mb-3" alt="...">
                        <h6 class="box-title font-medium mb-3">Nature<span
                                class="badge bg-light text-dark float-end text-[10px]">Offer</span></h6>
                        <p class="card-text">With supporting text below as a natural lead-in.</p>
                    </div>
                </div>

                <div class="box-new dark:bg-gray-800 bg-gray-200 rounded-md w-full">
                    <div class="box-body">
                        <img src="{{asset('build/assets/images/media/media-15.jpg')}}" class="card-img mb-3" alt="...">
                        <h6 class="box-title font-medium mb-3">Nature<span
                                class="badge bg-light text-dark float-end text-[10px]">Offer</span></h6>
                        <p class="card-text">With supporting text below as a natural lead-in.</p>
                    </div>
                </div>

                <div class="box-new dark:bg-gray-800 bg-gray-200 rounded-md w-full">
                    <div class="box-body">
                        <img src="{{asset('build/assets/images/media/media-4.jpg')}}" class="card-img mb-3" alt="...">
                        <h6 class="box-title font-medium mb-3">Mountains<span
                                class="badge bg-primary float-end text-[10px]">New</span></h6>
                        <p class="card-text">With supporting text below as a natural lead-in.</p>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="box-new dark:bg-gray-800 bg-gray-200 rounded-md w-full">
                    <div class="box-body">
                        <img src="{{asset('build/assets/images/media/media-9.jpg')}}" class="card-img mb-3" alt="...">
                        <h6 class="box-title font-medium mb-3">Hills<span
                                class="badge bg-secondary float-end text-[10px]">Hot</span></h6>
                        <p class="card-text">With supporting text below as a natural lead-in.</p>
                    </div>
                </div>
                <div class="box-new dark:bg-gray-800 bg-gray-200 rounded-md w-full">
                    <div class="box-body">
                        <img src="{{asset('build/assets/images/media/media-15.jpg')}}" class="card-img mb-3" alt="...">
                        <h6 class="box-title font-medium mb-3">Nature<span
                                class="badge bg-light text-dark float-end text-[10px]">Offer</span></h6>
                        <p class="card-text">With supporting text below as a natural lead-in.</p>
                    </div>
                </div>

                <div class="box-new dark:bg-gray-800 bg-gray-200 rounded-md w-full">
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
                                    <div class="box-body text-center ">
                                        <p class="mb-1 text-lg font-semibold">Total AD Balance</p>
                                        <h4 class="font-semibold">₹10,000 </h4>
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
                                <div class=" w-full text-center ">
                                        <span class="block mb-3 pb-1 rounded-2 w-full">
                                            <img
                                                src="{{asset('build/assets/images/media/file-manager/2.png')}}" alt=""
                                                class="!inline-flex w-full">
                                        </span>

                                    <div class="flex justify-center ">
                                        <button type="button" class="hs-dropdown-toggle ti-btn btn-wave ti-btn-primary"
                                                data-hs-overlay="#exampleModalgrid">
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

