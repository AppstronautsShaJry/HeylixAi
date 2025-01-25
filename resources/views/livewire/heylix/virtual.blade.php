<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <nav>
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Calendar</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->

        <div x-data="{ currentPage: window.location.pathname }" class="p-2 py-6 flex items-center font-medium">
            <div
                :class="currentPage === '/jobstatus-heylix' ? 'bg-[#FF5D9F]  rounded-l-sm text-white ' : ' hover:text-gray-400 dark:text-gray-400  rounded-md '"
                class="max-w-max py-3 px-2 group">
                <a href="/jobstatus-heylix" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    JobStatus
                </a>
            </div>
            <!-- Twitter Tab -->
            <div
                :class="currentPage === '/create-heylix' ? 'bg-[#FF5D9F]   text-white' : 'hover:text-gray-400 dark:text-gray-400  rounded-md'"
                class="max-w-max py-3 px-2 group">
                <a href="/create-heylix" class="text-sm inline-flex items-center gap-x-3 dark:hover:text-white">
                    Content Creation
                </a>
            </div>
            <div
                :class="currentPage === '/brand-heylix' ? 'bg-[#FF5D9F]  text-white ' : 'hover:text-gray-400 dark:text-gray-400  rounded-md '"
                class="max-w-max py-3 px-2 group">
                <a href="/brand-heylix" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    Branding
                </a>
            </div>
            <div
                :class="currentPage === '/virtual-heylix' ? 'bg-[#FF5D9F]  rounded-r-sm text-white ' : ' hover:text-gray-400 dark:text-gray-400  rounded-md '"
                class="max-w-max py-3 px-2 group">
                <a href="/virtual-heylix" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    Virtual Staff
                </a>
            </div>
        </div>


        <!-- Start::app-content -->

        <!-- Page Header Close -->

        <div class="main-chart-wrapper lg:gap-2 gap-0 mb-2 lg:flex ">
            <div class="chat-info border border-defaultborder dark:border-defaultborder/10">
                <nav
                    class="flex rtl:space-x-reverse p-4 border-b border-defaultborder dark:border-defaultborder/10 flex-wrap sm:flex-nowrap gap-2"
                    aria-label="Tabs" role="tablist">
                    <button type="button"
                            class="hs-tab-active:bg-primary hs-tab-active:text-white flex-grow sm:flex-grow-0 bg-primary/10 py-2 px-[1.35rem] inline-flex items-center gap-2 text-sm font-medium text-center text-primary rounded-sm hover:text-primary  dark:text-[#8c9097] dark:text-white/50 dark:hover:text-white active"
                            id="users-tab" data-hs-tab="#users-tab1" aria-controls="users-tab1">
                        My Staff
                    </button>
                    <button type="button"
                            class="hs-tab-active:bg-primary hs-tab-active:text-white flex-grow sm:flex-grow-0 py-2 px-[1.35rem] inline-flex items-center gap-2 bg-primary/10 text-sm font-medium text-center text-primary rounded-sm hover:text-primary  dark:text-[#8c9097] dark:text-white/50 dark:hover:text-white"
                            id="groups-tab" data-hs-tab="#groups-tab-pane" aria-controls="groups-tab-pane">
                        Hire New
                    </button>
                </nav>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane show active border-0 chat-users-tab" id="users-tab1" role="tabpanel"
                         aria-labelledby="users-tab">
                        <ul class="list-none mb-0 mt-2 chat-users-tab" id="chat-msg-scroll">
                            <li class="pb-0">
                                <p class="text-textmuted dark:text-textmuted/50 text-[11px] font-medium mb-2 opacity-70">
                                    ACTIVE CHATS</p>
                            </li>
                            <li class="checkforactive">
                                <a href="javascript:void(0);" onclick="changeTheInfo(this,'Rashid Khan','5','online')">
                                    <div class="flex items-top">
                                        <div class="me-1 leading-none">
                                                    <span class="avatar avatar-md online me-2">
                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}"
                                                             alt="img">
                                                    </span>
                                        </div>
                                        <div class="flex-auto">
                                            <p class="mb-0 font-medium">
                                                Rashid Khan <span
                                                    class="float-end text-textmuted dark:text-textmuted/50 font-normal text-[11px]">11:12PM</span>
                                            </p>
                                            <p class="text-xs mb-0">
                                                <span class="chat-msg truncate">Hey!! you are there? &#128522;</span>
                                                <span
                                                    class="badge bg-primarytint2color rounded-full float-end">3</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="chat-msg-unread checkforactive">
                                <a href="javascript:void(0);" onclick="changeTheInfo(this,'Jamison Jen','2','online')">
                                    <div class="flex items-top">
                                        <div class="me-1 leading-none">
                                                    <span class="avatar avatar-md online me-2">
                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}"
                                                             alt="img">
                                                    </span>
                                        </div>
                                        <div class="flex-auto">
                                            <p class="mb-0 font-medium">
                                                Jamison Jen <span
                                                    class="float-end text-textmuted dark:text-textmuted/50 font-normal text-[11px]">06:52AM</span>
                                            </p>
                                            <p class="text-xs mb-0 chat-msg-typing ">
                                                <span class="chat-msg truncate">Typing...</span>
                                                <span class="chat-read-icon float-end align-middle"><i
                                                        class="ri-check-double-fill"></i></span>
                                                <span class="chat-read-icon float-end align-middle"><i
                                                        class="ri-check-double-fill"></i></span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="checkforactive">
                                <a href="javascript:void(0);" onclick="changeTheInfo(this,'Andy Max','10','online')">
                                    <div class="flex items-top">
                                        <div class="me-1 leading-none">
                                                    <span class="avatar avatar-md online me-2">
                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}"
                                                             alt="img">
                                                    </span>
                                        </div>
                                        <div class="flex-auto">
                                            <p class="mb-0 font-medium">
                                                Andy Max <span
                                                    class="float-end text-textmuted dark:text-textmuted/50 font-normal text-[11px]">10:15AM</span>
                                            </p>
                                            <p class="text-xs mb-0">
                                                <span class="chat-msg truncate">Great! I am happy to here this from you. &#9749;</span>
                                                <span class="chat-read-icon float-end align-middle"><i
                                                        class="ri-check-double-fill"></i></span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="checkforactive active">
                                <a href="javascript:void(0);"
                                   onclick="changeTheInfo(this,'Kerina Cherish','6','online')">
                                    <div class="flex items-top">
                                        <div class="me-1 leading-none">
                                                    <span class="avatar avatar-md online me-2">
                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}"
                                                             alt="img">
                                                    </span>
                                        </div>
                                        <div class="flex-auto">
                                            <p class="mb-0 font-medium">
                                                Kerina Cherish <span
                                                    class="float-end text-textmuted dark:text-textmuted/50 font-normal text-[11px]">03:15PM</span>
                                            </p>
                                            <p class="text-xs mb-0">
                                                <span class="chat-msg truncate">Looking forward about the matter</span>
                                                <span class="chat-read-icon float-end align-middle"><i
                                                        class="ri-check-double-fill"></i></span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-pane border-0 chat-groups-tab hidden" id="groups-tab-pane" role="tabpanel"
                         aria-labelledby="groups-tab">
                        <ul class="list-none mb-0 mt-2 ">
                            {{--                            <li class="pb-0">--}}
                            {{--                                <p class="text-textmuted dark:text-textmuted/50 text-[11px] font-medium mb-1 opacity-70">--}}
                            {{--                                    MY CHAT GROUPS</p>--}}
                            {{--                            </li>--}}

                            <div class="xl:col-span-8 col-span-12">
                                <div class="box">
                                    <div class="box-body">
                                        <div class="float-end">
                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                <a href="javascript:void(0);"
                                                   class="avatar avatar-rounded avatar-sm bg-info/10 !text-info">
                                                    <span><i class="ri-download-cloud-line text-[14px]"></i></span>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                            Download CV
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                <a href="javascript:void(0);"
                                                   class="avatar avatar-rounded avatar-sm bg-danger/10 !text-danger">
                                                    <span><i class="ri-heart-line text-[14px]"></i></span>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                            Add to Wishlist
                                                        </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="flex mb-3 items-center flex-wrap gap-2">
                                            <div>
                                                    <span class="avatar avatar-lg avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}"
                                                             alt="Profile Picture">
                                                    </span>
                                            </div>
                                            <div>
                                                <h6 class="font-medium mb-1 flex items-center"><a
                                                        href="{{url('job-candidate-details')}}"> Samantha
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                <span class="text-primary text-[13px]">
                                                                    <i class="ri-verified-badge-fill"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Verified candidate
                                                                    </span>
                                                                </span>
                                                        </div>
                                                    </a>
                                                </h6>
                                                <div class="flex gap-2 flex-wrap">
                                                    <a href="javascript:void(0);">UI/UX Designer</a>
                                                    <p class="mb-0 text-xs text-textmuted dark:text-textmuted/50"><i
                                                            class="ri-map-pin-line text-[11px]"></i> Silicon Valley, CA
                                                    </p>
                                                </div>
                                                <div
                                                    class="flex items-center text-xs text-textmuted dark:text-textmuted/50 flex-wrap">
                                                    <p class="text-xs mb-0">Ratings : </p>
                                                    <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i
                                                                class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i
                                                                class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i
                                                                class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i
                                                                class="bi bi-star-half"></i></span>
                                                    </div>
                                                    <a href="javascript:void(0);"
                                                       class="ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                        <span>(245)</span>
                                                        <span>Ratings</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popular-tags mb-3 flex gap-2 flex-wrap">
                                            <a href="javascript:void(0);"
                                               class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i
                                                    class="ri-file-text-line me-1"></i> Master's Degree</a>
                                            <a href="javascript:void(0);"
                                               class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i
                                                    class="ri-remote-control-line me-1"></i> Remote Work</a>
                                            <a href="javascript:void(0);"
                                               class="badge rounded-full text-[11px] border border-info/10 text-info"><i
                                                    class="ri-time-line me-1"></i> UI Designer (2+ yrs)</a>
                                            {{--                                            <a href="javascript:void(0);"--}}
                                            {{--                                               class="badge rounded-full text-[11px] border border-primarytint2color/10 text-primarytint2color"><i--}}
                                            {{--                                                    class="ri-time-fill me-1"></i> Full Time</a>--}}
                                        </div>

                                        <div class="flex items-center flex-wrap gap-4">
                                            <div>
                                                <p class="mb-1 grow"><span
                                                        class="text-textmuted dark:text-textmuted/50">Part Time
                                                            :</span> <span class="font-medium"> $55,000</span> - <span
                                                        class="font-medium"> $80,000</span><span class="font-medium"> (4 hours)</span></p>
                                                <p class="mb-1 grow"><span
                                                        class="text-textmuted dark:text-textmuted/50">Full Time
                                                            :</span> <span class="font-medium"> $55,000</span> - <span
                                                        class="font-medium"> $80,000</span><span class="font-medium"> (8 hours)</span></p>
                                                <p class="mb-0"><span class="text-textmuted dark:text-textmuted/50">
                                                            Languages :</span> <span class="font-medium"> English,
                                                            Spanish, Kannada</span></p>
                                            </div>
                                        </div>

                                        <div class="w-full flex justify-end gap-3 my-4">
                                            <div>
                                                <button type="button"
                                                        class="ti-btn ti-btn-purple-gradient btn-wave ">Hire Part-Time
                                                </button>
                                            </div>

                                            <div>
                                                <button type="button"
                                                        class="ti-btn ti-btn-purple-gradient btn-wave ">Hire Full-Time
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="main-chat-area border border-defaultborder dark:border-defaultborder/10">
                <div
                    class="flex items-center border-b border-defaultborder dark:border-defaultborder/10 main-chat-head flex-wrap">
                            <span class="avatar avatar-md online chatstatusperson me-2 leading-none">
                                    <img class="chatimageperson" src="{{asset('build/assets/images/faces/6.jpg')}}"
                                         alt="img">
                                </span>
                    <div class="flex-auto">
                        <p class="mb-0 font-medium text-[14px] leading-none">
                            <a href="javascript:void(0);" data-hs-overlay="#offcanvasRight"
                               class="chatnameperson responsive-userinfo-open">Kerina Cherish</a>
                        </p>
                        <p class="text-textmuted dark:text-textmuted/50 mb-0 chatpersonstatus">online</p>
                    </div>
                    <div class="flex flex-wrap rightIcons items-center gap-2">
                        <button aria-label="button" type="button"
                                class="ti-btn ti-btn-icon ti-btn-soft-primary1 my-0  ti-btn-sm">
                            <i class="ti ti-phone"></i>
                        </button>
                        <button aria-label="button" type="button"
                                class="ti-btn ti-btn-icon ti-btn-soft-primary2 my-0 ti-btn-sm hidden sm:block">
                            <i class="ti ti-video"></i>
                        </button>
                        <button aria-label="button" type="button"
                                class="ti-btn ti-btn-icon ti-btn-outline-light  responsive-userinfo-open ti-btn-sm">
                            <i class="ti ti-user-circle" id="responsive-chat-close"></i>
                        </button>
                        <div class="hs-dropdown ti-dropdown">
                            <button aria-label="button"
                                    class="ti-btn ti-btn-icon ti-dropdown-toggle ti-btn-soft-primary2 btn-wave waves-light ti-btn-sm waves-effect waves-light"
                                    type="button" id="dropdownMenuButton1"
                                    aria-expanded="false">
                                <i class="ti ti-dots-vertical"></i>
                            </button>
                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                aria-labelledby="dropdownMenuButton1">
                                <li><a class="ti-dropdown-item" href="javascript:void(0);"><i
                                            class="ri-user-3-line me-1"></i>Profile</a></li>
                                <li><a class="ti-dropdown-item" href="javascript:void(0);"><i
                                            class="ri-format-clear me-1"></i>Clear Chat</a></li>
                                <li><a class="ti-dropdown-item" href="javascript:void(0);"><i
                                            class="ri-user-unfollow-line me-1"></i>Delete User</a></li>
                                <li><a class="ti-dropdown-item" href="javascript:void(0);"><i
                                            class="ri-user-forbid-line me-1"></i>Block User</a></li>
                                <li><a class="ti-dropdown-item" href="javascript:void(0);"><i
                                            class="ri-error-warning-line me-1"></i>Report</a></li>
                            </ul>
                        </div>
                        <button aria-label="button" type="button"
                                class="ti-btn ti-btn-icon ti-btn-soft-danger my-0 responsive-chat-close ti-btn-sm">
                            <i class="ri-close-line"></i>
                        </button>
                    </div>
                </div>
                <div class="chat-content" id="main-chat-content">
                    <ul class="list-none">
                        <li class="chat-day-label">
                            <span>Today</span>
                        </li>
                        <li class="chat-item-start">
                            <div class="chat-list-inner">
                                <div class="chat-user-profile">
                                            <span class="avatar avatar-md online chatstatusperson">
                                                <img class="chatimageperson"
                                                     src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                            </span>
                                </div>
                                <div class="ms-3">
                                    <div class="main-chat-msg">
                                        <div>
                                            <p class="mb-0">Hey!&#128522; How are you? What have you been up to
                                                lately?</p>
                                        </div>
                                    </div>
                                    <span class="chatting-user-info">
                                                <span class="chatnameperson">Kerina Cherish</span> <span
                                            class="msg-sent-time">10:20PM</span>
                                            </span>
                                </div>
                            </div>
                        </li>
                        <li class="chat-item-end">
                            <div class="chat-list-inner">
                                <div class="me-3">
                                    <div class="main-chat-msg">
                                        <div>
                                            <p class="mb-0">Oh, hey! &#128516; I'm doing pretty well, thanks! Just been
                                                catching up on some reading and enjoying the nice weather. How about
                                                you?</p>
                                        </div>
                                    </div>
                                    <span class="chatting-user-info">
                                                <span class="msg-sent-time"><span
                                                        class="chat-read-mark align-middle inline-flex"><i
                                                            class="ri-check-double-line"></i></span>11:50PM</span> You
                                            </span>
                                </div>
                                <div class="chat-user-profile">
                                            <span class="avatar avatar-md online">
                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                            </span>
                                </div>
                            </div>
                        </li>
                        <li class="chat-item-start">
                            <div class="chat-list-inner">
                                <div class="chat-user-profile">
                                            <span class="avatar avatar-md online chatstatusperson">
                                                <img class="chatimageperson"
                                                     src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                            </span>
                                </div>
                                <div class="ms-3">
                                    <div class="main-chat-msg">
                                        <div>
                                            <p class="mb-0">That sounds lovely! I've been keeping busy with work, but
                                                I'm looking forward to the weekend. Thinking of heading out for a hike
                                                if the weather holds up.</p>
                                        </div>
                                    </div>
                                    <span class="chatting-user-info">
                                                <span class="chatnameperson">Kerina Cherish</span> <span
                                            class="msg-sent-time">11:51PM</span>
                                            </span>
                                </div>
                            </div>
                        </li>
                        <li class="chat-item-end">
                            <div class="chat-list-inner">
                                <div class="me-3">
                                    <div class="main-chat-msg">
                                        <div>
                                            <p class="mb-0">Nice! Hiking sounds like a great way to unwind. Which trail
                                                are you thinking of exploring?</p>
                                        </div>
                                    </div>
                                    <span class="chatting-user-info">
                                                <span class="msg-sent-time"><span
                                                        class="chat-read-mark align-middle inline-flex"><i
                                                            class="ri-check-double-line"></i></span>11:52PM</span> You
                                            </span>
                                </div>
                                <div class="chat-user-profile">
                                            <span class="avatar avatar-md online">
                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                            </span>
                                </div>
                            </div>
                        </li>
                        <li class="chat-item-start">
                            <div class="chat-list-inner">
                                <div class="chat-user-profile">
                                            <span class="avatar avatar-md online chatstatusperson">
                                                <img class="chatimageperson"
                                                     src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                            </span>
                                </div>
                                <div class="ms-3">
                                    <div class="main-chat-msg">
                                        <div>
                                            <p class="mb-0">I'm thinking of checking out the one up at Pine Ridge. It's
                                                got some amazing views of the valley. Would you be interested in
                                                joining?</p>
                                        </div>
                                    </div>
                                    <span class="chatting-user-info">
                                                <span class="chatnameperson">Kerina Cherish</span> <span
                                            class="msg-sent-time">11:55PM</span>
                                            </span>
                                </div>
                            </div>
                        </li>
                        <li class="chat-item-end">
                            <div class="chat-list-inner">
                                <div class="me-3">
                                    <div class="main-chat-msg">
                                        <div class="">
                                            <p class="mb-0">That sounds fantastic! I'd like to come along. Let me know
                                                what time you're planning to head out, and I'll make sure to pack some
                                                snacks for the trail.</p>
                                        </div>
                                    </div>
                                    <span class="chatting-user-info">
                                                <span class="msg-sent-time"><span
                                                        class="chat-read-mark align-middle inline-flex"><i
                                                            class="ri-check-double-line"></i></span>11:52PM</span> You
                                            </span>
                                </div>
                                <div class="chat-user-profile">
                                            <span class="avatar avatar-md online">
                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                            </span>
                                </div>
                            </div>
                        </li>
                        <li class="chat-item-start">
                            <div class="chat-list-inner">
                                <div class="chat-user-profile">
                                            <span class="avatar avatar-md online">
                                                <img class="chatimageperson"
                                                     src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                            </span>
                                </div>
                                <div class="ms-3">
                                    <div class="main-chat-msg">
                                        <div>
                                            <p class="mb-0">okay. &#128516;</p>
                                        </div>
                                    </div>
{{--                                    <span class="chatting-user-info chatnameperson">--}}
{{--                                                Kerina Cherish <span class="msg-sent-time">11:45PM</span>--}}
{{--                                            </span>--}}
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="chat-footer !border-defaultborder dark:!border-defaultborder/10">
                    <a aria-label="anchor"
                       class="ti-btn bg-primarytint1color/10 text-primarytint1color me-2 ti-btn-icon btn-send"
                       href="javascript:void(0)">
                        <i class="ri-attachment-2"></i>
                    </a>
                    <a aria-label="anchor" class="ti-btn ti-btn-icon me-2 bg-primarytint2color text-white emoji-picker"
                       href="javascript:void(0)">
                        <i class="ri-emotion-line"></i>
                    </a>
                    <input class="form-control chat-message-space" placeholder="Type your message here..." type="text">
                    <a aria-label="anchor" class="ti-btn ti-btn-primary ms-2 ti-btn-icon btn-send"
                       href="javascript:void(0)">
                        <i class="ri-send-plane-2-line"></i>
                    </a>
                </div>
            </div>
        </div>
        {{--            </div>--}}
        {{--        </div>--}}
        <!-- End::app-content -->

        <!-- Start::chat user details offcanvas -->
        <div class="hs-overlay hidden ti-offcanvas ti-offcanvas-right" id="offcanvasRight">
            <div class="ti-offcanvas-body">
                <button type="button"
                        class="ti-btn  btn-wave flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white text-textmuted dark:text-textmuted/50 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                        data-hs-overlay="#offcanvasRight">
                    <span class="sr-only">Close modal</span>
                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                            fill="currentColor"></path>
                    </svg>
                </button>
                <div class="chat-user-details" id="chat-user-details">
                    <div class="text-center mb-4">
                        <span class="avatar avatar-rounded online avatar-xxl me-2 mb-3 chatstatusperson">
                            <img class="chatimageperson" src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                        </span>
                        <p class="mb-1 text-[15px] font-medium text-dark leading-none chatnameperson">Jamison Jen</p>
                        <p class="text-xs text-textmuted dark:text-textmuted/50 mb-4"><span class="chatnameperson">jamisonjen0114</span>@gmail.com
                        </p>
                        <p class="text-center mb-0 flex gap-2 flex-wrap">
                            <button type="button" aria-label="button"
                                    class="ti-btn ti-btn-soft-primary btn-wave flex-auto"><i
                                    class="ri-phone-line me-2 align-middle"></i>Call
                            </button>
                            <button type="button" aria-label="button"
                                    class="ti-btn bg-primarytint1color/10 text-primarytint1color btn-wave flex-auto"><i
                                    class="ri-video-add-line me-2 align-middle"></i>Video Call
                            </button>
                            <button type="button" aria-label="button"
                                    class="ti-btn bg-info/10 text-info btn-wave flex-auto"><i
                                    class="ri-chat-1-line me-2 align-middle"></i>Message
                            </button>
                        </p>
                    </div>
                    <div class="mb-4 pt-2">
                        <div class="font-medium mb-4">Shared Files
                            <span class="badge bg-primarytint2color ms-1 rounded-full">17</span>
                            <span class="float-end text-[11px]"><a href="javascript:void(0);"
                                                                   class="text-xs text-textmuted dark:text-textmuted/50"> View All<i
                                        class="ti ti-arrow-narrow-right ms-1"></i> </a></span>
                        </div>
                        <ul class="shared-files list-none">
                            <li>
                                <div class="flex items-center">
                                    <div class="me-2 bg-primary/10 !rounded-full">
                                        <span class="shared-file-icon">
                                            <i class="ti ti-file-text text-primary"></i>
                                        </span>
                                    </div>
                                    <div class="flex-auto">
                                        <p class="text-xs font-medium mb-0">notification.pdf</p>
                                        <p class="mb-0 text-textmuted dark:text-textmuted/50 text-[11px]">15,Dec 2024 -
                                            12:45PM</p>
                                    </div>
                                    <div class="text-lg">
                                        <a aria-label="anchor" href="javascript:void(0)"><i
                                                class="ri-download-2-line text-textmuted dark:text-textmuted/50"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <div class="me-2 bg-secondary/10 !rounded-full">
                                        <span class="shared-file-icon">
                                            <i class="ri-image-line text-secondary"></i>
                                        </span>
                                    </div>
                                    <div class="flex-auto">
                                        <p class="text-xs font-medium mb-0">Image_file1.Jpg</p>
                                        <p class="mb-0 text-textmuted dark:text-textmuted/50 text-[11px]">03,Oct 2024 -
                                            03:20AM</p>
                                    </div>
                                    <div class="text-lg">
                                        <a aria-label="anchor" href="javascript:void(0)"><i
                                                class="ri-download-2-line text-textmuted dark:text-textmuted/50"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <div class="me-2 bg-success/10 !rounded-full">
                                        <span class="shared-file-icon">
                                            <i class="ri-image-line text-success"></i>
                                        </span>
                                    </div>
                                    <div class="flex-auto">
                                        <p class="text-xs font-medium mb-0">Imagefile_12.Jpg</p>
                                        <p class="mb-0 text-textmuted dark:text-textmuted/50 text-[11px]">19,Oct 2024 -
                                            01:23PM</p>
                                    </div>
                                    <div class="text-lg">
                                        <a aria-label="anchor" href="javascript:void(0)"><i
                                                class="ri-download-2-line text-textmuted dark:text-textmuted/50"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <div class="me-2 bg-orangemain/10 !rounded-full">
                                        <span class="shared-file-icon">
                                            <i class="ri-video-line text-orangemain"></i>
                                        </span>
                                    </div>
                                    <div class="flex-auto">
                                        <p class="text-xs font-medium mb-0">Video-rec-20-10-2021.MP4</p>
                                        <p class="mb-0 text-textmuted dark:text-textmuted/50 text-[11px]">13,May 2024 -
                                            16:25AM</p>
                                    </div>
                                    <div class="text-lg">
                                        <a href="javascript:void(0)"><i
                                                class="ri-download-2-line text-textmuted dark:text-textmuted/50"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="mb-0 pt-2">
                        <div class="font-medium mb-4">Photos & Media
                            <span class="badge bg-primarytint3color ms-1 rounded-full">15</span>
                            <span class="float-end text-[11px]"><a href="javascript:void(0);"
                                                                   class="text-xs text-textmuted dark:text-textmuted/50"> View All<i
                                        class="ti ti-arrow-narrow-right ms-1"></i> </a></span>
                        </div>
                        <div class="grid grid-cols-12 gap-x-6 gap-y-3">
                            <div class="lg:col-span-4 md:col-span-4 sm:col-span-6 col-12">
                                <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox box mb-0"
                                   data-gallery="gallery1">
                                    <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image">
                                </a>
                            </div>
                            <div class="lg:col-span-4 md:col-span-4 sm:col-span-6 col-12">
                                <a href="{{asset('build/assets/images/media/media-41.jpg')}}" class="glightbox box mb-0"
                                   data-gallery="gallery1">
                                    <img src="{{asset('build/assets/images/media/media-41.jpg')}}" alt="image">
                                </a>
                            </div>
                            <div class="lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                <a href="{{asset('build/assets/images/media/media-42.jpg')}}" class="glightbox box mb-0"
                                   data-gallery="gallery1">
                                    <img src="{{asset('build/assets/images/media/media-42.jpg')}}" alt="image">
                                </a>
                            </div>
                            <div class="lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                <a href="{{asset('build/assets/images/media/media-43.jpg')}}" class="glightbox box mb-0"
                                   data-gallery="gallery1">
                                    <img src="{{asset('build/assets/images/media/media-43.jpg')}}" alt="image">
                                </a>
                            </div>
                            <div class="lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                <a href="{{asset('build/assets/images/media/media-44.jpg')}}" class="glightbox box mb-0"
                                   data-gallery="gallery1">
                                    <img src="{{asset('build/assets/images/media/media-44.jpg')}}" alt="image">
                                </a>
                            </div>
                            <div class="lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                <a href="{{asset('build/assets/images/media/media-45.jpg')}}" class="glightbox box mb-0"
                                   data-gallery="gallery1">
                                    <img src="{{asset('build/assets/images/media/media-45.jpg')}}" alt="image">
                                </a>
                            </div>
                            <div class="lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                <a href="{{asset('build/assets/images/media/media-46.jpg')}}" class="glightbox box mb-0"
                                   data-gallery="gallery1">
                                    <img src="{{asset('build/assets/images/media/media-46.jpg')}}" alt="image">
                                </a>
                            </div>
                            <div class="lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                <a href="{{asset('build/assets/images/media/media-60.jpg')}}" class="glightbox box mb-0"
                                   data-gallery="gallery1">
                                    <img src="{{asset('build/assets/images/media/media-60.jpg')}}" alt="image">
                                </a>
                            </div>
                            <div class="lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                <a href="{{asset('build/assets/images/media/media-61.jpg')}}" class="glightbox box mb-0"
                                   data-gallery="gallery1">
                                    <img src="{{asset('build/assets/images/media/media-61.jpg')}}" alt="image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::chat user details offcanvas -->

    </div>


</div>

@section('scripts')

    <!-- Moment JS -->
    <script src="{{asset('build/assets/libs/moment/moment.js')}}"></script>

    <!-- Emojji Picker JS -->
    <script src="{{asset('build/assets/libs/fg-emoji-picker/fgEmojiPicker.js')}}"></script>

    <!-- Gallery JS -->
    <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>

    <!-- Chat JS -->
    <script src="{{asset('build/assets/chat.js')}}"></script>

@endsection

