@extends('layouts.master')

@section('styles')
    <!-- filepond CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/filepond/filepond.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">
@endsection

@section('content')
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
                            <li class="breadcrumb-item active" aria-current="page">Edit Brands</li>
                        </ol>
                    </div>
                    <div class="flex gap-2 flex-wrap">
                    </div>
                </div>
            </div>
        </div>

        <!-- End::page-header -->

        <!-- Start::row-1 -->
        <div class="grid grid-cols-12 sm:gap-x-6">
            <div class="xxl:col-span-9 col-xl-8 col-span-12">
                <div class="box">

                    <div class="box-body">
                        <nav class="flex space-x-2 rtl:space-x-reverse" aria-label="Tabs" role="tablist">
                            <button type="button" class="hs-tab-active:bg-[#FF5D9F] hs-tab-active:text-white py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm font-medium text-center text-defaulttextcolor rounded-sm hover:text-primary  dark:text-[#8c9097] dark:text-white/50 dark:hover:text-white active" id="pills-with-brand-color-item-1" data-hs-tab="#pills-with-brand-color-1" aria-controls="pills-with-brand-color-1">
                                Tab 1
                            </button>
                            <button type="button" class="hs-tab-active:bg-[#FF5D9F] hs-tab-active:text-white py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm font-medium text-center text-defaulttextcolor rounded-sm hover:text-primary  dark:text-[#8c9097] dark:text-white/50 dark:hover:text-white" id="pills-with-brand-color-item-2" data-hs-tab="#pills-with-brand-color-2" aria-controls="pills-with-brand-color-2">
                                Tab 2
                            </button>
                        </nav>

                        <div class="mt-3">

                            <div id="pills-with-brand-color-1" role="tabpanel" aria-labelledby="pills-with-brand-color-item-1 ">
                                <div class="">

                                    <div class="pt-4 px-4">
                                        <span class="font-medium text-[15px] block mb-3"><span class="me-1"></span>About Brand</span>
                                    </div>
                                    <ul class="ti-list-group list-group-flush border rounded-3">
                                        <li class="ti-list-group-item p-4">
                                            <p class="text-textmuted dark:text-textmuted mb-2 text-xl font-medium">
                                                Loius Vuitton
                                            </p>
                                            <p class="text-textmuted dark:text-textmuted/50 mb-0">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut culpa ducimus fuga harum inventore, laborum natus nobis omnis quaerat recusandae reiciendis saepe ullam unde!
                                            </p>
                                        </li>
                                        <li class="ti-list-group-item p-4">
                                            <span class="font-medium text-[15px] block mb-3">Contact Info :</span>
                                            <div class="text-textmuted dark:text-textmuted/50">
                                                <p class="mb-3">
                                                                            <span class="avatar avatar-sm avatar-rounded !text-primarytint1color p-1 bg-primarytint1color/10 me-2">
                                                                                <i class="ri-map-pin-line align-middle text-[15px]"></i>
                                                                            </span>
                                                    <span class="font-medium text-defaulttextcolor">Website : </span> www.yourwebsite.com
                                                </p>
                                                <p class="mb-3">
                                                                            <span class="avatar avatar-sm avatar-rounded !text-primarytint2color p-1 bg-primarytint2color/10 me-2">
                                                                                <i class="ri-building-line align-middle text-[15px]"></i>
                                                                            </span>
                                                    <span class="font-medium text-defaulttextcolor">Location : </span> City, Country
                                                </p>
                                                <p class="mb-0">
                                                                            <span class="avatar avatar-sm avatar-rounded !text-primarytint3color p-1 bg-primarytint3color/10 me-2">
                                                                                <i class="ri-phone-line align-middle text-[15px]"></i>
                                                                            </span>
                                                    <span class="font-medium text-defaulttextcolor">Phone : </span> +1 (222) 111 - 57840
                                                </p>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item p-4">
                                            <span class="font-medium text-[15px] block mb-3">Category :</span>
                                            <div class="w-75">
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Fashion</span>
                                                </a>

                                            </div>
                                        </li>
                                        <li class="ti-list-group-item p-4">
                                            <span class="font-medium text-[15px] block mb-3">Social Media :</span>
                                            <div class="grid grid-cols-2  gap-5">
                                                <div class="flex items-center gap-4 me-2 flex-wrap">
                                                    <div>
                                                        <span class="avatar avatar-md bg-primary"><i class="ri-facebook-line text-[1rem]"></i></span>
                                                    </div>
                                                    <div>
                                                        <span class="block font-medium text-primay">Github</span>
                                                        <span class="text-textmuted dark:text-textmuted/50 font-medium">facebook.com/louisvuitton</span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap-4 me-2 flex-wrap">
                                                    <div>
                                                        <span class="avatar avatar-md bg-primarytint1color"><i class="ri-instagram-line text-[1rem]"></i></span>
                                                    </div>
                                                    <div>
                                                        <span class="block font-medium text-primay1">Twitter</span>
                                                        <span class="text-textmuted dark:text-textmuted/50 font-medium">instagram.com/louisvuitton.me</span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap-4 me-2 flex-wrap">
                                                    <div>
                                                        <span class="avatar avatar-md bg-primarytint1color"><i class="ri-twitter-x-line text-[1rem]"></i></span>
                                                    </div>
                                                    <div>
                                                        <span class="block font-medium text-primay1">Twitter</span>
                                                        <span class="text-textmuted dark:text-textmuted/50 font-medium">twitter.com/louisvuitton.me</span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap-4 me-2 flex-wrap">
                                                    <div>
                                                        <span class="avatar avatar-md bg-primarytint2color"><i class="ri-linkedin-line text-[1rem]"></i></span>
                                                    </div>
                                                    <div>
                                                        <span class="block font-medium text-primay2">Linkedin</span>
                                                        <span class="text-textmuted dark:text-textmuted/50 font-medium">linkedin.com/in/louisvuitton</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="pills-with-brand-color-2" class="hidden" role="tabpanel" aria-labelledby="pills-with-brand-color-item-2 ">
                                <div class="box-header">
                                    <h5 class="box-title pb-2">Update Your Brand</h5>
                                </div>
                                <div class="border dark:border-white/10 border-gray-200 p-5 rounded-lg">

                                    <div class="box-body">

                                        <div class="grid grid-cols-12 sm:gap-x-6 gap-5 justify-between">

                                            <div class="xxl:col-span-6 sm:col-span-8 col-span-12">
                                                <div class="grid grid-cols-12 sm:gap-x-6 gap-y-6">
                                                    <div class="xl:col-span-12 col-span-12">
                                                        <label for="input-placeholder" class="form-label">Brand Name</label>
                                                        <input type="text" class="form-control" id="input-placeholder"
                                                               placeholder="eg:Abstract Digital Art">
                                                    </div>
                                                    <div class="xl:col-span-12 col-span-12">
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
                                    <div class="box-footer text-center">
                                        <a href="/manage-brand">
                                            <button type="button" class="ti-btn ti-btn-purple-gradient btn-wave ">Save Changes</button>
                                        </a>
                                        <a href="/manage-brand">
                                            <button type="button" class="ti-btn ti-btn-danger-gradient btn-wave ">Cancel</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
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

@endsection

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




