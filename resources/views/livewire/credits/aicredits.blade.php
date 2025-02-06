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

                <div class="xl:col-span-9 col-span-12 flex gap-5">

                    <div class="box w-6/12">
                        <div class="box-body relative w-full">
                            <div class="box-title">AI Balance</div>
                            <div id="gradient-circle"></div>

                            <div class="absolute bottom-7 w-full space-y-3">
                                <div class="text-md dark:text-white">Credit Details</div>
                                <div class="px-5 space-y-2">
                                    <li>Credit Left : 3000</li>
                                    <li>Total Credit : 10000</li>
                                </div>

                                <button type="button" class="hs-dropdown-toggle ti-btn flex justify-center btn-wave ti-btn-primary w-10/12 "
                                        data-hs-overlay="#exampleModalgrid">
                                    Add Balance
                                </button>

                                <div id="hs-vertically-centered-modal"
                                     class="hs-overlay hidden ti-modal">
                                    <div
                                        class="hs-overlay-open:mt-7 ti-modal-box-new mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center">
                                        <div class="ti-modal-content w-full">
                                            <div class="ti-modal-header">
                                                <h6 class="modal-title text-[1rem] font-semibold"
                                                    id="staticBackdropLabel2">Caption
                                                </h6>
                                                <button type="button"
                                                        class="hs-dropdown-toggle ti-modal-close-btn"
                                                        data-hs-overlay="#hs-vertically-centered-modal">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="w-3.5 h-3.5" width="8" height="8"
                                                         viewBox="0 0 8 8" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                            fill="currentColor"/>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="ti-modal-body w-full">
                                                <div class="flex w-full gap-5 h-60">
                                                    <div class="w-full h-full flex flex-wrap gap-5">
                                                        <div class="w-full h-full">
                                                            <div class="h-full">
                                                                <div
                                                                    class="xl:col-span-12 col-span-12 h-[80%]">
                                                                    <label for="nft-description"
                                                                           class="form-label">AI
                                                                        Generating
                                                                        Captions</label>
                                                                    <textarea
                                                                        class="form-control w-full h-full"
                                                                        id="nft-description" rows="3"
                                                                        placeholder="Generate Caption for your FaceBook Post"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex px-4 justify-between items-center h-full">
                                                <div
                                                    class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12 h-full">
                                                    <input type="number" class="form-control h-8 py-2"
                                                           id="input-number"
                                                           placeholder="Words Limit">
                                                </div>

                                                <div class=" inline-flex">
                                                    <button type="button"
                                                            class="hs-dropdown-toggle ti-btn  btn-wave ti-btn-secondary"
                                                            data-hs-overlay="#hs-vertically-centered-modal">
                                                        Close
                                                    </button>
                                                    <a class="ti-btn  btn-wave ti-btn-primary"
                                                       href="javascript:void(0);">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             fill="none"
                                                             viewBox="0 0 24 24" stroke-width="1.5"
                                                             stroke="currentColor" class="size-6">
                                                            <path stroke-linecap="round"
                                                                  stroke-linejoin="round"
                                                                  d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z"/>
                                                        </svg>
                                                        Generate
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="exampleModalgrid" class="hs-overlay hidden ti-modal">
                                    <div
                                        class="hs-overlay-open:mt-7 ti-modal-box-new1 sm:max-w-lg mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center">
                                        <div class="ti-modal-content w-full">
                                            <div class="ti-modal-header">
                                                <h6 class="modal-title text-[1rem] font-semibold">Add Amount
                                                </h6>
                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                        data-hs-overlay="#exampleModalgrid">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                            fill="currentColor"/>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="ti-modal-body ">
                                                <div class="container-fluid">
                                                    <div class="grid grid-cols-2 gap-4">
                                                        <div
                                                            class="rounded-sm bg-light border border-defaultborder dark:border-defaultborder/20 p-4">
                                                            <div class="mb-0 font-medium text-[1rem]">Basic</div>
                                                            <div class="mb-4 text-[1.75rem] font-medium">800
                                                                <span
                                                                    class="text-[13px] opacity-50 ms-1">Credits</span>
                                                            </div>

                                                            <button type="button"
                                                                    class="ti-btn ti-btn-primary grid w-full btn-wave waves-effect waves-light hover:bg-[#FF5D9F]">
                                                                <span class="ms-4 me-4">₹500</span>
                                                            </button>
                                                        </div>
                                                        <div
                                                            class="rounded-sm bg-light border border-defaultborder dark:border-defaultborder/20 p-4">
                                                            <div class="mb-0 font-medium text-[1rem]">Growth</div>
                                                            <div class="mb-4 text-[1.75rem] font-medium">4000
                                                                <span
                                                                    class="text-[13px] opacity-50 ms-1">Credits</span>
                                                            </div>

                                                            <button type="button"
                                                                    class="ti-btn ti-btn-primary grid w-full btn-wave waves-effect waves-light hover:bg-[#FF5D9F]">
                                                                <span class="ms-4 me-4">₹1000</span>
                                                            </button>
                                                        </div>
                                                        <div
                                                            class="rounded-sm bg-light border border-defaultborder dark:border-defaultborder/20 p-4">
                                                            <div class="mb-0 font-medium text-[1rem]">Pro</div>
                                                            <div class="mb-4 text-[1.75rem] font-medium">2000
                                                                <span class="text-[13px] opacity-50 ms-1">Credits</span>
                                                            </div>

                                                            <button type="button"
                                                                    class="ti-btn ti-btn-primary grid w-full btn-wave waves-effect waves-light hover:bg-[#FF5D9F]">
                                                                <span class="ms-4 me-4">₹2500</span>
                                                            </button>
                                                        </div>
                                                        <div
                                                            class="rounded-sm bg-light border border-defaultborder dark:border-defaultborder/20 p-4">
                                                            <div class="mb-0 font-medium text-[1rem]">Professional</div>
                                                            <div class="mb-4 text-[1.75rem] font-medium">15000
                                                                <span class="text-[13px] opacity-50 ms-1">Credits</span>
                                                            </div>

                                                            <button type="button"
                                                                    class="ti-btn ti-btn-primary grid w-full btn-wave waves-effect waves-light hover:bg-[#FF5D9F]">
                                                                <span class="ms-4 me-4">₹2500</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ti-modal-footer">
                                                <a class="ti-btn  btn-wave ti-btn-primary" href="javascript:void(0);">
                                                    Save changes
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                        <th scope="col">Payment ID</th>
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

                                        <td class="companies-checkbox">
                                            AD1234
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
                                                class="badge text-green-500">12000</span>
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

                                        <td class="companies-checkbox">
                                            AD1234
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


