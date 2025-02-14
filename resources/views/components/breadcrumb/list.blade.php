@props([
    'list' => '',
    'route' => '',
    'active' => '',
])

<li class="breadcrumb-item">
    <a href="{{route($route)}}">
        <span class="{{$active}}">
            {{$list}}
        </span>
    </a>
</li>

