@props([
    'label' => 'Dashboard',
    'url' => '/',
    'rounded' => 'rounded-l-sm'
])

<div
    :class="currentPage === '{{$url}}' ? 'bg-[#FF5D9F]  {{$rounded}} text-white ' : ' hover:text-gray-400 dark:text-gray-400  rounded-md '"
    class="max-w-max py-3 px-2 group">
    <a href="{{$url}}" class="text-sm flex items-center gap-x-3 dark:hover:text-white">
        {{$label}}
    </a>
</div>
