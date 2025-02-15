<div class="main-content app-content px-5 space-y-5">

    <div class="container-fluid">
        <div class="grid grid-cols-12 gap-x-6 box">
            <div class="xl:col-span-8 col-span-12 p-6">
                <div id="multiStepForm" x-data="multiStepForm()">
                    <!-- Step 1 -->
                    <div class="step flex space-y-4 flex-col" x-show="currentStep === 1">
                        <div>Step 1</div>

                        <x-input.file-type>
                            <input type="file" name="logoImage" class="filepond basic-filepond"
                                   data-allow-reorder="true"
                                   data-max-file-size="3MB"
                                   data-max-files="1"
                                   id="logoImage" x-model="logoImage"
                                   @blur="validate('logoImage')">

                            {{--                                {{ isset($brandCategory->image) ? 'data-default-file=' . asset('storage/' . $brandCategory->image) : '' }} />--}}
                        </x-input.file-type>
                        <span x-show="errors.logoImage" class="text-red-500" x-text="errors.logoImage"></span>

                        {{--                                                    @blur="validate('logoImage')"/>--}}
                        {{--                        <span x-show="errors.logoImage" class="text-red-500" x-text="errors.logoImage"></span>--}}


                        <div class="flex flex-row col-span-12 space-x-5">
                            <x-input.text label="Logo" id="logo" x-model="logo" @blur="validate('logo')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.logo" class="text-red-500" x-text="errors.logo"></span>

                            <x-input.text label="Text 1" id="text1" x-model="text1" @blur="validate('text1')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.text1" class="text-red-500" x-text="errors.text1"></span>
                        </div>

                        <div class="flex flex-row col-span-12 space-x-5">
                            <x-input.text label="Text T2" id="textt2" x-model="textt2" @blur="validate('textt2')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.textt2" class="text-red-500" x-text="errors.textt2"></span>

                            <x-input.text label="Text T3" id="textt3" x-model="textt3" @blur="validate('textt3')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.textt3" class="text-red-500" x-text="errors.textt3"></span>
                        </div>

                        <div class="flex flex-row col-span-12 space-x-5">
                            <x-input.text label="Text 2" id="text2" x-model="text2" @blur="validate('text2')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.text2" class="text-red-500" x-text="errors.text2"></span>

                            <x-input.text label="Prize" id="prize" x-model="prize" @blur="validate('prize')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.prize" class="text-red-500" x-text="errors.prize"></span>
                        </div>

                        <div class="w-1/2 flex pr-2.5">
                            <x-input.text label="Text 3">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>
                        </div>

                        <div class="flex flex-row col-span-12 space-x-5">
                            <x-input.text label="Phone" id="phone" x-model="phone" @blur="validate('phone')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.phone" class="text-red-500" x-text="errors.phone"></span>

                            <x-input.text label="Website Url" id="websiteurl" x-model="websiteurl"
                                          @blur="validate('websiteurl')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.websiteurl" class="text-red-500" x-text="errors.websiteurl"></span>
                        </div>

                        <div class="flex flex-row col-span-12 space-x-5">
                            <x-input.text label="List 1" id="list1" x-model="list1" @blur="validate('list1')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.list1" class="text-red-500" x-text="errors.list1"></span>

                            <x-input.text label="List 2" id="list2" x-model="list2" @blur="validate('list2')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.list2" class="text-red-500" x-text="errors.list2"></span>
                        </div>

                        <div class="flex flex-row col-span-12 space-x-5">
                            <x-input.text label="List 3" id="list3" x-model="list3" @blur="validate('list3')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.list3" class="text-red-500" x-text="errors.list3"></span>

                            <x-input.text label="List 4" id="list4" x-model="list4" @blur="validate('list4')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.list4" class="text-red-500" x-text="errors.list4"></span>
                        </div>

                        <x-input.file-type>
                            <input type="file" name="image1" class="filepond basic-filepond"
                                   data-allow-reorder="true"
                                   data-max-file-size="3MB"
                                   data-max-files="1"
                                   id="image1" type="file" x-model="image1"
                                   @blur="validate('image1')">

                            {{--                                {{ isset($brandCategory->image) ? 'data-default-file=' . asset('storage/' . $brandCategory->image) : '' }} />--}}
                        </x-input.file-type>
                        <span x-show="errors.image1" class="text-red-500" x-text="errors.image1"></span>
                        <x-input.file-type>
                            <input type="file" name="image2" class="filepond basic-filepond"
                                   data-allow-reorder="true"
                                   data-max-file-size="3MB"
                                   data-max-files="1"
                                   id="image2" type="file" x-model="image2"
                                   @blur="validate('image2')">

                            {{--                                {{ isset($brandCategory->image) ? 'data-default-file=' . asset('storage/' . $brandCategory->image) : '' }} />--}}
                        </x-input.file-type>
                        <span x-show="errors.image2" class="text-red-500" x-text="errors.image2"></span>
                        <x-input.file-type>
                            <input type="file" name="image3" class="filepond basic-filepond"
                                   data-allow-reorder="true"
                                   data-max-file-size="3MB"
                                   data-max-files="1"
                                   id="image3" type="file" x-model="image3"
                                   @blur="validate('image3')">

                            {{--                                {{ isset($brandCategory->image) ? 'data-default-file=' . asset('storage/' . $brandCategory->image) : '' }} />--}}
                        </x-input.file-type>
                        <span x-show="errors.image3" class="text-red-500" x-text="errors.image3"></span>

                        {{--                        <x-input.file-upload :label="'Image 1'" id="image1" x-model="image1"--}}
                        {{--                                             @blur="validate('image1')"/>--}}
                        {{--                        <span x-show="errors.image1" class="text-red-500" x-text="errors.image1"></span>--}}

                        {{--                        <x-input.file-upload :label="'Image 2'" id="image2" x-model="image2"--}}
                        {{--                                             @blur="validate('image2')"/>--}}
                        {{--                        <span x-show="errors.image2" class="text-red-500" x-text="errors.image2"></span>--}}

                        {{--                        <x-input.file-upload :label="'Image 3'" id="image3" x-model="image3"--}}
                        {{--                                             @blur="validate('image3')"/>--}}
                        {{--                        <span x-show="errors.image3" class="text-red-500" x-text="errors.image3"></span>--}}

                        <button type="button" class="next-step self-end" @click="nextStep(1)">Next</button>
                    </div>

                    <!-- Step 2 -->
                    <div class="step" x-show="currentStep === 2">
                        <h3>Step 2</h3>
                        <x-input.file-type>
                            <input type="file" name="image" class="filepond basic-filepond"
                                   data-allow-reorder="true"
                                   data-max-file-size="3MB"
                                   data-max-files="1"
                                   id="logoImage" type="file" x-model="logoImage"
                                   @blur="validate('logoImage')">

                            {{--                                {{ isset($brandCategory->image) ? 'data-default-file=' . asset('storage/' . $brandCategory->image) : '' }} />--}}
                        </x-input.file-type>
                        <span x-show="errors.logoImage" class="text-red-500" x-text="errors.logoImage"></span>

                        <div class="flex flex-row col-span-12 space-x-5">
                            <x-input.text label="Logo" id="logo" x-model="logo" @blur="validate('logo')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.logo" class="text-red-500" x-text="errors.logo"></span>

                            <x-input.text label="Text 1" id="text1" x-model="text1" @blur="validate('text1')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.text1" class="text-red-500" x-text="errors.text1"></span>
                        </div>

                        <div class="flex flex-row col-span-12 space-x-5">
                            <x-input.text label="Text T2" id="textt2" x-model="textt2" @blur="validate('textt2')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.textt2" class="text-red-500" x-text="errors.textt2"></span>

                            <x-input.text label="Text T3" id="textt3" x-model="textt3" @blur="validate('textt3')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.textt3" class="text-red-500" x-text="errors.textt3"></span>
                        </div>

                        <div class="flex flex-row col-span-12 space-x-5">
                            <x-input.text label="Text 2" id="text2" x-model="text2" @blur="validate('text2')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.text2" class="text-red-500" x-text="errors.text2"></span>

                            <x-input.text label="Prize" id="prize" x-model="prize" @blur="validate('prize')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.prize" class="text-red-500" x-text="errors.prize"></span>
                        </div>

                        <div class="w-1/2 flex pr-2.5">
                            <x-input.text label="Text 3">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>
                        </div>

                        <div class="flex flex-row col-span-12 space-x-5">
                            <x-input.text label="Phone" id="phone" x-model="phone" @blur="validate('phone')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.phone" class="text-red-500" x-text="errors.phone"></span>

                            <x-input.text label="Website Url" id="websiteurl" x-model="websiteurl"
                                          @blur="validate('websiteurl')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.websiteurl" class="text-red-500" x-text="errors.websiteurl"></span>
                        </div>

                        <div class="flex flex-row col-span-12 space-x-5">
                            <x-input.text label="List 1" id="list1" x-model="list1" @blur="validate('list1')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.list1" class="text-red-500" x-text="errors.list1"></span>

                            <x-input.text label="List 2" id="list2" x-model="list2" @blur="validate('list2')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.list2" class="text-red-500" x-text="errors.list2"></span>
                        </div>

                        <div class="flex flex-row col-span-12 space-x-5">
                            <x-input.text label="List 3" id="list3" x-model="list3" @blur="validate('list3')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.list3" class="text-red-500" x-text="errors.list3"></span>

                            <x-input.text label="List 4" id="list4" x-model="list4" @blur="validate('list4')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.list4" class="text-red-500" x-text="errors.list4"></span>
                        </div>

                        <x-input.file-type>
                            <input type="file" name="image1" class="filepond basic-filepond"
                                   data-allow-reorder="true"
                                   data-max-file-size="3MB"
                                   data-max-files="1"
                                   id="image1" x-model="image1"
                                   @blur="validate('image1')">

                            {{--                                {{ isset($brandCategory->image) ? 'data-default-file=' . asset('storage/' . $brandCategory->image) : '' }} />--}}
                        </x-input.file-type>
                        <span x-show="errors.image1" class="text-red-500" x-text="errors.image1"></span>
                        <x-input.file-type>
                            <input type="file" name="image2" class="filepond basic-filepond"
                                   data-allow-reorder="true"
                                   data-max-file-size="3MB"
                                   data-max-files="1"
                                   id="image2" x-model="image2"
                                   @blur="validate('image2')">

                            {{--                                {{ isset($brandCategory->image) ? 'data-default-file=' . asset('storage/' . $brandCategory->image) : '' }} />--}}
                        </x-input.file-type>
                        <span x-show="errors.image2" class="text-red-500" x-text="errors.image2"></span>
                        <x-input.file-type>
                            <input  name="image3" class="filepond basic-filepond"
                                   data-allow-reorder="true"
                                   data-max-file-size="3MB"
                                   data-max-files="1"
                                   id="image3" type="file" x-model="image3"
                                   @blur="validate('image3')">

                            {{--                                {{ isset($brandCategory->image) ? 'data-default-file=' . asset('storage/' . $brandCategory->image) : '' }} />--}}
                        </x-input.file-type>
                        <span x-show="errors.image3" class="text-red-500" x-text="errors.image3"></span>

                        <button type="button" class="prev-step" @click="currentStep--">Previous</button>
                        <button type="button" class="next-step" @click="nextStep(2)">Next</button>
                    </div>

                    <!-- Step 3 -->
                    <div class="step" x-show="currentStep === 3">
                        <h3>Step 3</h3>
                        <x-input.file-type>
                            <input type="file" name="image" class="filepond basic-filepond"
                                   data-allow-reorder="true"
                                   data-max-file-size="3MB"
                                   data-max-files="1"
                                   id="logoImage" type="file" x-model="logoImage"
                                   @blur="validate('logoImage')">

                            {{--                                {{ isset($brandCategory->image) ? 'data-default-file=' . asset('storage/' . $brandCategory->image) : '' }} />--}}
                        </x-input.file-type>
                        <span x-show="errors.logoImage" class="text-red-500" x-text="errors.logoImage"></span>

                        <div class="flex flex-row col-span-12 space-x-5">
                            <x-input.text label="Logo" id="logo" x-model="logo" @blur="validate('logo')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.logo" class="text-red-500" x-text="errors.logo"></span>

                            <x-input.text label="Text 1" id="text1" x-model="text1" @blur="validate('text1')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.text1" class="text-red-500" x-text="errors.text1"></span>
                        </div>

                        <div class="flex flex-row col-span-12 space-x-5">
                            <x-input.text label="Text T2" id="textt2" x-model="textt2" @blur="validate('textt2')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.textt2" class="text-red-500" x-text="errors.textt2"></span>

                            <x-input.text label="Text T3" id="textt3" x-model="textt3" @blur="validate('textt3')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.textt3" class="text-red-500" x-text="errors.textt3"></span>
                        </div>

                        <div class="flex flex-row col-span-12 space-x-5">
                            <x-input.text label="Text 2" id="text2" x-model="text2" @blur="validate('text2')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.text2" class="text-red-500" x-text="errors.text2"></span>

                            <x-input.text label="Prize" id="prize" x-model="prize" @blur="validate('prize')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.prize" class="text-red-500" x-text="errors.prize"></span>
                        </div>

                        <div class="w-1/2 flex pr-2.5">
                            <x-input.text label="Text 3">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>
                        </div>

                        <div class="flex flex-row col-span-12 space-x-5">
                            <x-input.text label="Phone" id="phone" x-model="phone" @blur="validate('phone')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.phone" class="text-red-500" x-text="errors.phone"></span>

                            <x-input.text label="Website Url" id="websiteurl" x-model="websiteurl"
                                          @blur="validate('websiteurl')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.websiteurl" class="text-red-500" x-text="errors.websiteurl"></span>
                        </div>

                        <div class="flex flex-row col-span-12 space-x-5">
                            <x-input.text label="List 1" id="list1" x-model="list1" @blur="validate('list1')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.list1" class="text-red-500" x-text="errors.list1"></span>

                            <x-input.text label="List 2" id="list2" x-model="list2" @blur="validate('list2')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.list2" class="text-red-500" x-text="errors.list2"></span>
                        </div>

                        <div class="flex flex-row col-span-12 space-x-5">
                            <x-input.text label="List 3" id="list3" x-model="list3" @blur="validate('list3')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.list3" class="text-red-500" x-text="errors.list3"></span>

                            <x-input.text label="List 4" id="list4" x-model="list4" @blur="validate('list4')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.list4" class="text-red-500" x-text="errors.list4"></span>
                        </div>

                        <x-input.file-type>
                            <input type="file" name="image1" class="filepond basic-filepond"
                                   data-allow-reorder="true"
                                   data-max-file-size="3MB"
                                   data-max-files="1"
                                   id="image1" type="file" x-model="image1"
                                   @blur="validate('image1')">

                            {{--                                {{ isset($brandCategory->image) ? 'data-default-file=' . asset('storage/' . $brandCategory->image) : '' }} />--}}
                        </x-input.file-type>
                        <span x-show="errors.image1" class="text-red-500" x-text="errors.image1"></span>
                        <x-input.file-type>
                            <input type="file" name="image2" class="filepond basic-filepond"
                                   data-allow-reorder="true"
                                   data-max-file-size="3MB"
                                   data-max-files="1"
                                   id="image2" type="file" x-model="image2"
                                   @blur="validate('image2')">

                            {{--                                {{ isset($brandCategory->image) ? 'data-default-file=' . asset('storage/' . $brandCategory->image) : '' }} />--}}
                        </x-input.file-type>
                        <span x-show="errors.image2" class="text-red-500" x-text="errors.image2"></span>
                        <x-input.file-type>
                            <input type="file" name="image3" class="filepond basic-filepond"
                                   data-allow-reorder="true"
                                   data-max-file-size="3MB"
                                   data-max-files="1"
                                   id="image3" type="file" x-model="image3"
                                   @blur="validate('image3')">

                            {{--                                {{ isset($brandCategory->image) ? 'data-default-file=' . asset('storage/' . $brandCategory->image) : '' }} />--}}
                        </x-input.file-type>
                        <span x-show="errors.image3" class="text-red-500" x-text="errors.image3"></span>
                        <label for="address">Address:</label>
                        <input type="text" id="address" class="form-control" x-model="address"
                               @blur="validate('address')">
                        <span x-show="errors.address" class="text-red-500" x-text="errors.address"></span>

                        <button type="button" class="prev-step" @click="currentStep--">Previous</button>
                        <button type="button" class="next-step" @click="nextStep(3)">Next</button>
                    </div>

                    <!-- Final Step - Submission -->
                    <div class="step" x-show="currentStep === 4">
                        <h3>Review & Submit</h3>
                        <x-input.file-type>
                            <input type="file" name="image" class="filepond basic-filepond"
                                   data-allow-reorder="true"
                                   data-max-file-size="3MB"
                                   data-max-files="1"
                                   id="logoImage" type="file" x-model="logoImage"
                                   @blur="validate('logoImage')">

                            {{--                                {{ isset($brandCategory->image) ? 'data-default-file=' . asset('storage/' . $brandCategory->image) : '' }} />--}}
                        </x-input.file-type>
                        <span x-show="errors.logoImage" class="text-red-500" x-text="errors.logoImage"></span>

                        <div class="flex flex-row col-span-12 space-x-5">
                            <x-input.text label="Logo" id="logo" x-model="logo" @blur="validate('logo')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.logo" class="text-red-500" x-text="errors.logo"></span>

                            <x-input.text label="Text 1" id="text1" x-model="text1" @blur="validate('text1')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.text1" class="text-red-500" x-text="errors.text1"></span>
                        </div>

                        <div class="flex flex-row col-span-12 space-x-5">
                            <x-input.text label="Text T2" id="textt2" x-model="textt2" @blur="validate('textt2')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.textt2" class="text-red-500" x-text="errors.textt2"></span>

                            <x-input.text label="Text T3" id="textt3" x-model="textt3" @blur="validate('textt3')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.textt3" class="text-red-500" x-text="errors.textt3"></span>
                        </div>

                        <div class="flex flex-row col-span-12 space-x-5">
                            <x-input.text label="Text 2" id="text2" x-model="text2" @blur="validate('text2')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.text2" class="text-red-500" x-text="errors.text2"></span>

                            <x-input.text label="Prize" id="prize" x-model="prize" @blur="validate('prize')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.prize" class="text-red-500" x-text="errors.prize"></span>
                        </div>

                        <div class="w-1/2 flex pr-2.5">
                            <x-input.text label="Text 3">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>
                        </div>

                        <div class="flex flex-row col-span-12 space-x-5">
                            <x-input.text label="Phone" id="phone" x-model="phone" @blur="validate('phone')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.phone" class="text-red-500" x-text="errors.phone"></span>

                            <x-input.text label="Website Url" id="websiteurl" x-model="websiteurl"
                                          @blur="validate('websiteurl')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.websiteurl" class="text-red-500" x-text="errors.websiteurl"></span>
                        </div>

                        <div class="flex flex-row col-span-12 space-x-5">
                            <x-input.text label="List 1" id="list1" x-model="list1" @blur="validate('list1')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.list1" class="text-red-500" x-text="errors.list1"></span>

                            <x-input.text label="List 2" id="list2" x-model="list2" @blur="validate('list2')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.list2" class="text-red-500" x-text="errors.list2"></span>
                        </div>

                        <div class="flex flex-row col-span-12 space-x-5">
                            <x-input.text label="List 3" id="list3" x-model="list3" @blur="validate('list3')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.list3" class="text-red-500" x-text="errors.list3"></span>

                            <x-input.text label="List 4" id="list4" x-model="list4" @blur="validate('list4')">
                                <x-tooltip.popover message="Lorem ipsum dolor sit amet, consectetur."/>
                            </x-input.text>

                            <span x-show="errors.list4" class="text-red-500" x-text="errors.list4"></span>
                        </div>

                        <x-input.file-type>
                            <input type="file" name="image1" class="filepond basic-filepond"
                                   data-allow-reorder="true"
                                   data-max-file-size="3MB"
                                   data-max-files="1"
                                   id="image1" type="file" x-model="image1"
                                   @blur="validate('image1')">

                            {{--                                {{ isset($brandCategory->image) ? 'data-default-file=' . asset('storage/' . $brandCategory->image) : '' }} />--}}
                        </x-input.file-type>
                        <span x-show="errors.image1" class="text-red-500" x-text="errors.image1"></span>
                        <x-input.file-type>
                            <input type="file" name="image2" class="filepond basic-filepond"
                                   data-allow-reorder="true"
                                   data-max-file-size="3MB"
                                   data-max-files="1"
                                   id="image2" type="file" x-model="image2"
                                   @blur="validate('image2')">

                            {{--                                {{ isset($brandCategory->image) ? 'data-default-file=' . asset('storage/' . $brandCategory->image) : '' }} />--}}
                        </x-input.file-type>
                        <span x-show="errors.image2" class="text-red-500" x-text="errors.image2"></span>
                        <x-input.file-type>
                            <input type="file" name="image3" class="filepond basic-filepond"
                                   data-allow-reorder="true"
                                   data-max-file-size="3MB"
                                   data-max-files="1"
                                   id="image3" type="file" x-model="image3"
                                   @blur="validate('image3')">

                            {{--                                {{ isset($brandCategory->image) ? 'data-default-file=' . asset('storage/' . $brandCategory->image) : '' }} />--}}
                        </x-input.file-type>
                        <span x-show="errors.image3" class="text-red-500" x-text="errors.image3"></span>

                        <button type="button" class="prev-step" @click="currentStep--">Previous</button>
                        <button type="submit" class="submit-btn" @click="submitForm">Submit</button>
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

                    {{--                    <div class="">--}}
                    {{--                        <div class="relative overflow-hidden rounded ">--}}
                    {{--                            <img src="{{asset('images/partials/img1.jpg')}}"--}}
                    {{--                                 class="w-[280px] h-[260px] mb-3 rounded-md"--}}
                    {{--                                 alt="...">--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>

            </div>

        </div>
    </div>
</div>

<script>
    function multiStepForm() {
        return {
            currentStep: 1,
            logoImage: '',
            logo: '',
            text1: '',
            textt2: '',
            textt3: '',
            text2: '',
            text3: '',
            prize: '',
            phone: '',
            websiteurl: '',
            list1: '',
            list2: '',
            list3: '',
            list4: '',
            image1: '',
            image2: '',
            image3: '',
            errors: {},

            validate(field) {
                this.errors[field] = '';
                if (!this[field]) {
                    this.errors[field] = `${field} is required`;
                }
            },

            nextStep(step) {
                let valid = true;
                const stepFields = {
                    1: ['logoImage', 'logo', 'text1', 'textt2', 'textt3', 'text2', 'text3', 'prize', 'phone', 'websiteurl', 'list1', 'list2', 'list3', 'list4', 'image1', 'image2', 'image3'],
                    2: ['phone', 'dob'],
                    3: ['address', 'city']
                };

                stepFields[step].forEach(field => {
                    this.validate(field);
                    if (this.errors[field]) valid = false;
                });

                if (valid) this.currentStep++;
            },

            submitForm() {
                alert('Form submitted successfully!');
            }
        };
    }
</script>
