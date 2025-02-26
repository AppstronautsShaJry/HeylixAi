@props([
   'placeholer' => 'Search ....',
])

<div class="w-5/12">

    <label for="hs-trailing-button-add-on-with-icon" class="sr-only">Label</label>
    <div class="flex rounded-sm">
        <input type="text" id="hs-trailing-button-add-on-with-icon"
               name="hs-trailing-button-add-on-with-icon" placeholder="{{$placeholer}}"
               class="rtl:!rounded-tl-none !rounded-ee-none ti-form-input rounded-none !rounded-s-sm focus:z-10" {{$attributes}}>
        <button aria-label="button" type="button"
                class="inline-flex flex-shrink-0 justify-center items-center h-[2.875rem] w-[2.875rem] rounded-e-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">
            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                 fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </div>
</div>
