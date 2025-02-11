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
                                Admin Dashboard
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

