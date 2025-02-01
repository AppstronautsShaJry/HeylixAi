@extends('layouts.master')
@section('styles')
    <!-- filepond CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/filepond/filepond.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">
    <!-- Filepond CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/filepond/filepond.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/libs/dropzone/dropzone.css')}}">
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection
@section('content')
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
        <div class="box p-5 w-full">
            <h1 class="text-xl font-semibold mb-4">Add Brand Category</h1>
            @if ($errors->any())
                <div class="text-red-500">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{ route('brand_categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <label for="input-placeholder" class="ti-form-label">Brand Category</label>
                    <input type="text" name="name" class="form-control" id="input-placeholder"
                          value="{{old('name')}}" placeholder="Enter Category">
                </div>

                <div class="xl:col-span-12 col-span-12">
                    <label for="nft-description" class="form-label">Brand Description</label>
                    <textarea class="form-control" name="description" id="nft-description" rows="3"
                              placeholder="Enter Description">{{old('description')}}</textarea>
                </div>
                <div class="col-span-12 lg:col-span-12">
                    <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Single File Upload</h5>
                        </div>
                        <div class="box-body">
                            <input type="file" name="image" class="filepond basic-filepond"
                                   data-allow-reorder="true"
                                   data-max-file-size="3MB"
                                   data-max-files="1">
                        </div>
                    </div>
                </div>
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" role="switch"
                           id="switch-primary" name="is_active" checked {{ old('is_active') ?? 'checked' }}>
                    <label class="form-check-label" for="switch-primary">Status</label>
                </div>
{{--                <div class="mb-4">--}}
{{--                    <label class="flex items-center">--}}
{{--                        <input type="checkbox" >--}}
{{--                        <span class="text-gray-700">Active</span>--}}
{{--                    </label>--}}
{{--                </div>--}}
                <div class="box-body w-full flex flex-row justify-end gap-x-3 items-center">
                <button type="submit" class="ti-btn ti-btn-primary-gradient btn-wave ">Save</button>
                <a href="{{ route('brand_categories.index') }}" class="ti-btn ti-btn-danger-gradient btn-wave ">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>
    <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
    @vite('resources/assets/js/prism-custom.js')
    <!-- Filepond JS -->
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
    <!-- Dropzone JS -->
    <script src="{{asset('build/assets/libs/dropzone/dropzone-min.js')}}"></script>

    <!-- Prism JS -->
    <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
    @vite('resources/assets/js/prism-custom.js')
    <!-- Fileupload JS -->
    @vite('resources/assets/js/fileupload.js')
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
        // Initialize FilePond
        FilePond.create(document.querySelector('.filepond'), {
            allowImagePreview: true,
            imagePreviewHeight: 150,
            allowMultiple: false,
            acceptedFileTypes: ['image/*'],
            storeAsFile: true, // Ensures it's sent as a normal file input
        });
    </script>
@endsection
