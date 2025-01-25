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
                :class="currentPage === '/jobstatus-heylix' ? 'bg-[#FF5D9F]  rounded-l-sm text-white ' : ' dark:text-gray-400  rounded-md '"
                class="max-w-max py-3 px-2 group">
                <a href="/jobstatus-heylix" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    JobStatus
                </a>
            </div>
            <!-- Twitter Tab -->
            <div
                :class="currentPage === '/create-heylix' ? 'bg-[#FF5D9F]  rounded-r-sm text-white' : 'hover:text-white dark:text-gray-400  rounded-md'"
                class="max-w-max py-3 px-2 group">
                <a href="/create-heylix" class="text-sm inline-flex items-center gap-x-3 dark:hover:text-white">
                   Content Creation
                </a>
            </div>
            <div
                :class="currentPage === '/brand-heylix' ? 'bg-[#FF5D9F]  rounded-l-sm text-white ' : ' dark:text-gray-400  rounded-md '"
                class="max-w-max py-3 px-2 group">
                <a href="/brand-heylix" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    Branding
                </a>
            </div>
            <div
                :class="currentPage === '/virtual-heylix' ? 'bg-[#FF5D9F]  rounded-l-sm text-white ' : ' dark:text-gray-400  rounded-md '"
                class="max-w-max py-3 px-2 group">
                <a href="/virtual-heylix" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    Virtual Staff
                </a>
            </div>
        </div>

    </div>

    <div class="grid grid-cols-12 gap-x-6">
        <div class="xl:col-span-9 col-span-12">
            <div class="box overflow-hidden">
                <div class="box-header justify-between">
                    <div class="box-title">
                        Recent Orders
                    </div>
                    <a href="javascript:void(0);" class="ti-btn ti-btn-light btn-wave px-2 py-[0.26rem] text-textmuted dark:text-textmuted/50 waves-effect waves-light">View All</a>
                </div>
                <div class="box-body p-0">
                    <div class="table-responsive">
                        <table class="ti-custom-table text-nowrap">
                            <thead>
                            <tr class="border !border-defaultborder dark:!border-defaultborder/10">
                                <th class="!text-center flex items-center justify-center">
                                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value="" aria-label="...">
                                </th>
                                <th>Customer</th>
                                <th>Product</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Amount</th>
                                <th>Status</th>
                                <th>Date Ordered</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="border !border-defaultborder dark:!border-defaultborder/10">
                                <td class="text-center">
                                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel02" value="" aria-label="..." checked>
                                </td>
                                <td>
                                    <div class="flex items-center gap-4">
                                        <div class="leading-none">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                                </span>
                                        </div>
                                        <div>
                                            <span class="block font-medium">Elena smith</span>
                                            <span class="block text-[11px] text-textmuted dark:text-textmuted/50">elenasmith387@gmail.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    All-Purpose Cleaner
                                </td>
                                <td class="text-center">
                                    3
                                </td>
                                <td class="text-center">
                                    $9.99
                                </td>
                                <td>
                                    <span class="badge bg-primary/10 text-primary">In Progress</span>
                                </td>
                                <td>
                                    03,Sep 2024
                                </td>
                                <td>
                                    <div class="ti-btn-list">
                                        <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-success"><i class="ri-pencil-line"></i></button>
                                        <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger"><i class="ri-delete-bin-line"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border !border-defaultborder dark:!border-defaultborder/10">
                                <td class="text-center">
                                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel12" value="" aria-label="...">
                                </td>
                                <td>
                                    <div class="flex items-center gap-4">
                                        <div class="leading-none">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                </span>
                                        </div>
                                        <div>
                                            <span class="block font-medium">Nelson Gold</span>
                                            <span class="block text-[11px] text-textmuted dark:text-textmuted/50">noahrussell556@gmail.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Kitchen Knife Set
                                </td>
                                <td class="text-center">
                                    4
                                </td>
                                <td class="text-center">
                                    $49.99
                                </td>
                                <td>
                                    <span class="badge bg-primarytint1color/10 text-primarytint1color">Pending</span>
                                </td>
                                <td>
                                    26,Jul 2024
                                </td>
                                <td>
                                    <div class="ti-btn-list">
                                        <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-success"><i class="ri-pencil-line"></i></button>
                                        <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger"><i class="ri-delete-bin-line"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border !border-defaultborder dark:!border-defaultborder/10">
                                <td class="text-center">
                                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel42" value="" aria-label="..." checked>
                                </td>
                                <td>
                                    <div class="flex items-center gap-4">
                                        <div class="leading-none">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                                </span>
                                        </div>
                                        <div>
                                            <span class="block font-medium">Grace Mitchell</span>
                                            <span class="block text-[11px] text-textmuted dark:text-textmuted/50">gracemitchell79@gmail.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Velvet Throw Blanket
                                </td>
                                <td class="text-center">
                                    2
                                </td>
                                <td class="text-center">
                                    $29.99
                                </td>
                                <td>
                                    <span class="badge bg-primarytint2color/10 text-primarytint2color">Success</span>
                                </td>
                                <td>
                                    12,May 2024
                                </td>
                                <td>
                                    <div class="ti-btn-list">
                                        <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-success"><i class="ri-pencil-line"></i></button>
                                        <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger"><i class="ri-delete-bin-line"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border !border-defaultborder dark:!border-defaultborder/10">
                                <td class="text-center">
                                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel32" value="" aria-label="..." checked>
                                </td>
                                <td>
                                    <div class="flex items-center gap-4">
                                        <div class="leading-none">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                                </span>
                                        </div>
                                        <div>
                                            <span class="block font-medium">Spencer Robin</span>
                                            <span class="block text-[11px] text-textmuted dark:text-textmuted/50">leophillips124@gmail.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Aromatherapy Diffuser
                                </td>
                                <td class="text-center">
                                    4
                                </td>
                                <td class="text-center">
                                    $19.99
                                </td>
                                <td>
                                    <span class="badge bg-primarytint2color/10 text-primarytint2color">Success</span>
                                </td>
                                <td>
                                    15,Aug 2024
                                </td>
                                <td>
                                    <div class="ti-btn-list">
                                        <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-success"><i class="ri-pencil-line"></i></button>
                                        <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger"><i class="ri-delete-bin-line"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border !border-defaultborder dark:!border-defaultborder/10">
                                <td class="text-center">
                                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="...">
                                </td>
                                <td>
                                    <div class="flex items-center gap-4">
                                        <div class="leading-none">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                                </span>
                                        </div>
                                        <div>
                                            <span class="block font-medium">Chloe Lewis</span>
                                            <span class="block text-[11px] text-textmuted dark:text-textmuted/50">chloelewis67@gmail.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Insulated Water Bottle
                                </td>
                                <td class="text-center">
                                    2
                                </td>
                                <td class="text-center">
                                    $14.99
                                </td>
                                <td>
                                    <span class="badge bg-primarytint3color/10 text-primarytint3color">Pending</span>
                                </td>
                                <td>
                                    11,Oct 2024
                                </td>
                                <td>
                                    <div class="ti-btn-list">
                                        <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-success"><i class="ri-pencil-line"></i></button>
                                        <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger"><i class="ri-delete-bin-line"></i></button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@section('scripts')

    <!-- Moment JS -->
    <script src="{{asset('build/assets/libs/moment/moment.js')}}"></script>

@endsection
