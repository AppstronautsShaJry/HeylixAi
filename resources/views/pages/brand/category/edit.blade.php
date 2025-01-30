@extends('layouts.master')

@section('styles')
    <!-- filepond CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/filepond/filepond.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/libs/prismjs/themes/prism-coy.min.css') }}">
@endsection

@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">
            <!-- Start::page-header -->
            <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="/">Dashboards</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Brand Category</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="box p-5 w-full space-y-10">
            <h1 class="text-xl font-semibold mb-4">Edit Brand Category</h1>

            @if ($errors->any())
                <div class="text-red-500 mb-4">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('brand_categories.update', $brandCategory) }}" method="POST"
                  enctype="multipart/form-data" class="">
                @csrf
                @method('PUT')
                    <!-- Brand Category Name -->
                    <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12 my-5">
                        <label for="input-placeholder" class="ti-form-label">Brand Category</label>
                        <input type="text" name="name" value="{{ old('name', $brandCategory->name) }}"
                               class="form-control" id="input-placeholder" placeholder="Enter Category Name" required>
                    </div>

                    <!-- Brand Description -->
                    <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12 my-5">
                        <label for="nft-description" class="ti-form-label">Brand Description</label>
                        <textarea class="form-control" name="description" id="nft-description" rows="3"
                                  placeholder="Enter Description">{{ old('description', $brandCategory->description) }}</textarea>
                    </div>

                    <!-- Image Upload -->
                    <div class="col-span-12 lg:col-span-12 my-5">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Upload Category Image</h5>
                            </div>
                            <div class="box-body">
                                @if ($brandCategory->image)
                                    <div class="mb-3">
                                        <img src="{{ asset('storage/' . $brandCategory->image) }}" alt="Current Image"
                                             class="w-32 h-32 object-cover mb-3">
                                        <p>Current Image</p>
                                    </div>
                                @endif
                                <input type="file" name="image" class="filepond basic-filepond"
                                       data-allow-reorder="true" data-max-file-size="3MB" data-max-files="1">
                            </div>
                        </div>
                    </div>

                    <!-- Active Checkbox -->


                <!-- Form Buttons -->
                <div class="box-body w-full flex flex-row justify-between gap-x-3 items-center">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" role="switch"
                               id="switch-primary" {{ old('is_active', $brandCategory->is_active) ? 'checked' : '' }}="">
                        <label class="form-check-label" for="switch-primary">Active</label>
                    </div>
{{--                    <div class="">--}}
{{--                        <label class="flex items-center">--}}
{{--                            <input type="checkbox" name="is_active"--}}
{{--                                   class="mr-2" >--}}
{{--                            <span class="text-gray-700">Active</span>--}}
{{--                        </label>--}}
{{--                    </div>--}}
                    <div>
                    <button type="submit" class="ti-btn ti-btn-primary-gradient btn-wave">Save Changes</button>
                    <a href="{{ route('brand_categories.index') }}" class="ti-btn ti-btn-danger-gradient btn-wave">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

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
