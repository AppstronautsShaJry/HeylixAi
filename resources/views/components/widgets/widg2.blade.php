@props([
    'icon' => null,
    'title' => null,
    'tagIcon' => null,
    'tagValue' => null,
    'perc' => null

])
<div class="xxl:col-span-3 xl:col-span-6 col-span-12">
    <div class="box overflow-hidden">
        <div class="box-body">
            <div class="sm:flex gap-4 items-center flex-wrap">
                <div class="avatar avatar-lg bg-success-gradient svg-white">

                    {!!  $icon !!}
                </div>
                <div>
                    <div class="flex-auto text-[13px] text-textmuted dark:text-textmuted/50">
                        {{$title}}
                    </div>
                    <div class="text-[21px] font-medium">{{$tagValue}}<span
                            class="badge bg-primary-gradient text-success text-[10px] ms-2">
                            {!! $tagIcon !!}
                            {{$perc}}
                        </span>
                    </div>
                </div>
                <div class="ms-auto">
                    <div id="chart-02"></div>
                </div>
            </div>
        </div>
    </div>
</div>
