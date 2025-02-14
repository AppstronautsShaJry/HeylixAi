@section('styles')

    <!-- GLightbox CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">

@endsection


<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">
        <x-breadcrumb.nav>
            <x-breadcrumb.list route="dashboard" list="Dashboard"/>
            <x-breadcrumb.list route="dashboard" list="Create Content"/>
            <x-breadcrumb.list route="dashboard" list="Template" active="text-white"/>
        </x-breadcrumb.nav>
        <!-- Page Header Close -->
    </div>


    <!-- Start::row-1 -->
    <div class="box p-5 space-y-5">

        <div class="flex flex-col w-full justify-between">
            <x-filter.search/>

            <button type="button"
                    class="ti-btn ti-btn-primary-gradient btn-wave self-end mx-4">create Your Own
            </button>


            <!-- Label & Tooltip -->
            <div class="flex justify-end gap-2 mr-4 my-3">

                <label for="select-beast" class="ti-form-label">Dropdown</label>

                <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]">
                    <a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5 fill-primary mb-2"
                             height="24px" viewBox="0 0 24 24" width="24px">
                            <path d="M0 0h24v24H0V0z" fill="none"/>
                            <path
                                d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"/>
                        </svg>
                        <div
                            class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !py-4 !px-4 !bg-primary !text-white"
                            role="tooltip">
                            <p>The Icon Popover</p>
                        </div>
                    </a>
                </div>


                <!-- Select Dropdown -->
                <div class="w-32">
                    <select class="ti-form-select rounded-sm p-1.5 w-full" id="select-beast" autocomplete="off">
                        <option value=""></option>
                        <option value="4">Page 1</option>
                        <option value="1">Page 2</option>
                        <option value="3">Page 3</option>
                        <option value="5">Page 4</option>
                    </select>
                </div>
            </div>

        </div>
        <div class="text-xl">Select Template</div>
        <div class="grid grid-cols-5 gap-6">
            <x-heylix.template.image :route="'create.social'" asset="images/partials/img3.jpeg" class="w-auto h-40"/>
            <x-heylix.template.image :route="'create.social'" asset="images/partials/img3.jpeg" class="w-auto h-8"/>
            <x-heylix.template.image :route="'create.social'" asset="images/partials/img3.jpeg" class="w-auto h-8"/>
            <x-heylix.template.image :route="'create.social'" asset="images/partials/img3.jpeg" class="w-auto h-8"/>
            <x-heylix.template.image :route="'create.social'" asset="images/partials/img3.jpeg" class="w-auto h-8"/>

            <x-heylix.template.image :route="'create.social'" asset="images/partials/img3.jpeg" class="w-auto h-8"/>
            <x-heylix.template.image :route="'create.social'" asset="images/partials/img3.jpeg" class="w-auto h-8"/>
            <x-heylix.template.image :route="'create.social'" asset="images/partials/img3.jpeg" class="w-auto h-8"/>
            <x-heylix.template.image :route="'create.social'" asset="images/partials/img3.jpeg" class="w-auto h-8"/>
            <x-heylix.template.image :route="'create.social'" asset="images/partials/img3.jpeg" class="w-auto h-8"/>
        </div>
    </div>
    <!--End::row-1 -->
</div>

<!-- End::app-content -->

@section('scripts')
    <!-- Gallery JS -->
    <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>
    @vite('resources/assets/js/gallery.js')
@endsection

