@props([
    'title' => null,
    'icon' => null,
    'value' => null,
    'tagName' => null,
    'tagValue' => null,
    'tagIcon' => null,
    'chart' => null,
])
<div class="xxl:col-span-3 xl:col-span-6 col-span-12">
    <div class="box overflow-hidden main-content-card">
        <div class="box-body">
            <div class=" flex items-center justify-conent-between">
                <div class="flex-auto">
                    <div class="flex justify-between mb-3">
                        <span class="avatar avatar-rounded avatar-md bg-primary svg-white">
                            {!! $icon !!}

                        </span>
                    </div>
                    <p class="flex-auto text-textmuted dark:text-textmuted/50 text-[10px] mb-0">
                        {{$title}}
                    </p>
                </div>
                <div id="{{$chart}}" class=""></div>
            </div>
            <div class="flex align-items-end justify-between">
                <div class="text-2xl font-medium mb-0 flex items-center">
                    {{$value}}
                </div>
                <div class="text-textmuted dark:text-textmuted/50 text-[13px] text-end ms-auto">
                    {{$tagName}} <span class="text-success">{{$tagValue}}
                        {!! $tagIcon !!}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
