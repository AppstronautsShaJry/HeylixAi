@props([
    'value' => '',

])
<div>
    <option value="{{$value}}" selected> {{$slot}}</option>

</div>
