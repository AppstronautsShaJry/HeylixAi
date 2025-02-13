@props([
    'title' => '',
    'description' => '',
    'description2' => '',
    'route' => '',
    'display' => 'flex'
])

<div class="box-new dark:bg-gray-800 bg-gray-200 rounded-md w-full p-3 flex flex-col">
    <div class="h-full flex-col justify-between flex space-y-2">
        <img src="{{asset('build/assets/images/media/media-4.jpg')}}" class="card-img mb-3"
             alt="...">
        <h6 class="box-title font-medium">{{$title}}</h6>
        <div class="space-y-1 ">
            <div class="card-text line-clamp-2">{{$description}}</div>
            <div class="card-text line-clamp-2">{{$description2}}</div>
        </div>
        <div class="self-end flex gap-x-2">
            <div class="{{$display}}">
                <button type="button" class="ti-btn ti-btn-outline-primary btn-wave hs-dropdown-toggle"
                        data-hs-overlay="#exampleModalScrollable4">Preview
                </button>
            </div>
            <x-modal.form-modal :title="'Assets'" :button="'Preview'">

                <div class="grid grid-cols-4 gap-4">
                    <div>
                        <span>Title</span>
                        <img src="{{asset('build/assets/images/media/media-4.jpg')}}" class="card-img mb-3"
                             alt="...">
                    </div>

                    <div>
                        <span>Title</span>
                        <img src="{{asset('build/assets/images/media/media-4.jpg')}}" class="card-img mb-3"
                             alt="...">
                    </div>

                    <div>
                        <span>Title</span>
                        <img src="{{asset('build/assets/images/media/media-4.jpg')}}" class="card-img mb-3"
                             alt="...">
                    </div>

                    <div>
                        <span>Title</span>
                        <img src="{{asset('build/assets/images/media/media-4.jpg')}}" class="card-img mb-3"
                             alt="...">
                    </div>
                    <div>
                        <span>Title</span>
                        <img src="{{asset('build/assets/images/media/media-4.jpg')}}" class="card-img mb-3"
                             alt="...">
                    </div>

                    <div>
                        <span>Title</span>
                        <img src="{{asset('build/assets/images/media/media-4.jpg')}}" class="card-img mb-3"
                             alt="...">
                    </div>

                    <div>
                        <span>Title</span>
                        <img src="{{asset('build/assets/images/media/media-4.jpg')}}" class="card-img mb-3"
                             alt="...">
                    </div>

                    <div>
                        <span>Title</span>
                        <img src="{{asset('build/assets/images/media/media-4.jpg')}}" class="card-img mb-3"
                             alt="...">
                    </div>
                </div>

            </x-modal.form-modal>
            <div class="flex">
                <a href="{{route($route)}}" type="button" class="ti-btn ti-btn-primary btn-wave">Select</a>
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


