<div>
    <canvas id="{{ $chartId }}" width="400" height="200"></canvas>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let ctx = document.getElementById("{{ $chartId }}").getContext("2d");

        let categories = {!! json_encode($categories) !!};
        let seriesData = {!! json_encode($seriesData) !!};

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: categories,
                datasets: seriesData
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    zoom: {
                        pan: { enabled: true, mode: 'xy' },
                        zoom: { wheel: { enabled: true }, pinch: { enabled: true }, mode: 'xy' }
                    }
                }
            }
        });
    });
</script>
