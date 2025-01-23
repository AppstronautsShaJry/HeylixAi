@extends('layouts.master')

@section('styles')


@endsection

@section('content')

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

            <div x-data="{ currentPage: window.location.pathname }" class="p-2 py-6 flex items-center font-medium">
                <div
                    :class="currentPage === '/calender' ? 'bg-[#FF5D9F]  rounded-l-sm text-white ' : ' dark:text-gray-400  rounded-md '"
                    class="max-w-max py-3 px-2 group">
                    <a href="/calender" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                        Calender
                    </a>
                </div>
                <!-- Twitter Tab -->
                <div
                    :class="currentPage === '/posts' ? 'bg-[#FF5D9F]  rounded-r-sm text-white' : 'hover:text-white dark:text-gray-400  rounded-md'"
                    class="max-w-max py-3 px-2 group">
                    <a href="/posts" class="text-sm inline-flex items-center gap-x-3 dark:hover:text-white">
                        Post Insights
                    </a>
                </div>
            </div>

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

                            <button class="ti-btn bg-gradient-to-r from-info to-primary text-white btn-wave"><i class="ri-add-line align-middle me-1 font-medium inline-block"></i>Create New Event</button>
                            <div class="box-title pt-4">Upcoming Events</div>
                        </div>
                        <div class="box-body p-0">
                            <ul id="external-events" class="mb-0 p-4 list-none">
                                <li class="fc-event fc-h-event fc-daygrid-event fc-daygriblock-event mb-1 bg-primary/10 border-primary/10">
                                    <div class="fc-event-main !text-primary">Calendar Events</div>
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
                    <div class="box">
                        <div class="box-header justify-between pb-1">
                            <div class="box-title">
                                Activity :
                            </div>
                            <button class="ti-btn ti-btn-soft-primary ti-btn-sm btn-wave">View All</button>
                        </div>
                        <div class="box-body p-0">
                            <div class="p-4" id="full-calendar-activity">
                                <ul class="list-none mb-0 fullcalendar-events-activity">
                                    <li>
                                        <div class="flex items-center justify-between flex-wrap">
                                            <p class="mb-1 font-medium">Tuesday, Feb 5, 2024</p>
                                            <span class="badge bg-light text-defaulttextcolor mb-1">10:00AM - 11:00AM</span>
                                        </div>
                                        <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">Discussion with team on project updates.</p>
                                    </li>
                                    <li>
                                        <div class="flex items-center justify-between flex-wrap">
                                            <p class="mb-1 font-medium">Monday, Jan 2, 2023</p>
                                            <span class="badge bg-success mb-1">Completed</span>
                                        </div>
                                        <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">Review and finalize budget proposal.</p>
                                    </li>
                                    <li>
                                        <div class="flex items-center justify-between flex-wrap">
                                            <p class="mb-1 font-medium">Thursday, Mar 8, 2024</p>
                                            <span class="badge bg-warning/10 text-warning mb-1">Reminder</span>
                                        </div>
                                        <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">Prepare presentation slides for client meeting.</p>
                                    </li>
                                    <li>
                                        <div class="flex items-center justify-between flex-wrap">
                                            <p class="mb-1 font-medium">Friday, Apr 12, 2024</p>
                                            <span class="badge bg-light text-defaulttextcolor mb-1">2:00PM - 4:00PM</span>
                                        </div>
                                        <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">Training session on new software tools.</p>
                                    </li>
                                    <li>
                                        <div class="flex items-center justify-between flex-wrap">
                                            <p class="mb-1 font-medium">Saturday, Mar 16, 2024</p>
                                            <span class="badge bg-danger/10 text-danger mb-1">Due Date</span>
                                        </div>
                                        <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">Submit quarterly report to management.</p>
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

@endsection

@section('scripts')

    <!-- Moment JS -->
    <script src="{{asset('build/assets/libs/moment/moment.js')}}"></script>

    <!-- Fullcalendar JS -->
    <script src="{{asset('build/assets/libs/fullcalendar/index.global.min.js')}}"></script>
    @vite('resources/assets/js/fullcalendar.js')


@endsection
