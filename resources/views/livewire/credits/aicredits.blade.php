<div class="main-content app-content px-5 space-y-5">

    <div class="container-fluid">

        <div x-data="{ currentPage: window.location.pathname }" class="p-2 py-6 flex items-center font-medium">
            <div
                :class="currentPage === '/aicredits' ? 'bg-[#FF5D9F]  rounded-l-sm text-white ' : ' hover:text-gray-400 dark:text-gray-400  rounded-md '"
                class="max-w-max py-3 px-2 group">
                <a href="/aicredits" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    AI Credits
                </a>
            </div>
            <div
                :class="currentPage === '/adcredits' ? 'bg-[#FF5D9F] rounded-r-sm text-white ' : ' hover:text-gray-400  dark:text-gray-400  rounded-md '"
                class="max-w-max py-3 px-2 group">
                <a href="/adcredits" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    AD Credits
                </a>
            </div>
        </div>

        <div class="grid grid-cols-12 sm:gap-x-6">
            <div class=" xl:col-span-9 col-span-12">
                <div class="box shadow-none overflow-hidden border-0">
                    <div class="box-body p-0">
                        <div class="table-responsive">
                            <table class="table  pricing-table mb-0 border-separate border-spacing-4">
                                <thead>

                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                    <th scope="row" class="dark:bg-gray-700 bg-gray-50">
                                        <div class="mb-0 font-medium text-[1rem]">Basic</div>
                                        <div class="mb-4 text-[1.75rem] font-medium">800
                                            <span
                                                class="text-[13px] opacity-50 ms-1">Credits</span>
                                        </div>

                                        <button type="button"
                                                class="ti-btn ti-btn-soft-primary grid w-full btn-wave waves-effect waves-light">
                                            <span class="ms-4 me-4">₹500</span>
                                        </button>
                                    </th>

                                    <th scope="row" class="dark:bg-gray-700 bg-gray-50">
                                        <div class="mb-0 font-medium text-[1rem]">Growth</div>
                                        <div class="mb-4 text-[1.75rem] font-medium">4000
                                            <span
                                                class="text-[13px] opacity-50 ms-1">Credits</span>
                                        </div>

                                        <button type="button"
                                                class="ti-btn ti-btn-soft-primary grid w-full btn-wave waves-effect waves-light">
                                            <span class="ms-4 me-4">₹1000</span>
                                        </button>
                                    </th>

                                    <th scope="row" class="dark:bg-gray-700 bg-gray-50">
                                        <div class="mb-0 font-medium text-[1rem]">Pro</div>
                                        <div class="mb-4 text-[1.75rem] font-medium">2000
                                            <span class="text-[13px] opacity-50 ms-1">Credits</span>
                                        </div>

                                        <button type="button"
                                                class="ti-btn ti-btn-soft-primary grid w-full btn-wave waves-effect waves-light">
                                            <span class="ms-4 me-4">₹2500</span>
                                        </button>
                                    </th>

                                    <th scope="row" class="dark:bg-gray-700 bg-gray-50">
                                        <div class="mb-0 font-medium text-[1rem]">Professional</div>
                                        <div class="mb-4 text-[1.75rem] font-medium">15000
                                            <span class="text-[13px] opacity-50 ms-1">Credits</span>
                                        </div>

                                        <button type="button"
                                                class="ti-btn ti-btn-soft-primary grid w-full btn-wave waves-effect waves-light">
                                            <span class="ms-4 me-4">₹2500</span>
                                        </button>
                                    </th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="xl:col-span-9 col-span-12 flex gap-5">

                    <div class="box w-5/12 h-[25rem]">
                        <div class="box-header">
                            <div class="box-title">AI Balance</div>
                        </div>
                        <div class="box-body">
                            <div id="gradient-circle"></div>
                        </div>
                    </div>

                    <div class="box w-full h-[25rem]">
                        <div class="box-header">
                            <div class="box-title">Amont Spend</div>
                        </div>
                        <div class="box-body">
                            <div id="column-datalabels"></div>
                        </div>
                    </div>
                </div>

                <div class="xl:col-span-9 col-span-6">
                    <div class="box">
                        <div class="box-header justify-between">
                            <div class="text-2xl ">Transaction</div>
                            <div class="flex flex-wrap gap-2">
                                <div class="ti-dropdown hs-dropdown">
                                    <a href="javascript:void(0);" class="ti-btn bg-light ti-btn-sm btn-wave"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        Sort By<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                    </a>
                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Newest</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Date Added</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">A - Z</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="box-body p-0">

                            <div class="table-responsive whitespace-nowrap">
                                <table class="ti-custom-table ti-custom-table-head">
                                    <thead>
                                    <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                        <th scope="col">
                                            #
                                        </th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Credits</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr class="crm-contact companies-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                        <td class="companies-checkbox">
                                            1
                                        </td>
                                        <td>
                                            <div>
                                                <a data-bs-toggle="offcanvas"
                                                   data-hs-overlay="#offcanvasExample">12/11/2020</a>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="flex items-center flex-wrap gap-1">
                                            <span
                                                class="badge bg-primarytint1color/10 text-green-500">Credit</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="flex items-center flex-wrap gap-1">
                                            <span
                                                class="badge text-red-500">12000</span>
                                            </div>
                                        </td>

                                    </tr>

                                    <tr class="crm-contact companies-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                        <td class="companies-checkbox">
                                            1
                                        </td>
                                        <td>
                                            <div>
                                                <a data-bs-toggle="offcanvas"
                                                   data-hs-overlay="#offcanvasExample">12/11/2020</a>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="flex items-center flex-wrap gap-1">
                                            <span
                                                class="badge bg-primarytint1color/10 text-red-500">Debit</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="flex items-center flex-wrap gap-1">
                                            <span
                                                class="badge text-green-500">18000</span>
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="box-footer border-t-0">
                            <div class="flex items-center">
                                <div>
                                    Showing 9 Entries <i class="bi bi-arrow-right ms-2 font-medium"></i>
                                </div>
                                <div class="ms-auto">
                                    <nav aria-label="Page navigation" class="pagination-style-4">
                                        <ul class="ti-pagination mb-0 flex-wrap">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0);">
                                                    Prev
                                                </a>
                                            </li>
                                            <li class="page-item "><a class="page-link active"
                                                                      href="javascript:void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link !text-primary" href="javascript:void(0);">
                                                    next
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="xl:col-span-3 col-span-12">
                <div class="">
                    <div class="relative overflow-hidden rounded ">
                        <img src="{{asset('images/partials/img1.jpg')}}"
                             class="w-[280px] h-[260px] mb-3 rounded-md"
                             alt="...">
                    </div>
                    <div>
                    </div>
                    <div class="grid">
                        <button type="button" class="ti-btn ti-btn-purple-gradient btn-wave ">Support</button>
                    </div>
                </div>
            </div>


        </div>

    </div>

    @section('scripts')

        <!-- Pricing JS -->
        @vite('resources/assets/js/pricing.js')

        <!-- Chartjs Chart JS -->
        <script src="{{asset('build/assets/libs/chart.js/chart.min.js')}}"></script>

        <!-- Imternal Chartjs JS -->
        @vite('resources/assets/js/chartjs-charts.js')

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Internal Apex Radialbar Charts JS -->
        @vite('resources/assets/js/apexcharts-radialbar.js')

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Internal Apex Mixed Charts JS -->
        @vite('resources/assets/js/apexcharts-mixed.js')


        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Internal Apex-Column-Charts JS -->
@vite('resources/assets/js/apexcharts-column.js')


@endsection


