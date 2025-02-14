@props([
    'width' => 'w-52'
])
<div class="{{$width}}">
    <select class="ti-form-select " id="select-beast" autocomplete="off">
        {{$slot}}
    </select>
</div>
