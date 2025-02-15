@section('styles')
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">
@endsection

<div>
{{--    <div class="grid grid-cols-12 gap-x-6">--}}
{{--        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">--}}
{{--            <div class="box">--}}
{{--                <div class="box-header">--}}
{{--                    <div class="box-title">--}}
{{--                        Basic Swiper--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="box-body">--}}
{{--                    <div class="swiper swiper-basic">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-27.jpg')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-26.jpg')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-25.jpg')}}" alt=""></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">--}}
{{--            <div class="box">--}}
{{--                <div class="box-header">--}}
{{--                    <div class="box-title">--}}
{{--                        Swiper With Navigation--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="box-body">--}}
{{--                    <div class="swiper swiper-navigation">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-29.jpg')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-28.jpg')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt=""></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-button-next"></div>--}}
{{--                        <div class="swiper-button-prev"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">--}}
{{--            <div class="box">--}}
{{--                <div class="box-header">--}}
{{--                    <div class="box-title">--}}
{{--                        Swiper with Pagination--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="box-body">--}}
{{--                    <div class="swiper pagination">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-32.jpg')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-31.jpg')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-33.jpg')}}" alt=""></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-pagination"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">--}}
{{--            <div class="box">--}}
{{--                <div class="box-header">--}}
{{--                    <div class="box-title">--}}
{{--                        Dynamic Pagination--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="box-body">--}}
{{--                    <div class="swiper pagination-dynamic">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-21.jpg')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-17.jpg')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-16.jpg')}}" alt=""></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-pagination"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">--}}
{{--            <div class="box">--}}
{{--                <div class="box-header">--}}
{{--                    <div class="box-title">--}}
{{--                        Pagination With Progress--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="box-body">--}}
{{--                    <div class="swiper pagination-progress">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-12.jpg')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-8.jpg')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-5.jpg')}}" alt=""></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-button-next"></div>--}}
{{--                        <div class="swiper-button-prev"></div>--}}
{{--                        <div class="swiper-pagination"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">--}}
{{--            <div class="box">--}}
{{--                <div class="box-header">--}}
{{--                    <div class="box-title">--}}
{{--                        Pagination Fraction--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="box-body">--}}
{{--                    <div class="swiper pagination-fraction">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-16.jpg')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-31.jpg')}}" alt=""></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-button-next"></div>--}}
{{--                        <div class="swiper-button-prev"></div>--}}
{{--                        <div class="swiper-pagination"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">--}}
{{--            <div class="box">--}}
{{--                <div class="box-header">--}}
{{--                    <div class="box-title">--}}
{{--                        Custom Paginatioin--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="box-body">--}}
{{--                    <div class="swiper custom-pagination">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-25.jpg')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-5.jpg')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-33.jpg')}}" alt=""></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-pagination"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">--}}
{{--            <div class="box">--}}
{{--                <div class="box-header">--}}
{{--                    <div class="box-title">--}}
{{--                        Scrollbar Swiper--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="box-body">--}}
{{--                    <div class="swiper scrollbar-swiper">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-28.jpg')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-29.jpg')}}" alt=""></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-scrollbar"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">--}}
{{--            <div class="box">--}}
{{--                <div class="box-header">--}}
{{--                    <div class="box-title">--}}
{{--                        Vertical Swiper--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="box-body">--}}
{{--                    <div class="swiper vertical swiper-vertical">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-8.jpg')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-32.jpg')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-17.jpg')}}" alt=""></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-pagination"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">--}}
{{--            <div class="box">--}}
{{--                <div class="box-header">--}}
{{--                    <div class="box-title">--}}
{{--                        Mouse Wheel Control--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="box-body">--}}
{{--                    <div class="swiper vertical vertical-mouse-control">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-28.jpg')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-32.jpg')}}" alt=""></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-pagination"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">--}}
{{--            <div class="box">--}}
{{--                <div class="box-header">--}}
{{--                    <div class="box-title">--}}
{{--                        Keyboard Control--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="box-body">--}}
{{--                    <div class="swiper keyboard-control">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-31.jpg')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-12.jpg')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-8.jpg')}}" alt=""></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-button-next"></div>--}}
{{--                        <div class="swiper-button-prev"></div>--}}
{{--                        <div class="swiper-pagination"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">--}}
{{--            <div class="box">--}}
{{--                <div class="box-header">--}}
{{--                    <div class="box-title">Nested Swiper</div>--}}
{{--                </div>--}}
{{--                <div class="box-body">--}}
{{--                    <div class="swiper swiper-horizontal1">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="swiper vertical swiper-vertical1">--}}
{{--                                    <div class="swiper-wrapper">--}}
{{--                                        <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-25.jpg')}}" alt=""></div>--}}
{{--                                        <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-31.jpg')}}" alt=""></div>--}}
{{--                                        <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-32.jpg')}}" alt=""></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-pagination"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-28.jpg')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-29.jpg')}}" alt=""></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-pagination"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">--}}
{{--            <div class="box">--}}
{{--                <div class="box-header">--}}
{{--                    <div class="box-title">--}}
{{--                        Effect Cube--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="box-body">--}}
{{--                    <div class="swiper swiper-effect-cube">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <img src="{{asset('build/assets/images/media/media-62.jpg')}}" alt="img">--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <img src="{{asset('build/assets/images/media/media-63.jpg')}}" alt="img">--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <img src="{{asset('build/assets/images/media/media-64.jpg')}}" alt="img">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-pagination"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">--}}
{{--            <div class="box">--}}
{{--                <div class="box-header">--}}
{{--                    <div class="box-title">--}}
{{--                        Effect Fade--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="box-body">--}}
{{--                    <div class="swiper swiper-fade">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <img src="{{asset('build/assets/images/media/media-18.jpg')}}" alt="img">--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <img src="{{asset('build/assets/images/media/media-19.jpg')}}" alt="img">--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <img src="{{asset('build/assets/images/media/media-20.jpg')}}" alt="img">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-button-next"></div>--}}
{{--                        <div class="swiper-button-prev"></div>--}}
{{--                        <div class="swiper-pagination"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">--}}
{{--            <div class="box">--}}
{{--                <div class="box-header">--}}
{{--                    <div class="box-title">--}}
{{--                        Effect Flip--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="box-body">--}}
{{--                    <div class="swiper swiper-flip">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <img src="{{asset('build/assets/images/media/media-20.jpg')}}" alt="img">--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <img src="{{asset('build/assets/images/media/media-62.jpg')}}" alt="img">--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <img src="{{asset('build/assets/images/media/media-63.jpg')}}" alt="img">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-button-next"></div>--}}
{{--                        <div class="swiper-button-prev"></div>--}}
{{--                        <div class="swiper-pagination"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!--End::row-1 -->--}}
{{--    <!-- Start:: row-2 -->--}}
{{--    <div class="grid grid-cols-12 gap-x-6">--}}
{{--        <div class="xl:col-span-12 col-span-12">--}}
{{--            <div class="box">--}}
{{--                <div class="box-header">--}}
{{--                    <div class="box-title">--}}
{{--                        Effect Coverflow--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="box-body">--}}
{{--                    <div class="swiper swiper-overflow">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="img">--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-41.jpg')}}" alt="img">--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-42.jpg')}}" alt="img">--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-43.jpg')}}" alt="img">--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-44.jpg')}}" alt="img">--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-59.jpg')}}" alt="img">--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-46.jpg')}}" alt="img">--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-61.jpg')}}" alt="img">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-pagination"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- End:: row-2 -->--}}
    <!-- Start:: row-3 -->
    <div class="grid grid-cols-12 gap-x-6">
        <div class="xl:col-span-12 col-span-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-title">
                        Thumbs Gallery
                    </div>
                </div>
                <div class="box-body">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper swiper-preview">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="img-fluid rounded" src="{{asset('build/assets/images/media/media-1.jpg')}}" alt="img">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid rounded" src="{{asset('build/assets/images/media/media-2.jpg')}}" alt="img">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid rounded" src="{{asset('build/assets/images/media/media-11.jpg')}}" alt="img">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid rounded" src="{{asset('build/assets/images/media/media-6.jpg')}}" alt="img">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid rounded" src="{{asset('build/assets/images/media/media-7.jpg')}}" alt="img">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid rounded" src="{{asset('build/assets/images/media/media-10.jpg')}}" alt="img">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid rounded" src="{{asset('build/assets/images/media/media-11.jpg')}}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div class="swiper swiper-view">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-1.jpg')}}" alt="img">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-2.jpg')}}" alt="img">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-11.jpg')}}" alt="img">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-6.jpg')}}" alt="img">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-7.jpg')}}" alt="img">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-10.jpg')}}" alt="img">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-11.jpg')}}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Internal Swiper JS -->
    @vite('resources/assets/js/swiper.js')
@endsection
