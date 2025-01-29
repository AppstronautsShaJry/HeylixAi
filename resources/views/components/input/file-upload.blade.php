@section('styles')

    <!-- Filepond CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.snow.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.bubble.css')}}">

    <!-- Filepond CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/filepond/filepond.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">

@endsection

<div class="xl:col-span-12 col-span-12 product-documents-container">
    <p class="font-medium mb-2 text-[14px]">Product Images :</p>
    <input {{$attributes}} type="file" class="product-Images" name="filepond" multiple data-allow-reorder="true"
           data-max-file-size="3MB" data-max-files="6">
    <label class="form-label font-normal mt-3 text-textmuted dark:text-textmuted/50 text-xs">* Minimum of 6 images are
        need to be uploaded, all images should be uniformly maintained, width and height to the container. </label>
</div>

@section('scripts')

    <!-- Quill Editor JS -->
    <script src="{{asset('build/assets/libs/quill/quill.js')}}"></script>

    <!-- Filepond JS -->
    <script src="{{asset('build/assets/libs/filepond/filepond.min.js')}}"></script>
    <script
        src="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')}}"></script>
    <script
        src="{{asset('build/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')}}"></script>
    <script
        src="{{asset('build/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')}}"></script>
    <script
        src="{{asset('build/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js')}}"></script>
    <script src="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js')}}"></script>
    <script
        src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
    <script
        src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
    <script src="{{asset('build/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js')}}"></script>
    <script
        src="{{asset('build/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js')}}"></script>
    <script
        src="{{asset('build/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js')}}"></script>

    <!-- Internal Add Products JS -->
    @vite('resources/assets/js/edit-products.js')

@endsection
