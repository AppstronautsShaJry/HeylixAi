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

<div class="grid grid-cols-12 gap-x-6">

    <div class="xl:col-span-8 col-span-12">
        <form class="p-4 grid grid-cols-12 gap-4 box">

            <div class="col-span-12 ">
                <span class="text-lg font-semibold"> Awarness Ad </span>

            </div>

            <div class="col-span-12">
                <label for="inputPassword4" class="ti-form-label">Select Page</label>

                <div class="col-span-12 md:col-span-6 xl:col-span-6">
                    <div class="">
                        <select class="ti-form-select rounded-sm p-1" id="select-beast" autocomplete="off">
                            <option value=""> Select a person...</option>
                            <option value="4">Page 1</option>
                            <option value="1">Page 2</option>
                            <option value="3">Page 3</option>
                            <option value="5">Page 4</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-span-12">
                <label class="ti-form-label">Daily Budget</label>
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
            </div>

            <div class="col-span-12 gap-5">
                <label class="ti-form-label">Target Age</label>

                <div class="flex flex-row gap-5">

                    <div
                        class="bg-white border border-inputborder rounded-sm dark:bg-bodybg dark:border-white/10 w-1/12"
                        data-hs-input-number>
                        <div class="flex justify-between items-center gap-x-1 overflow-hidden w-full h-6">
                            <div class="grow py-2 px-3 w-1/4">
                                <input
                                    class="p-0 bg-transparent border-0 text-gray-800 focus:ring-0 dark:text-white"
                                    type="text" value="18" data-hs-input-number-input>
                            </div>

                            <div
                                class="flex flex-col -gap-y-px divide-y divide-gray-200 border-s border-inputborder dark:divide-white/10 dark:border-white/10 w-5 p-0.5">
                                <button type="button"
                                        class="size-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-sm bg-gray-50 text-gray-800 hover:bg-light disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:text-white dark:hover:bg-bgdark/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
                                        data-hs-input-number-increment>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-chevron-down size-4">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </button>
                            </div>
                        </div>


                    </div>

                    <span class="mt-1">to</span>

                    <div
                        class="bg-white border border-inputborder rounded-sm dark:bg-bodybg dark:border-white/10 w-1/12"
                        data-hs-input-number>
                        <div class="flex justify-between items-center gap-x-1 overflow-hidden w-full h-6">
                            <div class="grow py-2 px-3 w-1/4">
                                <input
                                    class="p-0 bg-transparent border-0 text-gray-800 focus:ring-0 dark:text-white"
                                    type="text" value="50" data-hs-input-number-input>
                            </div>

                            <div
                                class="flex flex-col -gap-y-px divide-y divide-gray-200 border-s border-inputborder dark:divide-white/10 dark:border-white/10 w-5 p-0.5">
                                <button type="button"
                                        class="size-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-sm bg-gray-50 text-gray-800 hover:bg-light disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:text-white dark:hover:bg-bgdark/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
                                        data-hs-input-number-increment>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-chevron-down size-4">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-span-12">

                <label for="inputEmail4" class="ti-form-label">Gender</label>

                <div class="flex flex-row gap-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                               id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                               id="flexRadioDefault2" checked="">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Female
                        </label>
                    </div>
                </div>
            </div>


            <div class="col-span-12">
                <label for="inputAddress" class="ti-form-label">Target Audience</label>


                <div class="col-span-12 flex flex-col">
                    <div id="container" x-data="voiceTyping"
                         class="text-center w-full ">
                                                <textarea
                                                    id="text-box"
                                                    x-model="text"
                                                    placeholder="Start speaking..."
                                                    class="w-full h-32 p-4 text-lg border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 resize-none"
                                                ></textarea>
                        <div class="flex flex-row gap-4">

                            <div class="flex justify-start gap-4">
                                <button
                                    id="start-button"
                                    @click="startVoiceTyping"
                                    class="inline-flex items-center gap-x-2 bg-transparent border border-info rounded-sm p-3"
                                >
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         fill="currentColor" class="w-6 h-6 text-info"
                                         viewBox="0 0 16 16">
                                        <path
                                            d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5M3 8.062C3 6.76 4.235 5.765 5.53 5.886a26.6 26.6 0 0 0 4.94 0C11.765 5.765 13 6.76 13 8.062v1.157a.93.93 0 0 1-.765.935c-.845.147-2.34.346-4.235.346s-3.39-.2-4.235-.346A.93.93 0 0 1 3 9.219zm4.542-.827a.25.25 0 0 0-.217.068l-.92.9a25 25 0 0 1-1.871-.183.25.25 0 0 0-.068.495c.55.076 1.232.149 2.02.193a.25.25 0 0 0 .189-.071l.754-.736.847 1.71a.25.25 0 0 0 .404.062l.932-.97a25 25 0 0 0 1.922-.188.25.25 0 0 0-.068-.495c-.538.074-1.207.145-1.98.189a.25.25 0 0 0-.166.076l-.754.785-.842-1.7a.25.25 0 0 0-.182-.135"/>
                                        <path
                                            d="M8.5 1.866a1 1 0 1 0-1 0V3h-2A4.5 4.5 0 0 0 1 7.5V8a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v1a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1v-.5A4.5 4.5 0 0 0 10.5 3h-2zM14 7.5V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.5A3.5 3.5 0 0 1 5.5 4h5A3.5 3.5 0 0 1 14 7.5"/>
                                    </svg>
                                </span>
                                    <span>
                                    Start Voice Typing
                                </span>
                                </button>
                            </div>

                            <div>
                                <button type="button" data-hs-overlay="#hs-vertically-centered-modal"
                                        class="inline-flex items-center gap-x-2 bg-transparent border border-info rounded-sm p-3 hs-dropdown-toggle">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                             fill="currentColor" class="w-6 h-6 text-info"
                                                             viewBox="0 0 16 16">
                                                        <path
                                                            d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5M3 8.062C3 6.76 4.235 5.765 5.53 5.886a26.6 26.6 0 0 0 4.94 0C11.765 5.765 13 6.76 13 8.062v1.157a.93.93 0 0 1-.765.935c-.845.147-2.34.346-4.235.346s-3.39-.2-4.235-.346A.93.93 0 0 1 3 9.219zm4.542-.827a.25.25 0 0 0-.217.068l-.92.9a25 25 0 0 1-1.871-.183.25.25 0 0 0-.068.495c.55.076 1.232.149 2.02.193a.25.25 0 0 0 .189-.071l.754-.736.847 1.71a.25.25 0 0 0 .404.062l.932-.97a25 25 0 0 0 1.922-.188.25.25 0 0 0-.068-.495c-.538.074-1.207.145-1.98.189a.25.25 0 0 0-.166.076l-.754.785-.842-1.7a.25.25 0 0 0-.182-.135"/>
                                                        <path
                                                            d="M8.5 1.866a1 1 0 1 0-1 0V3h-2A4.5 4.5 0 0 0 1 7.5V8a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v1a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1v-.5A4.5 4.5 0 0 0 10.5 3h-2zM14 7.5V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.5A3.5 3.5 0 0 1 5.5 4h5A3.5 3.5 0 0 1 14 7.5"/>
                                                    </svg>
                                                    </span>
                                    <span class="">
                                                       Generate
                                                    </span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-12">
                <label for="inputAddress2" class="ti-form-label">Update Location</label>

                <select class="ti-form-select rounded-sm !py-2 !px-3"
                        name="choices-multiple-remove-button"
                        data-choices
                        data-remove-button
                        multiple>
                    <option value="Choice 1" selected>Bangalore</option>
                    <option value="Choice 2">Chennai</option>
                    <option value="Choice 3">Hyderabad</option>
                    <option value="Choice 4">Karnataka</option>
                </select>
            </div>

            <div class="col-span-12">
                <label for="inputCity" class="ti-form-label">Exclude Location</label>

                <select class="ti-form-select rounded-sm !py-2 !px-3"
                        name="choices-multiple-remove-button"
                        data-choices
                        data-remove-button
                        multiple>
                    <option value="Choice 1" selected>Bangalore</option>
                    <option value="Choice 2">Chennai</option>
                    <option value="Choice 3">Hyderabad</option>
                    <option value="Choice 4">Karnataka</option>
                </select>

            </div>

        </form>
    </div>

    <div class="xl:col-span-4 col-span-12  dark:bg-bodybg bg-white rounded-lg h-[30rem] px-3">
        <div class="col-span-12 lg:col-span-12">
            <div class="w-full flex justify-between items-center my-5">
                <span class="flex text-lg font-bold px-3 py-5">
                    Add Assets
                </span>
                <button type="button"
                        class="hs-dropdown-toggle ti-btn  py-2btn-wave ti-btn-primary"
                        data-hs-overlay="#exampleModalScrollable4">Get Creative
                </button>
            </div>
            <h5 class="text-xs px-3 font-medium">Square image/video (1080x1080)</h5>
            <div class="box-body my-2">
                <input type="file" class="filepond" name="image1"
                       {{--                    <input type="file" name="image" class="filepond basic-filepond"--}}
                       data-allow-reorder="true"
                       data-max-file-size="3MB"
                       data-max-files="1"
                    {{ isset($brandCategory->image) ? 'data-default-file=' . asset('storage/' . $brandCategory->image) : '' }}>
            </div>
        </div>

        <div class="col-span-12 lg:col-span-12">
            <h5 class="text-xs px-3  font-medium">Portrait image/video (1080x1080)</h5>
            <div class="box-body my-2">
                <input type="file" class="filepond" name="image2"
                       {{--                    <input type="file" name="image" class="filepond basic-filepond"--}}
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

