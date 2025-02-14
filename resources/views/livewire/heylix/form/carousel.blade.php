<div class="main-content app-content px-5 space-y-5">
    <div class="container-fluid">
        <div class="grid grid-cols-12 gap-x-6 box">

            <div class="xl:col-span-8 col-span-12 p-6">

                <div id="multiStepForm" x-data="multiStepForm()">
                    <!-- Step 1 -->
                    <div class="step flex space-y-4 flex-col" x-show="currentStep === 1">
                        <div>Step 1</div>
                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <p class="mb-2 text-muted">Name</p>
                            <input type="text" class="form-control" id="name" x-model="name" @blur="validate('name')">

                            <span x-show="errors.name" class="text-red-500" x-text="errors.name"></span>
                        </div>

                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <label for="input-email" class="ti-form-label">Type Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email@xyz.com"
                                   x-model="email" @blur="validate('email')">
                            <span x-show="errors.email" class="text-red-500" x-text="errors.email"></span>
                        </div>

                        <button type="button" class="next-step self-end" @click="nextStep(1)">Next</button>
                    </div>

                    <!-- Step 2 -->
                    <div class="step" x-show="currentStep === 2">
                        <h3>Step 2</h3>
                        <label for="phone">Phone:</label>
                        <input type="tel" id="phone" class="form-control" x-model="phone" @blur="validate('phone')">
                        <span x-show="errors.phone" class="text-red-500" x-text="errors.phone"></span>

                        <label for="dob">Date of Birth:</label>
                        <input type="date" id="dob" class="form-control" x-model="dob" @blur="validate('dob')">
                        <span x-show="errors.dob" class="text-red-500" x-text="errors.dob"></span>

                        <button type="button" class="prev-step" @click="currentStep--">Previous</button>
                        <button type="button" class="next-step" @click="nextStep(2)">Next</button>
                    </div>

                    <!-- Step 3 -->
                    <div class="step" x-show="currentStep === 3">
                        <h3>Step 3</h3>
                        <label for="address">Address:</label>
                        <input type="text" id="address" class="form-control" x-model="address"
                               @blur="validate('address')">
                        <span x-show="errors.address" class="text-red-500" x-text="errors.address"></span>

                        <label for="city">City:</label>
                        <input type="text" id="city" class="form-control" x-model="city" @blur="validate('city')">
                        <span x-show="errors.city" class="text-red-500" x-text="errors.city"></span>

                        <button type="button" class="prev-step" @click="currentStep--">Previous</button>
                        <button type="button" class="next-step" @click="nextStep(3)">Next</button>
                    </div>

                    <!-- Final Step - Submission -->
                    <div class="step" x-show="currentStep === 4">
                        <h3>Review & Submit</h3>
                        <p><strong>Name:</strong> <span x-text="name"></span></p>
                        <p><strong>Email:</strong> <span x-text="email"></span></p>
                        <p><strong>Phone:</strong> <span x-text="phone"></span></p>
                        <p><strong>Date of Birth:</strong> <span x-text="dob"></span></p>
                        <p><strong>Address:</strong> <span x-text="address"></span></p>
                        <p><strong>City:</strong> <span x-text="city"></span></p>

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
            name: '',
            email: '',
            phone: '',
            dob: '',
            address: '',
            city: '',
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
                    1: ['name', 'email'],
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
