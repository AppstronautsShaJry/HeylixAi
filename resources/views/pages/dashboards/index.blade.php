@extends('layouts.master')

@section('styles')

@endsection

@section('content')

    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- Start::page-header -->
            <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">
                                Dashboards
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Heylix</li>
                    </ol>
                    {{--                    <h1 class="page-title font-medium text-lg mb-0">Heylix Dashboard</h1>--}}
                </div>
                <div class="flex gap-2 flex-wrap">
                </div>
            </div>
        </div>

        <div class="grid grid-cols-12 gap-x-6">
            <div class="xl:col-span-8 col-span-12">
                <div class="grid grid-cols-12 gap-x-6 h-full">
                    <x-widgets.widg4
                        title="Brand Value"
                        value="2400"
                        icon='<i class=" ti ti-ad-2 text-[2rem]"></i>'
                        tag-name="Increased By"
                        tag-value="0.79%"
                        tag-icon='<i class="ti ti-arrow-narrow-up text-[16px]"></i>'
                    >
                    </x-widgets.widg4>
                    <x-widgets.widg4
                        title="Platform Left"
                        value="3"
                        bg-color="bg-purple-gradient"
                        tag-name="Total Platform"
                        tagValue="5"
                        icon='<i class=" ti ti-api-app text-[2rem]"></i>'
                        tag-icon='<i class="ti ti-arrow-narrow-up text-[16px]"></i>'
                    >
                    </x-widgets.widg4>
                    <x-widgets.widg4 class=""
                                     title="Total Posts"
                                     value="23"
                                     icon='<i class=" ti ti-api-app text-[2rem]"></i>'
                                     bg-color="bg-secondary-gradient"
                                     tag-name="Top Posts"
                                     tagValue="6"
                                     tag-icon='<i class="ti ti-arrow-narrow-up text-[16px]"></i>'
                    >
                    </x-widgets.widg4>
                    <x-widgets.widg4
                        title="Total Comments"
                        value="47"
                        icon='<i class=" ti ti-api-app text-[2rem]"></i>'
                        bg-color="bg-danger-gradient"
                        tag-name="Top Comments"
                        tagValue="9"
                        tag-icon='<i class="ti ti-arrow-narrow-up text-[16px]"></i>'
                    >
                    </x-widgets.widg4>
                    <x-widgets.widg4 class=""
                                     title="Total Reactions"
                                     value="67"
                                     icon='<i class=" ti ti-api-app text-[2rem]"></i>'
                                     bg-color="bg-success-gradient"
                                     tag-name="Top Comments"
                                     tagValue="9"
                                     tag-icon='<i class="ti ti-arrow-narrow-up text-[16px]"></i>'
                    >
                    </x-widgets.widg4>
                    <x-widgets.widg4
                        title="Active Ads"
                        icon='<i class=" ti ti-api-app text-[2rem]"></i>'
                        bg-color="bg-orange-gradient"

                        value="30"

                        tag-value="2609"
                        tag-icon='<i class="ri-arrow-right-up-line text-[11px]"></i>'
                        perc="0.5"
                        chart="chart-9"
                    >
                    </x-widgets.widg4>
                    <x-widgets.widg5
                        title="Ad Spent"
                        icon='<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                        viewBox="0 0 256 256">
                        <path
                            d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                        </path>
                        </svg>'
                        value="30"
                        tag-value="₹ 4095"
                        tag-icon='<i class="ri-arrow-right-up-line text-[11px]"></i>'
                        perc="0.5"
                        chart="chart-10"
                    >
                    </x-widgets.widg5>
                    <x-widgets.widg5
                        title="AI Spent "
                        icon='<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                        viewBox="0 0 256 256">
                        <path
                            d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                        </path>
                        </svg>'
                        value="30"
                        tag-value="₹ 5055"
                        tag-icon='<i class="ri-arrow-right-up-line text-[11px]"></i>'
                        perc="0.5"
                        chart="chart-11"
                    >
                    </x-widgets.widg5>
                    <x-widgets.widg5
                        title="AI Credit "
                        icon='<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                        viewBox="0 0 256 256">
                        <path
                            d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                        </path>
                        </svg>'
                        value="30"
                        tag-value="₹ 5055"
                        tag-icon='<i class="ri-arrow-right-up-line text-[11px]"></i>'
                        perc="0.5"
                        chart="chart-12"
                    >
                    </x-widgets.widg5>
                    <x-widgets.widg5
                        title="Ad Credit "
                        icon='<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                        viewBox="0 0 256 256">
                        <path
                            d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                        </path>
                        </svg>'
                        value="30"
                        tag-value="₹ 5055"
                        tag-icon='<i class="ri-arrow-right-up-line text-[11px]"></i>'
                        perc="0.5"
                        chart="chart-13"
                    >
                    </x-widgets.widg5>

                </div>
            </div>
            <div class="xl:col-span-4 col-span-12">
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span12 col-span-12">
                        <x-storage></x-storage>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::Row-1 -->

        <!-- Start::Row-2 -->

        <!-- Start::Row-3 -->
        <div class="grid grid-cols-12 gap-x-6">
            <div class="xl:col-span-8 col-span-12">
                <div class="box overflow-hidden">
                    <div class="box-header justify-between">
                        <div class="box-title">
                            Recent Orders
                        </div>
                        <a href="javascript:void(0);"
                           class="ti-btn ti-btn-light btn-wave px-2 py-[0.26rem] text-textmuted dark:text-textmuted/50 waves-effect waves-light">View
                            All</a>
                    </div>

                    <!-- Table Starts Here. -->

                    <div class="box-body p-0">
                        <div class="table-responsive">
                            <table class="ti-custom-table text-nowrap">
                                <thead>
                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
{{--                                    <th>--}}
{{--                                        <input class="form-check-input check-all" type="checkbox" id="all-tasks" value="" aria-label="...">--}}
{{--                                    </th>--}}
                                    <th scope="col">Task</th>
                                    <th scope="col">Task ID</th>
                                    <th scope="col">Assigned Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Amount Paid</th>
                                    <th scope="col">Priority</th>
                                    <th scope="col">Assigned To</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="task-list border-b !border-defaultborder dark:!border-defaultborder/10">
{{--                                    <td class="task-checkbox">--}}
{{--                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">--}}
{{--                                    </td>--}}
                                    <td>
                                        <span class="font-medium">Design New Landing Page</span>
                                    </td>
                                    <td>
                                        <span class="font-medium">SPK - 01</span>
                                    </td>
                                    <td>
                                        02-06-2024
                                    </td>
                                    <td>
                                        <span class="font-medium text-primary">New</span>
                                    </td>
                                    <td>
                                        ₹ 1000
                                    </td>
                                    <td>
                                        <span class="badge bg-secondary/10 text-secondary">Medium</span>
                                    </td>
                                    <td>
                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                            </span>
                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-white" href="javascript:void(0);">
                                                +2
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <i class="ri-edit-line"></i>
                                            </button>
{{--                                            <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">--}}
{{--                                                <i class="ri-delete-bin-5-line"></i>--}}
{{--                                            </button>--}}
                                        </div>
                                    </td>

                                </tr>
                                <tr class="task-list border-b !border-defaultborder dark:!border-defaultborder/10">
{{--                                    <td class="task-checkbox">--}}
{{--                                        <input class="form-check-input" type="checkbox" value="" aria-label="..." checked>--}}
{{--                                    </td>--}}
                                    <td>
                                        <span class="font-medium">New Project Buleprint</span>
                                    </td>
                                    <td>
                                        <span class="font-medium">SPK - 04</span>
                                    </td>
                                    <td>
                                        05-06-2024
                                    </td>
                                    <td>
                                        <span class="font-medium text-secondary">Inprogress</span>
                                    </td>
                                    <td>
                                        ₹ 2300
                                    </td>
                                    <td>
                                        <span class="badge bg-danger/10 text-danger">High</span>
                                    </td>
                                    <td>
                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                            </span>
                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-white" href="javascript:void(0);">
                                                +4
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <i class="ri-edit-line"></i>
                                            </button>
{{--                                            <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">--}}
{{--                                                <i class="ri-delete-bin-5-line"></i>--}}
{{--                                            </button>--}}
                                        </div>
                                    </td>

                                </tr>
                                <tr class="task-list border-b !border-defaultborder dark:!border-defaultborder/10">
{{--                                    <td class="task-checkbox">--}}
{{--                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">--}}
{{--                                    </td>--}}
                                    <td>
                                        <span class="font-medium">Server Side Validation</span>
                                    </td>
                                    <td>
                                        <span class="font-medium">SPK - 11</span>
                                    </td>
                                    <td>
                                        12-06-2024
                                    </td>
                                    <td>
                                        <span class="font-medium text-warning">Pending</span>
                                    </td>
                                    <td>
                                        ₹ 1200
                                    </td>
                                    <td>
                                        <span class="badge bg-success/10 text-success">Low</span>
                                    </td>
                                    <td>
                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                            </span>
                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-white" href="javascript:void(0);">
                                                +5
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <i class="ri-edit-line"></i>
                                            </button>
{{--                                            <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">--}}
{{--                                                <i class="ri-delete-bin-5-line"></i>--}}
{{--                                            </button>--}}
                                        </div>
                                    </td>

                                </tr>
                                <tr class="task-list border-b !border-defaultborder dark:!border-defaultborder/10">
{{--                                    <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="..." checked></td>--}}
                                    <td>
                                        <span class="font-medium">New Project Buleprint</span>
                                    </td>
                                    <td>
                                        <span class="font-medium">SPK - 04</span>
                                    </td>
                                    <td>
                                        05-06-2024
                                    </td>
                                    <td>
                                        <span class="font-medium text-secondary">Inprogress</span>
                                    </td>
                                    <td>
                                        ₹ 2370
                                    </td>
                                    <td>
                                        <span class="badge bg-danger/10 text-danger">High</span>
                                    </td>
                                    <td>
                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                            </span>
                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-white" href="javascript:void(0);">
                                                +4
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="ri-edit-line"></i></button>
{{--                                        <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm task-delete-btn"><i class="ri-delete-bin-5-line"></i></button>--}}
                                    </td>

                                </tr>
                                <tr class="task-list border-b !border-defaultborder dark:!border-defaultborder/10">
{{--                                    <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="..."></td>--}}
                                    <td>
                                        <span class="font-medium">Server Side Validation</span>
                                    </td>
                                    <td>
                                        <span class="font-medium">SPK - 11</span>
                                    </td>
                                    <td>
                                        12-06-2024
                                    </td>
                                    <td>
                                        <span class="font-medium text-warning">Pending</span>
                                    </td>
                                    <td>
                                        ₹ 800
                                    </td>
                                    <td>
                                        <span class="badge bg-success/10 text-success">Low</span>
                                    </td>
                                    <td>
                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                            </span>
                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-white" href="javascript:void(0);">
                                                +5
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="ri-edit-line"></i></button>
{{--                                        <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm task-delete-btn"><i class="ri-delete-bin-5-line"></i></button>--}}
                                    </td>

                                </tr>
                                <tr class="task-list border-b !border-defaultborder dark:!border-defaultborder/10">
{{--                                    <td class="task-checkbox">--}}
{{--                                        <input class="form-check-input" type="checkbox" value="" aria-label="..." checked>--}}
{{--                                    </td>--}}
                                    <td>
                                        <span class="font-medium">New Plugin Development</span>
                                    </td>
                                    <td>
                                        <span class="font-medium">SPK - 24</span>
                                    </td>
                                    <td>
                                        08-06-2024
                                    </td>
                                    <td>
                                        <span class="font-medium text-success">Completed</span>
                                    </td>
                                    <td>
                                        ₹ 1250
                                    </td>
                                    <td>
                                        <span class="badge bg-success/10 text-success">Low</span>
                                    </td>
                                    <td>
                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                            <span class="avatar avatar-sm bg-primary avatar-rounded text-white">+2</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <i class="ri-edit-line"></i>
                                            </button>
{{--                                            <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">--}}
{{--                                                <i class="ri-delete-bin-5-line"></i>--}}
{{--                                            </button>--}}
                                        </div>
                                    </td>

                                </tr>
                                <tr class="task-list border-b !border-defaultborder dark:!border-defaultborder/10">
{{--                                    <td class="task-checkbox">--}}
{{--                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">--}}
{{--                                    </td>--}}
                                    <td>
                                        <span class="font-medium">Designing New Authentication Page</span>
                                    </td>
                                    <td>
                                        <span class="font-medium">SPK - 16</span>
                                    </td>
                                    <td>
                                        03-06-2024
                                    </td>
                                    <td>
                                        <span class="font-medium text-secondary">Inprogress</span>
                                    </td>
                                    <td>
                                        ₹ 2380
                                    </td>
                                    <td>
                                        <span class="badge bg-secondary/10 text-secondary">Medium</span>
                                    </td>
                                    <td>
                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                            </span>
                                            <span class="avatar avatar-sm bg-primary avatar-rounded text-white">+3</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <i class="ri-edit-line"></i>
                                            </button>
{{--                                            <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">--}}
{{--                                                <i class="ri-delete-bin-5-line"></i>--}}
{{--                                            </button>--}}
                                        </div>
                                    </td>

                                </tr>
                                <tr class="task-list border-b !border-defaultborder dark:!border-defaultborder/10">
{{--                                    <td class="task-checkbox">--}}
{{--                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">--}}
{{--                                    </td>--}}
                                    <td>
                                        <span class="font-medium">New Plugin Development</span>
                                    </td>
                                    <td>
                                        <span class="font-medium">SPK - 24</span>
                                    </td>
                                    <td>
                                        08-06-2024
                                    </td>
                                    <td>
                                        <span class="font-medium text-success">Completed</span>
                                    </td>
                                    <td>
                                        ₹ 3100
                                    </td>
                                    <td>
                                        <span class="badge bg-success/10 text-success">Low</span>
                                    </td>
                                    <td>
                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                            <span class="avatar avatar-sm bg-primary avatar-rounded text-white">+2</span>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                            <i class="ri-edit-line"></i>
                                        </button>
{{--                                        <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">--}}
{{--                                            <i class="ri-delete-bin-5-line"></i>--}}
{{--                                        </button>--}}
                                    </td>

                                </tr>
                                <tr class="task-list border-b !border-defaultborder dark:!border-defaultborder/10">
{{--                                    <td class="task-checkbox">--}}
{{--                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">--}}
{{--                                    </td>--}}
                                    <td>
                                        <span class="font-medium">Designing New Authentication Page</span>
                                    </td>
                                    <td>
                                        <span class="font-medium">SPK - 16</span>
                                    </td>
                                    <td>
                                        03-06-2024
                                    </td>
                                    <td>
                                        <span class="font-medium text-secondary">Inprogress</span>
                                    </td>
                                    <td>
                                        ₹ 2400
                                    </td>
                                    <td>
                                        <span class="badge bg-secondary/10 text-secondary">Medium</span>
                                    </td>
                                    <td>
                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                            </span>
                                            <span class="avatar avatar-sm bg-primary avatar-rounded text-white">+3</span>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                            <i class="ri-edit-line"></i>
                                        </button>
{{--                                        <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">--}}
{{--                                            <i class="ri-delete-bin-5-line"></i>--}}
{{--                                        </button>--}}
                                    </td>

                                </tr>
                                <tr class="task-list border-b !border-defaultborder dark:!border-defaultborder/10">

                                    <td>
                                        <span class="font-medium">Documentation For New Template</span>
                                    </td>
                                    <td>
                                        <span class="font-medium">SPK - 07</span>
                                    </td>
                                    <td>
                                        12-06-2024
                                    </td>
                                    <td>
                                        <span class="font-medium text-primary">New</span>
                                    </td>
                                    <td>
                                        ₹ 1430
                                    </td>
                                    <td>
                                        <span class="badge bg-danger/10 text-danger">High</span>
                                    </td>
                                    <td>
                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                            <i class="ri-edit-line"></i>
                                        </button>
{{--                                        <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">--}}
{{--                                            <i class="ri-delete-bin-5-line"></i>--}}
{{--                                        </button>--}}
                                    </td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    {{--                    Table end here    --}}

                </div>
            </div>
            <div class="xl:col-span-4 col-span-12">
                <div class="box h-auto text-wrap rounded-lg space-y-5 p-5">
                    <div class="flex justify-between ">
                        <div class="flex justify-start items-center gap-x-3">
                            <div class="border dark:border-primary border-black p-3 rounded-md bg-primary-gradient">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="currentColor"
                                     class="icon icon-tabler icons-tabler-filled icon-tabler-calendar-week w-8 h-8">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path
                                        d="M16 2c.183 0 .355 .05 .502 .135l.033 .02c.28 .177 .465 .49 .465 .845v1h1a3 3 0 0 1 2.995 2.824l.005 .176v12a3 3 0 0 1 -2.824 2.995l-.176 .005h-12a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-12a3 3 0 0 1 2.824 -2.995l.176 -.005h1v-1a1 1 0 0 1 .514 -.874l.093 -.046l.066 -.025l.1 -.029l.107 -.019l.12 -.007q .083 0 .161 .013l.122 .029l.04 .012l.06 .023c.328 .135 .568 .44 .61 .806l.007 .117v1h6v-1a1 1 0 0 1 1 -1m3 7h-14v9.625c0 .705 .386 1.286 .883 1.366l.117 .009h12c.513 0 .936 -.53 .993 -1.215l.007 -.16z"/>
                                    <path
                                        d="M9.015 13a1 1 0 0 1 -1 1a1.001 1.001 0 1 1 -.005 -2c.557 0 1.005 .448 1.005 1"/>
                                    <path
                                        d="M13.015 13a1 1 0 0 1 -1 1a1.001 1.001 0 1 1 -.005 -2c.557 0 1.005 .448 1.005 1"/>
                                    <path
                                        d="M17.02 13a1 1 0 0 1 -1 1a1.001 1.001 0 1 1 -.005 -2c.557 0 1.005 .448 1.005 1"/>
                                    <path d="M12.02 15a1 1 0 0 1 0 2a1.001 1.001 0 1 1 -.005 -2z"/>
                                    <path
                                        d="M9.015 16a1 1 0 0 1 -1 1a1.001 1.001 0 1 1 -.005 -2c.557 0 1.005 .448 1.005 1"/>
                                </svg>
                            </div>
                            <div>
                                <div>Schedule Post</div>
                                <div> {{ now()->format('d-m-Y') }}</div>
                            </div>
                        </div>
                        <button type="button" aria-label="button" class="bg-pink-transparent border-2 border-pink-600 rounded-full w-11 h-11 flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>

                        </button>
                    </div>
                    <div>
                        <div class="flex justify-between overflow-hidden ">
                            <button class="border dark:border-gray-600 border-black p-3 rounded-full hover:bg-gray-100 hover:border-none  hover:text-gray-800">01</button>
                            <button class="border dark:border-gray-600 border-black p-3 rounded-full hover:bg-gray-100 hover:border-none hover:text-gray-800">02</button>
                            <button class="border dark:border-gray-600 border-black p-3 rounded-full hover:bg-gray-100 hover:border-none hover:text-gray-800">03</button>
                            <button class="border dark:border-gray-600 border-black p-3 rounded-full hover:bg-gray-100 hover:border-none hover:text-gray-800">04</button>
                            <button class="border dark:border-gray-600 border-black p-3 rounded-full hover:bg-gray-100 hover:border-none hover:text-gray-800">05</button>
                            <button class="border dark:border-gray-600 border-black p-3 rounded-full hover:bg-gray-100 hover:border-none hover:text-gray-800">06</button>
                        </div>
                    </div>
                </div>
                <div class="box overflow-hidden">
                    <div class="box-header justify-between">
                        <div class="box-title">
                            Posts
                        </div>
                        <a href="javascript:void(0);" class="text-xs text-textmuted dark:text-textmuted/50"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                    </div>
                    <div class="box-body p-0">
                        <ul class="ti-list-group list-group-flush">
                            <li class="ti-list-group-item">
                                <div class="flex gap-4 flex-wrap items-center">
                                                        <span class="avatar avatar-xl">
                                                            <img src="{{asset('build/assets/images/media/blog/14.jpg')}}" class="img-fluid" alt="...">
                                                        </span>
                                    <div class="flex-auto">
                                        <p class="mb-1 popular-blog-content truncate font-medium">
                                            The Wonders of Nature
                                        </p>
                                        <span class="text-textmuted dark:text-textmuted/50 text-xs">18 Jan 2024, 15:46</span>
                                        <div class="btn-list text-start mt-3">
                                            <button class="ti-btn ti-btn-icon btn-wave ti-btn-soft-primary">
                                                <i class="ri-facebook-line leading-none align-center text-[17px]"></i>
                                            </button>
                                            <button class="ti-btn ti-btn-icon btn-wave ti-btn-soft-primary1">
                                                <i class="ri-twitter-x-line leading-none align-center text-[17px]"></i>
                                            </button>
                                            <button class="ti-btn ti-btn-icon btn-wave ti-btn-soft-primary2">
                                                <i class="ri-instagram-line leading-none align-center text-[17px]"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="ti-btn ti-btn-icon bg-light ti-btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                    </div>

                                </div>
                            </li>
                            <li class="ti-list-group-item">
                                <div class="flex gap-4 flex-wrap items-center">
                                                        <span class="avatar avatar-xl">
                                                            <img src="{{asset('build/assets/images/media/blog/15.jpg')}}" class="img-fluid" alt="...">
                                                        </span>
                                    <div class="flex-auto">
                                        <p class="mb-1 popular-blog-content truncate font-medium">
                                            Embarking on a Tourism
                                        </p>
                                        <span class="text-textmuted dark:text-textmuted/50 text-xs">20 Feb 2024, 03:03</span>
                                        <div class="btn-list text-start mt-3">
                                            <button class="ti-btn ti-btn-icon btn-wave ti-btn-soft-primary">
                                                <i class="ri-facebook-line leading-none align-center text-[17px]"></i>
                                            </button>
                                            <button class="ti-btn ti-btn-icon btn-wave ti-btn-soft-primary1">
                                                <i class="ri-twitter-x-line leading-none align-center text-[17px]"></i>
                                            </button>
                                            <button class="ti-btn ti-btn-icon btn-wave ti-btn-soft-primary2">
                                                <i class="ri-instagram-line leading-none align-center text-[17px]"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="ti-btn ti-btn-icon bg-light ti-btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                    </div>

                                </div>
                            </li>
                            <li class="ti-list-group-item">
                                <div class="flex gap-4 flex-wrap items-center">
                                                        <span class="avatar avatar-xl">
                                                            <img src="{{asset('build/assets/images/media/blog/16.jpg')}}" class="img-fluid" alt="...">
                                                        </span>
                                    <div class="flex-auto">
                                        <p class="mb-1 popular-blog-content truncate font-medium">
                                            Navigating the Digital Frontier
                                        </p>
                                        <span class="text-textmuted dark:text-textmuted/50 text-xs">05 Feb 2024, 16:23</span>
                                        <div class="btn-list text-start mt-3">
                                            <button class="ti-btn ti-btn-icon btn-wave ti-btn-soft-primary">
                                                <i class="ri-facebook-line leading-none align-center text-[17px]"></i>
                                            </button>
                                            <button class="ti-btn ti-btn-icon btn-wave ti-btn-soft-primary1">
                                                <i class="ri-twitter-x-line leading-none align-center text-[17px]"></i>
                                            </button>
                                            <button class="ti-btn ti-btn-icon btn-wave ti-btn-soft-primary2">
                                                <i class="ri-instagram-line leading-none align-center text-[17px]"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="ti-btn ti-btn-icon bg-light ti-btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                    </div>
                                </div>
                            </li>
                            <li class="ti-list-group-item">
                                <div class="flex gap-4 flex-wrap items-center">
                                                        <span class="avatar avatar-xl">
                                                            <img src="{{asset('build/assets/images/media/blog/17.jpg')}}" class="img-fluid" alt="...">
                                                        </span>
                                    <div class="flex-auto">
                                        <p class="mb-1 popular-blog-content truncate font-medium">
                                            More Designing on websites
                                        </p>
                                        <span class="text-textmuted dark:text-textmuted/50 text-xs">13 Mar 2024, 20:14</span>
                                        <div class="btn-list text-start mt-3">
                                            <button class="ti-btn ti-btn-icon btn-wave ti-btn-soft-primary">
                                                <i class="ri-facebook-line leading-none align-center text-[17px]"></i>
                                            </button>
                                            <button class="ti-btn ti-btn-icon btn-wave ti-btn-soft-primary1">
                                                <i class="ri-twitter-x-line leading-none align-center text-[17px]"></i>
                                            </button>
                                            <button class="ti-btn ti-btn-icon btn-wave ti-btn-soft-primary2">
                                                <i class="ri-instagram-line leading-none align-center text-[17px]"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="ti-btn ti-btn-icon bg-light ti-btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <!-- Apex Charts JS -->
    <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Dropzone JS -->
    <script src="{{asset('build/assets/libs/dropzone/dropzone-min.js')}}"></script>

    <!-- Internal File Manager JS -->
    @vite('resources/assets/js/file-manager.js')
    <!-- Sales Dashboard -->
    @vite('resources/assets/js/sales-dashboard.js')
    @vite('resources/assets/js/widgets.js')

@endsection

