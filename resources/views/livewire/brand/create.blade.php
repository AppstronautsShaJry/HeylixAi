@section('styles')
    <!-- FilePond CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/filepond/filepond.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css') }}">
@endsection

<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="container-fluid">
            <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="/">Dashboards</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Brands</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="box-tab p-5 flex justify-start items-center gap-x-2 my-10" x-data="buttonHandler">
            <a href="/create-brand" class="dynamic-button" :class="isActive('/create-brand') ? 'current-button' : ''">
                <button type="button"
                        class="hs-tooltip-toggle ti-btn btn-wave"
                        :class="isActive('/create-brand') ? 'ti-btn-primary' : 'ti-btn-light'">
                    Create
                </button>
            </a>
            <a href="/manage-brand" class="dynamic-button" :class="isActive('/manage-brand') ? 'current-button' : ''">
                <button type="button"
                        class="hs-tooltip-toggle ti-btn btn-wave"
                        :class="isActive('/manage-brand') ? 'ti-btn-primary' : 'ti-btn-light'">
                    Manage
                </button>
            </a>
        </div>

        <!-- Brand Form -->
        <div class="grid grid-cols-12 sm:gap-x-6">
            <div class="xxl:col-span-9 xl:col-span-8 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="text-xl font-medium">Add Your Brand</div>
                    </div>
                    <form wire:submit.prevent="create">
                        <div class="box-body">
                            <div class="grid grid-cols-12 sm:gap-x-6 gap-5">
                                <div class="xxl:col-span-6 xl:col-span-12 col-span-12">
                                    <div class="grid grid-cols-12 sm:gap-x-6 gap-y-6">
                                        <!-- Brand Name -->
                                        <div class="xl:col-span-12 col-span-12">
                                            <label for="name" class="form-label">Brand Name</label>
                                            <input type="text" class="form-control" id="name"
                                                   placeholder="e.g. Abstract Digital Art"
                                                   wire:model="name">
                                            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                                        </div>

                                        <!-- Branding Category -->
                                        <div class="xl:col-span-12 col-span-12">
                                            <label for="category" class="form-label">Branding Category</label>
                                            <select class="form-control" id="category" wire:model="category_id">
                                                <option value="">Select Category</option>
                                                @foreach($categories as $cat)
                                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id') <span class="text-red-500">{{ $message }}</span> @enderror
                                        </div>

                                        <!-- Website URL -->
                                        <div class="xl:col-span-12 col-span-12">
                                            <label for="url" class="form-label">Website URL</label>
                                            <input type="text" class="form-control" id="url"
                                                   placeholder="External Link Here"
                                                   wire:model="url">
                                            @error('url') <span class="text-red-500">{{ $message }}</span> @enderror
                                        </div>

                                        <!-- Phone Number -->
                                        <div class="xl:col-span-12 col-span-12">
                                            <label for="phone" class="form-label">Phone No</label>
                                            <input type="text" class="form-control" id="phone"
                                                   placeholder="Enter Phone Number"
                                                   wire:model="phone">
                                            @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Upload Logo -->
                                <div class="xxl:col-span-6 xl:col-span-12 col-span-12">
                                    <label class="form-label">Upload Your Logo</label>
                                    <input type="file" class="single-fileupload" wire:model="image">
                                    @error('image') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>

                                <!-- Brand Description -->
                                <div class="xl:col-span-12 col-span-12">
                                    <label for="description" class="form-label">Brand Description</label>
                                    <textarea class="form-control" id="description"
                                              placeholder="Enter Description"
                                              wire:model="description"></textarea>
                                    @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>

                                <!-- Address Fields -->
                                <div class="xl:col-span-12 col-span-12">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea class="form-control" id="address"
                                              placeholder="Enter Address"
                                              wire:model="address"></textarea>
                                    @error('address') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>

                                <!-- City, State, Pincode, Country -->
                                <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3">
                                    <div class="xl:col-span-3 col-span-12">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control" id="city"
                                               wire:model="city">
                                    </div>
                                    <div class="xl:col-span-3 col-span-12">
                                        <label for="state" class="form-label">State</label>
                                        <input type="text" class="form-control" id="state"
                                               wire:model="state">
                                    </div>
                                    <div class="xl:col-span-3 col-span-12">
                                        <label for="pincode" class="form-label">Pincode</label>
                                        <input type="text" class="form-control" id="pincode"
                                               wire:model="pincode">
                                    </div>
                                    <div class="xl:col-span-3 col-span-12">
                                        <label for="country" class="form-label">Country</label>
                                        <input type="text" class="form-control" id="country"
                                               wire:model="country">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box-footer text-end">
                            <button type="submit" class="ti-btn ti-btn-info-gradient btn-wave">Save Brand</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <!-- FilePond Scripts -->
    <script src="{{ asset('build/assets/libs/filepond/filepond.min.js') }}"></script>
    <script src="{{ asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}"></script>

    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data('buttonHandler', () => ({
                currentPage: window.location.pathname,
                isActive(href) { return this.currentPage === href; }
            }));
        });
    </script>
@endsection
