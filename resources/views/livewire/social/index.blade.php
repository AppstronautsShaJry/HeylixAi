<!-- Start::app-content -->
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

        <x-tabs.url-tab>
            <x-tabs.url-content label=" Calender" url="/calender-social" rounded="rounded-l-md"/>
            <x-tabs.url-content label=" Post Insights" url="/posts-social" rounded="rounded-r-md"/>
        </x-tabs.url-tab>

        <!-- Start::row-1 -->
        <div class="grid grid-cols-12 gap-x-6">
            <div class="xl:col-span-9 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">Full Calendar</div>
                    </div>
                    <div class="box-body">
                        <div id='calendar2'></div>
                    </div>
                </div>
            </div>
            <div class="xl:col-span-3 col-span-12">
                <div class="box">
                    <div class="box-header justify-between">
                        <a href="{{route('create.event')}}">
                            <button class="ti-btn bg-gradient-to-r from-info to-primary text-white btn-wave"><i
                                    class="ri-add-line align-middle me-1 font-medium inline-block"></i>Create New Event
                            </button>
                        </a>
                        <div class="box-title pt-4">Upcoming Events</div>
                    </div>
                    <div class="box-body p-0">
                        <ul id="external-events" class="mb-0 p-4 list-none">
                            <li class="fc-event fc-h-event fc-daygrid-event fc-daygriblock-event mb-1 bg-primary/10 border-primary/10">
                                <div class="fc-event-main !text-primary"><a href="{{ route('edit.social') }}">Calendar
                                        Events</a></div>
                            </li>
                            <li class="fc-event fc-h-event fc-daygrid-event fc-daygriblock-event mb-1 bg-primarytint1color/10 border-primarytint1color/10"
                                data-class="bg-primarytint1color/10">
                                <div class="fc-event-main !text-primarytint1color">Birthday Events</div>
                            </li>
                            <li class="fc-event fc-h-event fc-daygrid-event fc-daygriblock-event mb-1 bg-primarytint2color/10 border-primarytint2color/10"
                                data-class="bg-primarytint2color/10 text-primarytint2color">
                                <div class="fc-event-main !text-primarytint2color">Holiday Calendar</div>
                            </li>
                            <li class="fc-event fc-h-event fc-daygrid-event fc-daygriblock-event mb-1 bg-primarytint3color/10 border-primarytint3color/10"
                                data-class="bg-primarytint3color/10 text-primary3">
                                <div class="fc-event-main !text-primarytint3color">Office Events</div>
                            </li>
                            <li class="fc-event fc-h-event fc-daygrid-event fc-daygriblock-event mb-1 bg-secondary/10 border-secondary/10"
                                data-class="bg-secondary">
                                <div class="fc-event-main !text-secondary">Other Events</div>
                            </li>
                            <li class="fc-event fc-h-event fc-daygrid-event fc-daygriblock-event mb-1 bg-danger/10 border-danger/10"
                                data-class="bg-danger">
                                <div class="fc-event-main !text-danger">Festival Events</div>
                            </li>
                            <li class="fc-event fc-h-event fc-daygrid-event fc-daygriblock-event mb-1 bg-success/10 border-success/10"
                                data-class="bg-success">
                                <div class="fc-event-main !text-success">Timeline Events</div>
                            </li>
                            <li class="fc-event fc-h-event fc-daygrid-event fc-daygriblock-event mb-1 bg-info/10 border-info/10"
                                data-class="bg-info">
                                <div class="fc-event-main !text-info">Others Events</div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="xxl:col-span-3 md:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header justify-between">
                            <div class="box-title">
                                AI Ideas
                            </div>

                            <div class="ti-dropdown hs-dropdown">
                                {{--                                    <div class="ti-btn ti-btn-outline-light border ti-btn-full ti-btn-sm ti-dropdown-toggle hs-dropdown-toggle"--}}
                                {{--                                         data-bs-toggle="dropdown">Vew All<i class="ti ti-chevron-down ms-1"></i>--}}
                                {{--                                    </div>--}}
                                <div class=" text-center flex items-center gap-x-5">
                                    <button type="button" class="ti-btn ti-btn-info-gradient btn-wave">
                                        Generate
                                    </button>
                                </div>

                                {{--                                <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">--}}
                                {{--                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Download</a></li>--}}
                                {{--                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Import</a></li>--}}
                                {{--                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Export</a></li>--}}
                                {{--                                </ul>--}}
                            </div>
                        </div>
                        <div class="box-body">
                            <ul class="ti-list-group list-group-flush list-none !border-0 activity-feed">
                                <li class="flex gap-2 items-start">
                                    <div
                                        class="avatar avatar-sm bg-primary/10 !text-primary flex-shrink-0 avatar-rounded border border-primary/10">
                                        <i class="ri-user-fill"></i>
                                    </div>

                                    <div class="truncate flex items-center justify-center h-7">
                                        <span class="font-medium">New Job Posted</span>
                                    </div>
                                </li>

                                <li class="flex gap-2 items-start">
                                    <div
                                        class="avatar avatar-sm bg-primary/10 !text-primary flex-shrink-0 avatar-rounded border border-primary/10">
                                        <i class="ri-user-fill"></i>
                                    </div>

                                    <div class="truncate flex items-center justify-center h-7">
                                        <span class="font-medium">New Job Posted</span>
                                    </div>
                                </li>

                                <li class="flex gap-2 items-start">
                                    <div
                                        class="avatar avatar-sm bg-primary/10 !text-primary flex-shrink-0 avatar-rounded border border-primary/10">
                                        <i class="ri-user-fill"></i>
                                    </div>

                                    <div class="truncate flex items-center justify-center h-7">
                                        <span class="font-medium">New Job Posted</span>
                                    </div>
                                </li>

                                <li class="flex gap-2 items-start">
                                    <div
                                        class="avatar avatar-sm bg-primary/10 !text-primary flex-shrink-0 avatar-rounded border border-primary/10">
                                        <i class="ri-user-fill"></i>
                                    </div>

                                    <div class="truncate flex items-center justify-center h-7">
                                        <span class="font-medium">New Job Posted</span>
                                    </div>
                                </li>

                                <li class="flex gap-2 items-start">
                                    <div
                                        class="avatar avatar-sm bg-primary/10 !text-primary flex-shrink-0 avatar-rounded border border-primary/10">
                                        <i class="ri-user-fill"></i>
                                    </div>

                                    <div class="truncate flex items-center justify-center h-7">
                                        <span class="font-medium">New Job Posted</span>
                                    </div>
                                </li>

                                <li class="flex gap-2 items-start">
                                    <div
                                        class="avatar avatar-sm bg-primary/10 !text-primary flex-shrink-0 avatar-rounded border border-primary/10">
                                        <i class="ri-user-fill"></i>
                                    </div>

                                    <div class="truncate flex items-center justify-center h-7">
                                        <span class="font-medium">New Job Posted</span>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End::row-1 -->

    </div>
</div>
<!-- End::app-content -->

{{--@endsection--}}

@section('scripts')

    <!-- Moment JS -->
    <script src="{{asset('build/assets/libs/moment/moment.js')}}"></script>

    <!-- Fullcalendar JS -->
    <script src="{{asset('build/assets/libs/fullcalendar/index.global.min.js')}}"></script>
    @vite('resources/assets/js/fullcalendar.js')

@endsection

