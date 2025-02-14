
<div>
    <x-form.layout>
        <x-breadcrumb.nav>
            <x-breadcrumb.list list="Dashboard" route="dashboard" />
            <x-breadcrumb.list list="Website" route="web-website" />
        </x-breadcrumb.nav>

        <x-tabs.url-tab>
{{--            <x-tabs.url-content />--}}
            <x-tabs.url-content label="Website" url="/web-website" />
            <x-tabs.url-content label="App" url="/web-app" rounded="rounded-r-sm"/>
        </x-tabs.url-tab>

        <x-form.body>
            <x-form.col1>
                <x-input.multiple-file-upload label="File Upload"/>
            </x-form.col1>
            <x-form.col2>

            </x-form.col2>
        </x-form.body>

    </x-form.layout>
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
