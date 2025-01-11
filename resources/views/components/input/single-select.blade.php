@props([
    'label' => null,
])
{{--<div class="box">--}}
    <div class="">
        <label class="ti-form-select rounded-sm !p-0 mb-2 font-medium">{{$label}}</label>
        <select class="ti-form-select rounded-sm !py-2 !px-3" data-trigger name="choices-single-default" id="choices-single-default">
            {{$slot}}
{{--            <option value="">This is a placeholder</option>--}}
{{--            <option value="Choice 1">Choice 1</option>--}}
{{--            <option value="Choice 2">Choice 2</option>--}}
{{--            <option value="Choice 3">Choice 3</option>--}}
        </select>
    </div>
{{--</div>--}}
