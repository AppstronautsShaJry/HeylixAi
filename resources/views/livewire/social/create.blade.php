<div class="main-content app-content px-5 space-y-5">
    <div class="container-fluid">
        <!-- Start::page-header -->
        <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="/">
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="/calender-social">Calendar</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </div>
            <div class="flex gap-2 flex-wrap">
            </div>
        </div>
    </div>

    <div class="box p-5 space-y-8">
        <div x-cloak x-data="{ tab: 'tab1' }" class="h-12  flex justify-between px-5">
            <!-- Tab Buttons -->
            <div class="flex font-medium dark:border-none border rounded-sm dark:bg-black bg-gray-200">
                <button
                    @click="tab = 'tab1'"
                    :class="tab === 'tab1' ? 'bg-[#FF5D9F] text-white' : ' text-gray-400'"
                    class="px-4 py-2 rounded-l-sm focus:outline-none  dark:hover:text-white hover:text-black">
                    <i class="ri-facebook-line"></i>
                </button>
                <button
                    @click="tab = 'tab2'"
                    :class="tab === 'tab2' ? 'bg-[#FF5D9F] text-white' : ' text-gray-400'"
                    class="px-4 py-2 focus:outline-none  dark:hover:text-white hover:text-black">
                    <i class="ri-instagram-line"></i>
                </button>
                <button
                    @click="tab = 'tab3'"
                    :class="tab === 'tab3' ? 'bg-[#FF5D9F] text-white' : ' text-gray-400'"
                    class="px-4 py-2  focus:outline-none  dark:hover:text-white hover:text-black">
                    <i class="ri-twitter-x-line"></i>
                </button>
                <button
                    @click="tab = 'tab4'"
                    :class="tab === 'tab4' ? 'bg-[#FF5D9F] text-white' : ' text-gray-400'"
                    class="px-4 py-2 rounded-r-sm focus:outline-none  dark:hover:text-white hover:text-black">
                    <i class="ri-linkedin-line"></i>
                </button>
            </div>

            <!-- Tab Content -->
            <div class="text-md">
                <div x-cloak x-show="tab === 'tab1'" class="flex gap-x-2 items-center">
                    <div class="flex items-center gap-x-2 h-12">
                        <button class="h-full px-3 bg-info-gradient rounded-sm text-white">Feeds</button>
                    </div>
                    <div class="flex items-center gap-x-2 h-12">
                        <button class="h-full px-3 bg-info-gradient rounded-sm text-white">Reels</button>
                    </div>
                </div>
                <div x-cloak x-show="tab === 'tab2'" class="flex gap-x-2">
                    <div class="flex items-center gap-x-2 h-12">
                        <button class="h-full px-3 bg-info-gradient rounded-sm text-white">Feeds</button>
                    </div>
                    <div class="flex items-center gap-x-2 h-12">
                        <button class="h-full px-3 bg-info-gradient rounded-sm text-white">Reels</button>
                    </div>
                    <div class="flex items-center gap-x-2 h-12">
                        <button class="h-full px-3 bg-info-gradient rounded-sm text-white">Story</button>
                    </div>
                </div>
                <div x-cloak x-show="tab === 'tab3'" class="flex gap-x-2">
                    <div class="flex items-center gap-x-2 h-12">
                        <button class="h-full px-3 bg-info-gradient rounded-sm text-white">Feeds</button>
                    </div>
                </div>
                <div x-cloak x-show="tab === 'tab4'" class="flex gap-x-2">
                    <div class="flex items-center gap-x-2 h-12">
                        <button class="h-full px-3 bg-info-gradient rounded-sm text-white">Feeds</button>
                    </div>
                </div>
            </div>
        </div>

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
                                    <div class="col-span-12 flex flex-col">
                                        <label for="nft-link" class="form-label">Select Schedule Time</label>
                                        <div class="inline-flex items-center gap-x-5">
                                            <div
                                                class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                                <input type="date" class="form-control" id="input-date">
                                            </div>
                                            <div
                                                class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                                <input type="time" class="form-control" id="input-time">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-span-12 flex flex-col">
                                        <div id="container" x-data="voiceTyping"
                                             class="text-center w-full  mx-auto">
                                                <textarea
                                                    id="text-box"
                                                    x-model="text"
                                                    placeholder="Start speaking..."
                                                    class="w-full h-48 p-4 text-lg border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 resize-none"
                                                ></textarea>
                                            <div class="flex justify-between">
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

                                                {{--                                                <button--}}
                                                {{--                                                    class="inline-flex items-center gap-x-2 bg-transparent border border-info rounded-sm p-3">--}}
                                                {{--                                                    <span>--}}
                                                {{--                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                                                {{--                                                             fill="currentColor" class="w-6 h-6 text-info"--}}
                                                {{--                                                             viewBox="0 0 16 16">--}}
                                                {{--                                                        <path--}}
                                                {{--                                                            d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5M3 8.062C3 6.76 4.235 5.765 5.53 5.886a26.6 26.6 0 0 0 4.94 0C11.765 5.765 13 6.76 13 8.062v1.157a.93.93 0 0 1-.765.935c-.845.147-2.34.346-4.235.346s-3.39-.2-4.235-.346A.93.93 0 0 1 3 9.219zm4.542-.827a.25.25 0 0 0-.217.068l-.92.9a25 25 0 0 1-1.871-.183.25.25 0 0 0-.068.495c.55.076 1.232.149 2.02.193a.25.25 0 0 0 .189-.071l.754-.736.847 1.71a.25.25 0 0 0 .404.062l.932-.97a25 25 0 0 0 1.922-.188.25.25 0 0 0-.068-.495c-.538.074-1.207.145-1.98.189a.25.25 0 0 0-.166.076l-.754.785-.842-1.7a.25.25 0 0 0-.182-.135"/>--}}
                                                {{--                                                        <path--}}
                                                {{--                                                            d="M8.5 1.866a1 1 0 1 0-1 0V3h-2A4.5 4.5 0 0 0 1 7.5V8a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v1a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1v-.5A4.5 4.5 0 0 0 10.5 3h-2zM14 7.5V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.5A3.5 3.5 0 0 1 5.5 4h5A3.5 3.5 0 0 1 14 7.5"/>--}}
                                                {{--                                                    </svg>--}}
                                                {{--                                                    </span>--}}

                                                {{--                                                    <span class="">--}}
                                                {{--                                                        AI Assistant--}}
                                                {{--                                                    </span>--}}
                                                {{--                                                    <span>--}}
                                                {{--
                                                                                                <button type="button"
                                                                                                        class="inline-flex items-center gap-x-2 text-gray-800 bg-transparent border border-info rounded-sm p-3 hs-dropdown-toggle ti-btn  btn-wave ti-btn-primary"
                                                                                                        data-hs-overlay="#hs-vertically-centered-modal">
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
                                                                                                        AI Assistant
                                                                                                    </span>
                                                                                                </button>--}}

                                                {{--                                                <div id="hs-vertically-centered-modal"--}}
                                                {{--                                                     class="hs-overlay hidden ti-modal h-auto">--}}
                                                {{--                                                    <div--}}
                                                {{--                                                        class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center">--}}
                                                {{--                                                        <div class="ti-modal-content w-8/12">--}}

                                                {{--                                                            <div class="ti-modal-header">--}}
                                                {{--                                                                <h6 class="modal-title text-[1rem] font-semibold"--}}
                                                {{--                                                                    id="staticBackdropLabel2">Generate Content--}}
                                                {{--                                                                </h6>--}}
                                                {{--                                                                <button type="button"--}}
                                                {{--                                                                        class="hs-dropdown-toggle ti-modal-close-btn"--}}
                                                {{--                                                                        data-hs-overlay="#hs-vertically-centered-modal">--}}
                                                {{--                                                                    <span class="sr-only">Close</span>--}}
                                                {{--                                                                    <svg class="w-3.5 h-3.5" width="8" height="8"--}}
                                                {{--                                                                         viewBox="0 0 8 8" fill="none"--}}
                                                {{--                                                                         xmlns="http://www.w3.org/2000/svg">--}}
                                                {{--                                                                        <path--}}
                                                {{--                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"--}}
                                                {{--                                                                            fill="currentColor"/>--}}
                                                {{--                                                                    </svg>--}}
                                                {{--                                                                </button>--}}
                                                {{--                                                            </div>--}}

                                                {{--                                                            --}}{{--                                                            <div class="ti-modal-body">--}}
                                                {{--                                                            --}}{{--                                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing--}}
                                                {{--                                                            --}}{{--                                                                    elit.--}}
                                                {{--                                                            --}}{{--                                                                    Libero--}}
                                                {{--                                                            --}}{{--                                                                    ipsum quasi, error quibusdam debitis maiores hic--}}
                                                {{--                                                            --}}{{--                                                                    eum? Vitae--}}
                                                {{--                                                            --}}{{--                                                                    nisi--}}
                                                {{--                                                            --}}{{--                                                                    ipsa maiores fugiat deleniti quis reiciendis--}}
                                                {{--                                                            --}}{{--                                                                    veritatis.--}}
                                                {{--                                                            --}}{{--                                                                   </p>--}}
                                                {{--                                                            --}}{{--                                                            </div>--}}

                                                {{--                                                            <div class="ti-modal-body flex flex-row gap-5 w-full h-auto">--}}


                                                {{--                                                                <div--}}
                                                {{--                                                                    class="w-full border border-gray-300 flex justify-center items-center max-w-3xl">--}}
                                                {{--                                                                    <div> Lorem ipsum dolor sit amet, consectetur--}}
                                                {{--                                                                        adipisicing elit. Ab amet blanditiis corporis--}}
                                                {{--                                                                        eligendi eveniet expedita facilis id labore--}}
                                                {{--                                                                        magni modi nesciunt provident repellendus sint,--}}
                                                {{--                                                                        ullam!--}}
                                                {{--                                                                    </div>--}}
                                                {{--                                                                </div>--}}

                                                {{--                                                            </div>--}}

                                                {{--                                                            <div class="ti-modal-footer">--}}
                                                {{--                                                                <button type="button"--}}
                                                {{--                                                                        class="hs-dropdown-toggle ti-btn  btn-wave ti-btn-secondary"--}}
                                                {{--                                                                        data-hs-overlay="#hs-vertically-centered-modal">--}}
                                                {{--                                                                    Close--}}
                                                {{--                                                                </button>--}}
                                                {{--                                                                <a class="ti-btn  btn-wave ti-btn-primary"--}}
                                                {{--                                                                   href="javascript:void(0);">--}}
                                                {{--                                                                    Save changes--}}
                                                {{--                                                                </a>--}}
                                                {{--                                                            </div>--}}
                                                {{--                                                        </div>--}}
                                                {{--                                                    </div>--}}
                                                {{--                                                </div>--}}
                                                {{--                                                    </span>--}}

                                                {{--                                                </button>--}}


                                                <button type="button" class="hs-dropdown-toggle ti-btn  btn-wave ti-btn-primary" data-hs-overlay="#hs-vertically-centered-modal">
                                                   AI ASSISTANT
                                                </button>
                                                <div id="hs-vertically-centered-modal" class="hs-overlay hidden ti-modal">
                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center">
                                                        <div class="ti-modal-content">
                                                            <div class="ti-modal-header">
                                                                <h6 class="modal-title text-[1rem] font-semibold" id="staticBackdropLabel2">Modal title
                                                                </h6>
                                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-vertically-centered-modal">
                                                                    <span class="sr-only">Close</span>
                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <div class="ti-modal-body h-[30rem]">
                                                                <div class="flex flex-row item-center">
                                                                    <div></div>
                                                                    <div></div>
                                                                </div>
{{--                                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.--}}
{{--                                                                    Libero--}}
{{--                                                                    ipsum quasi, error quibusdam debitis maiores hic eum? Vitae--}}
{{--                                                                    nisi--}}
{{--                                                                    ipsa maiores fugiat deleniti quis reiciendis veritatis.</p>--}}
                                                            </div>
                                                            <div class="ti-modal-footer">
                                                                <button type="button" class="hs-dropdown-toggle ti-btn  btn-wave ti-btn-secondary" data-hs-overlay="#hs-vertically-centered-modal">
                                                                    Close
                                                                </button>
                                                                <a class="ti-btn  btn-wave ti-btn-primary" href="javascript:void(0);">
                                                                    Save changes
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


{{--                                                <button type="button"--}}
{{--                                                        class="hs-dropdown-toggle ti-btn  btn-wave ti-btn-primary"--}}
{{--                                                        data-hs-overlay="#hs-vertically-centered-modal">--}}
{{--                                                    Vertically centered modal--}}
{{--                                                </button>--}}

{{--                                                <div id="hs-vertically-centered-modal"--}}
{{--                                                     class="hs-overlay hidden ti-modal-new ">--}}
{{--                                                    <div--}}
{{--                                                        class="hs-overlay-open:mt-7 ti-modal-new-box mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center">--}}

{{--                                                        <div class="ti-modal-new-content">--}}
{{--                                                            <div class="ti-modal-new-header">--}}
{{--                                                                <h6 class="modal-title text-[1rem] font-semibold"--}}
{{--                                                                    id="staticBackdropLabel2">Modal title--}}
{{--                                                                </h6>--}}
{{--                                                                <button type="button"--}}
{{--                                                                        class="hs-dropdown-toggle ti-modal-close-btn"--}}
{{--                                                                        data-hs-overlay="#hs-vertically-centered-modal">--}}
{{--                                                                    <span class="sr-only">Close</span>--}}
{{--                                                                    <svg class="w-3.5 h-3.5" width="8" height="8"--}}
{{--                                                                         viewBox="0 0 8 8" fill="none"--}}
{{--                                                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                                        <path--}}
{{--                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"--}}
{{--                                                                            fill="currentColor"/>--}}
{{--                                                                    </svg>--}}
{{--                                                                </button>--}}
{{--                                                            </div>--}}

{{--                                                            <div class="ti-modal-new-body w-full" x-cloak--}}
{{--                                                                 x-data="{ tab: 'tab1' }">--}}

{{--                                                                <div class="grid grid-cols-3 gap-5 w-2/4">--}}
{{--                                                                    <div--}}
{{--                                                                        class="border border-gray-200 w-28 h-20 flex justify-center items-center">--}}
{{--                                                                        <button @click="tab = 'tab1'"--}}
{{--                                                                                :class="tab === 'tab1' ? 'bg-[#FF5D9F] text-white' : ' text-gray-400'">--}}
{{--                                                                            <svg xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                                                 width="24" height="24"--}}
{{--                                                                                 viewBox="0 0 24 24"--}}
{{--                                                                                 style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">--}}
{{--                                                                                <path--}}
{{--                                                                                    d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path>--}}
{{--                                                                            </svg>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}

{{--                                                                    <div--}}
{{--                                                                        class="border border-gray-200 w-28 h-20 flex justify-center items-center">--}}
{{--                                                                        <button @click="tab = 'tab2'"--}}
{{--                                                                                :class="tab === 'tab2' ? 'bg-[#FF5D9F] text-white' : ' text-gray-400'">--}}
{{--                                                                            <svg xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                                                 width="24" height="24"--}}
{{--                                                                                 viewBox="0 0 24 24"--}}
{{--                                                                                 style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">--}}
{{--                                                                                <path--}}
{{--                                                                                    d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z"></path>--}}
{{--                                                                            </svg>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}

{{--                                                                    <div--}}
{{--                                                                        class="border border-gray-200 w-28 h-20 flex justify-center items-center">--}}
{{--                                                                        <button @click="tab = 'tab3'"--}}
{{--                                                                                :class="tab === 'tab3' ? 'bg-[#FF5D9F] text-white' : ' text-gray-400'">--}}
{{--                                                                            <svg xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                                                 width="24" height="24"--}}
{{--                                                                                 viewBox="0 0 24 24"--}}
{{--                                                                                 style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">--}}
{{--                                                                                <path--}}
{{--                                                                                    d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path>--}}
{{--                                                                                <circle cx="16.806" cy="7.207"--}}
{{--                                                                                        r="1.078"></circle>--}}
{{--                                                                                <path--}}
{{--                                                                                    d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"></path>--}}
{{--                                                                            </svg>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}

{{--                                                                    <div--}}
{{--                                                                        class="border border-gray-200 w-28 h-20 flex justify-center items-center">--}}
{{--                                                                        <button @click="tab = 'tab4'"--}}
{{--                                                                                :class="tab === 'tab4' ? 'bg-[#FF5D9F] text-white' : ' text-gray-400'">--}}
{{--                                                                            <svg xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                                                 width="24" height="24"--}}
{{--                                                                                 viewBox="0 0 24 24"--}}
{{--                                                                                 style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">--}}
{{--                                                                                <path--}}
{{--                                                                                    d="M20 3H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM8.339 18.337H5.667v-8.59h2.672v8.59zM7.003 8.574a1.548 1.548 0 1 1 0-3.096 1.548 1.548 0 0 1 0 3.096zm11.335 9.763h-2.669V14.16c0-.996-.018-2.277-1.388-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248h-2.667v-8.59h2.56v1.174h.037c.355-.675 1.227-1.387 2.524-1.387 2.704 0 3.203 1.778 3.203 4.092v4.71z"></path>--}}
{{--                                                                            </svg>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}

{{--                                                                    <div--}}
{{--                                                                        class="border border-gray-200 w-28 h-20 flex justify-center items-center">--}}
{{--                                                                        <button @click="tab = 'tab5'"--}}
{{--                                                                                :class="tab === 'tab5' ? 'bg-[#FF5D9F] text-white' : ' text-gray-400'">--}}
{{--                                                                            <svg xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                                                 width="24" height="24"--}}
{{--                                                                                 viewBox="0 0 24 24"--}}
{{--                                                                                 style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">--}}
{{--                                                                                <path--}}
{{--                                                                                    d="M21.593 7.203a2.506 2.506 0 0 0-1.762-1.766C18.265 5.007 12 5 12 5s-6.264-.007-7.831.404a2.56 2.56 0 0 0-1.766 1.778c-.413 1.566-.417 4.814-.417 4.814s-.004 3.264.406 4.814c.23.857.905 1.534 1.763 1.765 1.582.43 7.83.437 7.83.437s6.265.007 7.831-.403a2.515 2.515 0 0 0 1.767-1.763c.414-1.565.417-4.812.417-4.812s.02-3.265-.407-4.831zM9.996 15.005l.005-6 5.207 3.005-5.212 2.995z"></path>--}}
{{--                                                                            </svg>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}

{{--                                                                <div class="text-md">--}}
{{--                                                                    <div x-cloak x-show="tab === 'tab1'"--}}
{{--                                                                         class="flex gap-x-2 items-center">--}}
{{--                                                                        <div class="w-9/12 mx-auto">--}}
{{--                                                                            <label for="nft-description"--}}
{{--                                                                                   class="form-label">Brand--}}
{{--                                                                                Description</label>--}}
{{--                                                                            <textarea class="form-control"--}}
{{--                                                                                      id="nft-description" rows="8"--}}
{{--                                                                                      placeholder="Enter Description"></textarea>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}

{{--                                                                    <div x-cloak x-show="tab === 'tab2'"--}}
{{--                                                                         class="flex gap-x-2">--}}
{{--                                                                        <div class="w-8/12 mx-auto">--}}
{{--                                                                            <label for="nft-description"--}}
{{--                                                                                   class="form-label">Brand--}}
{{--                                                                                Description</label>--}}
{{--                                                                            <textarea class="form-control"--}}
{{--                                                                                      id="nft-description" rows="5"--}}
{{--                                                                                      placeholder="Enter Description"></textarea>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}

{{--                                                                    <div x-cloak x-show="tab === 'tab3'"--}}
{{--                                                                         class="flex gap-x-2">--}}
{{--                                                                        <div class="w-8/12 mx-auto">--}}
{{--                                                                            <label for="nft-description"--}}
{{--                                                                                   class="form-label">Brand--}}
{{--                                                                                Description</label>--}}
{{--                                                                            <textarea class="form-control"--}}
{{--                                                                                      id="nft-description" rows="5"--}}
{{--                                                                                      placeholder="Enter Description"></textarea>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}

{{--                                                                    <div x-cloak x-show="tab === 'tab4'"--}}
{{--                                                                         class="flex gap-x-2">--}}
{{--                                                                        <div class="w-8/12 mx-auto">--}}
{{--                                                                            <label for="nft-description"--}}
{{--                                                                                   class="form-label">Brand--}}
{{--                                                                                Description</label>--}}
{{--                                                                            <textarea class="form-control"--}}
{{--                                                                                      id="nft-description" rows="5"--}}
{{--                                                                                      placeholder="Enter Description"></textarea>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}

{{--                                                                    <div x-cloak x-show="tab === 'tab5'"--}}
{{--                                                                         class="flex gap-x-2">--}}
{{--                                                                        <div class="w-8/12 mx-auto">--}}
{{--                                                                            <label for="nft-description"--}}
{{--                                                                                   class="form-label">Brand--}}
{{--                                                                                Description</label>--}}
{{--                                                                            <textarea class="form-control"--}}
{{--                                                                                      id="nft-description" rows="5"--}}
{{--                                                                                      placeholder="Enter Description"></textarea>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}

{{--                                                            <div class="ti-modal-new-footer">--}}
{{--                                                                <button type="button"--}}
{{--                                                                        class="hs-dropdown-toggle ti-btn  btn-wave ti-btn-secondary"--}}
{{--                                                                        data-hs-overlay="#hs-vertically-centered-modal">--}}
{{--                                                                    Close--}}
{{--                                                                </button>--}}
{{--                                                                <a class="ti-btn  btn-wave ti-btn-primary"--}}
{{--                                                                   href="javascript:void(0);">--}}
{{--                                                                    Save changes--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

                                                <button
                                                    class="inline-flex items-center gap-x-2 bg-transparent border border-info rounded-sm p-3">
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
                                                        AI Assistant
                                                    </span>
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="nft-description" class="form-label">Caption</label>
                                        <textarea class="form-control" id="nft-description" rows="3"
                                                  placeholder="Enter Description"></textarea>
                                    </div>

                                    <div class="xl:col-span-12 col-span-12 flex gap-10 items-start">
                                        <div class="">
                                            <button
                                                class="inline-flex items-center gap-x-2 bg-transparent border border-info rounded-sm p-3">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="w-6 h-6 text-info" viewBox="0 0 16 16">
                                                <path
                                                    d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5M3 8.062C3 6.76 4.235 5.765 5.53 5.886a26.6 26.6 0 0 0 4.94 0C11.765 5.765 13 6.76 13 8.062v1.157a.93.93 0 0 1-.765.935c-.845.147-2.34.346-4.235.346s-3.39-.2-4.235-.346A.93.93 0 0 1 3 9.219zm4.542-.827a.25.25 0 0 0-.217.068l-.92.9a25 25 0 0 1-1.871-.183.25.25 0 0 0-.068.495c.55.076 1.232.149 2.02.193a.25.25 0 0 0 .189-.071l.754-.736.847 1.71a.25.25 0 0 0 .404.062l.932-.97a25 25 0 0 0 1.922-.188.25.25 0 0 0-.068-.495c-.538.074-1.207.145-1.98.189a.25.25 0 0 0-.166.076l-.754.785-.842-1.7a.25.25 0 0 0-.182-.135"/>
                                                <path
                                                    d="M8.5 1.866a1 1 0 1 0-1 0V3h-2A4.5 4.5 0 0 0 1 7.5V8a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v1a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1v-.5A4.5 4.5 0 0 0 10.5 3h-2zM14 7.5V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.5A3.5 3.5 0 0 1 5.5 4h5A3.5 3.5 0 0 1 14 7.5"/>
                                            </svg>
                                            </span>
                                                <span class="">
                                                AI Assistant
                                            </span>
                                            </button>
                                        </div>

                                        <div class="upload-container col-span-12 rounded-md ">
                                            <div
                                                class="flex border  border-info bg-transparent rounded-md ">
                                                <input
                                                    type="file"
                                                    class="file-upload hidden"
                                                />
                                                <div
                                                    class="inline-flex items-center gap-x-3 cursor-pointer upload-label ">
                                                <span class="bg-info p-2 rounded-l-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                         fill="currentColor" class="w-6 h-6 text-white"
                                                         viewBox="0 0 16 16">
                                                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                                                    <path
                                                        d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54L1 12.5v-9a.5.5 0 0 1 .5-.5z"/>
                                                </svg>
                                                </span>
                                                    <span class="p-2  ">Upload Image</span>
                                                </div>
                                            </div>
                                            <p class="file-name mt-2 text-xs text-gray-500">No file selected</p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer text-center flex items-center gap-x-5">
                    <button type="button" class="ti-btn ti-btn-info-gradient btn-wave ">Post
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="w-4 h-4 text-white" viewBox="0 0 16 16">
                            <path
                                d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div
                class="w-full xxl:col-span-3 sm:col-span-4 col-span-12 gap-y-8 flex flex-col justify-start items-center">
                <div class="h-auto w-full rounded-lg border-2 border-gray-600 relative">
                    <div class="max-w-max bg-white rounded-full p-1 absolute -top-3 -right-3">
                        <svg width="90" height="90" viewBox="0 0 90 90" fill="none"
                             xmlns="http://www.w3.org/2000/svg" class="w-8 h-8">
                            <path
                                d="M85 45C85 22.9086 67.0914 5 45 5C22.9086 5 5 22.9086 5 45C5 64.9649 19.6273 81.5133 38.75 84.5141V56.5625H28.5938V45H38.75V36.1875C38.75 26.1625 44.7219 20.625 53.8586 20.625C58.2352 20.625 62.8125 21.4063 62.8125 21.4063V31.25H57.7687C52.8 31.25 51.25 34.3336 51.25 37.4969V45H62.3438L60.5703 56.5625H51.25V84.5141C70.3727 81.5133 85 64.9656 85 45Z"
                                fill="#1877F2"/>
                            <path
                                d="M60.5703 56.5625L62.3438 45H51.25V37.4969C51.25 34.3336 52.8 31.25 57.7687 31.25H62.8125V21.4062C62.8125 21.4062 58.2352 20.625 53.8586 20.625C44.7219 20.625 38.75 26.1625 38.75 36.1875V45H28.5938V56.5625H38.75V84.5141C40.7867 84.8336 42.8734 85 45 85C47.1266 85 49.2133 84.8336 51.25 84.5141V56.5625H60.5703Z"
                                fill="white"/>
                        </svg>
                    </div>
                    <div class="p-3 space-y-1">
                        <div class="flex items-center justify-start gap-x-5 ">
                            <div class="rounded-full bg-gray-700 p-1 w-12 h-12 flex justify-center items-center">
                                <img src="" alt="">
                            </div>
                            <div>
                                <div class="font-medium">UserName</div>
                                <div class="items-center flex gap-x-3">
                                    <span>January 17</span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                             class="size-4 fill-gray-500">
                                          <path fill-rule="evenodd"
                                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM6.262 6.072a8.25 8.25 0 1 0 10.562-.766 4.5 4.5 0 0 1-1.318 1.357L14.25 7.5l.165.33a.809.809 0 0 1-1.086 1.085l-.604-.302a1.125 1.125 0 0 0-1.298.21l-.132.131c-.439.44-.439 1.152 0 1.591l.296.296c.256.257.622.374.98.314l1.17-.195c.323-.054.654.036.905.245l1.33 1.108c.32.267.46.694.358 1.1a8.7 8.7 0 0 1-2.288 4.04l-.723.724a1.125 1.125 0 0 1-1.298.21l-.153-.076a1.125 1.125 0 0 1-.622-1.006v-1.089c0-.298-.119-.585-.33-.796l-1.347-1.347a1.125 1.125 0 0 1-.21-1.298L9.75 12l-1.64-1.64a6 6 0 0 1-1.676-3.257l-.172-1.03Z"
                                                clip-rule="evenodd"/>
                                        </svg>
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class="py-1.5">
                            {{\Illuminate\Support\Str::words('
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, aliquam aperiam at dolorem expedita illum iure molestias nulla reiciendis repellendus tempora tenetur unde ut.
                            ', 16)}}
                        </div>
                        <div class="w-full h-46 overflow-hidden rounded-sm">
                            <img src="{{asset('images/partials/samp1.jpg')}}" alt="" class="w-full h-full">
                        </div>
                        <div class="flex justify-between items-center w-full h-16">
                            <div class="inline-flex items-center gap-x-1 text-xs ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z"/>
                                </svg>
                                <span>Like</span>
                            </div>
                            <div class="inline-flex items-center gap-x-1 text-xs ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 0 1 1.037-.443 48.282 48.282 0 0 0 5.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z"/>
                                </svg>
                                <span>Comments</span>
                            </div>
                            <div class="inline-flex items-center gap-x-1 text-xs ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z"/>
                                </svg>

                                <span>Share</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="w-full xxl:col-span-3 sm:col-span-4 col-span-12 gap-y-8 flex flex-col justify-start items-center">
                <div class="h-auto w-full rounded-lg border-2 border-gray-600 relative">
                    <div class="max-w-max bg-white rounded-full p-1 absolute -top-3 -right-3">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             width="24" height="24"
                             viewBox="0 0 24 24"
                             style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path
                                d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path>
                            <circle cx="16.806" cy="7.207"
                                    r="1.078"></circle>
                            <path
                                d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"></path>
                        </svg>
{{--                        <svg width="90" height="90" viewBox="0 0 90 90" fill="none"--}}
{{--                             xmlns="http://www.w3.org/2000/svg" class="w-8 h-8">--}}
{{--                            <path--}}
{{--                                d="M85 45C85 22.9086 67.0914 5 45 5C22.9086 5 5 22.9086 5 45C5 64.9649 19.6273 81.5133 38.75 84.5141V56.5625H28.5938V45H38.75V36.1875C38.75 26.1625 44.7219 20.625 53.8586 20.625C58.2352 20.625 62.8125 21.4063 62.8125 21.4063V31.25H57.7687C52.8 31.25 51.25 34.3336 51.25 37.4969V45H62.3438L60.5703 56.5625H51.25V84.5141C70.3727 81.5133 85 64.9656 85 45Z"--}}
{{--                                fill="#1877F2"/>--}}
{{--                            <path--}}
{{--                                d="M60.5703 56.5625L62.3438 45H51.25V37.4969C51.25 34.3336 52.8 31.25 57.7687 31.25H62.8125V21.4062C62.8125 21.4062 58.2352 20.625 53.8586 20.625C44.7219 20.625 38.75 26.1625 38.75 36.1875V45H28.5938V56.5625H38.75V84.5141C40.7867 84.8336 42.8734 85 45 85C47.1266 85 49.2133 84.8336 51.25 84.5141V56.5625H60.5703Z"--}}
{{--                                fill="white"/>--}}
{{--                        </svg>--}}
                    </div>
                    <div class="p-3 space-y-1">
                        <div class="flex items-center justify-start gap-x-5 ">
                            <div class="rounded-full bg-gray-700 p-1 w-12 h-12 flex justify-center items-center">
                                <img src="" alt="">
                            </div>
                            <div>
                                <div class="font-medium">UserName</div>
                                <div class="items-center flex gap-x-3">
                                    <span>January 17</span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                             class="size-4 fill-gray-500">
                                          <path fill-rule="evenodd"
                                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM6.262 6.072a8.25 8.25 0 1 0 10.562-.766 4.5 4.5 0 0 1-1.318 1.357L14.25 7.5l.165.33a.809.809 0 0 1-1.086 1.085l-.604-.302a1.125 1.125 0 0 0-1.298.21l-.132.131c-.439.44-.439 1.152 0 1.591l.296.296c.256.257.622.374.98.314l1.17-.195c.323-.054.654.036.905.245l1.33 1.108c.32.267.46.694.358 1.1a8.7 8.7 0 0 1-2.288 4.04l-.723.724a1.125 1.125 0 0 1-1.298.21l-.153-.076a1.125 1.125 0 0 1-.622-1.006v-1.089c0-.298-.119-.585-.33-.796l-1.347-1.347a1.125 1.125 0 0 1-.21-1.298L9.75 12l-1.64-1.64a6 6 0 0 1-1.676-3.257l-.172-1.03Z"
                                                clip-rule="evenodd"/>
                                        </svg>
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class="py-1.5">
                            {{\Illuminate\Support\Str::words('
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, aliquam aperiam at dolorem expedita illum iure molestias nulla reiciendis repellendus tempora tenetur unde ut.
                            ', 16)}}
                        </div>
                        <div class="w-full h-46 overflow-hidden rounded-sm">
                            <img src="{{asset('images/partials/samp1.jpg')}}" alt="" class="w-full h-full">
                        </div>
                        <div class="flex justify-between items-center w-full h-16">
                            <div class="inline-flex items-center gap-x-1 text-xs ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z"/>
                                </svg>
                                <span>Like</span>
                            </div>
                            <div class="inline-flex items-center gap-x-1 text-xs ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 0 1 1.037-.443 48.282 48.282 0 0 0 5.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z"/>
                                </svg>
                                <span>Comments</span>
                            </div>
                            <div class="inline-flex items-center gap-x-1 text-xs ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z"/>
                                </svg>

                                <span>Share</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


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
