{{--<div class="xxl:col-span-3 col-span-12">--}}
    <div class="box overflow-hidden">
        <div class="box-body">
            <div class="flex items-start gap-4">
                <div>
                                            <span class="avatar avatar-md bg-secondary/10 !text-secondary">
                                                <i class="ri-hard-drive-2-fill text-[1rem]"></i>
                                            </span>
                </div>
                <div class="flex-auto">
                    <div class=" mb-3"> All Folders
                        <p class="mb-0"><span class="font-bold text-[14px]">68.12GB</span> Used</p>
                        <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0">21.35GB
                            free space</p>
                    </div>
                </div>
            </div>
            <div id="file-manager-storage"></div>
        </div>
        <div class="box-footer p-0">
            <div class="m-3 mb-0">
                <span class="text-xs text-textmuted dark:text-textmuted/50">Storage Details</span>
            </div>
            <ul class="ti-list-group list-group-flush !border-0">
                <li class="ti-list-group-item">
                    <div class="flex items-center gap-4">
                        <div class="main-card-icon primary">
                            <div class="avatar avatar-lg bg-primary/10 border border-primary/10">
                                <div class="avatar avatar-sm !text-primary">
                                    <i class="ti ti-photo text-xl"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-auto">
                            <span class="font-medium">Media</span>
                            <span class="text-textmuted dark:text-textmuted/50 text-xs block">3,145
                                                        files</span>
                        </div>
                        <div>
                            <span class="font-medium text-primary mb-0 text-[14px]">45GB</span>
                        </div>
                    </div>
                    <div class="progress progress-md p-1 bg-primary/10 mt-3" role="progressbar"
                         aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                             style="width: 90%"></div>
                    </div>
                </li>
                <li class="ti-list-group-item">
                    <div class="flex items-center gap-4">
                        <div class="main-card-icon primary1">
                            <div
                                class="avatar avatar-lg bg-primarytint1color/10 border border-primarytint1color/10">
                                <div class="avatar avatar-sm !text-primarytint1color">
                                    <i class="ti ti-download text-xl"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-auto">
                            <span class="font-medium">Downloads</span>
                            <span class="text-textmuted dark:text-textmuted/50 text-xs block">568
                                                        files</span>
                        </div>
                        <div>
                                                    <span
                                                        class="font-medium text-primarytint1color mb-0 text-[14px]">66GB</span>
                        </div>
                    </div>
                    <div class="progress progress-md p-1 bg-primarytint1color/10 mt-3"
                         role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-striped bg-primarytint1color progress-bar-animated"
                             style="width: 86%"></div>
                    </div>
                </li>
                <li class="ti-list-group-item">
                    <div class="flex items-center gap-4">
                        <div class="main-card-icon primary2">
                            <div
                                class="avatar avatar-lg bg-primarytint2color/10 border border-primarytint2color/10">
                                <div class="avatar avatar-sm !text-primarytint2color">
                                    <i class="ti ti-layout-grid text-xl"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-auto">
                            <span class="font-medium">Apps</span>
                            <span class="text-textmuted dark:text-textmuted/50 text-xs block">74
                                                        files</span>
                        </div>
                        <div>
                                                    <span
                                                        class="font-medium text-primarytint2color mb-0 text-[14px]">55GB</span>
                        </div>
                    </div>
                    <div class="progress progress-md p-1 bg-primarytint2color/10 mt-3"
                         role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-striped bg-primarytint2color progress-bar-animated"
                             style="width: 75%"></div>
                    </div>
                </li>
                <li class="ti-list-group-item">
                    <div class="flex items-center gap-4">
                        <div class="main-card-icon primary3">
                            <div
                                class="avatar avatar-lg bg-primarytint3color/10 border border-primarytint3color/10">
                                <div class="avatar avatar-sm !text-primarytint3color">
                                    <i class="ti ti-file-description text-xl"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-auto">
                            <span class="font-medium">Documents</span>
                            <span class="text-textmuted dark:text-textmuted/50 text-xs block">1,441
                                                        files</span>
                        </div>
                        <div>
                            <span class="font-medium text-primary3 mb-0 text-[14px]">34GB </span>
                        </div>
                    </div>
                    <div class="progress progress-md p-1 bg-primarytint3color/10 mt-3"
                         role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-striped bg-primarytint3color progress-bar-animated"
                             style="width: 80%"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>


@section('scripts')

    <!-- Apex Charts JS -->
    <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    {{--    <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>--}}

    <!-- Dropzone JS -->
    <script src="{{asset('build/assets/libs/dropzone/dropzone-min.js')}}"></script>

    <!-- Internal File Manager JS -->
    @vite('resources/assets/js/file-manager.js')
    <!-- Sales Dashboard -->
    @vite('resources/assets/js/sales-dashboard.js')
    @vite('resources/assets/js/widgets.js')


@endsection
