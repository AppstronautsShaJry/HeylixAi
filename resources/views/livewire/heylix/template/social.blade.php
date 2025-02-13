@section('styles')

    <!-- GLightbox CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">

@endsection


<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <nav>
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Template</a></li>
                    </ol>
                </nav>
                {{--                    <h1 class="page-title font-medium text-lg mb-0">Gallery</h1>--}}
            </div>

        </div>
        <!-- Page Header Close -->


    </div>

    <!-- Start::row-1 -->
    <div class="box p-5 w-full">
        <div class="flex justify-between my-3 w-full">
            <div class="my-2 text-xl w-4/12">Select Template</div>

            <div class="w-4/12 ">
                <label for="hs-trailing-button-add-on-with-icon" class="sr-only">Label</label>
                <div class="flex rounded-sm">
                    <input type="text" id="hs-trailing-button-add-on-with-icon"
                           name="hs-trailing-button-add-on-with-icon"
                           class="rtl:!rounded-tl-none !rounded-ee-none ti-form-input rounded-none !rounded-s-sm focus:z-10">
                    <button aria-label="button" type="button"
                            class="inline-flex flex-shrink-0 justify-center items-center h-[2.875rem] w-[2.875rem] rounded-e-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                             fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-5 gap-6 ">
            <div class="w-auto h-28 md:h-28 lg:32 xxl:44 rounded-md overflow-hidden">
                <a href="{{route('create.social')}}">
                    <img src="{{asset('images/partials/img3.jpeg')}}" alt="image"></a>
            </div>
            <div class="w-auto h-28 md:h-28 lg:32 xxl:44 rounded-md overflow-hidden">
                <a href="{{route('create.social')}}">
                    <img src="{{asset('images/partials/img3.jpeg')}}" alt="image"></a>
            </div>
            <div class="w-auto h-28 md:h-28 lg:32 xxl:44 rounded-md overflow-hidden">
                <a href="{{route('create.social')}}">
                    <img src="{{asset('images/partials/img3.jpeg')}}" alt="image"></a>
            </div>
            <div class="w-auto h-28 md:h-28 lg:32 xxl:44 rounded-md overflow-hidden">
                <a href="{{route('create.social')}}">
                    <img src="{{asset('images/partials/img3.jpeg')}}" alt="image"></a>
            </div>
            <div class="w-auto h-28 md:h-28 lg:32 xxl:44 rounded-md overflow-hidden">
                <a href="{{route('create.social')}}">
                    <img src="{{asset('images/partials/img3.jpeg')}}" alt="image"></a>
            </div>
            <div class="w-auto h-28 md:h-28 lg:32 xxl:44 rounded-md overflow-hidden">
                <a href="{{route('create.social')}}">
                    <img src="{{asset('images/partials/img4.jpeg')}}" alt="image" class="h-full"></a>
            </div>
            <div class="w-auto h-28 md:h-28 lg:32 xxl:44 rounded-md overflow-hidden">
                <a href="{{route('create.social')}}">
                    <img src="{{asset('images/partials/img4.jpeg')}}" alt="image" class="h-full"></a>
            </div>
            <div class="w-auto h-28 md:h-28 lg:32 xxl:44 rounded-md overflow-hidden">
                <a href="{{route('create.social')}}">
                    <img src="{{asset('images/partials/img4.jpeg')}}" alt="image" class="h-full"></a>
            </div>
            <div class="w-auto h-28 md:h-28 lg:32 xxl:44 rounded-md overflow-hidden">
                <a href="{{route('create.social')}}">
                    <img src="{{asset('images/partials/img4.jpeg')}}" alt="image" class="h-full"></a>
            </div>
            <div class="w-auto h-28 md:h-28 lg:32 xxl:44 rounded-md overflow-hidden">
                <a href="{{route('create.social')}}">
                    <img src="{{asset('images/partials/img4.jpeg')}}" alt="image" class="h-full"></a>
            </div>
        </div>
    </div>
    <!--End::row-1 -->

</div>
</div>
<!-- End::app-content -->

@section('scripts')

    <!-- Gallery JS -->
    <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>
    @vite('resources/assets/js/gallery.js')

@endsection

