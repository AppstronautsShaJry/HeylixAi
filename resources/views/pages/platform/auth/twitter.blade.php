@extends('layouts.master')

@section('styles')

@endsection

@section('content')

    <!-- Start::app-content -->
    <div class="main-content app-content px-5">
        <div class="container-fluid">
            <!-- Start::page-header -->
            <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="/">
                                Dashboards
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Platform</li>
                        <li class="breadcrumb-item active" aria-current="page">Connect Account</li>
                    </ol>
                </div>
                <div class="flex gap-2 flex-wrap">
                </div>
            </div>
        </div>

        <div class="box px-1">
            <div class="flex justify-between items-center p-5 border-b ">
                <div class="text-lg">Instagram</div>
                <a href="/twitter">
{{--                    <button type="button" class="ti-btn ti-btn-primary-gradient btn-wave ">--}}
{{--                        View Account--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"--}}
{{--                             stroke="currentColor" class="size-6">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                  d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>--}}
{{--                        </svg>--}}
{{--                    </button>--}}
                    <button type="button" class="ti-btn ti-btn-primary label-ti-btn">
                        <i class="ri-eye-line label-ti-btn-icon  me-2"></i>
                        View Account
                    </button>
                </a>
            </div>
            <x-tabs.tab-panel>
                <x-slot name="tabs">
                    <x-tabs.tab>
                        <div class=" text-lg inline-flex items-center gap-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" width="24px" class="text-white bg-white" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                <g>
                    <polygon points="12.153992,10.729553 8.088684,5.041199 5.92041,5.041199 10.956299,12.087097 11.59021,12.97345 15.900635,19.009583 18.068909,19.009583 12.785217,11.615906"/>
                    <path d="M21.15979,1H2.84021C1.823853,1,1,1.823853,1,2.84021v18.31958C1,22.176147,1.823853,23,2.84021,23h18.31958 C22.176147,23,23,22.176147,23,21.15979V2.84021C23,1.823853,22.176147,1,21.15979,1z M15.235352,20l-4.362549-6.213013 L5.411438,20H4l6.246887-7.104675L4,4h4.764648l4.130127,5.881958L18.06958,4h1.411377l-5.95697,6.775635L20,20H15.235352z"/>
                </g>
            </svg>
                            Twitter Auth
                        </div>
                    </x-tabs.tab>
                </x-slot>
                <x-slot name="content">
                    <x-tabs.content>
                        <div class="w-full h-auto flex justify-between items-center">
                            <div class="xl:w-3/4 flex justify-center items-center">

                                <button type="button" class="ti-btn ti-btn-primary label-ti-btn">
                                    <i class="ri-links-line label-ti-btn-icon  me-2"></i>
                                    Connect Account
                                </button>
                            </div>
                            <div class="xl:w-1/4">
                                <div class="box ">
                                    <a href="javascript:void(0);" class="card-anchor"></a>
                                    <img src="{{asset('build/assets/images/media/media-23.jpg')}}" class="card-img-top" alt="...">
                                    <div class="box-body">
                                        <h6 class="box-title font-medium mb-0">Forests are Awesome.</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </x-tabs.content>

                </x-slot>
            </x-tabs.tab-panel>
        </div>

    </div>
@endsection
