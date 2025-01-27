<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Start::page-header -->
        <div class="container-fluid">
            <!-- Start::page-header -->
            <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="/">
                                Dashboards
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Manage Brands</li>
                    </ol>
                </div>
                <div class="flex gap-2 flex-wrap">
                </div>
            </div>
        </div>

        <form wire:submit.prevent="save" class="space-y-4">
            <div class="flex flex-col">
                <label for="name" class="text-sm font-medium">Name</label>
                <input type="text" id="name" class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring focus:ring-blue-300" wire:model="name">
                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="flex flex-col">
                <label for="description" class="text-sm font-medium">Description</label>
                <textarea id="description" class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring focus:ring-blue-300" wire:model="description"></textarea>
                @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="flex flex-col">
                <label for="image" class="text-sm font-medium">Image</label>
                <input type="file" id="image" class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring focus:ring-blue-300" wire:model="image">
                @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="flex items-center space-x-2">
                <input type="checkbox" id="is_active" class="h-4 w-4 text-blue-600 focus:ring focus:ring-blue-300 border-gray-300 rounded" wire:model="is_active">
                <label for="is_active" class="text-sm font-medium">Active</label>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300">Save</button>
        </form>
    </div>
</div>
