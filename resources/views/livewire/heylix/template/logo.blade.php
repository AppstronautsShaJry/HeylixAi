@section('styles')

    <!-- GLightbox CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">

@endsection


<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">
        <x-breadcrumb.nav>
            <x-breadcrumb.list route="brand.heylix" list="Create Video"/>
            <x-breadcrumb.list route="logo.temp" list="Logo Info" active="dark:text-white text-gray-700"/>
        </x-breadcrumb.nav>
        <!-- Page Header Close -->
    </div>


    <!-- Start::row-1 -->
    <div class="box p-5 space-y-5">

        <div class="flex justify-between">
            <x-filter.search/>

            <button type="button"
                    class="ti-btn ti-btn-primary-gradient btn-wave self-end ">create Your Own
            </button>
        </div>
        <div class=" w-full flex justify-between items-end mt-10">
            <div class="text-xl">Select Template</div>
            <!-- Label & Tooltip -->

        </div>

        <div class="grid grid-cols-5 gap-6">
            <x-heylix.template.image :route="'create.logo'" asset="images/partials/img3.jpeg" class="w-auto h-40"/>
            <x-heylix.template.image :route="'create.logo'" asset="images/partials/img3.jpeg" class="w-auto h-8"/>
            <x-heylix.template.image :route="'create.logo'" asset="images/partials/img3.jpeg" class="w-auto h-8"/>
            <x-heylix.template.image :route="'create.logo'" asset="images/partials/img3.jpeg" class="w-auto h-8"/>
            <x-heylix.template.image :route="'create.logo'" asset="images/partials/img3.jpeg" class="w-auto h-8"/>

            <x-heylix.template.image :route="'create.logo'" asset="images/partials/img3.jpeg" class="w-auto h-8"/>
            <x-heylix.template.image :route="'create.logo'" asset="images/partials/img3.jpeg" class="w-auto h-8"/>
            <x-heylix.template.image :route="'create.logo'" asset="images/partials/img3.jpeg" class="w-auto h-8"/>
            <x-heylix.template.image :route="'create.logo'" asset="images/partials/img3.jpeg" class="w-auto h-8"/>
            <x-heylix.template.image :route="'create.logo'" asset="images/partials/img3.jpeg" class="w-auto h-8"/>
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

