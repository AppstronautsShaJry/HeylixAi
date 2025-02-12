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
        <div class="grid grid-cols-12 sm:gap-x-12 px-5">

            <div class="xxl:col-span-9 sm:col-span-8 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="text-xl font-medium">Content Creation</div>
                    </div>
                    <div class="box-body">
                        <div class="grid grid-cols-12 sm:gap-x-12 gap-5 justify-between">
                            <div class="xxl:col-span-12 xl:col-span-12 col-span-12">
                                <div class="grid grid-cols-12 sm:gap-x-6 gap-y-6">

                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="input-placeholder" class="form-label">Brand Name</label>
                                        <x-input.single-select>
                                            <option value="AI">Louis Vuitton</option>
                                            <option value="Technology">MicroSoft</option>
                                            <option value="Business">Google</option>
                                            <option value="Business">Apple</option>
                                        </x-input.single-select>
                                    </div>

                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="input-placeholder" class="form-label"
                                               placeholder="eg:Abstract Digital Art">
                                            Content Title
                                        </label>
                                        <input type="text" class="form-control" id="nft-link"
                                               placeholder="Title">
                                    </div>

                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="input-placeholder" class="form-label">Type of Content</label>
                                        <x-input.single-select>
                                            <option value="AI">Image</option>
                                            <option value="Technology">Corousel</option>
                                            <option value="Business">Shorts/Reel</option>
                                            <option value="Business">Animated Post</option>
                                        </x-input.single-select>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="nft-link" class="form-label">Size</label>
                                        <div class="flex justify-start gap-x-5">
                                            <div class="form-check flex items-center gap-x-2">
                                                <input class="form-check-input form-checked-info" type="checkbox"
                                                       value="" id="infoChecked" checked="">

                                                <div class="w-3 h-3 bg-gray-500"></div>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    1:1
                                                </label>
                                            </div>
                                            <div class="form-check flex items-center gap-x-2">
                                                <input class="form-check-input form-checked-info" type="checkbox"
                                                       value="" id="infoChecked" checked="">

                                                <div class="w-3 h-5 bg-gray-500"></div>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    9:16
                                                </label>
                                            </div>
                                            <div class="form-check flex items-center gap-x-2">
                                                <input class="form-check-input form-checked-info" type="checkbox"
                                                       value="" id="infoChecked" checked="">

                                                <div class="w-5 h-3 bg-gray-500"></div>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    16:9
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-span-12">
                                        <label for="nft-link" class="form-label">Required For</label>
                                        <div class="flex gap-x-2">
                                            <div class="form-check flex items-center gap-x-2">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                       id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    For Scial Media
                                                </label>
                                            </div>
                                            <div class="form-check flex items-center gap-x-2">
                                                <input class="form-check-input dark:border-gray-500" type="radio"
                                                       name="flexRadioDefault"
                                                       id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    For AD
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="upload-container col-span-12 rounded-md md:w-1/2 w-full">
                                        <label class="form-label">Raw Files</label>
                                        <div
                                            class="flex border dark:border-gray-700 border-white bg-transparent rounded-md ">
                                            <!-- Hidden File Input -->
                                            <input
                                                type="file"
                                                class="file-upload hidden"
                                            />

                                            <!-- Label with SVG and Text -->
                                            <div class="inline-flex items-center gap-x-3 cursor-pointer upload-label ">
                                                <span class="bg-info p-2 rounded-l-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                         fill="currentColor" class="bi bi-card-image"
                                                         viewBox="0 0 16 16">
                                                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                                                    <path
                                                        d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54L1 12.5v-9a.5.5 0 0 1 .5-.5z"/>
                                                </svg>
                                                </span>
                                                <span class="p-2  ">Upload Your File</span>
                                            </div>
                                        </div>
                                        <!-- Display the Selected File Name -->
                                        <p class="file-name mt-2 text-sm text-gray-500">No file selected</p>
                                    </div>

                                    <div class="upload-container col-span-12 rounded-md md:w-1/2 w-full">
                                        <label class="form-label">Reference Files</label>
                                        <div
                                            class="flex border dark:border-gray-700 border-white bg-transparent rounded-md ">
                                            <!-- Hidden File Input -->
                                            <input
                                                type="file"
                                                class="file-upload hidden"
                                            />
                                            <!-- Label with SVG and Text -->
                                            <div class="inline-flex items-center gap-x-3 cursor-pointer upload-label ">
                                                <span class="bg-info p-2 rounded-l-md">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                          fill="currentColor" class="bi bi-card-image"
                                                          viewBox="0 0 16 16">
                                                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                                                    <path
                                                        d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54L1 12.5v-9a.5.5 0 0 1 .5-.5z"/>
                                                </svg>
                                                </span>
                                                <span class="p-2  ">Upload Your File</span>
                                            </div>
                                        </div>
                                        <!-- Display the Selected File Name -->
                                        <p class="file-name mt-2 text-sm text-gray-500">No file selected</p>
                                    </div>


                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="input-placeholder" class="form-label"
                                               placeholder="eg:Abstract Digital Art">
                                            Reference Link
                                        </label>
                                        <input type="text" class="form-control" id="nft-link"
                                               placeholder="Paste Link">
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="nft-description" class="form-label">Instructions</label>
                                        <textarea class="form-control" id="nft-description" rows="3"
                                                  placeholder="Enter Description"></textarea>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer text-center flex items-center gap-x-5">
                        <button type="button" class="ti-btn ti-btn-info-gradient btn-wave ">Post Job</button>
                        <span class="inline-flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24"
                                                                    style="fill: white;transform: ;msFilter:;"><path
                                    d="M12 5C7.031 5 2 6.546 2 9.5S7.031 14 12 14c4.97 0 10-1.546 10-4.5S16.97 5 12 5zm-5 9.938v3c1.237.299 2.605.482 4 .541v-3a21.166 21.166 0 0 1-4-.541zm6 .54v3a20.994 20.994 0 0 0 4-.541v-3a20.994 20.994 0 0 1-4 .541zm6-1.181v3c1.801-.755 3-1.857 3-3.297v-3c0 1.44-1.199 2.542-3 3.297zm-14 3v-3C3.2 13.542 2 12.439 2 11v3c0 1.439 1.2 2.542 3 3.297z"></path></svg><span>12</span></span>
                    </div>
                </div>
            </div>
            <div
                class="w-full xxl:col-span-3 sm:col-span-4 col-span-12 gap-y-8 flex flex-col justify-start items-center">
                <div class="box w-full">
                    <div class="box-body">

                        <div class="xxl:col-span-5 col-span-12">
                            <div
                                class="box course-main overflow-hidden cover-image bg-cover bg-primary dark:!bg-primary">
                                <div class="box-body p-6">
                                    <div class="grid grid-cols-12 justify-between">
                                        <div class="xl:col-span-12 md:col-span-8 col-span-12 pe-3">
                                            <h5 class="font-medium mb-2 text-white">Notice 🔔 </h5>
                                            <span class="text-white block mb-2 opacity-70">we need min 24 hours to create</span>
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
