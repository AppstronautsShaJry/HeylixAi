<div class="main-content app-content px-5 space-y-5">
    <div class="container-fluid">
        <!-- Start::page-header -->
        <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <ol class="breadcrumb mb-0">
                    {{--                    <li class="breadcrumb-item">--}}
                    {{--                        <a href="/">--}}
                    {{--                            Dashboard--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                    <li class="breadcrumb-item active" aria-current="page"><a href="/calender-social">HeyLix</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Content Creation Service</li>
                </ol>
            </div>
            <div class="flex gap-2 flex-wrap">
            </div>
        </div>

        <div x-data="{ currentPage: window.location.pathname }" class="box flex flex-row p-3">
            <div
                :class="currentPage === '/create-heylix' ? 'bg-[#FF5D9F]  rounded-l-sm text-white ' : ' hover:text-gray-400 dark:text-gray-400  rounded-md '"
                class="max-w-max py-3 px-2 group">
                <a href="/create-heylix" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    Create Image
                </a>
            </div>
            <div
                :class="currentPage === '/brand-heylix' ? 'bg-[#FF5D9F]  text-white ' : 'hover:text-gray-400 dark:text-gray-400 dark:bg-[#252528] bg-[#F8F9FB]'"
                class="max-w-max py-3 px-2 group">
                <a href="/brand-heylix" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    Create Video
                </a>
            </div>
            <div
                :class="currentPage === '/jobstatus-heylix' ? 'bg-[#FF5D9F]  rounded-r-sm text-white ' : ' hover:text-gray-400 dark:text-gray-400 dark:bg-[#252528] bg-[#F8F9FB] rounded-r-sm'"
                class="max-w-max py-3 px-2 group">
                <a href="/jobstatus-heylix" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    JobStatus
                </a>
            </div>
        </div>
    </div>


    <div class="box p-5 space-y-8">

        <div class="grid grid-cols-12 sm:gap-x-12">

            <div class="box xxl:col-span-9 xl:col-span-9 col-span-12">

                <span class="text-lg font-semibold">Select your Goal</span>

                <div
                    class="flex xl:grid-cols-3 sm:grid-cols-3 lg:grid-cols-3 gap-5 p-4 w-full h-auto">
                    <!-- Row 1 -->
                    <x-cards.card1 :title="'Social Media'"
                                   description="Square - 1080x1080 "
                                   description2="Portrait - 1080x1920"
                                   route="social.temp" display="hidden">

                    </x-cards.card1>

                    <x-cards.card1 :title="'Meta Ads'"
                                   description="Square - 1080x1080 "
                                   description2="Portrait - 1080x1920"
                                   route="drive" display="hidden"/>

                    <x-cards.card1 :title="'Google Image Ad'"
                                   description="Horizontal,Vertical"
                                   description2="Square"
                                   route="call" display="hidden"/>

                </div>

                <span class="text-lg font-semibold">Single Image Post</span>

                <div
                    class=" flex justify-between gap-5 p-4 w-full h-auto">

                    <x-cards.card1 :title="'Facebook/LinkedIn Cover'"
                                   description="Square - 1080x1080 "
                                   route="leads" display="hidden"/>
                    <x-cards.card1 :title="'Stories'"
                                   description="Square - 1080x1080 "
                                   route="messages" display="hidden"/>
                    <x-cards.card1 :title="'Carousel'"
                                   description="3-4 Slide Post"
                                   description2="Square - 1080x1080"
                                   route="call" display="hidden" />
                </div>
            </div>

            <div
                class="w-full xxl:col-span-3 xl:col-span-3 sm:col-span-4 col-span-12 justify-start items-center">
                <div class="box w-full mt-[45px]">
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
