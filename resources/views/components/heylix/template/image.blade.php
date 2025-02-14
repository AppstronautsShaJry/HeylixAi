@props([
    'route' => '',
    'asset' => ''
])

<div class="w-auto h-28 rounded-md overflow-hidden" >
    <a href="{{route($route)}}">
        <img src="{{asset($asset)}}" alt="image" class="w-full h-full rounded-md object-cover object-top scale-100 hover:scale-110 transition trans ease-in duration-300"
         ></a>
</div>
