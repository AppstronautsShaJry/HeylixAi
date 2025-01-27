@section('styles')
    <!-- filepond CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/filepond/filepond.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">
@endsection
<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <nav>
                    <ol class="breadcrumb mb-1">
                        {{--                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>--}}
                        <li class="breadcrumb-item"><a href="javascript:void(0);">HeyLix</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Brand</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->

        <div x-data="{ currentPage: window.location.pathname }" class="p-2 py-6 flex items-center font-medium">
            <div
                :class="currentPage === '/jobstatus-heylix' ? 'bg-[#FF5D9F]  rounded-l-sm text-white ' : 'hover:text-gray-400 dark:text-gray-400  rounded-md '"
                class="max-w-max py-3 px-2 group">
                <a href="/jobstatus-heylix" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    JobStatus
                </a>
            </div>
            <!-- Twitter Tab -->
            <div
                :class="currentPage === '/create-heylix' ? 'bg-[#FF5D9F] text-white' : 'hover:text-gray-400 dark:text-gray-400  rounded-md'"
                class="max-w-max py-3 px-2 group">
                <a href="/create-heylix" class="text-sm inline-flex items-center gap-x-3 dark:hover:text-white">
                    Content Creation
                </a>
            </div>
            <div
                :class="currentPage === '/brand-heylix' ? 'bg-[#FF5D9F] text-white ' : ' hover:text-gray-400 dark:text-gray-400  rounded-md '"
                class="max-w-max py-3 px-2 group">
                <a href="/brand-heylix" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    Branding
                </a>
            </div>
            <div
                :class="currentPage === '/virtual-heylix' ? 'bg-[#FF5D9F]  rounded-r-sm text-white ' : ' hover:text-gray-400 dark:text-gray-400  rounded-md '"
                class="max-w-max py-3 px-2 group">
                <a href="/virtual-heylix" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    Virtual Staff
                </a>
            </div>
        </div>

        <div x-data="{ selectedContent: 'Logo Design' }" class="grid grid-cols-12 sm:gap-x-6">
            <div class="xxl:col-span-9 xl:col-span-8 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="text-xl font-medium">Branding Services</div>
                    </div>
                    <div class="box-body">

                        <div class="grid grid-cols-12 sm:gap-x-6 gap-5 justify-between">
                            <div class="xxl:col-span-6 xl:col-span-12 col-span-12">
                                <div class="grid grid-cols-12 sm:gap-x-6 gap-y-6">
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="input-placeholder" class="form-label">Content Title</label>
                                        <input type="text" class="form-control" id="input-placeholder"
                                               placeholder="Title">
                                    </div>
                                    {{--                                    <div class="xl:col-span-12 col-span-12">--}}
                                    {{--                                        <label for="input-placeholder" class="form-label">Type of Content</label>--}}
                                    {{--                                        <x-input.single-select>--}}
                                    {{--                                            <option value="Logo Design">Logo Design</option>--}}
                                    {{--                                            <option value="Business Card">Business Card</option>--}}
                                    {{--                                            <option value="Brochure">Brochure</option>--}}
                                    {{--                                            <option value="Others">Others</option>--}}
                                    {{--                                        </x-input.single-select>--}}
                                    {{--                                    </div>--}}

                                    <div
                                        class="xl:col-span-12 col-span-12 space-y-5">
                                        <!-- Select Dropdown -->
                                        <div class="xl:col-span-12 col-span-12">
                                            <label for="content-type" class="form-label">Type of Content</label>
                                            <select id="content-type" x-model="selectedContent" class="form-select">
                                                <option value="Logo Design">Logo Design</option>
                                                <option value="Business Card">Business Card</option>
                                                <option value="Brochure">Brochure</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>


                                        <!-- Conditionally Render Content -->

                                        <div class="col-span-12 ">
                                            <label for="nft-link" class="form-label">Select Type</label>

                                            <div x-show="selectedContent === 'Logo Design'">
                                                <div class="flex gap-x-2">
                                                    <div class="form-check flex items-center gap-x-2">
                                                        <input class="form-check-input" type="radio"
                                                               name="flexRadioDefault"
                                                               id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Standard
                                                        </label>
                                                    </div>

                                                    <div class="form-check flex items-center gap-x-2">
                                                        <input class="form-check-input dark:border-gray-500"
                                                               type="radio"
                                                               name="flexRadioDefault"
                                                               id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Premium
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div x-show="selectedContent === 'Business Card'">
                                                <div class="flex gap-x-2">
                                                    <div class="form-check flex items-center gap-x-2">
                                                        <input class="form-check-input" type="radio"
                                                               name="flexRadioDefault"
                                                               id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            One Sided
                                                        </label>
                                                    </div>

                                                    <div class="form-check flex items-center gap-x-2">
                                                        <input class="form-check-input dark:border-gray-500"
                                                               type="radio"
                                                               name="flexRadioDefault"
                                                               id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Two Sided
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div x-show="selectedContent === 'Brochure'">
                                                <div class="flex gap-x-2">
                                                    <div class="form-check flex items-center gap-x-2">
                                                        <input class="form-check-input" type="radio"
                                                               name="flexRadioDefault"
                                                               id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            2-fold
                                                        </label>
                                                    </div>

                                                    <div class="form-check flex items-center gap-x-2">
                                                        <input class="form-check-input dark:border-gray-500"
                                                               type="radio"
                                                               name="flexRadioDefault"
                                                               id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            3-fold
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div x-show="selectedContent === 'Others'">
                                                <div class="form-check flex items-center gap-x-2">
                                                    <input class="form-check-input" type="radio"
                                                           name="flexRadioDefault"
                                                           id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Add text section to enter
                                                    </label>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="upload-container col-span-12 rounded-md ">
                                        <label class="form-label">Reference Files</label>
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

                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="nft-link" class="form-label">Reference Url</label>
                                        <input type="text" class="form-control" id="nft-link"
                                               placeholder="External Link Here">
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="nft-link" class="form-label">Phone No</label>
                                        <input type="text" class="form-control" id="nft-link"
                                               placeholder="Enter Address">
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-12 col-span-12">
                                <label for="nft-description" class="form-label">Instructions</label>
                                <textarea class="form-control" id="nft-description" rows="3"
                                          placeholder="Enter Description"></textarea>
                            </div>


                        </div>
                    </div>
                    <div class="box-footer text-center flex items-center gap-x-5">
                        <button type="button" class="ti-btn ti-btn-info-gradient btn-wave ">Post Job</button>
                        <span class="inline-flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24"
                                                                    style="fill: white;transform: ;msFilter:;"><path
                                    d="M12 5C7.031 5 2 6.546 2 9.5S7.031 14 12 14c4.97 0 10-1.546 10-4.5S16.97 5 12 5zm-5 9.938v3c1.237.299 2.605.482 4 .541v-3a21.166 21.166 0 0 1-4-.541zm6 .54v3a20.994 20.994 0 0 0 4-.541v-3a20.994 20.994 0 0 1-4 .541zm6-1.181v3c1.801-.755 3-1.857 3-3.297v-3c0 1.44-1.199 2.542-3 3.297zm-14 3v-3C3.2 13.542 2 12.439 2 11v3c0 1.439 1.2 2.542 3 3.297z"></path></svg><span>12</span></span>
                    </div>
                </div>
            </div>

            <div
                class="w-full xxl:col-span-3 sm:col-span-4 col-span-12 gap-y-8 flex flex-col justify-start items-center ">

                <div x-show="selectedContent === 'Logo Design'" class="w-full">
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

                <div x-show="selectedContent === 'Business Card'" class="w-full">
                    <div class="box">
                        <div class="box-body">
                            <div class="filemanager-upgrade-storage w-full text-center ">
                                        <span class="block mb-3 pb-1 bg-primarytint1color/10 rounded-2"> <img
                                                src="{{asset('build/assets/images/media/file-manager/2.png')}}" alt=""
                                                class="!inline-flex">
                                        </span>
                                <span
                                    class="text-[1rem] font-semibold text-defaulttextcolor">One sided and Two sided</span>
                                <span
                                    class="block text-[1rem] font-semibold  text-gray-800 dark:text-textmuted/50 mt-2 text-start">Notice</span>
                                <span class="block text-textmuted dark:text-textmuted/50 mt-2 text-start">With supporting text below as a natural</span>
                                <span class="block text-textmuted dark:text-textmuted/50 mt-2 text-start">With supporting text below as a natural</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div x-show="selectedContent === 'Brochure'" class="w-full">
                    <div class="box">
                        <div class="box-body">
                            <div class="filemanager-upgrade-storage w-full text-center ">
                                        <span class="block mb-3 pb-1 bg-primarytint1color/10 rounded-2"> <img
                                                src="{{asset('build/assets/images/media/file-manager/2.png')}}" alt=""
                                                class="!inline-flex">
                                        </span>
                                <span class="text-[1rem] font-semibold text-defaulttextcolor">2-fold 3-fold</span>
                                <span
                                    class="block text-[1rem] font-semibold  text-gray-800 dark:text-textmuted/50 mt-2 text-start">Notice</span>
                                <span class="block text-textmuted dark:text-textmuted/50 mt-2 text-start">With supporting text below as a natural</span>
                                <span class="block text-textmuted dark:text-textmuted/50 mt-2 text-start">With supporting text below as a natural</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div x-show="selectedContent === 'Others'" class="w-full">
                    <div class="box">
                        <div class="box-body">
                            <div class="filemanager-upgrade-storage w-full text-center ">
                                        <span class="block mb-3 pb-1 bg-primarytint1color/10 rounded-2"> <img
                                                src="{{asset('build/assets/images/media/file-manager/2.png')}}" alt=""
                                                class="!inline-flex">
                                        </span>
                                <span class="text-[1rem] font-semibold text-defaulttextcolor">Others</span>
                                {{--                                <span class="text-[1rem] font-semibold text-defaulttextcolor text-start">Notice</span>--}}
                                <span
                                    class="block text-[1rem] font-semibold text-gray-800 dark:text-textmuted/50 mt-2 text-start">Notice</span>
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


@section('scripts')

    <!-- Moment JS -->
    <script src="{{asset('build/assets/libs/moment/moment.js')}}"></script>
    <script src="{{asset('build/assets/libs/filepond/filepond.min.js')}}"></script>
    <script
        src="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')}}"></script>
    <script
        src="{{asset('build/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')}}"></script>
    <script
        src="{{asset('build/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')}}"></script>
    <script
        src="{{asset('build/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js')}}"></script>
    <script
        src="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js')}}"></script>
    <script
        src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
    <script
        src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
    <script
        src="{{asset('build/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js')}}"></script>
    <script
        src="{{asset('build/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js')}}"></script>
    <script
        src="{{asset('build/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js')}}"></script>

    <!-- Create NFT JS -->
    @vite('resources/assets/js/nft-create.js')
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data('buttonHandler', () => ({
                currentPage: window.location.pathname,

                isActive(href) {
                    return this.currentPage === href;
                }
            }));
        });
    </script>

@endsection
