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

    <button type="button" class="hs-dropdown-toggle ti-btn  btn-wave ti-btn-primary" data-hs-overlay="#hs-vertically-centered-modal">
       Create New
    </button>
    <div id="hs-vertically-centered-modal" class="hs-overlay hidden ti-modal">
        <div class="hs-overlay-open:mt-7 ti-modal-box-new1 max-w-2xl mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center">
            <div class="ti-modal-content w-full">
                <div class="ti-modal-header">
                    <h6 class="modal-title text-[1rem] font-semibold" id="staticBackdropLabel2"> {{ $brandCategoryId ? 'Edit' : 'Create' }} Brand Category
                    </h6>

                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-vertically-centered-modal">
                        <span class="sr-only">Close</span>
                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                        </svg>
                    </button>
                </div>
                    <div class="ti-modal-body w-full flex flex-col space-y-5">

                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <label for="input-placeholder" class="ti-form-label">Brand Category</label>
                            <input wire:model="name" type="text" class="form-control" id="brand-category-name" placeholder="Category Name">
                        </div>

                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <label for="input-placeholder" class="ti-form-label">Brand Description</label>
                            <input wire:model="description" type="text" class="form-control" id="brand-category-description" placeholder="Description">
                        </div>

                        <div class="col-span-12 lg:col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">File Input Buttons</h5>
                                </div>
                                <div class="box-body">
                                    <div>
                                        <label class="block">
                                            <span class="sr-only">Brand Category Image</span>
                                            <input wire:model.live.debounce="image" type="file" class="block w-full border border-gray-200
                                            focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0
                                            focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10 text-textmuted
                                            dark:text-textmuted/50
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
                        </div>

                        <label>
                            <input type="checkbox" wire:model="is_active"> Active
                        </label>
                </div>
                <div class="ti-modal-footer">
                    <button type="button" class="hs-dropdown-toggle ti-btn  btn-wave ti-btn-secondary" data-hs-overlay="#hs-vertically-centered-modal">
                        Close
                    </button>
                    <button type="button" wire:click="save" class="ti-btn  btn-wave ti-btn-primary">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
