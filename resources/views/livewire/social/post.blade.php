<div class="main-content app-content px-5">


    <div class="container-fluid">
        <!-- Start::page-header -->
        <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="/">
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Post Insights/li>
                </ol>
            </div>
            <div class="flex gap-2 flex-wrap">
            </div>
        </div>
    </div>
    <div x-data="{ currentPage: window.location.pathname }" class="p-2 py-6 flex items-center font-medium">
        <div
            :class="currentPage === '/calender-social' ? 'bg-[#FF5D9F]  rounded-l-sm text-white ' : '  dark:text-gray-400  rounded-md '"
            class="max-w-max py-3 px-2 group">
            <a href="/calender-social" class="text-sm flex items-center gap-x-3 hover:text-white">
                Calender
            </a>
        </div>
        <!-- Twitter Tab -->
        <div
            :class="currentPage === '/posts-social' ? 'bg-[#FF5D9F]  rounded-r-sm text-white' : 'hover:text-white  dark:text-gray-400  rounded-md'"
            class="max-w-max py-3 px-2 group">
            <a href="/posts-social" class="text-sm inline-flex items-center gap-x-3 hover:text-white">
                Post Insights
            </a>
        </div>
    </div>


    <div>
        <div class="table-responsive">
            <table class="table whitespace-nowrap min-w-full">
                <thead>
                <tr class="border-b  border-defaultborder dark:border-defaultborder/10">
                    <th scope="col" class="text-start">Platform</th>
                    <th scope="col" class="text-start">Status</th>
                    <th scope="col" class="text-start">Content</th>
                    <th scope="col" class="text-start">Published On</th>
                    <th scope="col" class="text-start">Reactions</th>
                    <th scope="col" class="text-start">Comments</th>
                    <th scope="col" class="text-start">Shares</th>
                </tr>
                </thead>
                <tbody>
                <tr class="border-b  border-defaultborder dark:border-defaultborder/10">
                    {{--                        <th scope="row"><input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value="" aria-label="..."></th>--}}
                    <td>
                        <div class="flex items-center">
                            <span class="avatar avatar-xs me-2 online avatar-rounded">
                                <img src="http://127.0.0.1:8888/build/assets/images/faces/3.jpg" alt="img">
                            </span>Mayor Kelly
                        </div>
                    </td>
                    <td>Manufacturer</td>
                    <td><span class="badge bg-primary/10 text-primary">Scheduled</span></td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, repellendus.</td>
                    <td>
                        <div class="avatar-list-stacked">
                            <span class="avatar avatar-sm avatar-rounded">
                                <img src="http://127.0.0.1:8888/build/assets/images/faces/2.jpg" alt="img">
                            </span>
                            <span class="avatar avatar-sm avatar-rounded">
                                <img src="http://127.0.0.1:8888/build/assets/images/faces/8.jpg" alt="img">
                            </span>
                            <span class="avatar avatar-sm avatar-rounded">
                                <img src="http://127.0.0.1:8888/build/assets/images/faces/2.jpg" alt="img">
                            </span>
                            <a class="avatar avatar-sm bg-primary text-white avatar-rounded" href="javascript:void(0);">
                                +4
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-primary w-[52%]" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </td>
                    <td>$10,984.29</td>
                    <td>
                        <div class="hstack flex gap-3 text-[.9375rem]">
                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-success"><i class="ri-download-2-line"></i></a>
                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-info"><i class="ri-edit-line"></i></a>
                        </div>
                    </td>
                </tr>
                <tr class="border-b  border-defaultborder dark:border-defaultborder/10">
                    <th scope="row"><input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="..."></th>
                    <td>
                        <div class="flex items-center">
                            <span class="avatar avatar-xs me-2 online avatar-rounded">
                                <img src="http://127.0.0.1:8888/build/assets/images/faces/12.jpg" alt="img">
                            </span>Andrew Garfield
                        </div>
                    </td>
                    <td>Managing Director</td>
                    <td><span class="badge bg-warning/10 text-warning">Director</span></td>
                    <td>andrewgarfield@gmail.com</td>
                    <td>
                        <div class="avatar-list-stacked">
                            <span class="avatar avatar-sm avatar-rounded">
                                <img src="http://127.0.0.1:8888/build/assets/images/faces/1.jpg" alt="img">
                            </span>
                            <span class="avatar avatar-sm avatar-rounded">
                                <img src="http://127.0.0.1:8888/build/assets/images/faces/5.jpg" alt="img">
                            </span>
                            <span class="avatar avatar-sm avatar-rounded">
                                <img src="http://127.0.0.1:8888/build/assets/images/faces/11.jpg" alt="img">
                            </span>
                            <span class="avatar avatar-sm avatar-rounded">
                                <img src="http://127.0.0.1:8888/build/assets/images/faces/15.jpg" alt="img">
                            </span>
                            <a class="avatar avatar-sm bg-primary text-white avatar-rounded" href="javascript:void(0);">
                                +4
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-primary w-[91%]" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </td>
                    <td>$1.4billion</td>
                    <td>
                        <div class="hstack flex gap-3 text-[.9375rem]">
                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-success"><i class="ri-download-2-line"></i></a>
                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-info"><i class="ri-edit-line"></i></a>
                        </div>
                    </td>
                </tr>
                <tr class="border-b  border-defaultborder dark:border-defaultborder/10">
                    <th scope="row"><input class="form-check-input" type="checkbox" id="checkboxNoLabel3" value="" aria-label="..."></th>
                    <td>
                        <div class="flex items-center">
                            <span class="avatar avatar-xs me-2 online avatar-rounded">
                                <img src="http://127.0.0.1:8888/build/assets/images/faces/14.jpg" alt="img">
                            </span>Simon Cowel
                        </div>
                    </td>
                    <td>Service Manager</td>
                    <td><span class="badge bg-success/10 text-success">Manager</span></td>
                    <td>simoncowel234@gmail.com</td>
                    <td>
                        <div class="avatar-list-stacked">
                            <span class="avatar avatar-sm avatar-rounded">
                                <img src="http://127.0.0.1:8888/build/assets/images/faces/6.jpg" alt="img">
                            </span>
                            <span class="avatar avatar-sm avatar-rounded">
                                <img src="http://127.0.0.1:8888/build/assets/images/faces/16.jpg" alt="img">
                            </span>
                            <a class="avatar avatar-sm bg-primary text-white avatar-rounded" href="javascript:void(0);">
                                +10
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-primary w-[45%]" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </td>
                    <td>$7,123.21</td>
                    <td>
                        <div class="hstack flex gap-3 text-[.9375rem]">
                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-success"><i class="ri-download-2-line"></i></a>
                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-info"><i class="ri-edit-line"></i></a>
                        </div>
                    </td>
                </tr>
                <tr class="border-b  border-defaultborder dark:border-defaultborder/10">
                    <th scope="row"><input class="form-check-input" type="checkbox" id="checkboxNoLabel13" value="" aria-label="..."></th>
                    <td>
                        <div class="flex items-center">
                            <span class="avatar avatar-xs me-2 online avatar-rounded">
                                <img src="http://127.0.0.1:8888/build/assets/images/faces/5.jpg" alt="img">
                            </span>Mirinda Hers
                        </div>
                    </td>
                    <td>Recruiter</td>
                    <td><span class="badge bg-danger/10 text-danger">Employee</span></td>
                    <td>mirindahers@gmail.com</td>
                    <td>
                        <div class="avatar-list-stacked">
                            <span class="avatar avatar-sm avatar-rounded">
                                <img src="http://127.0.0.1:8888/build/assets/images/faces/3.jpg" alt="img">
                            </span>
                            <span class="avatar avatar-sm avatar-rounded">
                                <img src="http://127.0.0.1:8888/build/assets/images/faces/10.jpg" alt="img">
                            </span>
                            <span class="avatar avatar-sm avatar-rounded">
                                <img src="http://127.0.0.1:8888/build/assets/images/faces/14.jpg" alt="img">
                            </span>
                            <a class="avatar avatar-sm bg-primary text-white avatar-rounded" href="javascript:void(0);">
                                +6
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-primary w-[21%]" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </td>
                    <td>$2,325.45</td>
                    <td>
                        <div class="hstack flex gap-3 text-[.9375rem]">
                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-success"><i class="ri-download-2-line"></i></a>
                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-info"><i class="ri-edit-line"></i></a>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
{{--@endsection--}}
