<x-form.layout>
    <x-breadcrumb.nav>
        <x-breadcrumb.list route="dashboard" list="Dashboard"/>
        <x-breadcrumb.list route="social.temp" list="Template"/>
        <x-breadcrumb.list route="create.social" list="Social Media" active="dark:text-white text-gray-700"/>
    </x-breadcrumb.nav>

    <div x-data="{ step: 1 }" class="grid grid-cols-12 gap-x-6">
        <div class="xl:col-span-8 col-span-12">
            <div  class="space-y-6">

                <!-- Step Indicators -->
                <div class="flex justify-between">
                    <div :class="step >= 1 ? 'bg-blue-500 text-white' : 'bg-gray-300 text-gray-700'"
                         class="w-8 h-8 flex items-center justify-center rounded-full">1
                    </div>
                    <div :class="step >= 2 ? 'bg-blue-500 text-white' : 'bg-gray-300 text-gray-700'"
                         class="w-8 h-8 flex items-center justify-center rounded-full">2
                    </div>
                    <div :class="step >= 3 ? 'bg-blue-500 text-white' : 'bg-gray-300 text-gray-700'"
                         class="w-8 h-8 flex items-center justify-center rounded-full">3
                    </div>
                </div>

                <!-- Step 1 -->
                <div x-show="step === 1" class="space-y-4">
                    <h2 class="text-xl font-bold">Step 1: Personal Information</h2>
                    <div class="p-4 flex flex-col gap-4 box">
                        <div class="col-span-12 ">
                            <span class="text-lg font-semibold">Create Social</span>
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
                            <x-input.text label="Text 2">
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
                            <x-input.text label="Text 3">
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

                    </div>
                </div>

                <!-- Step 2 -->
                <div x-show="step === 2" class="space-y-4">
                    <h2 class="text-xl font-bold">Step 2: Address</h2>
                    <div class="p-4 flex flex-col gap-4 box">
                        <div class="col-span-12 ">
                            <span class="text-lg font-semibold">Create Social</span>
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
                            <x-input.text label="Text 2">
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
                            <x-input.text label="Text 3">
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

                    </div>
                </div>

                <!-- Step 3 -->
                <div x-show="step === 3" class="space-y-4">
                    <h2 class="text-xl font-bold">Step 3: Confirmation</h2>
                    <div class="p-4 flex flex-col gap-4 box">
                        <div class="col-span-12 ">
                            <span class="text-lg font-semibold">Create Social</span>
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
                            <x-input.text label="Text 2">
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
                            <x-input.text label="Text 3">
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
                    </div>
                    <p>Please review your details and submit the form.</p>
                </div>

                <!-- Navigation Buttons -->
                <div class="flex justify-between pb-10">
                    <button @click="step--" :disabled="step === 1"
                            class="px-4 py-2 bg-secondary-gradient rounded-md disabled:opacity-50">Previous
                    </button>
                    <button @click="step++" x-show="step < 3" class="px-4 py-2 bg-primary-gradient text-white rounded-md">Next
                    </button>
                    <button x-show="step === 3" class="px-4 py-2 bg-success-gradient text-white rounded-md">Submit</button>
                </div>

            </div>
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
                        <img src="{{asset('images/partials/img5.jpeg')}}" class="card-img-bottom rounded-md"
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
                        <img src="{{asset('images/partials/img3.jpeg')}}" class="card-img-bottom rounded-md"
                             alt="...">
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-form.layout>
