@section('styles')
    <!-- filepond CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/filepond/filepond.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">
    <!-- filepond CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.css')}}">
@endsection

<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Start::page-header -->
        <div class="container-fluid">
            <!-- Start::page-header -->
            <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="">
                                Brands
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Manage</li>
                    </ol>
                </div>
                <div class="flex gap-2 flex-wrap">
                </div>
            </div>
        </div>

        <x-tabs.url-tab>
{{--            <x-tabs.url-content label="Create" url="/create-brand" rounded="rounded-l-md"/>--}}
            <x-tabs.url-content label="Manage" url="/manage-brand" rounded="rounded-md"/>
        </x-tabs.url-tab>
    </div>
    <!-- Brand Card -->
    <div class="box ">
        <div class="box-body">
            <div class="grid grid-cols-12 sm:gap-x-6 ">
                <div class="xl:col-span-3 col-span-12">
                    @forelse($brands as $row)
                        <div class="box overflow-hidden border border-defaultborder dark:border-defaultborder/10">
                            <div
                                class="box-body border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                <div class="text-center flex flex-col justify-center items-center">
                                    <div class="w-28 h-28 rounded-full overflow-hidden">
                                        <img src="{{ asset('storage/' . $row->image) }}"
                                             alt="" class="w-full h-full object-cover">
                                    </div>
                                    <h5 class="font-semibold my-2">{{$row->name}}</h5>
                                    <span class="block font-medium text-textmuted dark:text-textmuted/50 mb-2">{{$row->category->name}}</span>
                                    <div class="text-xs mb-0 text-textmuted dark:text-textmuted/50 items-center inline-flex"><span class="me-3"><i
                                                class="ri-map-pin-line me-1 align-middle"></i>{{$row->city}}</span>
                                        <span><i class="ti ti-phone me-1 align-middle"></i>{{$row->phone}}</span></div>
                                </div>
                            </div>
                            <div class="flex justify-center item-center gap-5 p-5">
                                <div
                                    class="bg-gradient-to-r from-blue-700 to-blue-500 rounded-md w-9 h-9  flex justify-center items-center">
                                    <a href="{{route('brand.edit', [$row->id])}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="icon icon-tabler icons-tabler-outline icon-tabler-eye-spark">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"/>
                                            <path d="M11.669 17.994q -5.18 -.18 -8.669 -5.994q 3.6 -6 9 -6t 9 6"/>
                                            <path
                                                d="M19 22.5a4.75 4.75 0 0 1 3.5 -3.5a4.75 4.75 0 0 1 -3.5 -3.5a4.75 4.75 0 0 1 -3.5 3.5a4.75 4.75 0 0 1 3.5 3.5"/>
                                        </svg>
                                    </a>
                                </div>
                                <div
                                    class="bg-gradient-to-r from-red-700 to-red-500  rounded-md w-9 h-9  flex justify-center items-center">
                                    <a href="">
                                        <i class="text-[20px] ti ti-trash"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="box overflow-hidden border border-defaultborder dark:border-defaultborder/10">
                            <div
                                class="box-body border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                <div class="text-center flex flex-col justify-center items-center">
                                    <div class="w-28 h-28 rounded-full overflow-hidden">
                                        <img src="{{ asset('images/partials/img3.jpeg') }}"
                                             alt="" class="w-full h-full object-cover">
                                    </div>
                                    <h5 class="font-semibold my-2">{{'Brand Name'}}</h5>
                                    <span class="block font-medium text-textmuted dark:text-textmuted/50 mb-2">{{'Category Name'}}</span>
                                    <div class="text-xs mb-0 text-textmuted dark:text-textmuted/50 items-center inline-flex"><span class="me-3"><i
                                                class="ri-map-pin-line me-1 align-middle"></i>{{'Bangalore'}}</span>
                                        <span><i class="ti ti-phone me-1 align-middle"></i>{{'9876543210'}}</span></div>
                                </div>
                            </div>
                            <div class="flex justify-center item-center gap-5 p-5">
                                <div
                                    class="bg-gradient-to-r from-blue-700 to-blue-500 rounded-md w-9 h-9  flex justify-center items-center">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="icon icon-tabler icons-tabler-outline icon-tabler-eye-spark">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"/>
                                            <path d="M11.669 17.994q -5.18 -.18 -8.669 -5.994q 3.6 -6 9 -6t 9 6"/>
                                            <path
                                                d="M19 22.5a4.75 4.75 0 0 1 3.5 -3.5a4.75 4.75 0 0 1 -3.5 -3.5a4.75 4.75 0 0 1 -3.5 3.5a4.75 4.75 0 0 1 3.5 3.5"/>
                                        </svg>
                                    </a>
                                </div>
                                <div
                                    class="bg-gradient-to-r from-red-700 to-red-500  rounded-md w-9 h-9 light:text-white flex justify-center items-center">
                                    <a href="">
                                        <i class="text-[20px] ti ti-trash"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforelse
                    @foreach($brands as $row)
                    <div class="box overflow-hidden border border-defaultborder dark:border-defaultborder/10">
                        <div
                            class="box-body border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                            <div class="text-center flex flex-col justify-center items-center">
                                <div class="w-28 h-28 rounded-full overflow-hidden">
                                    <img src="{{ asset('storage/' . $row->image) }}"
                                         alt="" class="w-full h-full object-cover">
                                </div>
                                <h5 class="font-semibold my-2">{{$row->name}}</h5>
                                <span class="block font-medium text-textmuted dark:text-textmuted/50 mb-2">{{$row->category->name}}</span>
                                <div class="text-xs mb-0 text-textmuted dark:text-textmuted/50 items-center inline-flex"><span class="me-3"><i
                                            class="ri-map-pin-line me-1 align-middle"></i>{{$row->city}}</span>
                                    <span><i class="ti ti-phone me-1 align-middle"></i>{{$row->phone}}</span></div>
                            </div>
                        </div>
                        <div class="flex justify-center item-center gap-5 p-5">
                            <div
                                class="bg-gradient-to-r from-blue-700 to-blue-500 rounded-md w-9 h-9  flex justify-center items-center">
                                <a href="{{route('brand.edit', [$row->id])}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round"
                                         class="icon icon-tabler icons-tabler-outline icon-tabler-eye-spark text-white">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"/>
                                        <path d="M11.669 17.994q -5.18 -.18 -8.669 -5.994q 3.6 -6 9 -6t 9 6"/>
                                        <path
                                            d="M19 22.5a4.75 4.75 0 0 1 3.5 -3.5a4.75 4.75 0 0 1 -3.5 -3.5a4.75 4.75 0 0 1 -3.5 3.5a4.75 4.75 0 0 1 3.5 3.5"/>
                                    </svg>
                                </a>
                            </div>
                            <div
                                class="bg-gradient-to-r from-red-700 to-red-500 text-white fill-white rounded-md w-9 h-9  flex justify-center items-center">
                                <a href="">
                                    <i class="text-[20px] ti ti-trash"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="xl:col-span-3 col-span-12">
                    <div
                        class="h-80 p-5bg-info/10 border !border-info rounded-md flex justify-center items-center">
                        <div>
                            <a href="{{route('brand.create')}}">
                                <div class="flex flex-col justify-center items-center gap-5">
                                    {{--                                        <i class="ti ti-circle-plus text-info text-[3rem]"></i>--}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="01" stroke-linecap="round"
                                         stroke-linejoin="round"
                                         class="feather feather-plus-circle w-10 h-10 text-info">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" y1="8" x2="12" y2="16"></line>
                                        <line x1="8" y1="12" x2="16" y2="12"></line>
                                    </svg>
                                    {{--                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="w-9 h-9 fill-blue-600" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M16 2H8C4.691 2 2 4.691 2 8v13a1 1 0 0 0 1 1h13c3.309 0 6-2.691 6-6V8c0-3.309-2.691-6-6-6zm4 14c0 2.206-1.794 4-4 4H4V8c0-2.206 1.794-4 4-4h8c2.206 0 4 1.794 4 4v8z"></path><path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path></svg>--}}
                                    <span class="text-xl font-semibold">Create Brand</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

@section('scripts')

    <script src="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    @vite('resources/assets/js/sweet-alerts.js')

    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data('buttonHandler', () => ({
                currentPage: window.location.pathname,
                isActive(href) {
                    return this.currentPage === href;
                }
            }));
        });
    </script>

@endsection


