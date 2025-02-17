@section('styles')
    <!-- filepond CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/filepond/filepond.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">
@endsection
<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <nav>
                    <ol class="breadcrumb mb-1">
                        {{--                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>--}}
                        <li class="breadcrumb-item"><a href="javascript:void(0);">HeyLix</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Video</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->

        <div x-data="{ currentPage: window.location.pathname }" class="box flex flex-row p-3">
            <div
                :class="currentPage === '/create-heylix' ? 'bg-[#FF5D9F]  rounded-l-sm text-white ' : ' hover:text-gray-400 dark:text-gray-400 dark:bg-[#252528] bg-[#F8F9FB] rounded-l-sm'"
                class="max-w-max py-3 px-2 group">
                <a href="/create-heylix" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    Create Image
                </a>
            </div>
            <div
                :class="currentPage === '/brand-heylix' ? 'bg-[#FF5D9F]  text-white ' : 'hover:text-gray-400 dark:text-gray-400  rounded-md '"
                class="max-w-max py-3 px-2 group">
                <a href="/brand-heylix" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    Create Video
                </a>
            </div>
            <div
                :class="currentPage === '/jobstatus-heylix' ? 'bg-[#FF5D9F]  rounded-r-sm text-white ' : ' hover:text-gray-400 dark:text-gray-400 dark:bg-[#252528] bg-[#F8F9FB]  rounded-r-sm '"
                class="max-w-max py-3 px-2 group">
                <a href="/jobstatus-heylix" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    JobStatus
                </a>
            </div>
        </div>

        <div class="box p-5 space-y-8">

            <div class="grid grid-cols-12 sm:gap-x-12">

                <div class="xxl:col-span-9 xl:col-span-9 col-span-12">

                    <div
                        class="flex xl:grid-cols-3 sm:grid-cols-3 lg:grid-cols-3 gap-5 p-4 w-full h-auto">
                        <!-- Row 1 -->
                        <x-cards.card1 :title="'Logo Info'"
                                       description="Wsdsh hajf jsddj"
                                       route="logo.temp" display="hidden">

                        </x-cards.card1>

                        <x-cards.card1 :title="'Reels Shorts'"
                                       description2="Portrait - 1080x1920"
                                       route="logo.temp" display="hidden"/>

                        <x-cards.card1 :title="'Google/Ads Video'"
                                       description="Horizontal,Vertical"
                                       description2="Square"
                                       route="logo.temp" display="hidden"/>

                    </div>

                    <div
                        class=" flex justify-between gap-5 p-4 w-full h-auto">

                        <div class="w-[225px]">
                            <x-cards.card1 :title="'Animated Social Meadia'"
                                           description="Square 1080x1080"
                                           route="logo.temp" display="hidden"/>
                        </div>
                    </div>
                </div>

                <div
                    class="w-full xxl:col-span-3 xl:col-span-3 sm:col-span-4 col-span-12 justify-start items-center">
                    <div class="w-full mt-[20px]">
                        <div class="xxl:col-span-5 col-span-12">
                            <div
                                class="box course-main overflow-hidden cover-image bg-cover bg-primary dark:!bg-primary">
                                <div class="box-body p-6">
                                    <div class="grid grid-cols-12 justify-between">
                                        <div class="xl:col-span-12 md:col-span-8 col-span-12 pe-3">
                                            <h5 class="font-medium mb-2 text-white">Notice 🔔 </h5>
                                            <span
                                                class="text-white block mb-2 opacity-70">we need min 24 hours to create</span>
                                            <span class="text-white block mb-2 opacity-70">Changes Can be done</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
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
