<div class="main-content app-content px-5 space-y-5">

    <div class="container-fluid">

        {{--        <link rel="stylesheet" href="{{asset('build/assets/libs/dropzone/dropzone.css')}}">--}}

        <!-- glightbox Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">

        <!-- Swiper Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">

        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.snow.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.bubble.css')}}">

        <!-- Filepond CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond/filepond.min.css')}}">
        <link rel="stylesheet"
              href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
        <link rel="stylesheet"
              href="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">

        <!-- Start::page-header -->
        <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <ol class="breadcrumb mb-0">
                    {{--                    <li class="breadcrumb-item">--}}
                    {{--                        <a href="/">--}}
                    {{--                            Dashboard--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                    <li class="breadcrumb-item active" aria-current="page"><a href="/calender-social">Assets</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Generate</li>
                </ol>
            </div>
            <div class="flex gap-2 flex-wrap">
            </div>
        </div>

        <div x-data="{ currentPage: window.location.pathname }" class="flex flex-row p-3 py-5 gap-x-5 items-center">
            <div :class="currentPage === '/filemanager-index' ? 'border-b-2 border-blue-500' : 'border-none'"
                 class="max-w-max pb-1.5 px-2">
                <a href="/filemanager-index" class="text-md inline-flex items-center gap-x-3 dark:text-white">
                    All
                </a>

            </div>
            <div :class="currentPage === '/filemanager-upload' ? 'border-b-2 border-blue-500' : 'border-none'"
                 class="max-w-max pb-2 px-2">
                <a href="/filemanager-upload" class="text-md inline-flex items-center gap-x-3 dark:text-white">
                    Uploads
                </a>
            </div>
            <!-- Twitter Tab -->
            <div :class="currentPage === '/filemanager-generate' ? 'border-b-2 border-blue-500' : 'border-none'"
                 class="max-w-max pb-2 px-2">
                <a href="/filemanager-generate" class="text-md inline-flex items-center gap-x-3 dark:text-white">
                    AI Generated
                </a>
            </div>

            <!-- LinkedIn Tab -->
            <div :class="currentPage === '/filemanager-heylix' ? 'border-b-2 border-blue-500' : 'border-none'"
                 class="max-w-max pb-2 px-2">
                <a href="/filemanager-heylix" class="text-md inline-flex items-center gap-x-3">
                    From Desk
                </a>
            </div>
        </div>

        <div class="flex flex-row w-full gap-3">

            <div class="grid grid-cols-12 gap-x-6 w-8/12">
                <div class="xl:col-span-12 col-span-12">
                    <div
                        class="table-responsive border border-defaultborder dark:border-defaultborder/10 border-b-0">

                        <table
                            class="ti-custom-table ti-custom-table-head ti-custom-table-hover">
                            <thead>
                            <tr
                                class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                <th scope="col">File Name</th>
                                <th scope="col">Size</th>
                                <th scope="col">Date Modified</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody class="files-list">

                            <tr
                                class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                <th scope="row">
                                    <div class="flex items-center">
                                        <div class="me-0">
                                             <span
                                                 class="avatar avatar-md !svg-primarytint3color !text-primarytint3color">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                 stroke-width="1.5"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="icon icon-tabler icons-tabler-outline icon-tabler-video-plus size-5 text-purple-600">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path
                                                    d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4z"/>
                                                <path
                                                    d="M3 6m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z"/>
                                                <path d="M7 12l4 0"/>
                                                <path d="M9 10l0 4"/>
                                            </svg>
                                             </span>
                                        </div>

                                        <div>
                                            <a href="javascript:void(0);"
                                               data-hs-overlay="#offcanvasRight">VIDEO_88745_KKI451.mp4</a>
                                        </div>
                                    </div>
                                </th>

                                <td>89MB</td>
                                <td>15,Aug 2024</td>

                                <td>
                                    <div class="hstack gap-2 text-[15px]">
                                        <a href="#youtube-video"
                                           class="glightbox border-0 mb-0 ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary2"
                                           data-gallery="gallery1"
                                           data-title="Compact Laptop"
                                           data-type="inline"
                                           data-draggable="true"
                                        >
                                            <i class="ri-eye-line"></i>
                                        </a>

                                        <a href="javascript:void(0);"
                                           class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary3">
                                            <i class="ri-delete-bin-line"></i>
                                        </a>
                                    </div>

                                    <!-- Hidden Iframe Container -->
                                    <div id="youtube-video" style="display: none;">
                                        <iframe width="100%" height="100%"
                                                src="https://youtu.be/rwF-X5STYks?si=YZ2fU9GkG-zdPRwK"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>
                                        </iframe>
                                    </div>

                                </td>
                            </tr>

                            <tr
                                class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                <th scope="row">
                                    <div class="flex items-center">
                                        <div class="me-0">

                                            <span
                                                class="avatar avatar-md !svg-primarytint1color !text-primarytint1color">

                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="1.5" stroke="currentColor"
                                                     class="size-5 text-purple-600">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"/>
                                            </svg>
                                            </span>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);"
                                               data-hs-overlay="#offcanvasRight">VID-14211110-AKP823.mp4</a>
                                        </div>
                                    </div>
                                </th>
                                <td>12MB</td>
                                <td>18,May 2024</td>
                                <td>
                                    <div class="hstack gap-2 text-[15px]">
                                        <a href="{{asset('build/assets/images/ecommerce/png/1.png')}}"
                                           class="glightbox border-0 mb-0 ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary2"
                                           data-gallery="gallery1"
                                           data-title="Compact Laptop " data-type="image"
                                           data-draggable="true"
                                        ><i class="ri-eye-line"></i></a>

                                        <a href="javascript:void(0);"
                                           class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary3"><i
                                                class="ri-delete-bin-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr
                                class="table-active border-b !border-defaultborder dark:!border-defaultborder/10 bg-light">
                                <th scope="row">
                                    <div class="flex items-center">
                                        <div class="me-0">
                                            <span
                                                class="avatar avatar-md !svg-primarytint2color !text-primarytint2color">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="icon icon-tabler icons-tabler-outline icon-tabler-brand-google-drive size-5 text-pink-600"><path
                                                        stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                                        d="M12 10l-6 10l-3 -5l6 -10z"/><path d="M9 15h12l-3 5h-12"/><path
                                                        d="M15 15l-6 -10h6l6 10z"/></svg>
                                            </span>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);"
                                               data-hs-overlay="#offcanvasRight">AC-20241.zip</a>
                                        </div>
                                    </div>
                                </th>
                                <td>564KB</td>
                                <td>06,Mar 2024</td>
                                <td>
                                    <div class="hstack gap-2 text-[15px]">
                                        <a href="{{asset('build/assets/images/ecommerce/png/1.png')}}"
                                           class="glightbox border-0 mb-0 ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary2"
                                           data-gallery="gallery1"
                                           data-title="Compact Laptop " data-type="image"
                                           data-draggable="true"
                                        ><i class="ri-eye-line"></i></a>

                                        <a href="javascript:void(0);"
                                           class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary3"><i
                                                class="ri-delete-bin-line"></i></a>
                                    </div>
                                </td>
                            </tr>

                            <tr
                                class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                <th scope="row">
                                    <div class="flex items-center">
                                        <div class="me-0">
                                            <span
                                                class="avatar avatar-md !svg-primarytint3color !text-primarytint3color">

                                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                      viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                      stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      class="icon icon-tabler icons-tabler-outline icon-tabler-video-plus size-5 text-purple-600">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path
                                                    d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4z"/>
                                                <path
                                                    d="M3 6m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z"/>
                                                <path d="M7 12l4 0"/>
                                                <path d="M9 10l0 4"/>
                                            </svg>

                                            </span>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);"
                                               data-hs-overlay="#offcanvasRight">AUD__145_24152.mp3</a>
                                        </div>
                                    </div>
                                </th>
                                <td>264KB</td>
                                <td>26,Apr 2024</td>
                                <td>
                                    <div class="hstack gap-2 text-[15px]">
                                        <a href="{{asset('build/assets/images/ecommerce/png/1.png')}}"
                                           class="glightbox border-0 mb-0 ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary2"
                                           data-gallery="gallery1"
                                           data-title="Compact Laptop " data-type="image"
                                           data-draggable="true"
                                        ><i class="ri-eye-line"></i></a>

                                        <a href="javascript:void(0);"
                                           class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary3"><i
                                                class="ri-delete-bin-line"></i></a>
                                    </div>
                                </td>
                            </tr>

                            <tr class="!border-b !border-defaultborder dark:!border-defaultborder/10">
                                <th scope="row">
                                    <div class="flex items-center">
                                        <div class="me-0">
                                            <span
                                                class="avatar avatar-md !svg-secondary !text-secondary">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="icon icon-tabler icons-tabler-outline icon-tabler-file-database text-blue-500"><path
                                                        stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                                        d="M12 12.75m-4 0a4 1.75 0 1 0 8 0a4 1.75 0 1 0 -8 0"/><path
                                                        d="M8 12.5v3.75c0 .966 1.79 1.75 4 1.75s4 -.784 4 -1.75v-3.75"/><path
                                                        d="M14 3v4a1 1 0 0 0 1 1h4"/><path
                                                        d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"/></svg>

                                            </span>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);"
                                               data-hs-overlay="#offcanvasRight">Document-file.pdf</a>
                                        </div>
                                    </div>
                                </th>
                                <td>2.6MB</td>
                                <td>07,Feb 2024</td>
                                <td>
                                    <div class="hstack gap-2 text-[15px]">
                                        <a href="{{asset('build/assets/images/ecommerce/png/1.png')}}"
                                           class="glightbox border-0 mb-0 ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary2"
                                           data-gallery="gallery1"
                                           data-title="Compact Laptop " data-type="image"
                                           data-draggable="true"
                                        ><i class="ri-eye-line"></i></a>

                                        <a href="javascript:void(0);"
                                           class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary3"><i
                                                class="ri-delete-bin-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <nav aria-label="Page navigation"
                             class="pagination-style-2 border-y px-4 py-3 border-t-0 flex justify-end border-defaultborder dark:border-defaultborder/10">
                            <ul class="ti-pagination mb-0 flex-wrap">
                                <li class="page-item disabled">
                                    <a class="page-link" href="javascript:void(0);">
                                        Prev
                                    </a>
                                </li>
                                <li class="page-item "><a class="page-link active"
                                                          href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link"
                                                         href="javascript:void(0);">2</a></li>
                                <li class="page-item">
                                    <a class="page-link !text-primary"
                                       href="javascript:void(0);">
                                        next
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="xxl:col-span-3 col-span-8 w-4/12 flex flex-col ">

                <div class="col-span-12 flex flex-col">

                    <!-- Start::mail information offcanvas -->
                    <div class="ti-offcanvas ti-offcanvas-right hs-overlay hidden" id="offcanvasRight">
                        <div class="ti-offcanvas-body !p-0">
                            <div class="selected-file-details">
                                <div
                                    class="flex p-4 items-center justify-between border-b border-defaultborder dark:border-defaultborder/10">
                                    <div>
                                        <h6 class="font-medium mb-0">File Details</h6>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="ti-dropdown hs-dropdown me-1">
                                            <button
                                                class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary btn-wave waves-light waves-effect waves-light"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </button>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Share</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Copy</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Move</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Delete</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Raname</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <button type="button"
                                                class="ti-btn ti-btn-sm ti-btn-icon ti-btn-outline-light btn-wave flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white text-textmuted dark:text-textmuted/50 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                                data-hs-overlay="#offcanvasRight">
                                            <span class="sr-only">Close modal</span>
                                            <svg class="w-2.5 h-2.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="filemanager-file-details" id="filemanager-file-details">
                                    <div
                                        class="p-4 text-center border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                        <div class="file-details mb-3">
                                            <img src="{{asset('build/assets/images/media/blog/9.jpg')}}" alt=""
                                                 class="!inline-flex">
                                        </div>
                                        <div>
                                            <p class="mb-0 font-medium text-[1rem]">IMG-09123878-SPK734.jpeg</p>
                                            <p class="mb-0 text-textmuted dark:text-textmuted/50 text-[10px]">422KB |
                                                23,Nov
                                                2024
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        class="p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                        <ul class="ti-list-group">
                                            <li class="ti-list-group-item">
                                                <div>
                                                    <span class="font-medium">File Format : </span><span
                                                        class="text-xs text-textmuted dark:text-textmuted/50">jpeg</span>
                                                </div>
                                            </li>
                                            <li class="ti-list-group-item">
                                                <div>
                                                    <p class="font-medium mb-0">File Description : </p>
                                                    <span class="text-xs text-textmuted dark:text-textmuted/50">This file contains 3
                                                folder Xintra.main & Xintra.premium & Xintra.featured and 42 images and
                                                layout styles are added in this update.</span>
                                                </div>
                                            </li>
                                            <li class="ti-list-group-item">
                                                <p class="font-medium mb-0">File Location : </p>
                                                <span
                                                    class="text-xs text-textmuted dark:text-textmuted/50">Device/Storage/Archives/IMG-09123878-SPK734.jpeg</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div
                                        class="p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                        <p class="mb-1 font-medium text-[14px]">Downloaded from :</p>
                                        <a class="text-primary font-medium text-break"
                                           href="https://themeforest.net/user/spruko/portfolio" target="_blank">
                                            <u>https://themeforest.net/user/spruko/portfolio</u>
                                        </a>
                                    </div>
                                    <div class="p-4">
                                        <p class="mb-2 font-medium text-[14px]">Shared With :</p>
                                        <a href="javascript:void(0);">
                                            <div class="flex items-center p-2 mb-1">
                                        <span class="avatar avatar-sm me-2 avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                        </span>
                                                <span class="font-medium flex-auto">Akira Susan</span>
                                                <span
                                                    class="badge bg-success/10 text-success font-normal">28,Nov 2024</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <div class="flex items-center p-2 mb-1">
                                        <span class="avatar avatar-sm me-2 avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                        </span>
                                                <span class="font-medium flex-auto">Khalid Ahmad</span>
                                                <span
                                                    class="badge bg-success/10 text-success font-normal">16,Oct 2024</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <div class="flex items-center p-2 mb-1">
                                        <span class="avatar avatar-sm me-2 avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                        </span>
                                                <span class="font-medium flex-auto">Jeremiah Jackson</span>
                                                <span
                                                    class="badge bg-success/10 text-success font-normal">05,Dec 2024</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <div class="flex items-center p-2">
                                        <span class="avatar avatar-sm me-2 avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                        </span>
                                                <span class="font-medium flex-auto">Brigo Jhonson</span>
                                                <span
                                                    class="badge bg-success/10 text-success font-normal">26,Apr 2024</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::mail information offcanvas -->
                </div>

                <div class="box overflow-hidden">
                    <div class="box-body">

                        <div class="flex items-start gap-4">
                            <div>
                                <span class="avatar avatar-md bg-secondary/10 !text-secondary">
                                    <i class="ri-hard-drive-2-fill text-[1rem]"></i>
                                </span>
                            </div>
                            <div class="flex-auto">
                                <div class=" mb-3"> All Folders
                                    <p class="mb-0"><span class="font-bold text-[14px]">68.12GB</span> Used</p>
                                    <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0">21.35GB
                                        free space</p>
                                </div>
                            </div>
                        </div>
                        <div id="file-manager-storage"></div>
                    </div>

                    <div class="box-footer p-0">
                        <div class="mb-0 w-full flex justify-between items-center px-4">
                            <div>
                                <span class="text-xs text-textmuted dark:text-textmuted/50">Storage Details</span>
                            </div>

                            <div>
                                <button type="button" class="ti-btn ti-btn-primary btn-wave ">Upgrade</button>
                            </div>
                        </div>
                        <ul class="ti-list-group list-group-flush !border-0">

                            <li class="ti-list-group-item">
                                <div class="flex items-center gap-4">
                                    <div class="main-card-icon primary">
                                        <div class="avatar avatar-lg bg-primary/10 border border-primary/10">
                                            <div class="avatar avatar-sm !text-primary">
                                                <i class="ti ti-photo text-xl"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-auto">
                                        <span class="font-medium">Images</span>
                                        <span class="text-textmuted dark:text-textmuted/50 text-xs block">3,145
                                                        files</span>
                                    </div>
                                    <div>
                                        <span class="font-medium text-primary mb-0 text-[14px]">45GB</span>
                                    </div>
                                </div>
                                <div class="progress progress-md p-1 bg-primary/10 mt-3" role="progressbar"
                                     aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                         style="width: 90%"></div>
                                </div>
                            </li>

                            <li class="ti-list-group-item">
                                <div class="flex items-center gap-4">

                                    <div class="main-card-icon primary1">
                                        <div
                                            class="avatar avatar-lg bg-primarytint1color/10 border border-primarytint1color/10">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-video !text-primarytint1color">
                                                <polygon points="23 7 16 12 23 17 23 7"></polygon>
                                                <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                                            </svg>
                                        </div>

                                    </div>
                                    <div class="flex-auto">
                                        <span class="font-medium">Videos</span>
                                        <span class="text-textmuted dark:text-textmuted/50 text-xs block">568
                                                        files</span>
                                    </div>
                                    <div>
                                        <span
                                            class="font-medium text-primarytint1color mb-0 text-[14px]">66GB</span>
                                    </div>
                                </div>
                                <div class="progress progress-md p-1 bg-primarytint1color/10 mt-3"
                                     role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                    <div
                                        class="progress-bar progress-bar-striped bg-primarytint1color progress-bar-animated"
                                        style="width: 86%"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@section('scripts')

    <!-- Apex Charts JS -->
    <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Dropzone JS -->
    <script src="{{asset('build/assets/libs/dropzone/dropzone-min.js')}}"></script>

    <!-- Internal File Manager JS -->
    @vite('resources/assets/js/file-manager.js')

    <script>
        // Attach functionality to all upload containers
        document.querySelectorAll('.upload-container').forEach(container => {
            const fileInput = container.querySelector('.file-upload');
            const fileNameDisplay = container.querySelector('.file-name');
            const uploadLabel = container.querySelector('.upload-label');

            // Trigger file input when clicking the label
            uploadLabel.addEventListener('click', () => fileInput.click());

            // Update file name display when a file is selected
            fileInput.addEventListener('change', () => {
                fileNameDisplay.textContent = fileInput.files[0]?.name || 'No file selected';
            });
        });
    </script>

    <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Gallery JS -->
    <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>

    <!-- Internal Ecommerce Product Details -->
    @vite('resources/assets/js/ecommerce-product-details.js')

@endsection
