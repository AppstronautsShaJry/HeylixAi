<x-form.layout>
    <x-breadcrumb.nav>
        <x-breadcrumb.list route="create.heylix" list="Create Image"/>
        <x-breadcrumb.list route="create.social" list="Meta Ads" active="dark:text-white text-gray-700"/>
    </x-breadcrumb.nav>

    <div class="grid grid-cols-12 gap-x-6">
        <div class="xl:col-span-8 col-span-12">
            <form class="p-4 flex flex-col gap-4 box">
                <div class="col-span-12 ">
                    <span class="text-lg font-semibold">Meta Ads</span>
                </div>

                <x-input.file-upload :label="'Add Image'"/>

                <div class="flex flex-row col-span-12 space-x-5">
                    <x-input.text label="Logo">
                        <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                    </x-input.text>
                    <x-input.text label="Text T1">
                        <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                    </x-input.text>
                </div>

                <div class="flex flex-row col-span-12 space-x-5">
                    <x-input.text label="Text T2">
                        <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                    </x-input.text>
                    <x-input.text label="Text T3">
                        <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                    </x-input.text>
                </div>

                <div class="flex flex-row col-span-12 space-x-5">
                    <x-input.text label="Text T4">
                        <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                    </x-input.text>
                    <x-input.text label="Prize">
                        <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                    </x-input.text>
                </div>

                {{--                <div class="flex flex-row col-span-12 space-x-5">--}}
                {{--                    <x-input.text label="Text T2">--}}
                {{--                        <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>--}}
                {{--                    </x-input.text>--}}
                {{--                    <x-input.text label="Text T3">--}}
                {{--                        <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>--}}
                {{--                    </x-input.text>--}}
                {{--                </div>--}}

                <div class="w-1/2 flex pr-2.5">
                    <x-input.text label="Text T5">
                        <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                    </x-input.text>
                </div>

                <div class="flex flex-row col-span-12 space-x-5">
                    <x-input.text label="Phone">
                        <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                    </x-input.text>
                    <x-input.text label="Website URl">
                        <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                    </x-input.text>
                </div>

                <div class="flex flex-row col-span-12 space-x-5">
                    <x-input.text label="List 1">
                        <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                    </x-input.text>
                    <x-input.text label="List 2">
                        <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                    </x-input.text>
                </div>

                <div class="flex flex-row col-span-12 space-x-5">
                    <x-input.text label="List 3">
                        <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                    </x-input.text>
                    <x-input.text label="List 4">
                        <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                    </x-input.text>
                </div>

                <x-input.file-upload :label="'Image 1'"/>

                <x-input.file-upload :label="'Image 2'"/>

                <x-input.file-upload :label="'Image 3'"/>

                <div class="flex justify-end">
                    <a href="{{route('create.heylix')}}">
                        <button type="button"
                                class="ti-btn ti-btn-primary-gradient btn-wave self-end mx-4">Save
                        </button>
                    </a>
                </div>
            </form>
        </div>

        <div class="xl:col-span-4 col-span-12 dark:bg-bodybg bg-white mb-6 rounded-lg  px-3">
            <div class="col-span-12 lg:col-span-12 p-4 space-y-8">

                <div class="flex flex-col space-y-4">
                    <div>
                        <div class="font-semibold h5 block lh-base">
                            Preview
                        </div>
                    </div>
                    <a href="javascript:void(0);">
                        <img src="{{asset('images/partials/img4.jpeg')}}" class="card-img-bottom rounded-md"
                             alt="...">
                    </a>
                </div>

                <div class="flex flex-col space-y-4">
                    <div>
                        <div class="font-semibold h5 block lh-base">
                            Final Design
                        </div>
                    </div>
                    <a href="javascript:void(0);">
                        <img src="{{asset('images/partials/img6.jpeg')}}" class="card-img-bottom rounded-md"
                             alt="...">
                    </a>
                </div>

            </div>

        </div>

    </div>
</x-form.layout>
