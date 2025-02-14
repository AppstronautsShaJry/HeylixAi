@props([
    'label' => 'Label',
    'type' => 'text',
    'labelWidth' => 'w-5/12',
    'inputWidth' => 'w-7/12'
])

<div class="w-full flex items-center">
    <div class="{{$labelWidth}} flex flex-row gap-2">
        <label class="ti-form-label">{{$label}}</label>
        {{$slot}}
    </div>
    <div class="{{$inputWidth}}">
        <input type="{{$type}}" class="form-control" placeholder="" aria-label="First name" {{$attributes}}>
    </div>
</div>
