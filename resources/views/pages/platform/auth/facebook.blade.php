@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
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
                <div class="text-lg">Facebook</div>
                <a href="/facebook">
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
                            <svg width="90" height="90" viewBox="0 0 90 90" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" class="w-8 h-8">
                                <path
                                    d="M85 45C85 22.9086 67.0914 5 45 5C22.9086 5 5 22.9086 5 45C5 64.9649 19.6273 81.5133 38.75 84.5141V56.5625H28.5938V45H38.75V36.1875C38.75 26.1625 44.7219 20.625 53.8586 20.625C58.2352 20.625 62.8125 21.4063 62.8125 21.4063V31.25H57.7687C52.8 31.25 51.25 34.3336 51.25 37.4969V45H62.3438L60.5703 56.5625H51.25V84.5141C70.3727 81.5133 85 64.9656 85 45Z"
                                    fill="#1877F2"/>
                                <path
                                    d="M60.5703 56.5625L62.3438 45H51.25V37.4969C51.25 34.3336 52.8 31.25 57.7687 31.25H62.8125V21.4062C62.8125 21.4062 58.2352 20.625 53.8586 20.625C44.7219 20.625 38.75 26.1625 38.75 36.1875V45H28.5938V56.5625H38.75V84.5141C40.7867 84.8336 42.8734 85 45 85C47.1266 85 49.2133 84.8336 51.25 84.5141V56.5625H60.5703Z"
                                    fill="white"/>
                            </svg>
                            Facebook Auth
                        </div>
                    </x-tabs.tab>
                    <x-tabs.tab>
                        <div class="text-lg inline-flex items-center gap-x-3">
                            <svg width="90" height="90" viewBox="0 0 90 90" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" class="w-8 h-8">
                                <path
                                    d="M85 45C85 22.9086 67.0914 5 45 5C22.9086 5 5 22.9086 5 45C5 64.9649 19.6273 81.5133 38.75 84.5141V56.5625H28.5938V45H38.75V36.1875C38.75 26.1625 44.7219 20.625 53.8586 20.625C58.2352 20.625 62.8125 21.4063 62.8125 21.4063V31.25H57.7687C52.8 31.25 51.25 34.3336 51.25 37.4969V45H62.3438L60.5703 56.5625H51.25V84.5141C70.3727 81.5133 85 64.9656 85 45Z"
                                    fill="#1877F2"/>
                                <path
                                    d="M60.5703 56.5625L62.3438 45H51.25V37.4969C51.25 34.3336 52.8 31.25 57.7687 31.25H62.8125V21.4062C62.8125 21.4062 58.2352 20.625 53.8586 20.625C44.7219 20.625 38.75 26.1625 38.75 36.1875V45H28.5938V56.5625H38.75V84.5141C40.7867 84.8336 42.8734 85 45 85C47.1266 85 49.2133 84.8336 51.25 84.5141V56.5625H60.5703Z"
                                    fill="white"/>
                            </svg>
                            Manual token
                        </div>
                    </x-tabs.tab>
                </x-slot>
                <x-slot name="content">
                    <x-tabs.content>
                        <div class="w-full h-auto flex justify-between items-center">
                            <div class="xl:w-3/4 flex justify-center items-center">
                                <a href="{{url('auth/facebook') }}" class="ti-btn ti-btn-primary label-ti-btn">
                                    <i class="ri-links-line label-ti-btn-icon me-2"></i>
                                    Connect Account
                                </a>
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

                    <x-tabs.content>
                        <div class="w-full h-auto flex justify-between items-center gap-10">
                            <div class="w-2/3 space-y-5">
                                <x-input.single-select label="Account Type">
                                    <option value="">Choose</option>
                                    <option value="Choice 1">Page</option>
                                    <option value="Choice 2">Group</option>
                                    <option value="Choice 3">Profile</option>
                                </x-input.single-select>
                                <div class="">
                                    <label for="input-label" class="ti-form-label">Page ID</label>
                                    <input type="text" class="form-control" id="input-label">
                                </div>
                                <div class="">
                                    <label for="input-label" class="ti-form-label">Access Token</label>
                                    <input type="text" class="form-control" id="input-label">
                                </div>
                                <button type="button" class="ti-btn-w-lg ti-btn-primary label-ti-btn">
                                    <i class="ri-links-line label-ti-btn-icon  me-2"></i>
                                    Connect Account
                                </button>
                            </div>
                            <div class="w-1/3">
                                <div class="box overflow-hidden">
                                    <div class="box-header">
                                        <div class="box-title">Watch Video:</div>
                                    </div>
                                    <div class="box-body">
                                        <div class="plyr__video-embed" id="player1">
                                            <iframe width="560" height="315"
                                                    src="https://www.youtube.com/embed/-lDlbQ7DiCI?si=EerYCepJFDTb5xOl"
                                                    title="YouTube video player"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </x-tabs.content>
                </x-slot>
            </x-tabs.tab-panel>
        </div>

        <!-- Multi-Select with Remove Button -->
        <label class="ti-form-select rounded-sm !p-0 mb-2 font-medium">With Remove Button</label>
        <select class="ti-form-select rounded-sm !py-2 !px-3"
                name="choices-multiple-remove-button"
                data-choices
                data-remove-button
                multiple>
            <option value="Choice 1" selected>Choice 1</option>
            <option value="Choice 2">Choice 2</option>
            <option value="Choice 3">Choice 3</option>
            <option value="Choice 4">Choice 4</option>
        </select>

        <!-- Single Select with Search -->
        <label class="ti-form-select rounded-sm !p-0 mb-2 font-medium">Single Select (With Search)</label>
        <select class="ti-form-select rounded-sm !py-2 !px-3"
                name="choices-multiple-remove-button"
                data-choices
                data-remove-button
                multiple
                data-search>
            <option value="One">One</option>
            <option value="Two">Two</option>
            <option value="Three">Three</option>
        </select>

        <!-- Email Input with Filtering -->

@endsection

@section('scripts')
{{--    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>--}}
{{--    <script src="choices-init.js"></script>--}}
    @vite('resources/assets/js/select-choice.js')


@endsection
