@section('styles')
    <!-- filepond CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/filepond/filepond.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/libs/prismjs/themes/prism-coy.min.css') }}">

    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
          rel="stylesheet">
@endsection
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

        <x-tabs.url-tab class="gap-4">
            <x-tabs.url-content label="All" url="/filemanager-index" rounded="rounded-l-md"/>
            <x-tabs.url-content label="Upload" url="/filemanager-upload" rounded="rounded-0"/>
            <x-tabs.url-content label="AI Generate" url="/filemanager-generate" rounded="rounded-0"/>
            <x-tabs.url-content label="Active Ads" url="/filemanager-heylix" rounded="rounded-r-md" class=""/>
        </x-tabs.url-tab>

        <div class="grid grid-cols-12 gap-x-6">
            <div class="xl:col-span-12 col-span-12">
                <div class="box">
                    <div class="flex flex-row w-full gap-3">
                        <div class="grid grid-cols-12 gap-x-6 w-8/12">
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box-header justify-end">
                                    <div class="flex flex-wrap gap-2">
                                        <div class="ti-dropdown hs-dropdown">
                                            <a href="javascript:void(0);" class="ti-btn bg-light ti-btn-sm btn-wave"
                                               data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i
                                                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Newest</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Date
                                                        Added</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">A - Z</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="table-responsive border border-defaultborder dark:border-defaultborder/10 border-b-0">

                                    <table class="ti-custom-table ti-custom-table-head ti-custom-table-hover">
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
                                        @foreach($assets as $asset)
                                            <tr
                                                class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                <th scope="row">
                                                    <div class="flex items-center gap-x-2">
                                                        <div>
                                                            @if($asset->thumbnail_path)
                                                                <img
                                                                    src="{{ asset('storage/' . $asset->thumbnail_path) }}"
                                                                    class="w-5 h-4 rounded-sm"
                                                                    alt="...">
                                                            @else
                                                                <img src=""
                                                                     class="w-5 h-4 rounded-sm"
                                                                     alt="...">
                                                            @endif

                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);"
                                                               data-hs-overlay="#offcanvasRight">{{ $asset->file_name }}</a>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td>{{ number_format($asset->file_size / 1024, 2) }} KB</td>
                                                <td>{{ $asset->updated_at->format('Y-m-d H:i:s') }}</td>
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
                                                        <button wire:click="deleteAsset({{ $asset->id }})"
                                                                onclick="confirm('Are you sure you want to delete this asset?') || event.stopImmediatePropagation()"
                                                                class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary3">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </button>
                                                    </div>
                                                    <!-- Hidden Iframe Container -->
                                                    <div id="youtube-video" style="display: none;">
                                                        <iframe width="100%" height="100%"
                                                                src="https://youtu.be/Yq0QkCxoTHM?si=kUN94C3CDwPiAkDh"
                                                                title="YouTube video player" frameborder="0"
                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                                allowfullscreen>
                                                        </iframe>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
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
                                                            type="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </button>
                                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                            <li><a class="ti-dropdown-item"
                                                                   href="javascript:void(0);">Share</a>
                                                            </li>
                                                            <li><a class="ti-dropdown-item"
                                                                   href="javascript:void(0);">Copy</a>
                                                            </li>
                                                            <li><a class="ti-dropdown-item"
                                                                   href="javascript:void(0);">Move</a>
                                                            </li>
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
                                                        <svg class="w-2.5 h-2.5" width="8" height="8" viewBox="0 0 8 8"
                                                             fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- upload section -->
                            <div class="col-span-12 lg:col-span-12 my-5">
                                <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Upload Files</h5>
                                    </div>
                                    <div class="box-body">
                                        <input type="file" name="file" class="filepond basic-filepond"
                                               data-allow-reorder="true"
                                               data-max-file-size="3MB"
                                               data-max-files="1" wire:model="file">
                                    </div>
                                    <button type="submit" wire:click="uploadFile" class="max-w-max mx-5 self-end p-2 bg-primary text-white rounded-md">Upload</button>

                                </div>
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
                                                <p class="mb-0"><span class="font-bold text-[14px]">68.12GB</span> Used
                                                </p>
                                                <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0">
                                                    21.35GB
                                                    free space</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="file-manager-storage"></div>
                                </div>
                                <div class="box-footer p-0">
                                    <div class="mb-0 w-full flex justify-between items-center px-4">
                                        <div>
                                            <span
                                                class="text-xs text-textmuted dark:text-textmuted/50">Storage Details</span>
                                        </div>
                                        <div>
                                            <button type="button" class="ti-btn ti-btn-primary btn-wave ">Upgrade
                                            </button>
                                        </div>
                                    </div>
                                    <ul class="ti-list-group list-group-flush !border-0">

                                        <li class="ti-list-group-item">
                                            <div class="flex items-center gap-4">
                                                <div class="main-card-icon primary">
                                                    <div
                                                        class="avatar avatar-lg bg-primary/10 border border-primary/10">
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
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2"
                                                             stroke-linecap="round" stroke-linejoin="round"
                                                             class="feather feather-video !text-primarytint1color">
                                                            <polygon points="23 7 16 12 23 17 23 7"></polygon>
                                                            <rect x="1" y="5" width="15" height="14" rx="2"
                                                                  ry="2"></rect>
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
                                                 role="progressbar" aria-valuenow="86" aria-valuemin="0"
                                                 aria-valuemax="100">
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
        </div>

    </div>
</div>

@section('scripts')
    <script src="{{ asset('build/assets/libs/filepond/filepond.min.js') }}"></script>
    <script
        src="{{ asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}"></script>
    <script
        src="{{ asset('build/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') }}"></script>
    <script
        src="{{ asset('build/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') }}"></script>
    <script
        src="{{ asset('build/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js') }}"></script>
    <script
        src="{{ asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js') }}"></script>
    <script
        src="{{ asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js') }}"></script>
    <script
        src="{{ asset('build/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js') }}"></script>
    <script
        src="{{ asset('build/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js') }}"></script>
    <script
        src="{{ asset('build/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js') }}"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>

    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data('buttonHandler', () => ({
                currentPage: window.location.pathname,

                isActive(href) {
                    return this.currentPage === href;
                }
            }));
        });

        FilePond.registerPlugin(FilePondPluginImagePreview);
        const pond = FilePond.create(document.querySelector('.filepond'), {
            allowImagePreview: true,
            imagePreviewHeight: 150,
            allowMultiple: false,
            acceptedFileTypes: ['image/*'],
            storeAsFile: true, // Makes FilePond act as a normal file input
            files: [
                    @if(isset($brandCategory->image))
                {
                    source: "{{ asset('storage/' . $brandCategory->image) }}",
                    options: {
                        type: 'local'
                    }
                }
                @endif
            ]
        });
    </script>
@endsection
