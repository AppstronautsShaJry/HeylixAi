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


<x-form.layout>
    <x-breadcrumb.nav>
        <x-breadcrumb.list route="dashboard" list="Dashboard" />
        <x-breadcrumb.list route="social.temp" list="Template" />
        <x-breadcrumb.list route="create.social" list="Social Media" active="text-white" />
    </x-breadcrumb.nav>

    <div class="grid grid-cols-12 gap-x-6">
        <div class="xl:col-span-8 col-span-12">
            <form class="p-4 flex flex-col gap-4 box">
                <div class="col-span-12 ">
                    <span class="text-lg font-semibold">Create Social</span>
                </div>
                <div class="col-span-12 flex flex-row gap-8">
                    <div class="text-md font-lg">Add Logo</div>
                    <div class="w-10/12">
                        <input type="file" class="filepond" name="image2"
                               data-allow-reorder="true"
                               data-max-file-size="3MB"
                               data-max-files="1"
                            {{isset($brandCategory->image) ? 'data-default-file=' . asset('storage/' . $brandCategory->image) : '' }}>
                    </div>
                </div>
                <div class="flex flex-row col-span-12 space-x-5">
                    <x-input.text label="Logo">
                        <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur." />
                    </x-input.text>
                    <x-input.text label="Text T1">
                        <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur." />
                    </x-input.text>
                </div>
                <div class="flex flex-row col-span-12 space-x-5">
                    <x-input.text label="Text T2">
                        <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur." />
                    </x-input.text>
                    <x-input.text label="Text T3">
                        <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur." />
                    </x-input.text>
                </div>
                <div class="flex flex-row col-span-12 space-x-5">
                    <div class="flex flex-row w-6/12 gap-8">
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
                        <div class="w-8/12">
                            <input type="text" class="form-control" placeholder="" aria-label="First name">
                        </div>
                    </div>

                    <div class=" flex flex-row gap-12 w-6/12">

                        <div class="flex flex-row gap-2">
                            <label class="ti-form-label">Prize</label>

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
                        <div class="w-48">
                            <input type="text" class="form-control" placeholder="" aria-label="First name">
                        </div>
                    </div>
                </div>
                <div class="col-span-12 flex flex-row gap-[32px]">

                    <div class="flex flex-row gap-2">
                        <label class="ti-form-label">Text 3</label>

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
                    <div class="w-[215px]">
                        <input type="text" class="form-control" placeholder="" aria-label="First name">
                    </div>
                </div>
                <div class="flex flex-row col-span-12 space-x-3">

                    <div class="flex flex-row w-6/12 gap-[36px]">

                        <div class="flex flex-row gap-1">
                            <label class="ti-form-label">Phone</label>

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
                        <div class="w-8/12">
                            <input type="text" class="form-control" placeholder="" aria-label="First name">
                        </div>
                    </div>

                    <div class=" flex flex-row gap-2 w-6/12">

                        <div class="flex flex-row gap-1">
                            <label class="ti-form-label">Website Url</label>

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
                        <div class="w-48">
                            <input type="text" class="form-control" placeholder="" aria-label="First name">
                        </div>
                    </div>
                </div>
                <div class="flex flex-row col-span-12 space-x-5">

                    <div class="flex flex-row w-full gap-10">

                        <div class="flex flex-row gap-1">
                            <label class="ti-form-label">List 1</label>

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
                        <div class="w-8/12">
                            <input type="text" class="form-control" placeholder="" aria-label="First name">
                        </div>
                    </div>

                    <div class=" flex flex-row gap-10 w-full">

                        <div class="flex flex-row gap-2">
                            <label class="ti-form-label">List 2</label>

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
                        <div class="w-48">
                            <input type="text" class="form-control" placeholder="" aria-label="First name">
                        </div>
                    </div>
                </div>
                <div class="flex flex-row col-span-12 space-x-5">

                    <div class="flex flex-row w-full gap-10">

                        <div class="flex flex-row gap-1">
                            <label class="ti-form-label">List 3</label>

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
                        <div class="w-8/12">
                            <input type="text" class="form-control" placeholder="" aria-label="First name">
                        </div>
                    </div>

                    <div class=" flex flex-row gap-10 w-full">

                        <div class="flex flex-row gap-2">
                            <label class="ti-form-label">List 4</label>

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
                        <div class="w-48">
                            <input type="text" class="form-control" placeholder="" aria-label="First name">
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-12">
                    <div class="px-3  text-lg">Image 1</div>
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
                    <div class="text-lg px-3  ">Image 2</div>
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
                    <div class="text-lg px-3 ">Image 3</div>
                    <div class="box-body ">
                        <input type="file" class="filepond" name="image2"
                               data-allow-reorder="true"
                               data-max-file-size="3MB"
                               data-max-files="1"
                            {{ isset($brandCategory->image) ? 'data-default-file=' . asset('storage/' . $brandCategory->image) : '' }}>
                    </div>
                </div>
                <button type="button"
                        class="ti-btn ti-btn-primary-gradient btn-wave self-end mx-4">Save
                </button>
            </form>
        </div>

        <div class="xl:col-span-4 col-span-12 dark:bg-bodybg bg-white mb-6 rounded-lg  px-3">
            <div class="col-span-12 lg:col-span-12 p-4 space-y-8">

                <div class="flex flex-col space-y-4">
                    <div>
                        <div class="font-semibold h5 block lh-base">
                            Preview
                        </div>
                    </div>
                    <a href="javascript:void(0);">
                        <img src="{{asset('images/partials/img5.jpeg')}}" class="card-img-bottom rounded-md"
                             alt="...">
                    </a>
                </div>

                <div class="flex flex-col space-y-4">
                    <div>
                        <div class="font-semibold h5 block lh-base">
                            Final Design
                        </div>
                    </div>
                    <a href="javascript:void(0);">
                        <img src="{{asset('images/partials/img3.jpeg')}}" class="card-img-bottom rounded-md"
                             alt="...">
                    </a>
                </div>

                {{--                    <div class="">--}}
                {{--                        <div class="relative overflow-hidden rounded ">--}}
                {{--                            <img src="{{asset('images/partials/img1.jpg')}}"--}}
                {{--                                 class="w-[280px] h-[260px] mb-3 rounded-md"--}}
                {{--                                 alt="...">--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
            </div>

        </div>

    </div>
</x-form.layout>

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

