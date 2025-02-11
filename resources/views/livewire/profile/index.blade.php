<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <nav>
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
                <h1 class="page-title font-medium text-lg mb-0">Profile</h1>
            </div>
            <div class="btn-list">
                <button class="ti-btn bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 btn-wave !my-0">
                    <i class="ri-filter-3-line align-middle me-1 leading-none"></i> Filter
                </button>
                <button class="ti-btn ti-btn-primary !border-0 btn-wave me-0">
                    <i class="ri-share-forward-line me-1"></i> Share
                </button>
            </div>
        </div>
        <!-- Page Header Close -->
        <!-- Start:: row-1 -->
        <div class="grid grid-cols-12 gap-x-6">
            <div class="xl:col-span-12 col-span-12">
                <div class="box profile-card">
                    <div class="profile-banner-img">
                        <img src="{{asset('build/assets/images/media/media-3.jpg')}}" class="card-img-top" alt="...">
                    </div>
                    <div class="box-body pb-0 relative">
                        <div class="grid grid-cols-12 sm:gap-x-6 profile-content">
                            <div class="xl:col-span-3 col-span-12">
                                <div class="box overflow-hidden border border-defaultborder dark:border-defaultborder/10">
                                    <div class="box-body border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                        <div class="text-center">
                                                        <span class="avatar avatar-xxl avatar-rounded online">
                                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                        </span>
                                            <h5 class="font-semibold mb-1">Spencer Robin</h5>
                                            <span class="block font-medium text-textmuted dark:text-textmuted/50 mb-2">Software Development Manager</span>
                                            <p class="text-xs mb-0 text-textmuted dark:text-textmuted/50"> <span class="me-3"><i class="ri-building-line me-1 align-middle">
                                                                </i>Hamburg</span><span><i class="ri-map-pin-line me-1 align-middle"></i>Germany</span> </p>
                                        </div>
                                    </div>
                                    <div class="flex mb-0 flex-wrap gap-4 p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10">

                                    </div>
                                    <div class="p-4 pb-1 flex flex-wrap justify-between">
                                        <div class="font-medium text-[15px] text-primarytint1color">
                                            Basic Info :
                                        </div>
                                    </div>
                                    <div class="box-body border-b border-dashed border-defaultborder dark:border-defaultborder/10 p-0">
                                        <ul class="ti-list-group list-group-flush !border-0">
                                            <li class="ti-list-group-item pt-2 border-0">
                                                <div><span class="font-medium me-2">Name :</span><span class="text-textmuted dark:text-textmuted/50">Spencer Robin</span></div>
                                            </li>
                                            <li class="ti-list-group-item pt-2 border-0">
                                                <div><span class="font-medium me-2">Designation :</span><span class="text-textmuted dark:text-textmuted/50">Software Development Manager</span></div>
                                            </li>
                                            <li class="ti-list-group-item pt-2 border-0">
                                                <div><span class="font-medium me-2">Email :</span><span class="text-textmuted dark:text-textmuted/50">spencer. robin22@example.com</span></div>
                                            </li>
                                            <li class="ti-list-group-item pt-2 border-0">
                                                <div><span class="font-medium me-2">Phone :</span><span class="text-textmuted dark:text-textmuted/50">+1 (222) 111 - 57840</span></div>
                                            </li>
                                            <li class="ti-list-group-item pt-2 border-0">
                                                <div><span class="font-medium me-2">Experience :</span><span class="text-textmuted dark:text-textmuted/50">10 Years</span></div>
                                            </li>
                                            <li class="ti-list-group-item pt-2 border-0">
                                                <div><span class="font-medium me-2">Age :</span><span class="text-textmuted dark:text-textmuted/50">28</span></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-9 col-span-12">
                                <div class="box overflow-hidden border border-defaultborder dark:border-defaultborder/10">
                                    <div class="box-body">
                                        <ul class="nav nav-tabs tab-style-6 mb-3 p-0 flex bg-white dark:bg-bodybg flex-wrap" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link w-full text-start rounded-md active" data-hs-tab="#profile-about-tab-pane" type="button" role="tab">About</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link w-full text-start rounded-md" data-hs-tab="#edit-profile-tab-pane" type="button" role="tab">Edit Profile</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="profile-tabs">
                                            <div class="tab-pane show active p-0 border-0" id="profile-about-tab-pane" role="tabpanel">
                                                <ul class="ti-list-group list-group-flush border rounded-3">
                                                    <li class="ti-list-group-item p-4">
                                                        <span class="font-medium text-[15px] block mb-3"><span class="me-1">&#10024;</span>About Info :</span>
                                                        <p class="text-textmuted dark:text-textmuted/50 mb-2">
                                                            Hello, I'm [Your Name], a dedicated [Your Profession/Interest] based in [Your Location]. I have a genuine passion for [Your Hobbies/Interests] and enjoy delving into the nuances of [Your Industry/Field].
                                                        </p>
                                                        <p class="text-textmuted dark:text-textmuted/50 mb-0">
                                                            Specializing in [Your Specialization/Area of Expertise], I strive to infuse innovation into every project I undertake. With a track record of [Key Achievements] and valuable experiences, I'm committed to continual growth and eagerly anticipate the opportunities that lie ahead.
                                                        </p>
                                                    </li>
                                                    <li class="ti-list-group-item p-4">
                                                        <span class="font-medium text-[15px] block mb-3">Contact Info :</span>
                                                        <div class="text-textmuted dark:text-textmuted/50">
                                                            <p class="mb-3">
                                                                            <span class="avatar avatar-sm avatar-rounded !text-primary p-1 bg-primary/10 me-2">
                                                                                <i class="ri-mail-line align-middle text-[15px]"></i>
                                                                            </span>
                                                                <span class="font-medium text-defaulttextcolor">Email : </span> spencer. robin22@example.com
                                                            </p>
                                                            <p class="mb-3">
                                                                            <span class="avatar avatar-sm avatar-rounded !text-primarytint1color p-1 bg-primarytint1color/10 me-2">
                                                                                <i class="ri-map-pin-line align-middle text-[15px]"></i>
                                                                            </span>
                                                                <span class="font-medium text-defaulttextcolor">Website : </span> www.yourwebsite.com
                                                            </p>
                                                            <p class="mb-3">
                                                                            <span class="avatar avatar-sm avatar-rounded !text-primarytint2color p-1 bg-primarytint2color/10 me-2">
                                                                                <i class="ri-building-line align-middle text-[15px]"></i>
                                                                            </span>
                                                                <span class="font-medium text-defaulttextcolor">Location : </span> City, Country
                                                            </p>
                                                            <p class="mb-0">
                                                                            <span class="avatar avatar-sm avatar-rounded !text-primarytint3color p-1 bg-primarytint3color/10 me-2">
                                                                                <i class="ri-phone-line align-middle text-[15px]"></i>
                                                                            </span>
                                                                <span class="font-medium text-defaulttextcolor">Phone : </span> +1 (222) 111 - 57840
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li class="ti-list-group-item p-4">
                                                        <span class="font-medium text-[15px] block mb-3">Skills :</span>
                                                        <div class="w-75">
                                                            <a href="javascript:void(0);">
                                                                <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Leadership</span>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Project Management</span>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Technical Proficiency</span>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Communication</span>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Team Building</span>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Problem-Solving</span>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Strategic Thinking</span>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Decision Making</span>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Adaptability</span>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Stakeholder Management</span>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Conflict Resolution</span>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Continuous Improvement</span>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane p-0 border-0 hidden" id="edit-profile-tab-pane" role="tabpanel"
                                                 tabindex="0">
                                                <ul class="ti-list-group list-group-flush border rounded-3">
                                                    <li class="ti-list-group-item p-4">
                                                        <span class="font-medium text-[15px] block mb-3">Personal Info :</span>
                                                        <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3 items-center">
                                                            <div class="xl:col-span-3 col-span-12">
                                                                <div class="leading-none">
                                                                    <span class="font-medium">User Name :</span>
                                                                </div>
                                                            </div>
                                                            <div class="xl:col-span-9 col-span-12">
                                                                <input type="text" class="form-control" placeholder="Placeholder" value="Spencer Robin">
                                                            </div>
                                                            <div class="xl:col-span-3 col-span-12">
                                                                <div class="leading-none">
                                                                    <span class="font-medium">First Name :</span>
                                                                </div>
                                                            </div>
                                                            <div class="xl:col-span-9 col-span-12">
                                                                <input type="text" class="form-control" placeholder="Placeholder" value="Spencer">
                                                            </div>
                                                            <div class="xl:col-span-3 col-span-12">
                                                                <div class="leading-none">
                                                                    <span class="font-medium">Last Name :</span>
                                                                </div>
                                                            </div>
                                                            <div class="xl:col-span-9 col-span-12">
                                                                <input type="text" class="form-control" placeholder="Placeholder" value="Robin">
                                                            </div>
                                                            <div class="xl:col-span-3 col-span-12">
                                                                <div class="leading-none">
                                                                    <span class="font-medium">Designation :</span>
                                                                </div>
                                                            </div>
                                                            <div class="xl:col-span-9 col-span-12">
                                                                <input type="text" class="form-control" placeholder="Placeholder" value="Software Development Manager">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="ti-list-group-item p-4">
                                                        <span class="font-medium text-[15px] block mb-3">Contact Info :</span>
                                                        <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3 items-center">
                                                            <div class="xl:col-span-3 col-span-12">
                                                                <div class="leading-none">
                                                                    <span class="font-medium">Email :</span>
                                                                </div>
                                                            </div>
                                                            <div class="xl:col-span-9 col-span-12">
                                                                <input type="email" class="form-control" placeholder="Placeholder" value="spencer. robin22@example.com">
                                                            </div>
                                                            <div class="xl:col-span-3 col-span-12">
                                                                <div class="leading-none">
                                                                    <span class="font-medium">Phone :</span>
                                                                </div>
                                                            </div>
                                                            <div class="xl:col-span-9 col-span-12">
                                                                <input type="text" class="form-control" placeholder="Placeholder" value="+1 (222) 111 - 57840">
                                                            </div>
                                                            <div class="xl:col-span-3 col-span-12">
                                                                <div class="leading-none">
                                                                    <span class="font-medium">Website :</span>
                                                                </div>
                                                            </div>
                                                            <div class="xl:col-span-9 col-span-12">
                                                                <input type="text" class="form-control" placeholder="Placeholder" value="www.yourwebsite .com">
                                                            </div>
                                                            <div class="xl:col-span-3 col-span-12">
                                                                <div class="leading-none">
                                                                    <span class="font-medium">Location :</span>
                                                                </div>
                                                            </div>
                                                            <div class="xl:col-span-9 col-span-12">
                                                                <input type="text" class="form-control" placeholder="Placeholder" value="City, Country">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="ti-list-group-item p-4">
                                                        <span class="font-medium text-[15px] block mb-3">Social Info :</span>
                                                        <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3 items-center">
                                                            <div class="xl:col-span-3 col-span-12">
                                                                <div class="leading-none">
                                                                    <span class="font-medium">Github :</span>
                                                                </div>
                                                            </div>
                                                            <div class="xl:col-span-9 col-span-12">
                                                                <input type="text" class="form-control" placeholder="Placeholder" value="github.com/spruko">
                                                            </div>
                                                            <div class="xl:col-span-3 col-span-12">
                                                                <div class="leading-none">
                                                                    <span class="font-medium">Twitter :</span>
                                                                </div>
                                                            </div>
                                                            <div class="xl:col-span-9 col-span-12">
                                                                <input type="text" class="form-control" placeholder="Placeholder" value="twitter.com/spruko.me">
                                                            </div>
                                                            <div class="xl:col-span-3 col-span-12">
                                                                <div class="leading-none">
                                                                    <span class="font-medium">Linkedin :</span>
                                                                </div>
                                                            </div>
                                                            <div class="xl:col-span-9 col-span-12">
                                                                <input type="text" class="form-control" placeholder="Placeholder" value="linkedin.com/in/spruko">
                                                            </div>
                                                            <div class="xl:col-span-3 col-span-12">
                                                                <div class="leading-none">
                                                                    <span class="font-medium">Portfolio :</span>
                                                                </div>
                                                            </div>
                                                            <div class="xl:col-span-9 col-span-12">
                                                                <input type="text" class="form-control" placeholder="Placeholder" value="spruko.com/">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="ti-list-group-item p-4">
                                                        <span class="font-medium text-[15px] block mb-3">About Info :</span>
                                                        <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3 items-center">
                                                            <div class="xl:col-span-3 col-span-12">
                                                                <div class="leading-none">
                                                                    <span class="font-medium">Biographical Info :</span>
                                                                </div>
                                                            </div>
                                                            <div class="xl:col-span-9 col-span-12">
                                                                            <textarea class="form-control" id="text-area" rows="4">Hello, I'm [Your Name], a dedicated [Your Profession/Interest] based in [Your Location]. I have a genuine passion for [Your Hobbies/Interests] and enjoy delving into the nuances of [Your Industry/Field].

                                                                                Specializing in [Your Specialization/Area of Expertise], I strive to infuse innovation into every project I undertake. With a track record of [Key Achievements] and valuable experiences, I'm committed to continual growth and eagerly anticipate the opportunities that lie ahead.
                                                                            </textarea>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="ti-list-group-item p-4">
                                                        <span class="font-medium text-[15px] block mb-3">SKILLS :</span>
                                                        <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3 items-center">
                                                            <div class="xl:col-span-3 col-span-12">
                                                                <div class="leading-none">
                                                                    <span class="font-medium">skills :</span>
                                                                </div>
                                                            </div>
                                                            <div class="xl:col-span-9 col-span-12">
                                                                <input class="form-control" id="choices-text-preset-values" type="text" value="Leadership, Project Management, Technical Proficiency, Communication, Team Building, Problem-Solving, Strategic Thinking, Decision Making, Adaptability, Stakeholder Management, Conflict Resolution, Continuous Improvement" placeholder="This is a placeholder">
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-1 -->
    </div>
</div>
