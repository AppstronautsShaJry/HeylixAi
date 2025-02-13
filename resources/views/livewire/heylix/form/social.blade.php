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

<div class="main-content app-content px-5 space-y-5">
    <div class="container-fluid">

        <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item active" aria-current="page"><a href="/calender-social">Heylix</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Create Social</li>

                </ol>
            </div>
            <div class="flex gap-2 flex-wrap">
            </div>
        </div>

        <div class="grid grid-cols-12 gap-x-6">

            <div class="xl:col-span-8 col-span-12">
                <form class="p-4 grid grid-cols-12 gap-4 box">

                    <div class="col-span-12 ">
                        <span class="text-lg font-semibold">Create Social</span>

                    </div>

                    <div class="col-span-12 flex flex-row gap-[32px]">

                        <div class="flex flex-row gap-2">
                            <label class="ti-form-label"></label>

                            <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]">
                                <a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:void(0);">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 fill-primary mb-2"
                                         height="24px" viewBox="0 0 24 24" width="24px">
                                        <path d="M0 0h24v24H0V0z" fill="none"/>
                                        <path
                                            d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"/>
                                    </svg>
                                    <div
                                        class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !py-4 !px-4 !bg-primary !text-white"
                                        role="tooltip">
                                        <p>The Icon Popover</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="w-9/12">
                            <input type="text" class="form-control" placeholder="" aria-label="First name">
                        </div>
                    </div>

                    <div class="col-span-12 flex flex-row gap-[32px]">

                        <div class="flex flex-row gap-2">
                            <label class="ti-form-label">Text 1</label>

                            <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]">
                                <a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:void(0);">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 fill-primary mb-2"
                                         height="24px" viewBox="0 0 24 24" width="24px">
                                        <path d="M0 0h24v24H0V0z" fill="none"/>
                                        <path
                                            d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"/>
                                    </svg>
                                    <div
                                        class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !py-4 !px-4 !bg-primary !text-white"
                                        role="tooltip">
                                        <p>The Icon Popover</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="w-9/12">
                            <input type="text" class="form-control" placeholder="" aria-label="First name">
                        </div>
                    </div>

                    <div class="col-span-12 flex flex-row gap-[32px]">

                        <div class="flex flex-row gap-2">
                            <label class="ti-form-label">Text 2</label>

                            <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]">
                                <a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:void(0);">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 fill-primary mb-2"
                                         height="24px" viewBox="0 0 24 24" width="24px">
                                        <path d="M0 0h24v24H0V0z" fill="none"/>
                                        <path
                                            d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"/>
                                    </svg>
                                    <div
                                        class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !py-4 !px-4 !bg-primary !text-white"
                                        role="tooltip">
                                        <p>The Icon Popover</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="w-9/12">
                            <input type="text" class="form-control" placeholder="" aria-label="First name">
                        </div>
                    </div>

                    <div class="col-span-12 flex flex-row gap-[32px]">

                        <div class="flex flex-row gap-2">
                            <label class="ti-form-label">LIST 1</label>

                            <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]">
                                <a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:void(0);">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 fill-primary mb-2"
                                         height="24px" viewBox="0 0 24 24" width="24px">
                                        <path d="M0 0h24v24H0V0z" fill="none"/>
                                        <path
                                            d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"/>
                                    </svg>
                                    <div
                                        class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !py-4 !px-4 !bg-primary !text-white"
                                        role="tooltip">
                                        <p>The Icon Popover</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="w-9/12">
                            <input type="text" class="form-control" placeholder="" aria-label="First name">
                        </div>
                    </div>

                    <div class="col-span-12 flex flex-row gap-[32px]">

                        <div class="flex flex-row gap-2">
                            <label class="ti-form-label">LIST 2</label>

                            <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]">
                                <a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:void(0);">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 fill-primary mb-2"
                                         height="24px" viewBox="0 0 24 24" width="24px">
                                        <path d="M0 0h24v24H0V0z" fill="none"/>
                                        <path
                                            d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"/>
                                    </svg>
                                    <div
                                        class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !py-4 !px-4 !bg-primary !text-white"
                                        role="tooltip">
                                        <p>The Icon Popover</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="w-9/12">
                            <input type="text" class="form-control" placeholder="" aria-label="First name">
                        </div>
                    </div>

                    <div class="col-span-12 flex flex-row gap-[32px]">

                        <div class="flex flex-row gap-2">
                            <label class="ti-form-label">LIST 3</label>

                            <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]">
                                <a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:void(0);">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 fill-primary mb-2"
                                         height="24px" viewBox="0 0 24 24" width="24px">
                                        <path d="M0 0h24v24H0V0z" fill="none"/>
                                        <path
                                            d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"/>
                                    </svg>
                                    <div
                                        class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !py-4 !px-4 !bg-primary !text-white"
                                        role="tooltip">
                                        <p>The Icon Popover</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="w-9/12">
                            <input type="text" class="form-control" placeholder="" aria-label="First name">
                        </div>
                    </div>

                    <div class="col-span-12 flex flex-row gap-[32px]">

                        <div class="flex flex-row gap-2">
                            <label class="ti-form-label">LIST 4</label>

                            <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]">
                                <a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:void(0);">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 fill-primary mb-2"
                                         height="24px" viewBox="0 0 24 24" width="24px">
                                        <path d="M0 0h24v24H0V0z" fill="none"/>
                                        <path
                                            d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"/>
                                    </svg>
                                    <div
                                        class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !py-4 !px-4 !bg-primary !text-white"
                                        role="tooltip">
                                        <p>The Icon Popover</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="w-9/12">
                            <input type="text" class="form-control" placeholder="" aria-label="First name">
                        </div>
                    </div>
                </form>
            </div>

            <div class="xl:col-span-4 col-span-12  dark:bg-bodybg bg-white rounded-lg h-[35rem] px-3">
                <div class="col-span-12 lg:col-span-12">
                    <div class="w-full flex justify-between items-center">
                <span class="flex text-lg font-bold px-3 py-5">
                    Add Assets
                </span>

                    </div>

                    <div class="text-xs px-3 font-medium">Image 1</div>
                    <div class="box-body">
                        <input type="file" class="filepond" name="image1"
                               {{--                    <input type="file" name="image" class="filepond basic-filepond"--}}
                               data-allow-reorder="true"
                               data-max-file-size="3MB"
                               data-max-files="1"
                            {{ isset($brandCategory->image) ? 'data-default-file=' . asset('storage/' . $brandCategory->image) : '' }}>
                    </div>
                </div>

                <div class="col-span-12 lg:col-span-12">
                    <div class="text-xs px-3  font-medium">Image 2</div>
                    <div class="box-body">
                        <input type="file" class="filepond" name="image2"
                               {{--                    <input type="file" name="image" class="filepond basic-filepond"--}}
                               data-allow-reorder="true"
                               data-max-file-size="3MB"
                               data-max-files="1"
                            {{ isset($brandCategory->image) ? 'data-default-file=' . asset('storage/' . $brandCategory->image) : '' }}>
                    </div>
                </div>

                <div class="col-span-12 lg:col-span-12">
                    <div class="text-xs px-3  font-medium">Image 3</div>
                    <div class="box-body ">
                        <input type="file" class="filepond" name="image2"
                               data-allow-reorder="true"
                               data-max-file-size="3MB"
                               data-max-files="1"
                            {{ isset($brandCategory->image) ? 'data-default-file=' . asset('storage/' . $brandCategory->image) : '' }}>
                    </div>
                </div>

                <div class="flex justify-end items-center w-full gap-3">
                    <button type="button"
                            class="hs-dropdown-toggle ti-btn btn-wave ti-btn-primary"
                            data-hs-overlay="#exampleModalScrollable4">Go Back
                    </button>
                    <button type="button"
                            class="hs-dropdown-toggle ti-btn btn-wave ti-btn-primary"
                            data-hs-overlay="#exampleModalScrollable4">Publish
                    </button>
                </div>
            </div>

        </div>

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

