
@section('styles')
    <!-- filepond CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/filepond/filepond.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">
@endsection

    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">
            <!-- Start::page-header -->
            <div class="container-fluid">
                <!-- Start::page-header -->
                <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                    <div>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="/">
                                    Dashboards
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Create Brands</li>
                        </ol>
                    </div>
                    <div class="flex gap-2 flex-wrap">
                    </div>
                </div>
            </div>
        </div>
        <div class="box-tab p-5 flex justify-start items-center gap-x-2 my-10" x-data="buttonHandler">
            <!-- Create Button -->
            <a href="/create-brand"
               class="dynamic-button"
               :class="isActive('/create-brand') ? 'current-button' : ''">
                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                    <button type="button"
                            class="hs-tooltip-toggle ti-btn btn-wave"
                            :class="isActive('/create-brand') ? 'ti-btn-primary' : 'ti-btn-light'">
                        Create
                        <span
                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2"
                            :class="isActive('/create-brand') ? '!bg-primary !text-white' : '!bg-light !text-defaulttextcolor'"
                            role="tooltip">
                    Create Your Brand
                </span>
                    </button>
                </div>
            </a>
            <!-- Manage Button -->
            <a href="/manage-brand"
               class="dynamic-button"
               :class="isActive('/manage-brand') ? 'current-button' : ''">
                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                    <button type="button"
                            class="hs-tooltip-toggle ti-btn btn-wave"
                            :class="isActive('/manage-brand') ? 'ti-btn-primary' : 'ti-btn-light'">
                        Manage
                        <span
                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2"
                            :class="isActive('/manage-brand') ? '!bg-primary !text-white' : '!bg-light !text-defaulttextcolor'"
                            role="tooltip">
                    Manage Your Brand
                </span>
                    </button>
                </div>
            </a>
        </div>
        <!-- End::page-header -->
        <!-- Start::row-1 -->
        <div class="grid grid-cols-12 sm:gap-x-6">
            <div class="xxl:col-span-9 xl:col-span-8 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="text-xl font-medium">Add Your Brand</div>
                    </div>
                    <div class="box-body">
                        <div class="grid grid-cols-12 sm:gap-x-6 gap-5 justify-between">
                            <div class="xxl:col-span-6 xl:col-span-12 col-span-12">
                                <div class="grid grid-cols-12 sm:gap-x-6 gap-y-6">
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="input-placeholder" class="form-label">Brand Name</label>
                                        <input type="text" class="form-control" id="input-placeholder"
                                               placeholder="eg:Abstract Digital Art">
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="input-placeholder" class="form-label">Branding Category</label>
                                        <x-input.single-select>
                                            <option value="AI">AI</option>
                                            <option value="Technology">Technology</option>
                                            <option value="Business">Business</option>
                                        </x-input.single-select>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="nft-link" class="form-label">Website Url</label>
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
                            <div class="xxl:col-span-6 xl:col-span-12 col-span-12">
                                <label class="form-label">Upload Your Logo</label>
                                <div class="create-nft-item bg-light py-3 rounded">
                                    <input type="file" class="single-fileupload" name="filepond"
                                           accept="image/png, image/jpeg, image/gif">
                                </div>
                            </div>
                            <div class="xl:col-span-12 col-span-12">
                                <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3">
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="nft-description" class="form-label">Brand Description</label>
                                        <textarea class="form-control" id="nft-description" rows="3"
                                                  placeholder="Enter Description"></textarea>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="nft-description" class="form-label">Address</label>
                                        <textarea class="form-control" id="nft-description" rows="3"
                                                  placeholder="Enter Description"></textarea>
                                    </div>
                                    <div class="xl:col-span-3 col-span-12">
                                        <label for="nft-price" class="form-label">City</label>
                                        <input type="text" class="form-control" id="nft-price"
                                               placeholder="Enter Price">
                                    </div>
                                    <div class="xl:col-span-3 col-span-12">
                                        <label for="nft-price" class="form-label">State</label>
                                        <input type="text" class="form-control" id="nft-price"
                                               placeholder="Enter Price">
                                    </div>
                                    <div class="xl:col-span-3 col-span-12">
                                        <label for="nft-price" class="form-label">Pincode</label>
                                        <input type="text" class="form-control" id="nft-price"
                                               placeholder="Enter Price">
                                    </div>
                                    <div class="xl:col-span-3 col-span-12">
                                        <label for="nft-price" class="form-label">Country</label>
                                        <input type="text" class="form-control" id="nft-price"
                                               placeholder="Enter Price">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer text-end">
                        <button type="button" class="ti-btn ti-btn-info-gradient btn-wave ">Save Brand</button>
                    </div>
                </div>
            </div>
            <div
                class="w-full xxl:col-span-3 sm:col-span-4 col-span-12 gap-y-8 flex flex-col justify-start items-center">
                <div class="">
                    <div class="">
                        <div class="relative overflow-hidden rounded ">
                            <img src="{{asset('images/partials/img1.jpg')}}"
                                 class="w-[280px] h-[260px] mb-3 rounded-md"
                                 alt="...">
                        </div>
                        <div>
                        </div>
                        <div class="grid">
                            <button type="button" class="ti-btn ti-btn-purple-gradient btn-wave ">Send Job</button>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="">
                        <div class="relative overflow-hidden rounded ">
                            <img src="{{asset('images/partials/img1.jpg')}}"
                                 class="w-[280px] h-[260px] mb-3 rounded-md"
                                 alt="...">
                        </div>
                        <div>
                        </div>
                        <div class="grid">
                            <button type="button" class="ti-btn ti-btn-purple-gradient btn-wave ">Send Job</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@section('scripts')
    <script src="{{asset('build/assets/libs/filepond/filepond.min.js')}}"></script>
    <script src="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')}}"></script>
    <script src="{{asset('build/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')}}"></script>
    <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')}}"></script>
    <script src="{{asset('build/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js')}}"></script>
    <script src="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js')}}"></script>
    <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
    <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
    <script src="{{asset('build/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js')}}"></script>
    <script src="{{asset('build/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js')}}"></script>
    <script src="{{asset('build/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js')}}"></script>
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




