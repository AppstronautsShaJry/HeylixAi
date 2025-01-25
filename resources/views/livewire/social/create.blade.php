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

                                    <div class="flex flex-row items-center gap-5 col-span-12 ">
                                        <div class="w-full flex flex-col ">
                                            <label for="input-placeholder" class="form-label">Type of Content</label>
                                            <x-input.single-select>
                                                <option value="AI">Image</option>
                                                <option value="Technology">Corousel</option>
                                                <option value="Business">Shorts/Reel</option>
                                                <option value="Business">Animated Post</option>
                                            </x-input.single-select>
                                        </div>
                                        <div class="w-full flex flex-col">
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
                                    </div>

                                    <div class="col-span-12 flex flex-col">
                                        <div id="container" x-data="voiceTyping"
                                             class="text-center w-full ">
                                                <textarea
                                                    id="text-box"
                                                    x-model="text"
                                                    placeholder="Start speaking..."
                                                    class="w-full h-48 p-4 text-lg border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 resize-none"
                                                ></textarea>
                                            <div class="flex justify-start gap-4">
                                                <button
                                                    id="start-button"
                                                    @click="startVoiceTyping"
                                                    class="inline-flex items-center gap-x-2 bg-transparent border border-info rounded-sm p-3"
                                                ><span>
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
                                                        AI Assistant
                                                    </span>
                                                </button>

                                                <div id="hs-vertically-centered-modal"
                                                     class="hs-overlay hidden ti-modal">
                                                    <div
                                                        class="hs-overlay-open:mt-7 ti-modal-box-new mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center">
                                                        <div class="ti-modal-content w-full">
                                                            <div class="ti-modal-header">
                                                                <h6 class="modal-title text-[1rem] font-semibold"
                                                                    id="staticBackdropLabel2">Caption
                                                                </h6>
                                                                <button type="button"
                                                                        class="hs-dropdown-toggle ti-modal-close-btn"
                                                                        data-hs-overlay="#hs-vertically-centered-modal">
                                                                    <span class="sr-only">Close</span>
                                                                    <svg class="w-3.5 h-3.5" width="8" height="8"
                                                                         viewBox="0 0 8 8" fill="none"
                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                            fill="currentColor"/>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <div class="ti-modal-body w-full">
                                                                <div class="flex w-full gap-5 h-60">
                                                                    <div class="w-full h-full flex flex-wrap gap-5">
                                                                        <div class="w-full h-full">
                                                                            <div class="h-full">
                                                                                <div
                                                                                    class="xl:col-span-12 col-span-12 h-[80%]">
                                                                                    <label for="nft-description"
                                                                                           class="form-label">AI
                                                                                        Generating
                                                                                        Captions</label>
                                                                                    <textarea
                                                                                        class="form-control w-full h-full"
                                                                                        id="nft-description" rows="3"
                                                                                        placeholder="Generate Caption for your FaceBook Post"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="flex px-4 justify-between items-center h-full">
                                                                <div
                                                                    class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12 h-full">
                                                                    <input type="number" class="form-control h-8 py-2"
                                                                           id="input-number"
                                                                           placeholder="Words Limit">
                                                                </div>

                                                                <div class="flex inline-flex">
                                                                    <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn  btn-wave ti-btn-secondary"
                                                                            data-hs-overlay="#hs-vertically-centered-modal">
                                                                        Close
                                                                    </button>
                                                                    <a class="ti-btn  btn-wave ti-btn-primary"
                                                                       href="javascript:void(0);">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             fill="none"
                                                                             viewBox="0 0 24 24" stroke-width="1.5"
                                                                             stroke="currentColor" class="size-6">
                                                                            <path stroke-linecap="round"
                                                                                  stroke-linejoin="round"
                                                                                  d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z"/>
                                                                        </svg>
                                                                        Generate
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ti-btn-group !p-0 !border-0 !m-0">
                                                    <div class="hs-dropdown ti-dropdown">
                                                        <button type="button" id="dropdownMenuButton1"
                                                                aria-expanded="false"
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
                                                        Pre Defined <i
                                                                    class="ri-arrow-down-s-line align-middle inline-block"></i>
                                                    </span>
                                                        </button>
                                                        {{--                                                        <button class="ti-btn btn-wave  ti-btn-outline-info ti-dropdown-toggle" type="button"--}}
                                                        {{--                                                                id="dropdownMenuButton1"--}}
                                                        {{--                                                                aria-expanded="false">--}}
                                                        {{--                                                            Pre Defined<i class="ri-arrow-down-s-line align-middle inline-block"></i>--}}
                                                        {{--                                                        </button>--}}
                                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                            aria-labelledby="dropdownMenuButton1">
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Food</a>
                                                            </li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Business</a>
                                                            </li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Home</a>
                                                            </li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Finance</a>
                                                            </li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Travel</a>
                                                            </li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Technology</a>
                                                            </li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Health</a>
                                                            </li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Education</a>
                                                            </li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Entertainment</a>
                                                            </li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Sports</a>
                                                            </li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Shopping</a>
                                                            </li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Fashion</a>
                                                            </li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Real
                                                                    Estate</a></li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Automotive</a>
                                                            </li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Lifestyle</a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="xl:col-span-12 col-span-12 flex gap-10 items-start">

                                        <div class=" text-center flex items-center gap-x-5">
                                            <a href="{{route('create.heylix')}}">
{{--                                                <button type="button" class="ti-btn ti-btn-info-gradient btn-wave">--}}

