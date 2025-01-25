
<div x-data="{ show: @entangle('showToast').defer, message: @entangle('toastMessage').defer }"
     x-show="show"
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="transform opacity-0 translate-y-2"
     x-transition:enter-end="transform opacity-100 translate-y-0"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="transform opacity-100 translate-y-0"
     x-transition:leave-end="transform opacity-0 translate-y-2"
     class="fixed bottom-5 right-5 bg-blue-500 text-white p-4 rounded-lg shadow-lg">
    <div class="flex items-center">
        <span class="mr-2">{{ message }}</span>
        <button @click="show = false" class="ml-auto text-white hover:text-gray-200">
            &times;
        </button>
    </div>
</div>

