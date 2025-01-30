@props([
    'button' => 'Create New',
    'title' => 'New Form'
])
<div x-data="{ isOpen: false }" x-cloak class="w-full" x-on:close-modal.window="isOpen = false">
    <div class="w-full flex flex-row justify-end items-center">
        <button
            @click="isOpen = true; $nextTick(() => $refs.modalContent.focus())"
            class="px-4 py-2 bg-blue-600 text-white font-medium rounded-sm shadow-md
            hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300">
            {{$button}}
        </button>
    </div>
    <div
        x-show="isOpen"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        role="dialog"
        aria-labelledby="modal-title"
        aria-describedby="modal-description"
        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75 z-[9999]">
        <div
            @click.away="isOpen = false"
            @keydown.escape.window="isOpen = false"
            tabindex="0"
            x-ref="modalContent"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-10"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-10"
            class="bg-white dark:bg-[#19191C] dark:text-gray-200 rounded-sm shadow-lg max-w-2xl w-11/12 p-6 space-y-7 outline-none border-defaultborder/10"
            wire:ignore>

            <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 border-b light:border-gray-600 dark:border-defaultborder/10 pb-5">
                {{$title}}</h2>
            <div class="text-gray-600 dark:text-gray-400 flex-col flex justify-start gap-5">
                {{$slot}}
            </div>
            {{--            <div class="mt-6 text-right space-x-2 border-t light:border-gray-600 dark:border-defaultborder/10 pt-5">--}}
            {{--                <button--}}
            {{--                    @click="isOpen = false"--}}
            {{--                    wire:click="resetFields"--}}
            {{--                    class="px-4 py-2 bg-[#9E5CF7] text-white font-medium rounded-sm shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-300">--}}
            {{--                    Close--}}
            {{--                </button>--}}
            {{--                <button--}}
            {{--                    wire:click="save"--}}
            {{--                    wire:loading.attr="disabled"--}}
            {{--                    wire:loading.class="opacity-50 cursor-not-allowed"--}}
            {{--                    class="px-4 py-2 bg-[#5C67F7] text-white font-medium rounded-sm shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300">--}}
            {{--                    <span wire:loading.remove>Save</span>--}}
            {{--                    <span wire:loading>Saving...</span>--}}
            {{--                </button>--}}
            {{--            </div>--}}
        </div>
    </div>
</div>
