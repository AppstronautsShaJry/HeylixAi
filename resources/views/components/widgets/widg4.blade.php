@props([
    'title' => null,
    'value' => null,
    'icon' => null,
    'bgColor' => 'bg-success-gradient',
    'tagName' => null,
    'tagValue' => null,
    'tagIcon' => null,
])
<div class="xxl:col-span-3 xl:col-span-6 col-span-12">
    <div class="box overflow-hidden main-content-card">
        <div class="box-body h-full">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <span class="text-textmuted dark:text-textmuted/50 block mb-1">{{$title}}</span>
                    <h4 class="font-medium mb-1.5">{{$value}}</h4>
                </div>
                <div class="leading-none">
                    <span class="avatar avatar-xl avatar-rounded {{$bgColor}}">
                        {!!$icon!!}
                    </span>
                </div>
            </div>
            <div class="text-textmuted dark:text-textmuted/50 text-[14px]">{{$tagName}} <span
                    class="text-success">
                    {{$tagValue}}%
                    {!! $tagIcon !!}
{{--                    <i class="ti ti-arrow-narrow-up text-[16px]"></i>--}}
                </span>
            </div>
        </div>
    </div>
</div>
