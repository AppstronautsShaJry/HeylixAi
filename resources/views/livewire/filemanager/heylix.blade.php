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

        <div class="grid grid-cols-12 sm:gap-x-6 mb-2 w-8/12">

            <div
                class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                <div
                    class="box !shadow-none border border-defaultborder dark:border-defaultborder/10">

                    <button
                        class="ti-btn !m-0 ti-btn-soft-primary1 btn-w-md flex items-center justify-center btn-wave waves-light h-32"
                        data-hs-overlay="#create-file">
                        <i class="ri-add-circle-line align-middle"></i>Create File
                    </button>

                    <div id="create-file"
                         class="hs-overlay hidden size-full rounded-md fixed top-0 start-0 overflow-x-hidden overflow-y-auto pointer-events-none ti-modal">
                        <div
                            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                            <div class="ti-modal-content flex-grow">
                                <div class="ti-modal-header">
                                    <h6 class="modal-title text-[1rem] font-semibold"
                                        id="staticBackdropLabel2">Modal title
                                    </h6>
                                    <button type="button"
                                            class="hs-dropdown-toggle ti-modal-close-btn"
                                            data-hs-overlay="#create-file">
                                        <span class="sr-only">Close</span>
                                        <svg class="w-3.5 h-3.5" width="8" height="8"
                                             viewBox="0 0 8 8" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                fill="currentColor"/>
                                        </svg>
                                    </button>
                                </div>

                                <div class="w-full space-y-4 mb-3">
                                    <div class="w-11/12 mx-auto">
                                        <label for="create-file1" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="create-file1"
                                               placeholder="File Name">
                                    </div>

                                    <div class="w-11/12 mx-auto">
                                        <label for="create-file1" class="form-label">Description</label>
                                        <input type="text" class="form-control" id="create-file1"
                                               placeholder="File Name">
                                    </div>

                                    <div class="upload-container rounded-md w-6/12 ml-5">
                                        <div
                                            class="flex border border-info bg-transparent rounded-md ">
                                            <input
                                                type="file"
                                                class="file-upload hidden"
                                            />
                                            <div
                                                class="inline-flex items-center gap-x-3 cursor-pointer upload-label ">
                                                <span class="bg-info p-2 rounded-l-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                         fill="currentColor" class="w-6 h-6 text-white"
                                                         viewBox="0 0 16 16">
                                                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                                                    <path
                                                        d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54L1 12.5v-9a.5.5 0 0 1 .5-.5z"/>
                                                </svg>
                                                </span>
                                                <span class="p-2  ">Upload Image</span>
                                            </div>
                                        </div>
                                        <p class="file-name mt-2 text-xs text-gray-500">No file selected</p>
                                    </div>
                                </div>

                                <div class="ti-modal-footer">
                                    <button type="button"
                                            class="hs-dropdown-toggle ti-btn ti-btn-light ti-btn-sm"
                                            data-hs-overlay="#create-file">
                                        <i class="ri-close-fill"></i>
                                    </button>
                                    <a class="ti-btn ti-btn-success ti-btn-sm"
                                       href="javascript:void(0);">
                                        Create File
                                    </a>
                                </div>
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


        </div>


    </div>
</div>

