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
            <div class=" xl:col-span-9 col-span-12 space-y-5">

                <div class="box p-3">
                    <div class="text-lg font-semibold">
                        Add Fund
                    </div>
                    <div class="box-tab p-5 gap-4">
                        <div
                            class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12 flex gap-2 items-center w-36">
                            <label for="input-placeholder" class="ti-form-label">Amount</label>
                            <input type="text" class="form-control" id="input-placeholder" placeholder="0">
                        </div>

                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12 flex gap-2 items-center">
                            <label class="rounded-sm !p-0 font-medium">Payment By</label>
                            <select class="ti-form-select rounded-sm !py-2 !px-3" data-trigger
                                    name="choices-single-default"
                                    id="choices-single-default">
                                <option value="">Choose</option>
                                <option value="Choice 1">Choice 1</option>
                                <option value="Choice 2">Choice 2</option>
                                <option value="Choice 3">Choice 3</option>
                            </select>
                        </div>

                        <div>
                            <button class="ti-btn ti-btn-primary w-24 h-8">Pay Now</button>
                        </div>
                    </div>

                </div>

                <div class="xl:col-span-9 col-span-12 flex gap-5">

                    <div class="box w-6/12 h-[25rem]">
                        <div class="box-header w-full flex justify-between">
                            <div class="box-title">AD Balance</div>

                            <div>
                                <button type="button"
                                        class="hs-dropdown-toggle ti-btn btn-wave ti-btn-primary h-6 w-28 text-xs"
                                        data-hs-overlay="#hs-focus-management-modal">
                                    Increase Limit
                                </button>
                                <div id="hs-focus-management-modal" class="hs-overlay hidden ti-modal">
                                    <div class="hs-overlay-open:mt-7 ti-modal-box-new1 sm:max-w-xl mt-0 ease-out">
                                        <div class="ti-modal-content">
                                            <div class="ti-modal-header">
                                                <h6 class="ti-modal-title">
                                                    Increase Limit
                                                </h6>
                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                        data-hs-overlay="#hs-focus-management-modal">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8"
                                                         fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="ti-modal-body w-">
                                                <label for="text" class="ti-form-label">New Monthly Limit(₹)</label>
                                                <input type="email" id="input-label" class="ti-form-input"
                                                       placeholder="Ex:0000" autofocus="">
                                            </div>
                                            <div class="ti-modal-footer">

                                                <a class="ti-btn  btn-wave ti-btn-primary" href="javascript:void(0);">
                                                    Request
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="box-body">
                            <div id="gradient-circle"></div>
                        </div>
                    </div>


                    <div class="box w-full h-[25rem]">
                        <div class="box-header">
                            <div class="box-title">Amount Spend</div>
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
                                        <th scope="col">Details</th>
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
                                            <div>
                                                <a data-bs-toggle="offcanvas"
                                                   data-hs-overlay="#offcanvasExample">Ad ID 1466018</a>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="flex items-center flex-wrap gap-1">
                                            <span
                                                class="badge bg-primarytint1color/10 text-primarytint1color">Credit</span>
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
                                            <div>
                                                <a data-bs-toggle="offcanvas"
                                                   data-hs-overlay="#offcanvasExample">Paid by UPI</a>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="flex items-center flex-wrap gap-1">
                                            <span
                                                class="badge bg-primarytint1color/10 text-primarytint1color">Debit</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="flex items-center flex-wrap gap-1">
                                            <span
                                                class="badge text-red-500">18000</span>
                                            </div>
                                        </td>


                                        {{--                                    <td>--}}
                                        {{--                                        <div class="btn-list">--}}
                                        {{--                                            <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample"--}}
                                        {{--                                               class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon"><i--}}
                                        {{--                                                    class="ri-eye-line"></i></a>--}}
                                        {{--                                            <button class="ti-btn ti-btn-sm ti-btn-soft-info ti-btn-icon"><i--}}
                                        {{--                                                    class="ri-pencil-line"></i></button>--}}
                                        {{--                                            <button--}}
                                        {{--                                                class="ti-btn ti-btn-sm ti-btn-soft-primary2 ti-btn-icon contact-delete">--}}
                                        {{--                                                <i class="ri-delete-bin-line"></i></button>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </td>--}}
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
</div>

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

<!-- Prism JS -->
<script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
@vite('resources/assets/js/prism-custom.js')

<!-- Modal JS -->
@vite('resources/assets/js/modal.js')

