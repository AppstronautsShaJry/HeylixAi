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
                    <li class="breadcrumb-item active" aria-current="page">Post Insights</li>
                </ol>
            </div>
            {{--            <div class="flex gap-2 flex-wrap">--}}
            {{--            </div>--}}
        </div>
    </div>

    <div x-data="{ currentPage: window.location.pathname }" class="p-2 py-6 flex items-center font-medium">
        <div
            :class="currentPage === '/calender-social' ? 'bg-[#FF5D9F]  rounded-l-sm text-white ' : '  dark:text-gray-400  rounded-md '"
            class="max-w-max py-3 px-2 group">
            <a href="/calender-social" class="text-sm flex items-center gap-x-3 hover:text-gray-600">
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
                    <th scope="col" class="text-start">Brand</th>
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
                    {{--                    <th scope="row"><input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value=""--}}
                    {{--                                           aria-label="..."></th>--}}
                    <td>
                        <div class="flex items-center">
                            <span class="">
                               LOGO
                            </span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center">
                            <span class="">
                                <svg width="90" height="90" viewBox="0 0 90 90" fill="none"
                                     xmlns="http://www.w3.org/2000/svg" class="w-8 h-8">
                        <path
                            d="M85 45C85 22.9086 67.0914 5 45 5C22.9086 5 5 22.9086 5 45C5 64.9649 19.6273 81.5133 38.75 84.5141V56.5625H28.5938V45H38.75V36.1875C38.75 26.1625 44.7219 20.625 53.8586 20.625C58.2352 20.625 62.8125 21.4063 62.8125 21.4063V31.25H57.7687C52.8 31.25 51.25 34.3336 51.25 37.4969V45H62.3438L60.5703 56.5625H51.25V84.5141C70.3727 81.5133 85 64.9656 85 45Z"
                            fill="#1877F2"/>
                        <path
                            d="M60.5703 56.5625L62.3438 45H51.25V37.4969C51.25 34.3336 52.8 31.25 57.7687 31.25H62.8125V21.4062C62.8125 21.4062 58.2352 20.625 53.8586 20.625C44.7219 20.625 38.75 26.1625 38.75 36.1875V45H28.5938V56.5625H38.75V84.5141C40.7867 84.8336 42.8734 85 45 85C47.1266 85 49.2133 84.8336 51.25 84.5141V56.5625H60.5703Z"
                            fill="white"/>
                    </svg>
                            </span>
                        </div>
                    </td>

                    <td><span class="badge bg-primary/10 text-primary">Scheduled</span></td>
                    <td>{{\Illuminate\Support\Str::words('Lorem ipsum dolor sit amet, consectetur adipisicing elit.',3)}}</td>
                    <td>25/01/2025</td>
                    <td>
                        <div class="avatar-list-stacked inline-flex items-center gap-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="size-4">
                                <path
                                    d="M7.493 18.5c-.425 0-.82-.236-.975-.632A7.48 7.48 0 0 1 6 15.125c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75A.75.75 0 0 1 15 2a2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23h-.777ZM2.331 10.727a11.969 11.969 0 0 0-.831 4.398 12 12 0 0 0 .52 3.507C2.28 19.482 3.105 20 3.994 20H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 0 1-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227Z"/>
                            </svg>

                            <a class="avatar avatar-sm bg-primary text-white avatar-rounded" href="javascript:void(0);">
                                +24
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="avatar-list-stacked inline-flex items-center gap-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="size-4">
                                <path fill-rule="evenodd"
                                      d="M4.848 2.771A49.144 49.144 0 0 1 12 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 0 1-3.476.383.39.39 0 0 0-.297.17l-2.755 4.133a.75.75 0 0 1-1.248 0l-2.755-4.133a.39.39 0 0 0-.297-.17 48.9 48.9 0 0 1-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97ZM6.75 8.25a.75.75 0 0 1 .75-.75h9a.75.75 0 0 1 0 1.5h-9a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H7.5Z"
                                      clip-rule="evenodd"/>
                            </svg>


                            <a class="avatar avatar-sm bg-primary text-white avatar-rounded" href="javascript:void(0);">
                                +16
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="avatar-list-stacked inline-flex items-center gap-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="size-4">
                                <path
                                    d="M3.478 2.404a.75.75 0 0 0-.926.941l2.432 7.905H13.5a.75.75 0 0 1 0 1.5H4.984l-2.432 7.905a.75.75 0 0 0 .926.94 60.519 60.519 0 0 0 18.445-8.986.75.75 0 0 0 0-1.218A60.517 60.517 0 0 0 3.478 2.404Z"/>
                            </svg>
                            <a class="avatar avatar-sm bg-primary text-white avatar-rounded" href="javascript:void(0);">
                                +10
                            </a>
                        </div>
                    </td>
                </tr>
                <tr class="border-b  border-defaultborder dark:border-defaultborder/10">
                    {{--                    <th scope="row"><input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value=""--}}
                    {{--                                           aria-label="..."></th>--}}

                    <td>
                        <div class="flex items-center">
                            <span class="">
                               LOGO
                            </span>
                        </div>
                    </td>


                    <td>
                        <div class="flex items-center">
                            <span class="">
                                <svg width="90" height="90" viewBox="0 0 90 90" fill="none"
                                     xmlns="http://www.w3.org/2000/svg" class="w-8 h-8">
                        <path
                            d="M85 45C85 22.9086 67.0914 5 45 5C22.9086 5 5 22.9086 5 45C5 64.9649 19.6273 81.5133 38.75 84.5141V56.5625H28.5938V45H38.75V36.1875C38.75 26.1625 44.7219 20.625 53.8586 20.625C58.2352 20.625 62.8125 21.4063 62.8125 21.4063V31.25H57.7687C52.8 31.25 51.25 34.3336 51.25 37.4969V45H62.3438L60.5703 56.5625H51.25V84.5141C70.3727 81.5133 85 64.9656 85 45Z"
                            fill="#1877F2"/>
                        <path
                            d="M60.5703 56.5625L62.3438 45H51.25V37.4969C51.25 34.3336 52.8 31.25 57.7687 31.25H62.8125V21.4062C62.8125 21.4062 58.2352 20.625 53.8586 20.625C44.7219 20.625 38.75 26.1625 38.75 36.1875V45H28.5938V56.5625H38.75V84.5141C40.7867 84.8336 42.8734 85 45 85C47.1266 85 49.2133 84.8336 51.25 84.5141V56.5625H60.5703Z"
                            fill="white"/>
                    </svg>
                            </span>
                        </div>
                    </td>
                    <td><span class="badge bg-primary/10 text-primary">Scheduled</span></td>
                    <td>{{\Illuminate\Support\Str::words('Lorem ipsum dolor sit amet, consectetur adipisicing elit.',3)}}</td>
                    <td>25/01/2025</td>
                    <td>
                        <div class="avatar-list-stacked inline-flex items-center gap-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="size-4">
                                <path
                                    d="M7.493 18.5c-.425 0-.82-.236-.975-.632A7.48 7.48 0 0 1 6 15.125c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75A.75.75 0 0 1 15 2a2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23h-.777ZM2.331 10.727a11.969 11.969 0 0 0-.831 4.398 12 12 0 0 0 .52 3.507C2.28 19.482 3.105 20 3.994 20H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 0 1-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227Z"/>
                            </svg>

                            <a class="avatar avatar-sm bg-primary text-white avatar-rounded" href="javascript:void(0);">
                                +24
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="avatar-list-stacked inline-flex items-center gap-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="size-4">
                                <path fill-rule="evenodd"
                                      d="M4.848 2.771A49.144 49.144 0 0 1 12 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 0 1-3.476.383.39.39 0 0 0-.297.17l-2.755 4.133a.75.75 0 0 1-1.248 0l-2.755-4.133a.39.39 0 0 0-.297-.17 48.9 48.9 0 0 1-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97ZM6.75 8.25a.75.75 0 0 1 .75-.75h9a.75.75 0 0 1 0 1.5h-9a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H7.5Z"
                                      clip-rule="evenodd"/>
                            </svg>


                            <a class="avatar avatar-sm bg-primary text-white avatar-rounded" href="javascript:void(0);">
                                +16
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="avatar-list-stacked inline-flex items-center gap-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="size-4">
                                <path
                                    d="M3.478 2.404a.75.75 0 0 0-.926.941l2.432 7.905H13.5a.75.75 0 0 1 0 1.5H4.984l-2.432 7.905a.75.75 0 0 0 .926.94 60.519 60.519 0 0 0 18.445-8.986.75.75 0 0 0 0-1.218A60.517 60.517 0 0 0 3.478 2.404Z"/>
                            </svg>
                            <a class="avatar avatar-sm bg-primary text-white avatar-rounded" href="javascript:void(0);">
                                +10
                            </a>
                        </div>
                    </td>
                </tr>
                <tr class="border-b  border-defaultborder dark:border-defaultborder/10">
                    {{--                    <th scope="row"><input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value=""--}}
                    {{--                                           aria-label="..."></th>--}}
                    <td>
                        <div class="flex items-center">
                            <span class="">
                               LOGO
                            </span>
                        </div>
                    </td>


                    <td>
                        <div class="flex items-center">
                            <span class="">
                                <svg width="90" height="90" viewBox="0 0 90 90" fill="none"
                                     xmlns="http://www.w3.org/2000/svg" class="w-8 h-8">
                        <path
                            d="M85 45C85 22.9086 67.0914 5 45 5C22.9086 5 5 22.9086 5 45C5 64.9649 19.6273 81.5133 38.75 84.5141V56.5625H28.5938V45H38.75V36.1875C38.75 26.1625 44.7219 20.625 53.8586 20.625C58.2352 20.625 62.8125 21.4063 62.8125 21.4063V31.25H57.7687C52.8 31.25 51.25 34.3336 51.25 37.4969V45H62.3438L60.5703 56.5625H51.25V84.5141C70.3727 81.5133 85 64.9656 85 45Z"
                            fill="#1877F2"/>
                        <path
                            d="M60.5703 56.5625L62.3438 45H51.25V37.4969C51.25 34.3336 52.8 31.25 57.7687 31.25H62.8125V21.4062C62.8125 21.4062 58.2352 20.625 53.8586 20.625C44.7219 20.625 38.75 26.1625 38.75 36.1875V45H28.5938V56.5625H38.75V84.5141C40.7867 84.8336 42.8734 85 45 85C47.1266 85 49.2133 84.8336 51.25 84.5141V56.5625H60.5703Z"
                            fill="white"/>
                    </svg>
                            </span>
                        </div>
                    </td>
                    <td><span class="badge bg-primary/10 text-primary">Scheduled</span></td>
                    <td>{{\Illuminate\Support\Str::words('Lorem ipsum dolor sit amet, consectetur adipisicing elit.',3)}}</td>
                    <td>25/01/2025</td>
                    <td>
                        <div class="avatar-list-stacked inline-flex items-center gap-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="size-4">
                                <path
                                    d="M7.493 18.5c-.425 0-.82-.236-.975-.632A7.48 7.48 0 0 1 6 15.125c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75A.75.75 0 0 1 15 2a2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23h-.777ZM2.331 10.727a11.969 11.969 0 0 0-.831 4.398 12 12 0 0 0 .52 3.507C2.28 19.482 3.105 20 3.994 20H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 0 1-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227Z"/>
                            </svg>

                            <a class="avatar avatar-sm bg-primary text-white avatar-rounded" href="javascript:void(0);">
                                +24
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="avatar-list-stacked inline-flex items-center gap-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="size-4">
                                <path fill-rule="evenodd"
                                      d="M4.848 2.771A49.144 49.144 0 0 1 12 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 0 1-3.476.383.39.39 0 0 0-.297.17l-2.755 4.133a.75.75 0 0 1-1.248 0l-2.755-4.133a.39.39 0 0 0-.297-.17 48.9 48.9 0 0 1-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97ZM6.75 8.25a.75.75 0 0 1 .75-.75h9a.75.75 0 0 1 0 1.5h-9a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H7.5Z"
                                      clip-rule="evenodd"/>
                            </svg>


                            <a class="avatar avatar-sm bg-primary text-white avatar-rounded" href="javascript:void(0);">
                                +16
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="avatar-list-stacked inline-flex items-center gap-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="size-4">
                                <path
                                    d="M3.478 2.404a.75.75 0 0 0-.926.941l2.432 7.905H13.5a.75.75 0 0 1 0 1.5H4.984l-2.432 7.905a.75.75 0 0 0 .926.94 60.519 60.519 0 0 0 18.445-8.986.75.75 0 0 0 0-1.218A60.517 60.517 0 0 0 3.478 2.404Z"/>
                            </svg>
                            <a class="avatar avatar-sm bg-primary text-white avatar-rounded" href="javascript:void(0);">
                                +10
                            </a>
                        </div>
                    </td>
                </tr>
                <tr class="border-b  border-defaultborder dark:border-defaultborder/10">
                    {{--                    <th scope="row"><input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value=""--}}
                    {{--                                           aria-label="..."></th>--}}
                    <td>
                        <div class="flex items-center">
                            <span class="">
                               LOGO
                            </span>
                        </div>
                    </td>

                    <td>
                        <div class="flex items-center">
                            <span class="">
                                <svg width="90" height="90" viewBox="0 0 90 90" fill="none"
                                     xmlns="http://www.w3.org/2000/svg" class="w-8 h-8">
                        <path
                            d="M85 45C85 22.9086 67.0914 5 45 5C22.9086 5 5 22.9086 5 45C5 64.9649 19.6273 81.5133 38.75 84.5141V56.5625H28.5938V45H38.75V36.1875C38.75 26.1625 44.7219 20.625 53.8586 20.625C58.2352 20.625 62.8125 21.4063 62.8125 21.4063V31.25H57.7687C52.8 31.25 51.25 34.3336 51.25 37.4969V45H62.3438L60.5703 56.5625H51.25V84.5141C70.3727 81.5133 85 64.9656 85 45Z"
                            fill="#1877F2"/>
                        <path
                            d="M60.5703 56.5625L62.3438 45H51.25V37.4969C51.25 34.3336 52.8 31.25 57.7687 31.25H62.8125V21.4062C62.8125 21.4062 58.2352 20.625 53.8586 20.625C44.7219 20.625 38.75 26.1625 38.75 36.1875V45H28.5938V56.5625H38.75V84.5141C40.7867 84.8336 42.8734 85 45 85C47.1266 85 49.2133 84.8336 51.25 84.5141V56.5625H60.5703Z"
                            fill="white"/>
                    </svg>
                            </span>
                        </div>
                    </td>
                    <td><span class="badge bg-primary/10 text-primary">Scheduled</span></td>
                    <td>{{\Illuminate\Support\Str::words('Lorem ipsum dolor sit amet, consectetur adipisicing elit.',3)}}</td>
                    <td>25/01/2025</td>
                    <td>
                        <div class="avatar-list-stacked inline-flex items-center gap-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="size-4">
                                <path
                                    d="M7.493 18.5c-.425 0-.82-.236-.975-.632A7.48 7.48 0 0 1 6 15.125c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75A.75.75 0 0 1 15 2a2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23h-.777ZM2.331 10.727a11.969 11.969 0 0 0-.831 4.398 12 12 0 0 0 .52 3.507C2.28 19.482 3.105 20 3.994 20H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 0 1-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227Z"/>
                            </svg>
                            <a class="avatar avatar-sm bg-primary text-white avatar-rounded" href="javascript:void(0);">
                                +24
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="avatar-list-stacked inline-flex items-center gap-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="size-4">
                                <path fill-rule="evenodd"
                                      d="M4.848 2.771A49.144 49.144 0 0 1 12 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 0 1-3.476.383.39.39 0 0 0-.297.17l-2.755 4.133a.75.75 0 0 1-1.248 0l-2.755-4.133a.39.39 0 0 0-.297-.17 48.9 48.9 0 0 1-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97ZM6.75 8.25a.75.75 0 0 1 .75-.75h9a.75.75 0 0 1 0 1.5h-9a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H7.5Z"
                                      clip-rule="evenodd"/>
                            </svg>

                            <a class="avatar avatar-sm bg-primary text-white avatar-rounded" href="javascript:void(0);">
                                +16
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="avatar-list-stacked inline-flex items-center gap-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="size-4">
                                <path
                                    d="M3.478 2.404a.75.75 0 0 0-.926.941l2.432 7.905H13.5a.75.75 0 0 1 0 1.5H4.984l-2.432 7.905a.75.75 0 0 0 .926.94 60.519 60.519 0 0 0 18.445-8.986.75.75 0 0 0 0-1.218A60.517 60.517 0 0 0 3.478 2.404Z"/>
                            </svg>
                            <a class="avatar avatar-sm bg-primary text-white avatar-rounded" href="javascript:void(0);">
                                +10
                            </a>
                        </div>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

</div>
{{--@endsection--}}
