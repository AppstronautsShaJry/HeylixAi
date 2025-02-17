@props([
    'label' => 'Dashboard',
    'url' => '/',
    'rounded' => 'rounded-l-sm'
])

<div
    :class="currentPage === '{{$url}}' ? 'bg-[#FF5D9F]   text-white ' : ' hover:text-gray-400 dark:text-gray-400  dark:bg-[#252528] bg-[#E5E7EB]'"
    class="max-w-max py-3 px-3 group {{$rounded}}" >
    <a href="{{$url}}" class="text-sm flex items-center gap-x-3 dark:hover:text-white ">
        {{$label}}
    </a>
</div>
