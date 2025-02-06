<div>
    <img src="{{asset('images/partials/img2.jpg')}}" alt="">
    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Blanditiis odio qui quis saepe tempora!
    </div>

    <div class="flex">
        <div class="w-full">
            <button type="button" class="hs-dropdown-toggle ti-btn  btn-wave ti-btn-primary"
                    data-hs-overlay="#exampleModalScrollable4">
                Open Modal
            </button>
            <x-modal.form-modal>
                <div class="grid grid-cols-3 gap-5">
                    @for($i=0; $i<=8; $i++)
                        <div class="w-auto h-40 rounded-lg bg-gray-7000 overflow-hidden">
                            <img src="{{asset('images/partials/img2.jpg')}}" alt=""
                                 class="w-full h-1/3">
                            <div>Lorem ipsum.</div>
                            <div class="text-xs line-clamp-2">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Ad culpa
                                dolor doloribus facere ipsam voluptatum? Cumque dolores ipsa labore
                                minus saepe tenetur, vitae voluptatem.
                            </div>
                        </div>
                    @endfor
                </div>
            </x-modal.form-modal>
        </div>
        <div class="flex items-center justify-end">
            <div>
                <a href="{{route('meta.upsert')}}">Clik here</a>
            </div>
        </div>
    </div>
</div>
