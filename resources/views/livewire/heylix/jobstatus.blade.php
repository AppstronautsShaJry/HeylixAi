<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <nav>
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">HexLix</a></li>
{{--                        <li class="breadcrumb-item active" aria-current="page"></li>--}}
                        <li class="breadcrumb-item active" aria-current="page">Job Status</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->

        <div x-data="{ currentPage: window.location.pathname }" class="p-2 py-6 flex items-center font-medium">
            <div
                :class="currentPage === '/jobstatus-heylix' ? 'bg-[#FF5D9F]  rounded-l-sm text-white ' : ' hover:text-gray-400 dark:text-gray-400  rounded-md '"
                class="max-w-max py-3 px-2 group">
                <a href="/jobstatus-heylix" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    JobStatus
                </a>
            </div>
            <!-- Twitter Tab -->
            <div
                :class="currentPage === '/create-heylix' ? 'bg-[#FF5D9F] text-white' : 'hover:text-gray-400 dark:text-gray-400  rounded-md'"
                class="max-w-max py-3 px-2 group">
                <a href="/create-heylix" class="text-sm inline-flex items-center gap-x-3 dark:hover:text-white">
                   Content Creation
                </a>
            </div>
            <div
                :class="currentPage === '/brand-heylix' ? 'bg-[#FF5D9F] text-white ' : 'hover:text-gray-400 dark:text-gray-400  rounded-md '"
                class="max-w-max py-3 px-2 group">
                <a href="/brand-heylix" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    Branding
                </a>
            </div>
            <div
                :class="currentPage === '/virtual-heylix' ? 'bg-[#FF5D9F]  rounded-r-sm text-white ' : ' hover:text-gray-400 dark:text-gray-400  rounded-md '"
                class="max-w-max py-3 px-2 group">
                <a href="/virtual-heylix" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
                    Virtual Staff
                </a>
            </div>
        </div>

    </div>

    <div class="grid grid-cols-12 gap-x-6">
        <div class="xl:col-span-12 col-span-12">
            <div class="box overflow-hidden">

                <div class="box-body p-0">
                    <div class="table-responsive">
                        <table class="ti-custom-table text-nowrap">
                            <thead>
                            <tr class="border !border-defaultborder dark:!border-defaultborder/10">
                                <th>Job ID</th>
                                <th>Details</th>
                                <th class="">Job type</th>
                                <th>Assigned Date</th>
                                <th class="">Amount</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="border !border-defaultborder dark:!border-defaultborder/10">

                                <td>
                                    <div class="flex items-center gap-4">
                                        <div>
                                            <span class="block font-medium">AB001QS</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="">All-Purpose Cleaner</div>
                                </td>
                                <td class="">
                                    Content
                                </td>
                                <td class="">
                                    03,Sep 2024

                                </td>
                                <td>
                                    $9.99
                                </td>
                                <td>
                                    <span class="badge bg-primary/10 text-primary">In Progress</span>
                                </td>
                                <td>
                                    <div class="ti-btn-list">
                                        <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample" class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon"><i class="ri-eye-line"></i></a>
                                        <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-success"><i class="ri-pencil-line"></i></button>
                                        <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger"><i class="ri-delete-bin-line"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border !border-defaultborder dark:!border-defaultborder/10">

                                <td>
                                    <div class="flex items-center gap-4">
                                        <div>
                                            <span class="block font-medium">AB001QS</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="">All-Purpose Cleaner</div>
                                </td>
                                <td class="">
                                    Content
                                </td>
                                <td class="">
                                    03,Sep 2024

                                </td>
                                <td>
                                    $9.99
                                </td>
                                <td>
                                    <span class="badge bg-primary/10 text-primary">In Progress</span>
                                </td>
                                <td>
                                    <div class="ti-btn-list">
                                        <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample" class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon"><i class="ri-eye-line"></i></a>
                                        <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-success"><i class="ri-pencil-line"></i></button>
                                        <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger"><i class="ri-delete-bin-line"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border !border-defaultborder dark:!border-defaultborder/10">

                                <td>
                                    <div class="flex items-center gap-4">
                                        <div>
                                            <span class="block font-medium">AB001QS</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="">All-Purpose Cleaner</div>
                                </td>
                                <td class="">
                                    Content
                                </td>
                                <td class="">
                                    03,Sep 2024

                                </td>
                                <td>
                                    $9.99
                                </td>
                                <td>
                                    <span class="badge bg-primary/10 text-primary">In Progress</span>
                                </td>
                                <td>
                                    <div class="ti-btn-list">
                                        <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample" class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon"><i class="ri-eye-line"></i></a>
                                        <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-success"><i class="ri-pencil-line"></i></button>
                                        <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger"><i class="ri-delete-bin-line"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border !border-defaultborder dark:!border-defaultborder/10">

                                <td>
                                    <div class="flex items-center gap-4">
                                        <div>
                                            <span class="block font-medium">AB001QS</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="">All-Purpose Cleaner</div>
                                </td>
                                <td class="">
                                    Content
                                </td>
                                <td class="">
                                    03,Sep 2024

                                </td>
                                <td>
                                    $9.99
                                </td>
                                <td>
                                    <span class="badge bg-primary/10 text-primary">In Progress</span>
                                </td>
                                <td>
                                    <div class="ti-btn-list">
                                        <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample" class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon"><i class="ri-eye-line"></i></a>
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
