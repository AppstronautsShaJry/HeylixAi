@props([
    'title' => '',
    'description' => '',
    'route' => ''
])

<div class="box-new h-[300px] dark:bg-gray-800 bg-gray-200 rounded-md w-full relative">
    <div class="flex flex-col justify-between p-3">
        <img src="{{asset('build/assets/images/media/media-4.jpg')}}" class="card-img mb-3"
             alt="...">
        <div class="box-title font-medium mb-3">{{$title}}</div>
        <div class="card-text line-clamp-2">{{$description}}</div>
        <div class="absolute bottom-2 right-2">
            <a href="{{route($route)}}" type="button" class="ti-btn ti-btn-primary btn-wave">Select</a>
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


