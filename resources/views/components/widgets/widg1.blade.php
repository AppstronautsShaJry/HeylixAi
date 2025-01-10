@props([
   'title' => null,
   'value' => null,
   'tagName' => null,
   'bgIcon' => 'bg-primary/10',
   'bgColor' => 'text-primary',
   'tagValue' => null,
   'tagIcon' => null,
   'icon' => null,
])
<div class="xxl:col-span-3 xl:col-span-6 col-span-12 h-full">
    <div class="box overflow-hidden main-content-card">
        <div class="box-body">
            <div class="flex gap-4 items-center">
                <div class="flex-auto">
                    <p class="text-textmuted dark:text-textmuted/50 font-medium mb-2">
                        {{$title}}</p>
                    <h4 class="mb-1">{{$value}}</h4>
                    <div class="text-textmuted dark:text-textmuted/50 text-[13px] ">{{$tagName}}
                        <span class="text-success inline-flex items-center gap-x-2">{{$tagValue}}{!!$tagIcon!!}</span></div>
                </div>
                <span
                    class="avatar avatar-lg {{$bgIcon}} {{$bgColor}}  avatar-rounded border-[3px] flex-shrink-0 border-primary/50">
                    {!!$icon!!}</span>
            </div>
        </div>
    </div>
</div>
