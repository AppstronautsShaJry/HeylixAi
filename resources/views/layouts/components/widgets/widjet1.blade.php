@props([
   'title' => null,
   'value' => null,
   'tag' => null,
   'tagValue' => null,
//   'icon' => null,


])
<div class="xxl:col-span-3 xl:col-span-6 col-span-12">
    <div class="box overflow-hidden main-content-card">
        <div class="box-body">
            <div class="flex gap-4 items-center">
                <div class="flex-auto">
                    <p class="text-textmuted dark:text-textmuted/50 font-medium mb-2">
                        {{$title}}</p>
                    <h4 class="mb-1">{{$value}}</h4>
                    <div class="text-textmuted dark:text-textmuted/50 text-[13px]">{{$tag}}
                        <span class="text-success">{{$tagValue}}<i
                                class="ti ti-arrow-narrow-up text-[1rem]"></i></span></div>
                </div>
                <span
                    class="avatar avatar-lg bg-primary/10 svg-primary avatar-rounded border-[3px] flex-shrink-0 border-primary/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                 fill="#000000" viewBox="0 0 256 256">
                                                <path d="M224,80l-96,56L32,80l96-56Z" opacity="0.2"></path>
                                                <path d="M230.91,172A8,8,0,0,1,228,182.91l-96,56a8,8,0,0,1-8.06,0l-96-56A8,8,0,0,
                                                1,36,169.09l92,53.65,92-53.65A8,8,0,0,1,230.91,172ZM220,121.09l-92,53.65L36,
                                                121.09A8,8,0,0,0,28,134.91l96,56a8,8,0,0,0,8.06,0l96-56A8,8,0,1,0,220,121.09ZM24,
                                                80a8,8,0,0,1,4-6.91l96-56a8,8,0,0,1,8.06,0l96,56a8,8,0,0,1,0,13.82l-96,56a8,8,0,
                                                0,1-8.06,0l-96-56A8,8,0,0,1,24,80Zm23.88,0L128,126.74,208.12,80,128,33.26Z"></path>
                                            </svg>
                                        </span>
            </div>
        </div>
    </div>
</div>
