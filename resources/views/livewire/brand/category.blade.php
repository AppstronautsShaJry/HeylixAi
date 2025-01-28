<div class="main-content app-content">

    <div class="container-fluid">
        <div class="container-fluid">
            <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="/">
                                Dashboards
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Brand Category</li>
                    </ol>
                </div>
                <div class="flex gap-2 flex-wrap">
                </div>
            </div>
        </div>
    </div>

    <div class="w-full px-5">
        <x-modal.create-modal>
            <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                <label for="input-placeholder" class="ti-form-label">Category Name</label>
                <input wire:model="name" type="text" class="form-control" id="category-name" placeholder="Placeholder">
            </div>
            <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                <label for="input-placeholder" class="ti-form-label">Category Description</label>
                <input wire:model="description" type="text" class="form-control" id="Category-desc"
                       placeholder="Placeholder">
            </div>
            <div class="col-span-12 lg:col-span-12">
                <div class="box">
                    <div class="box-header">
                        <h5 class="box-title">Category Image</h5>
                    </div>
                    <div class="box-body">
                        <div>
                            <label class="block">
                            <span class="sr-only">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-6">
                                  <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"/>
                                </svg>
                                </span>
                                <input wire:model="image" type="file" class="block w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10 text-textmuted dark:text-textmuted/50
                                            file:me-4 file:py-2 file:px-4
                                            file:rounded-s-sm file:border-0
                                            file:text-sm file:font-semibold
                                            file:bg-primary file:text-white
                                            hover:file:bg-primary focus-visible:outline-none
                                        ">
                            </label>
                        </div>
                    </div>
                </div>
                @error('image')
                <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>
        </x-modal.create-modal>
    </div>
</div>
