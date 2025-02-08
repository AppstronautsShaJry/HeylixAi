@props([
    'title' => '',
    'description' => '',
    'route' => ''
])

<div class="box-new dark:bg-gray-800 bg-gray-200 rounded-md w-full">

    <div class="box-body">
        <img src="{{asset('build/assets/images/media/media-4.jpg')}}" class="card-img mb-3"
             alt="...">
        <h6 class="box-title font-medium mb-3">{{$title}}</h6>
        <p class="card-text line-clamp-2">{{$description}}</p>

        <div class="flex flex-row justify-between pt-3">

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