{{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"--}}
{{--                                                         class="w-4 h-4 text-white" viewBox="0 0 16 16">--}}
{{--                                                        <path--}}
{{--                                                            d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>--}}
{{--                                                    </svg>--}}
{{--                                                    --}}
{{--                                                </button>--}}

                                                <button
                                                    id="start-button"
                                                    @click="startVoiceTyping"
                                                    class="inline-flex items-center gap-x-2 bg-transparent border border-info rounded-sm p-3"
                                                ><span>
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
                                                        Get Creative
                                                    </span>
                                                </button>
                                            </a>


                                        </div>

                                        <div class="upload-container col-span-12 rounded-md ">
                                            <div
                                                class="flex border border-info bg-transparent rounded-md ">
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

                <div class="flex flex-row justify-end">
                    <div class=" text-center flex items-center gap-x-5">
                        <button type="button" class="ti-btn ti-btn-info-gradient btn-wave ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="w-4 h-4 text-white" viewBox="0 0 16 16">
                                <path
                                    d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>
                            </svg>
                            Post
                        </button>
                    </div>
                </div>
            </div>

            <div
                class="w-full xxl:col-span-3 sm:col-span-4 col-span-12 gap-y-8 flex flex-col justify-start items-center h-[45rem] overflow-y-auto py-8 px-4">
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

                <!-- Instagram  -->
                <div class="h-auto w-full rounded-lg border-2 border-gray-600 relative">
                    <div class="max-w-max bg-white rounded-full p-1 absolute -top-3 -right-3">
                        <svg width="90" height="90" class="w-8 h-8" viewBox="0 0 90 90" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_799_5500" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="4"
                                  y="4" width="81" height="81">
                                <path
                                    d="M28.2542 5.09731C23.9981 5.29819 21.0912 5.9799 18.551 6.97524C15.9214 8.00037 13.6923 9.37419 11.4749 11.6007C9.2548 13.8286 7.89141 16.0616 6.87408 18.6938C5.8891 21.2405 5.22165 24.1488 5.0337 28.4075C4.8471 32.674 4.80431 34.0348 4.82511 44.8968C4.84583 55.7574 4.89377 57.1208 5.09722 61.3886C5.30067 65.6435 5.97984 68.5491 6.97517 71.0906C8.0016 73.7202 9.37401 75.9481 11.6018 78.1669C13.8284 80.3857 16.0627 81.7478 18.6961 82.7665C21.2402 83.7502 24.1497 84.4202 28.4071 84.6068C32.6736 84.7947 34.0356 84.8362 44.8949 84.8155C55.7592 84.7947 57.1214 84.7468 61.3878 84.5446C65.6439 84.3411 68.5482 83.6594 71.091 82.6667C73.7205 81.6376 75.9496 80.2677 78.1671 78.0399C80.3846 75.8133 81.7479 73.579 82.7654 70.9455C83.7503 68.4014 84.4203 65.4918 84.6057 61.237C84.7923 56.9679 84.8364 55.6045 84.8156 44.7438C84.7949 33.8819 84.7457 32.5211 84.5435 28.2559C84.3413 23.9972 83.6596 21.0928 82.6655 18.55C81.6378 15.9204 80.2667 13.6938 78.0401 11.4737C75.8136 9.25625 73.5793 7.89023 70.9458 6.87546C68.4005 5.89047 65.4922 5.21912 61.2348 5.03509C56.9684 4.84587 55.6063 4.80443 44.7432 4.82515C33.8827 4.84588 32.5207 4.89255 28.2542 5.09731ZM28.7208 77.4074C24.8211 77.2376 22.7034 76.5896 21.2921 76.0466C19.4232 75.3234 18.0897 74.4564 16.6861 73.0632C15.2851 71.6647 14.4155 70.335 13.6858 68.4701C13.1376 67.0587 12.478 64.9436 12.2952 61.0439C12.0969 56.8279 12.0516 55.563 12.0321 44.8825C12.0114 34.2046 12.0502 32.9397 12.2343 28.7199C12.4015 24.8227 13.0534 22.7024 13.5951 21.2924C14.3182 19.4209 15.1827 18.0899 16.5785 16.6863C17.9769 15.2827 19.3066 14.4157 21.1728 13.686C22.5829 13.1352 24.698 12.4807 28.5963 12.2954C32.8148 12.0958 34.0784 12.053 44.7562 12.0323C55.4365 12.0115 56.7014 12.0492 60.9212 12.2345C64.8183 12.4043 66.9385 13.0497 68.3473 13.5953C70.2174 14.3185 71.551 15.1803 72.9533 16.5787C74.3556 17.9772 75.2252 19.3043 75.9548 21.1744C76.5056 22.5806 77.1601 24.6983 77.3442 28.5954C77.545 32.814 77.5904 34.0789 77.6098 44.7568C77.6305 55.4373 77.5917 56.7022 77.4064 60.9194C77.2366 64.8191 76.5899 66.9382 76.0456 68.3508C75.3224 70.2184 74.4579 71.552 73.0608 72.9556C71.6638 74.354 70.3341 75.2262 68.4665 75.9559C67.0591 76.5053 64.9414 77.1611 61.0456 77.3465C56.8272 77.5448 55.5635 77.5901 44.8819 77.6096C34.2041 77.6303 32.9405 77.5901 28.7208 77.4074ZM61.3295 23.4386C61.3346 26.0877 63.4886 28.2326 66.1376 28.2274C68.7879 28.2222 70.9328 26.0695 70.929 23.4204C70.9237 20.7714 68.7698 18.6252 66.1195 18.6304C63.4692 18.6355 61.3243 20.7895 61.3295 23.4386ZM24.282 44.8592C24.304 56.2032 33.5173 65.379 44.8586 65.357C56.2012 65.335 65.382 56.1242 65.3601 44.7801C65.338 33.44 56.1234 24.259 44.7795 24.281C33.4382 24.303 24.2599 33.5177 24.282 44.8592ZM31.4864 44.8449C31.4734 37.4822 37.4325 31.5011 44.7938 31.4882C52.1564 31.4739 58.1387 37.4304 58.1529 44.7944C58.1673 52.1584 52.2082 58.1382 44.8443 58.1525C37.483 58.1667 31.5007 52.2089 31.4864 44.8449Z"
                                    fill="#000008"/>
                            </mask>
                            <g mask="url(#mask0_799_5500)">
                                <rect x="1.46875" y="1.47168" width="87.1" height="87.1"
                                      fill="url(#paint0_radial_799_5500)"/>
                                <g filter="url(#filter0_f_799_5500)">
                                    <ellipse cx="17.769" cy="-1.84334" rx="50.25" ry="35.175"
                                             transform="rotate(-14.9317 17.769 -1.84334)" fill="#7334FF"/>
                                </g>
                                <g filter="url(#filter1_f_799_5500)">
                                    <circle cx="85.7786" cy="2.02962" r="47.4583" fill="#B202F5"/>
                                </g>
                                <g filter="url(#filter2_f_799_5500)">
                                    <circle cx="18.218" cy="79.6379" r="26.8" fill="#FFB401"/>
                                </g>
                            </g>
                            <defs>
                                <filter id="filter0_f_799_5500" x="-68.4828" y="-75.0736" width="172.501"
                                        height="146.46" filterUnits="userSpaceOnUse"
                                        color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                             result="shape"/>
                                    <feGaussianBlur stdDeviation="18.425"
                                                    result="effect1_foregroundBlur_799_5500"/>
                                </filter>
                                <filter id="filter1_f_799_5500" x="-6.34636" y="-90.0954" width="184.251"
                                        height="184.25" filterUnits="userSpaceOnUse"
                                        color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                             result="shape"/>
                                    <feGaussianBlur stdDeviation="22.3333"
                                                    result="effect1_foregroundBlur_799_5500"/>
                                </filter>
                                <filter id="filter2_f_799_5500" x="-44.3154" y="17.1046" width="125.068"
                                        height="125.066" filterUnits="userSpaceOnUse"
                                        color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                             result="shape"/>
                                    <feGaussianBlur stdDeviation="17.8667"
                                                    result="effect1_foregroundBlur_799_5500"/>
                                </filter>
                                <radialGradient id="paint0_radial_799_5500" cx="0" cy="0" r="1"
                                                gradientUnits="userSpaceOnUse"
                                                gradientTransform="translate(36.0854 84.6633) rotate(-61.8868) scale(46.2103)">
                                    <stop stop-color="#FFD502"/>
                                    <stop offset="0.869374" stop-color="#FF1154"/>
                                </radialGradient>
                            </defs>
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
                            <div class="w-full gap-x-4">
                                <div class="inline-flex items-center gap-x-2 text-xs ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-heart size-4">
                                        <path
                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                    </svg>
                                    {{--                                    <span>Like</span>--}}
                                </div>
                                <div class="inline-flex items-center gap-x-2 text-xs ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-message-circle size-4">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                                    </svg>
                                    {{--                                    <span>Comments</span>--}}
                                </div>
                                <div class="inline-flex items-center gap-x-2 text-xs ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-send size-4">
                                        <line x1="22" y1="2" x2="11" y2="13"></line>
                                        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                    </svg>

                                    {{--                                    <span>Send</span>--}}
                                </div>
                            </div>
                            <div class="inline-flex items-center gap-x-1 text-xs ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-bookmark size-4">
                                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                </svg>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="h-auto w-full rounded-lg border-2 border-gray-600 relative">
                    <div class="max-w-max bg-white rounded-full p-1 absolute -top-3 -right-3">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                             id="Layer_1" width="24px" class="text-white bg-white" height="24px" viewBox="0 0 24 24"
                             style="enable-background:new 0 0 24 24;" xml:space="preserve">
                <g>
                    <polygon
                        points="12.153992,10.729553 8.088684,5.041199 5.92041,5.041199 10.956299,12.087097 11.59021,12.97345 15.900635,19.009583 18.068909,19.009583 12.785217,11.615906"/>
                    <path
                        d="M21.15979,1H2.84021C1.823853,1,1,1.823853,1,2.84021v18.31958C1,22.176147,1.823853,23,2.84021,23h18.31958 C22.176147,23,23,22.176147,23,21.15979V2.84021C23,1.823853,22.176147,1,21.15979,1z M15.235352,20l-4.362549-6.213013 L5.411438,20H4l6.246887-7.104675L4,4h4.764648l4.130127,5.881958L18.06958,4h1.411377l-5.95697,6.775635L20,20H15.235352z"/>
                </g>
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

                        <div class="flex justify-between items-center w-11/12 h-16 mx-auto">

                            <div class="inline-flex items-center text-xs ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-message-circle size-4">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                                </svg>
                                {{--                                    <span>Comments</span>--}}
                            </div>

                            <div class="inline-flex items-center text-xs ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 0 0-3.7-3.7 48.678 48.678 0 0 0-7.324 0 4.006 4.006 0 0 0-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 0 0 3.7 3.7 48.656 48.656 0 0 0 7.324 0 4.006 4.006 0 0 0 3.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3-3 3"/>
                                </svg>
                            </div>

                            <div class="inline-flex items-center text-xs ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-heart size-4">
                                    <path
                                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                </svg>
                                {{--                                    <span>Like</span>--}}
                            </div>

                            <div class="inline-flex items-center text-xs ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-bookmark size-4">
                                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                </svg>
                            </div>

                            <div class="inline-flex items-center text-xs ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-upload size-4">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="17 8 12 3 7 8"></polyline>
                                    <line x1="12" y1="3" x2="12" y2="15"></line>
                                </svg>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="h-auto w-full rounded-lg border-2 border-gray-600 relative">
                    <div class="max-w-max bg-white rounded-full p-1 absolute -top-3 -right-3">
                        <svg width="99" height="90" viewBox="0 0 99 90" fill="none"
                             xmlns="http://www.w3.org/2000/svg" class="w-8 h-8">
                            <path
                                d="M92.7853 74.1664C91.3532 74.1802 89.9849 74.7605 88.9796 75.7804C87.9742 76.8004 87.4137 78.177 87.4205 79.6091C87.4274 81.0412 88.0012 82.4124 89.0163 83.4226C90.0314 84.4329 91.4053 85 92.8374 85C94.2696 85 95.6434 84.4329 96.6585 83.4226C97.6736 82.4124 98.2474 81.0412 98.2543 79.6091C98.2612 78.177 97.7006 76.8004 96.6953 75.7804C95.69 74.7605 94.3216 74.1802 92.8895 74.1664H92.7853ZM92.7853 84.3798C91.846 84.3955 90.9231 84.1322 90.1334 83.6234C89.3437 83.1145 88.7227 82.3829 88.3488 81.5211C87.9748 80.6592 87.8649 79.7059 88.0328 78.7816C88.2007 77.8573 88.639 77.0035 89.2921 76.3282C89.9452 75.653 90.784 75.1866 91.7022 74.988C92.6204 74.7894 93.5769 74.8675 94.4507 75.2125C95.3245 75.5575 96.0763 76.1539 96.6112 76.9262C97.146 77.6985 97.4399 78.6121 97.4555 79.5514V79.6311C97.4818 80.8634 97.0177 82.0556 96.1651 82.9456C95.3125 83.8357 94.1414 84.3507 92.9091 84.3774H92.7865M71.9918 72.6865H60.2212V54.2532C60.2212 49.8576 60.1427 44.1991 54.0993 44.1991C47.9687 44.1991 47.0307 48.9883 47.0307 53.9332V72.6852H35.2601V34.7789H46.5599V39.9592H46.7181C47.8489 38.0257 49.483 36.4351 51.4463 35.3568C53.4097 34.2786 55.6287 33.753 57.8671 33.8361C69.7971 33.8361 71.9967 41.6831 71.9967 51.8917L71.9918 72.6865ZM21.979 29.5974C20.628 29.5977 19.3073 29.1973 18.1839 28.4469C17.0604 27.6966 16.1848 26.6299 15.6675 25.3819C15.1503 24.1338 15.0148 22.7605 15.2781 21.4354C15.5415 20.1103 16.1918 18.8931 17.1469 17.9377C18.102 16.9822 19.319 16.3314 20.644 16.0676C21.9689 15.8038 23.3424 15.9389 24.5906 16.4556C25.8388 16.9724 26.9058 17.8477 27.6565 18.9709C28.4073 20.094 28.8081 21.4146 28.8084 22.7656C28.8085 23.6626 28.632 24.5508 28.2889 25.3796C27.9458 26.2084 27.4428 26.9615 26.8086 27.5959C26.1744 28.2303 25.4215 28.7336 24.5929 29.077C23.7642 29.4204 22.876 29.5973 21.979 29.5974ZM27.8643 72.6865H16.0814V34.7789H27.8643V72.6865ZM77.8599 5.00541H10.1667C8.63024 4.98807 7.14977 5.58143 6.05058 6.65509C4.9514 7.72876 4.32344 9.1949 4.30469 10.7313V78.7054C4.3228 80.2426 4.95036 81.7097 6.04951 82.7845C7.14866 83.8593 8.62948 84.4538 10.1667 84.4375H77.8599C79.4002 84.4568 80.8852 83.864 81.9886 82.7892C83.0921 81.7145 83.7239 80.2457 83.7452 78.7054V10.7264C83.7233 9.18694 83.0911 7.71915 81.9875 6.6455C80.884 5.57186 79.3994 4.9802 77.8599 5.00051M93.6448 79.9266C93.8464 79.9286 94.0462 79.8892 94.2319 79.8108C94.4176 79.7324 94.5853 79.6166 94.7244 79.4707C94.8635 79.3248 94.9711 79.1519 95.0406 78.9627C95.1101 78.7734 95.14 78.5719 95.1284 78.3707C95.1284 77.2672 94.4626 76.74 93.0967 76.74H90.8897V82.5174H91.7198V79.999H92.7399L92.7632 80.0296L94.3462 82.5174H95.2339L93.5308 79.9426L93.6448 79.9266ZM92.6848 79.3479H91.7223V77.3947H92.9422C93.5725 77.3947 94.2909 77.4977 94.2909 78.3229C94.2909 79.2719 93.5639 79.3479 92.6799 79.3479"
                                fill="#2867B2"/>
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
                            <!-- Like button -->
                            <div class="inline-flex items-center gap-x-1 text-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z"/>
                                </svg>
                                <span>Like</span>
                            </div>

                            <!-- Comment button -->
                            <div class="inline-flex items-center gap-x-1 text-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 0 1 1.037-.443 48.282 48.282 0 0 0 5.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z"/>
                                </svg>
                                <span>Comment</span>
                            </div>

                            <!-- Share button -->
                            <div class="inline-flex items-center gap-x-1 text-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 0 0-3.7-3.7 48.678 48.678 0 0 0-7.324 0 4.006 4.006 0 0 0-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 0 0 3.7 3.7 48.656 48.656 0 0 0 7.324 0 4.006 4.006 0 0 0 3.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3-3 3"/>
                                </svg>
                                <span>Repost</span>
                            </div>

                            <!-- Send button -->
                            <div class="inline-flex items-center gap-x-1 text-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-send size-4">
                                    <line x1="22" y1="2" x2="11" y2="13"></line>
                                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                </svg>
                                <span>Send</span>
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
