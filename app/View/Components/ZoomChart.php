<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ZoomChart extends Component
{
    public $chartId;
    public $categories;
    public $seriesData;

    public function __construct($chartId, $categories, $seriesData)
    {
        $this->chartId = $chartId;
        $this->categories = $categories;
        $this->seriesData = $this->formatSeriesData($seriesData);
    }

    private function formatSeriesData($data)
    {
        return array_map(function ($dataset) {
            return [
                'label' => $dataset['label'] ?? 'Dataset',
                'data' => $dataset['data'] ?? [],
                'borderColor' => $dataset['borderColor'] ?? 'blue',
                'fill' => false
            ];
        }, $data);
    }


    public function render(): View|Closure|string
    {
        return view('components.zoom-chart');
    }
}
