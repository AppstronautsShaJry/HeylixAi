@extends('layouts.master')

@section('styles')
    <!-- Prism CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">
    <!-- Filepond CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/filepond/filepond.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/libs/dropzone/dropzone.css')}}">
@endsection


<div class="col-span-12 lg:col-span-12">
    <div class="box">
        <div class="box-header">
            <h5 class="box-title">Multiple File Upload</h5>
        </div>
        <div class="box-body">
            <input type="file" action="https://httpbin.org/post" class="filepond multiple-filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="5">
        </div>
    </div>
</div>

@section('scripts')

    <!-- Prism JS -->
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

    <!-- Fileupload JS -->
    @vite('resources/assets/js/fileupload.js')


@endsection
