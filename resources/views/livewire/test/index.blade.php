@section('styles')

    <!-- Apexcharts CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/apexcharts/apexcharts.css')}}">

    <link rel="stylesheet" href="{{asset('build/assets/libs/dropzone/dropzone.css')}}">

@endsection

<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <nav>
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Apex Charts</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Apex Line Charts</li>
                    </ol>
                </nav>
                <h1 class="page-title font-medium text-lg mb-0">Apex Line Charts</h1>
            </div>
            <div class="btn-list">
                <button
                    class="ti-btn bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 btn-wave !my-0">
                    <i class="ri-filter-3-line align-middle me-1 leading-none"></i> Filter
                </button>
                <button class="ti-btn ti-btn-primary !border-0 btn-wave me-0">
                    <i class="ri-share-forward-line me-1"></i> Share
                </button>
            </div>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="grid grid-cols-12 gap-x-6">
            <div class="xl:col-span-6 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">Basic Line Chart</div>
                    </div>
                    <div class="box-body">
                        <div id="line-chart"></div>
                    </div>
                </div>
            </div>
            <div class="xl:col-span-6 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">Line Chart With Data Labels</div>
                    </div>
                    <div class="box-body">
                        <div id="line-chart-datalabels"></div>
                    </div>
                </div>
            </div>
            <div class="xl:col-span-6 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">Zoomable Time Series</div>
                    </div>
                    <div class="box-body">
                        <div id="zoom-chart"></div>
                    </div>
                </div>
            </div>
            <div class="xl:col-span-6 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">Line With Annotations</div>
                    </div>
                    <div class="box-body">
                        <div id="annotation-chart"></div>
                    </div>
                </div>
            </div>
            <div class="xl:col-span-6 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">Brush Chart</div>
                    </div>
                    <div class="box-body">
                        <div id="brush-chart1"></div>
                        <div id="brush-chart"></div>
                    </div>
                </div>
            </div>
            <div class="xl:col-span-6 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">StepLine Chart</div>
                    </div>
                    <div class="box-body">
                        <div id="stepline-chart"></div>
                    </div>
                </div>
            </div>
            <div class="xl:col-span-6 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">Gradient Line Chart</div>
                    </div>
                    <div class="box-body">
                        <div id="gradient-chart"></div>
                    </div>
                </div>
            </div>
            <div class="xl:col-span-6 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">Missing/Null Values Chart</div>
                    </div>
                    <div class="box-body">
                        <div id="null-chart"></div>
                    </div>
                </div>
            </div>
            <div class="xl:col-span-6 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">Real Time Chart</div>
                    </div>
                    <div class="box-body">
                        <div id="dynamic-chart"></div>
                    </div>
                </div>
            </div>
            <div class="xl:col-span-6 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">Dashed Line Chart</div>
                    </div>
                    <div class="box-body">
                        <div id="dashed-chart"></div>
                    </div>
                </div>
            </div>
            <div class="xl:col-span-6 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">Syncing Charts</div>
                    </div>
                    <div class="box-body">
                        <div id="chart-line"></div>
                        <div id="chart-line2"></div>
                        <div id="chart-area"></div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- Alpine.js Root -->
    <div x-data="tableManager()">
        <!-- Sidebar Toggle Button -->
        <div class="flex items-center gap-2" id="files-main-nav">
            <a href="javascript:void(0);" data-hs-overlay="#offcanvasRight" aria-controls="offcanvasRight">
            <span class="avatar avatar-md bg-primarytint1color/10 !text-primarytint1color">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <rect width="256" height="256" fill="none"/>
                    <path
                        d="M112,175.67V168a8,8,0,0,0-8-8H48a8,8,0,0,0-8,8v40a8,8,0,0,0,8,8h56a8,8,0,0,0,8-8v-8.82L144,216V160Z"
                        opacity="0.2"/>
                    <polyline points="112 175.67 144 160 144 216 112 199.18"
                              fill="none" stroke="currentColor"
                              stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="16"/>
                    <rect x="40" y="160" width="72" height="56" rx="8"
                          fill="none" stroke="currentColor"
                          stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="16"/>
                    <polygon points="152 32 152 88 208 88 152 32"
                             opacity="0.2"/>
                    <polyline points="152 32 152 88 208 88" fill="none"
                              stroke="currentColor"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="16"/>
                    <path d="M176,224h24a8,8,0,0,0,8-8V88L152,32H56a8,8,0,0,0-8,8v88"
                          fill="none" stroke="currentColor"
                          stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="16"/>
                </svg>
            </span>
            </a>
        </div>

        <!-- Table -->
        <div class="p-4">
            <div class="table-responsive">
                <table class="table whitespace-nowrap min-w-full">
                    <thead>
                    <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                        <template x-for="(column, index) in columns" :key="index">
                            <th x-show="column.visible">
                                <span x-text="column.name"></span>
                            </th>
                        </template>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                        <template x-for="(column, index) in columns" :key="index">
                            <td x-show="column.visible">Sample Data</td>
                        </template>
                    </tr>
                    <tr class="border-b">
                        <template x-for="(column, index) in columns" :key="index">
                            <td x-show="column.visible">Sample Data 2</td>
                        </template>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Sidebar for Column Selection -->
        <div class="ti-offcanvas ti-offcanvas-right hs-overlay hidden" id="offcanvasRight">
            <div class="ti-offcanvas-body !p-0">
                <div class="selected-file-details">
                    <div
                        class="flex p-4 items-center justify-between border-b border-defaultborder dark:border-defaultborder/10">
                        <div class="w-full box">
                            <div class="p-4">
                                <!-- Column Toggle Controls -->
                                <div class="mb-4 flex gap-4 flex-wrap">
                                    <template x-for="(column, index) in columns" :key="index">
                                        <label class="inline-flex items-center space-x-2">
                                            <input type="checkbox" x-model="column.visible"
                                                   class="form-checkbox text-blue-600"/>
                                            <span x-text="column.name"></span>
                                        </label>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End::app-content -->

    @section('scripts')

        <script>
            function tableManager() {
                return {
                    columns: [
                        {name: "Post Name", visible: true},
                        {name: "Type", visible: true},
                        {name: "Date", visible: true},
                        {name: "Content", visible: true},
                        {name: "Average Watch Time", visible: true},
                        {name: "Impression", visible: true},
                        {name: "Reach", visible: true},
                        {name: "Reactions", visible: true},
                        {name: "Comments", visible: true},
                        {name: "Shares", visible: true},
                        {name: "Link Click", visible: true},
                    ]
                };
            }
        </script>

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Used In Zoomable TIme Series Chart -->
        <script src="{{asset('build/assets/dataseries.js')}}"></script>

        <!---Used In Annotations Chart-->
        <script src="{{asset('build/assets/apexcharts-stock-prices.js')}}"></script>

        <!-- Internal Apex Line Charts JS -->
        @vite('resources/assets/js/apexcharts-line.js')


        <!-- Dropzone JS -->
        <script src="{{asset('build/assets/libs/dropzone/dropzone-min.js')}}"></script>

        <!-- Internal File Manager JS -->
@vite('resources/assets/js/file-manager.js')

@endsection
