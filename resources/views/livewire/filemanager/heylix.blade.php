<div class="main-content app-content px-5 space-y-5">
    <div class="container-fluid">
        <!-- Start::page-header -->
        <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <ol class="breadcrumb mb-0">
                    {{--                    <li class="breadcrumb-item">--}}
                    {{--                        <a href="/">--}}
                    {{--                            Dashboard--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                    <li class="breadcrumb-item active" aria-current="page"><a href="/calender-social">HeyLix</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Content Creation Service</li>
                </ol>
            </div>
            <div class="flex gap-2 flex-wrap">
            </div>
        </div>

        <div x-data="{ currentPage: window.location.pathname }" class="p-2 py-6 flex items-center font-medium">
            <div
                :class="currentPage === '/filemanager-index' ? 'bg-[#FF5D9F]  rounded-l-sm text-white ' : ' hover:text-gray-400 dark:text-gray-400  rounded-md '"
                class="max-w-max py-3 px-2 group">
                <a href="/filemanager-index" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    All
                </a>
            </div>
            <!-- Twitter Tab -->
            <div
                :class="currentPage === '/filemanager-upload' ? 'bg-[#FF5D9F] text-white' : 'hover:text-gray-400 dark:text-gray-400  rounded-md'"
                class="max-w-max py-3 px-2 group">
                <a href="/filemanager-upload" class="text-sm inline-flex items-center gap-x-3 dark:hover:text-white">
                    Upload
                </a>
            </div>
            <div
                :class="currentPage === '/filemanager-generate' ? 'bg-[#FF5D9F] text-white ' : 'hover:text-gray-400  dark:text-gray-400  rounded-md '"
                class="max-w-max py-3 px-2 group">
                <a href="/filemanager-generate" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    AI Generate
                </a>
            </div>
            <div
                :class="currentPage === '/filemanager-heylix' ? 'bg-[#FF5D9F] rounded-r-sm text-white ' : ' hover:text-gray-400  dark:text-gray-400  rounded-md '"
                class="max-w-max py-3 px-2 group">
                <a href="/filemanager-heylix" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    Heylix Desk
                </a>
            </div>
        </div>

        <div class="grid grid-cols-12 sm:gap-x-6 mb-2">
            <div
                class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                <div
                    class="box !shadow-none border border-defaultborder dark:border-defaultborder/10">
                    <div class="box-body">
                        <div
                            class="mb-6 folder-svg-container flex flex-wrap justify-between items-top">
                            <div class="avatar">
                                <img src="{{asset('build/assets/images/media/file-manager/1.png')}}"
                                     alt="" class="img-fluid">
                            </div>
                            <div>
                                <div class="ti-dropdown hs-dropdown">
                                    <a href="javascript:void(0);"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        <i
                                            class="ri-more-fill font-semibold text-textmuted dark:text-textmuted/50"></i>
                                    </a>
                                    <ul
                                        class="ti-dropdown-menu hs-dropdown-menu hidden">
                                        <li><a class="ti-dropdown-item"
                                               href="javascript:void(0);">Delete</a>
                                        </li>
                                        <li><a class="ti-dropdown-item"
                                               href="javascript:void(0);">Rename</a>
                                        </li>
                                        <li><a class="ti-dropdown-item"
                                               href="javascript:void(0);">Hide
                                                Folder</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="text-[14px] font-medium mb-1 leading-none">
                            <a href="javascript:void(0);">Images</a>
                        </p>
                        <div class="flex items-center justify-between flex-wrap">
                            <div>
                                                                    <span
                                                                        class="text-textmuted dark:text-textmuted/50 text-xs">
                                                                        345 Files
                                                                    </span>
                            </div>
                            <div>
                                                                    <span class="text-defaulttextcolor font-medium">
                                                                        124.16MB
                                                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                <div
                    class="box !shadow-none border border-defaultborder dark:border-defaultborder/10">
                    <div class="box-body">
                        <div
                            class="mb-6 folder-svg-container flex flex-wrap justify-between items-top">
                            <div class="avatar">
                                <img src="{{asset('build/assets/images/media/file-manager/1.png')}}"
                                     alt="" class="img-fluid">
                            </div>
                            <div>
                                <div class="ti-dropdown hs-dropdown">
                                    <a href="javascript:void(0);"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        <i
                                            class="ri-more-fill font-semibold text-textmuted dark:text-textmuted/50"></i>
                                    </a>
                                    <ul
                                        class="ti-dropdown-menu hs-dropdown-menu hidden">
                                        <li><a class="ti-dropdown-item"
                                               href="javascript:void(0);">Delete</a>
                                        </li>
                                        <li><a class="ti-dropdown-item"
                                               href="javascript:void(0);">Rename</a>
                                        </li>
                                        <li><a class="ti-dropdown-item"
                                               href="javascript:void(0);">Hide
                                                Folder</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="text-[14px] font-medium mb-1 leading-none">
                            <a href="javascript:void(0);">Docs</a>
                        </p>
                        <div class="flex items-center justify-between flex-wrap">
                            <div>
                                                                    <span
                                                                        class="text-textmuted dark:text-textmuted/50 text-xs">
                                                                        45 Files
                                                                    </span>
                            </div>
                            <div>
                                                                    <span class="text-defaulttextcolor font-medium">
                                                                        451.15KB
                                                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                <div
                    class="box !shadow-none border border-defaultborder dark:border-defaultborder/10">
                    <div class="box-body">
                        <div
                            class="mb-6 folder-svg-container flex flex-wrap justify-between items-top">
                            <div class="avatar">
                                <img src="{{asset('build/assets/images/media/file-manager/1.png')}}"
                                     alt="" class="img-fluid">
                            </div>
                            <div>
                                <div class="ti-dropdown hs-dropdown">
                                    <a href="javascript:void(0);"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        <i
                                            class="ri-more-fill font-semibold text-textmuted dark:text-textmuted/50"></i>
                                    </a>
                                    <ul
                                        class="ti-dropdown-menu hs-dropdown-menu hidden">
                                        <li><a class="ti-dropdown-item"
                                               href="javascript:void(0);">Delete</a>
                                        </li>
                                        <li><a class="ti-dropdown-item"
                                               href="javascript:void(0);">Rename</a>
                                        </li>
                                        <li><a class="ti-dropdown-item"
                                               href="javascript:void(0);">Hide
                                                Folder</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="text-[14px] font-medium mb-1 leading-none">
                            <a href="javascript:void(0);">Downloads</a>
                        </p>
                        <div class="flex items-center justify-between flex-wrap">
                            <div>
                                                                    <span
                                                                        class="text-textmuted dark:text-textmuted/50 text-xs">
                                                                        568 Files
                                                                    </span>
                            </div>
                            <div>
                                                                    <span class="text-defaulttextcolor font-medium">
                                                                        1.45GB
                                                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                <div
                    class="box !shadow-none border border-defaultborder dark:border-defaultborder/10">
                    <div class="box-body">
                        <div
                            class="mb-6 folder-svg-container flex flex-wrap justify-between items-top">
                            <div class="avatar">
                                <img src="{{asset('build/assets/images/media/file-manager/1.png')}}"
                                     alt="" class="img-fluid">
                            </div>
                            <div>
                                <div class="ti-dropdown hs-dropdown">
                                    <a href="javascript:void(0);"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        <i
                                            class="ri-more-fill font-semibold text-textmuted dark:text-textmuted/50"></i>
                                    </a>
                                    <ul
                                        class="ti-dropdown-menu hs-dropdown-menu hidden">
                                        <li><a class="ti-dropdown-item"
                                               href="javascript:void(0);">Delete</a>
                                        </li>
                                        <li><a class="ti-dropdown-item"
                                               href="javascript:void(0);">Rename</a>
                                        </li>
                                        <li><a class="ti-dropdown-item"
                                               href="javascript:void(0);">Hide
                                                Folder</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="text-[14px] font-medium mb-1 leading-none">
                            <a href="javascript:void(0);">Apps</a>
                        </p>
                        <div class="flex items-center justify-between flex-wrap">
                            <div>
                                                                    <span
                                                                        class="text-textmuted dark:text-textmuted/50 text-xs">
                                                                        247 Files
                                                                    </span>
                            </div>
                            <div>
                                                                    <span class="text-defaulttextcolor font-medium">
                                                                        15.88GB
                                                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

