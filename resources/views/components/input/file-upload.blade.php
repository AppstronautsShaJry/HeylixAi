
@section('styles')
    {{--    <!-- Tom Select Css -->--}}
    {{--    <link rel="stylesheet" href="{{asset('build/assets/libs/tom-select/css/tom-select.default.min.css')}}">--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
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

@props([
    'label' => 'Add Image',
])

<div class="col-span-12 flex flex-row gap-8">
    <div class="text-md font-lg">{{$label}}</div>
    <div class="w-10/12">
        <input {{$attributes}} type="file" class="filepond" name="image2"
               data-allow-reorder="true"
               data-max-file-size="3MB"
               data-max-files="1">
    </div>
</div>

@section('scripts')

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('voiceTyping', () => ({
                text: '',
                recognition: null,

                init() {
                    // Check if SpeechRecognition is supported
                    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

                    if (!SpeechRecognition) {
                        alert('Speech recognition is not supported in this browser.');
                        return;
                    }

                    // Initialize SpeechRecognition
                    this.recognition = new SpeechRecognition();
                    this.recognition.continuous = true; // Continue recognizing speech
                    this.recognition.interimResults = true; // Show interim results

                    this.recognition.onresult = (event) => {
                        this.text = Array.from(event.results)
                            .map(result => result[0].transcript)
                            .join('');
                    };

                    this.recognition.onerror = (event) => {
                        alert('Error occurred in recognition: ' + event.error);
                    };
                },

                startVoiceTyping() {
                    if (this.recognition) {
                        this.recognition.start();
                    }
                }
            }));
        });

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
        document.addEventListener("DOMContentLoaded", function () {
            "use strict";

            // Register FilePond plugins
            FilePond.registerPlugin(FilePondPluginImagePreview);

            // Select all elements with the class 'filepond' and apply FilePond
            document.querySelectorAll(".filepond").forEach((input) => {
                FilePond.create(input, {
                    allowImagePreview: true,
                    imagePreviewHeight: 150,
                    allowMultiple: false,
                    acceptedFileTypes: ["image/*"],
                    storeAsFile: true, // Keeps the file as a normal file input
                });
            });
        });
    </script>

    @vite('resources/assets/js/select-choice.js')

@endsection
