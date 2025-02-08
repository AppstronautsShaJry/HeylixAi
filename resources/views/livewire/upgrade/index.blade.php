<div class="main-content app-content px-5 space-y-5">
    <div class="container-fluid">
        <!-- Start::page-header -->
        <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="/">
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="/calender-social">Calendar</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </div>
            <div class="flex gap-2 flex-wrap">
            </div>
        </div>

    </div>

    <!-- Start:: row-1 -->
    <div class="flex justify-center">
        <div class="w-11/12" id="convertable-pricing">
            <div class="box">
                <div class="box-body p-0">
                    <div class="p-4 m-2 rounded-sm bg-primary-gradient text-white bg-crypto-balance">
                        <div class="flex items-center gap-2 justify-between">
                            <div>
                                <div class="mb-1 text-[14px] opacity-90">Current Plan</div>
                                <h4 class="text-white mb-1 font-medium me-2">Advanced</h4>
                                <span class="opacity-70 text-xs">Expire on 01  Feb 2025</span><span
                                    class="badge bg-success mt-2 text-white p-1 text-end ms-1">
                                    ₹10,000 / month</span>
                            </div>
                            <div class="ms-auto text-end">
                                <div class="avatar avatar-lg bg-transparent shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round"
                                         class="icon icon-tabler icons-tabler-outline icon-tabler-settings-plus">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path
                                            d="M12.483 20.935c-.862 .239 -1.898 -.178 -2.158 -1.252a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.08 .262 1.496 1.308 1.247 2.173"/>
                                        <path d="M16 19h6"/>
                                        <path d="M19 16v6"/>
                                        <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"/>
                                    </svg>
                                    {{--                                    <i class="ri-bank-line  !text-[1.5rem] leading-none"></i>--}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="grid grid-cols-12 gap-x-6 border-t border-dashed border-defaultborder g-0 dark:border-defaultborder/10">
                        <div
                            class="xl:col-span-12 sm:col-span-6 col-span-12 border-e border-dashed border-defaultborder dark:border-defaultborder/10">

                            <div class="switcher-box flex my-2 justify-center w-full">
                                <span class="pricing-time-span">Monthly</span>
                                <div class="switcher-pricing text-center">
                                    <input type="checkbox" class="pricing-toggle">
                                </div>
                                <span class="pricing-time-span">Annually <span
                                        class="badge bg-primarytint2color ms-1 rounded-full leading-none">20% off</span></span>
                            </div>
                            {{--                            <div class="p-4">--}}
                            {{--                                <div class="flex items-center justify-center gap-4">--}}
                            {{--                                                    <span class="avatar avatar-md bg-primarytint2color">--}}
                            {{--                                                        <i class="ri-arrow-left-down-fill text-xl"></i>--}}
                            {{--                                                    </span>--}}
                            {{--                                <div>--}}
                            {{--                                        <div class="font-medium text-textmuted dark:text-textmuted/50">--}}
                            {{--                                            Monthly</div>--}}
                            {{--                                    <div class="flex justify-center text-lg">Monthly</div>--}}
                            {{--                                </div>--}}
                            {{--                                                                </div>--}}
                            {{--                            --}}
                            {{--                                <div class="flex items-center justify-center gap-4">--}}
                            {{--                                                    <span class="avatar avatar-md bg-primarytint3color">--}}
                            {{--                                                        <i class="ri-arrow-right-up-fill text-xl"></i>--}}
                            {{--                                                    </span>--}}
                            {{--                                <div>--}}
                            {{--                                        <div class="font-medium text-textmuted dark:text-textmuted/50">--}}
                            {{--      </div>--}}
                            {{--                        </div>--}}
                            {{--                        <div class="xl:col-span-6 sm:col-span-6 col-span-12">--}}
                            {{--                            <div class="">                                      Withdraw</div>--}}
                            {{--                                    <div class="flex justify-center p-4 text-lg">Yearly</div>--}}
                            {{--                                </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content show" id="monthly1">
                <div class="grid grid-cols-12 gap-x-6 items-center justify-center mb-5">
                    <div class="lg:col-span-4 xl:col-span-4 xxl:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 ">
                        <div class="box pricing-card border border-blue-300">
                            <div
                                class="box-body !p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                <h6 class="font-medium mb-1">Starter</h6>
                                <h2 class="mb-3 font-semibold block">₹6000
                                </h2>
                            </div>
                            <div class="box-body !p-4">
                                <ul class="list-none pricing-body">
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                  1 Brand
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto">
                                                                  3 Any Platform
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   25 Max Post
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto">
                                                                   4 Ad Campaign
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto">
                                                                    3 AI Tools
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   1 GB Storage
                                                                </span>
                                            {{--                                            <span class="text-textmuted dark:text-textmuted/50 text-xs font-medium">52 Days</span>--}}
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center gap-2">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="my-auto flex-auto">
                                                                   Allow Post Scheduling
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="my-auto flex-auto">
                                                                   Image Editor Access
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   Stock Image Access
                                                                </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-footer p-4">
                                <button type="button" class="ti-btn ti-btn-lg ti-btn-primary grid w-full btn-wave">
                                    <span class="ms-4 me-4">Choose Plan</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-4 xl:col-span-4 xxl:col-span-4 md:col-span-4 sm:col-span-12 col-span-12">
                        <div class="box pricing-card hover border border-blue-300">
                            <div class="pricing-table-item-icon">
                                <i class="fe fe-zap me-2"></i> Popular
                            </div>
                            <div class="box-body !p-4 border-b border-dashed border-white/10">
                                <h6 class="font-medium mb-1 dark:text-white">Advanced</h6>
                                <h2 class="mb-3 font-semibold block dark:text-white">₹10,000
                                </h2>
                            </div>
                            <div class="box-body !p-4">
                                <ul class="list-none pricing-body">
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                  3 Brand
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto">
                                                                  5 Any Platform
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   100 Max Post
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto">
                                                                   10 Ad Campaign
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto">
                                                                    5 AI Tools
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   3 GB Storage
                                                                </span>
                                            {{--                                            <span class="text-textmuted dark:text-textmuted/50 text-xs font-medium">52 Days</span>--}}
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   Allow Post Scheduling
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   Image Editor Access
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   Stock Image Access
                                                                </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-footer p-4">
                                <button type="button" class="ti-btn ti-btn-lg ti-btn-primary grid w-full btn-wave">
                                    <span class="ms-4 me-4">Choose Plan</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-4 xl:col-span-4 xxl:col-span-4 md:col-span-4 sm:col-span-12 col-span-12">
                        <div class="box pricing-card border border-blue-300">
                            <div
                                class="box-body !p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                <h6 class="font-medium mb-1">Enterprise</h6>
                                <h2 class="mb-3 font-semibold block">₹20,000
                                </h2>
                            </div>
                            <div class="box-body !p-4">
                                <ul class="list-none pricing-body">
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                  5 Brand
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto">
                                                                  All Platform
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   Unlimited
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto">
                                                                  Unlimited
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto">
                                                                    Unlimited
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   8 GB Storage
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   Allow Post Scheduling
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   Image Editor Access
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   Stock Image Access
                                                                </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-footer p-4">
                                <button type="button" class="ti-btn ti-btn-lg ti-btn-primary grid w-full btn-wave">
                                    <span class="ms-4 me-4">Choose Plan</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="yearly1">
                <div class="grid grid-cols-12 gap-x-6 items-center justify-center mb-5">

                    <div class="lg:col-span-4 xl:col-span-4 xxl:col-span-4 md:col-span-4 sm:col-span-12 col-span-12">
                        <div class="box pricing-card border border-blue-300">
                            <div
                                class="box-body !p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                <h6 class="font-medium mb-1">Starter</h6>
                                <h2 class="mb-3 font-semibold block">₹65,000
                                    {{--                                    <span--}}
                                    {{--                                        class="text-xs font-medium ms-1"> / Month</span>--}}
                                </h2>
                                <span
                                    class="mb-1 text-textmuted dark:text-textmuted/50 block text-[11px]">Save ₹7,000</span>
                            </div>
                            <div class="box-body !p-4 ">
                                <ul class="list-none pricing-body">
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                  1 Brand
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto">
                                                                  3 Any Platform
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   25 Max Post / Month
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto">
                                                                   4 Ad Campaign
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto">
                                                                    3 AI Tools
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   1 GB Storage
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   Allow Post Scheduling
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   Image Editor Access
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   Stock Image Access
                                                                </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-footer p-4">
                                <button type="button" class="ti-btn ti-btn-lg ti-btn-primary grid w-full btn-wave">
                                    <span class="ms-4 me-4">Choose Plan</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-4 xl:col-span-4 xxl:col-span-4 md:col-span-4 sm:col-span-12 col-span-12">
                        <div class="box pricing-card hover  border border-blue-300">
                            <div class="pricing-table-item-icon">
                                <i class="fe fe-zap me-2"></i> Popular
                            </div>
                            <div class="box-body !p-4 border-b border-dashed border-white/10">
                                <h6 class="font-medium mb-1 dark:text-white">Advanced</h6>
                                <h2 class="mb-3 font-semibold block dark:text-white">₹1,00,000
                                </h2>
                                <span class="opacity-70 block dark:text-white text-[11px]">Save ₹20,000</span>
                            </div>
                            <div class="box-body !p-4">
                                <ul class="list-none pricing-body">
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                  3 Brand
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto">
                                                                  5 Any Platform
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   100 Max Post / Month
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto">
                                                                   10 Ad Campaign
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto">
                                                                    5 AI Tools
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   3 GB Storage
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   Allow Post Scheduling
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   Image Editor Access
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   Stock Image Access
                                                                </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-footer p-4">
                                <button type="button" class="ti-btn ti-btn-lg ti-btn-primary grid w-full btn-wave">
                                    <span class="ms-4 me-4">Choose Plan</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-4 xl:col-span-4 xxl:col-span-4 md:col-span-4 sm:col-span-12 col-span-12">
                        <div class="box pricing-card  border border-blue-300">
                            <div
                                class="box-body !p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                <h6 class="font-medium mb-1">Enterprise</h6>
                                <h2 class="mb-3 font-semibold block">₹2,00,000
                                </h2>
                                <span
                                    class="text-[11px] text-textmuted dark:text-textmuted/50 block">Save ₹40,000</span>
                            </div>
                            <div class="box-body !p-4">
                                <ul class="list-none pricing-body">
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                  5 Brand
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto">
                                                                  All Platform
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   Unlimited
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto">
                                                                  Unlimited
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto">
                                                                    Unlimited
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   8 GB Storage
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   Allow Post Scheduling
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   Image Editor Access
                                                                </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                            <span class="ms-2 my-auto flex-auto">
                                                                   Stock Image Access
                                                                </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-footer p-4">
                                <button type="button" class="ti-btn ti-btn-lg ti-btn-primary grid w-full btn-wave">
                                    <span class="ms-4 me-4">Choose Plan</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@section('scripts')

    <!-- Pricing JS -->
    @vite('resources/assets/js/pricing.js')

@endsection
