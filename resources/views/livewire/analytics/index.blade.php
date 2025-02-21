<link rel="stylesheet" href="{{asset('build/assets/libs/apexcharts/apexcharts.css')}}">

<div class="main-content app-content">
    <div class="container-fluid">

        <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <nav>
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">HeyLix</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Analytics</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="box w-full">
        <div class="w-full flex justify-between p-5">
            <div>
                <div class="text-xl font-semibold ">Analytics</div>
                <span class="text-sm lead-loose">Review performance results and more</span>
            </div>

            <div class="flex flex-row gap-1">
                <div class="">
                    <label for="hs-hidden-select" class="sr-only">Label</label>
                    <select id="hs-hidden-select" class=" rounded-sm h-10 flex items-center my-3">

                        <option selected x-html="Calendar">Brand</option>
                        <option>Twitter</option>
                        <option>Facebook</option>
                        <option>Instagram</option>
                        <option>Linkedin</option>
                    </select>
                </div>

                <div x-data="theme" :class="{ 'dark': darkMode }" class="flex items-center ">

                    <div x-data="dropdown" class="relative w-48">  <!-- Set fixed width -->
                        <!-- Dropdown Button -->
                        <button @click="open = !open" @keydown.escape="open = false"
                                class="w-48 h-10 px-4 py-2 bg-transparent border border-gray-800 text-white rounded-md shadow-md flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-400">
                            <span class="truncate inline-flex items-center gap-2">
                                <span x-html="selectedIcon"></span>
                                <span x-text="selectedText"></span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div x-cloak x-show="open" @click.outside="open = false"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 scale-90"
                             x-transition:enter-end="opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 scale-100"
                             x-transition:leave-end="opacity-0 scale-90"
                             class="absolute w-48 mt-2 bg-white z-30 dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-lg shadow-md">

                            <!-- Dropdown Options -->
                            <a href="{{route('instagram.analytics')}}" @click="select('Facebook', Facebook)"
                                 class="px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 cursor-pointer flex items-center gap-2">
                                <span x-html="Facebook"></span><span>Facebook</span>

                            </a>
                            <div @click="select('Twitter', Twitter)"
                                 class="px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 cursor-pointer flex items-center gap-2">
                                <span x-html="Twitter"></span> <span>Twitter</span>
                            </div>
                            <a href="{{route('instagram.analytics')}}"  @click="select('Instagram', Instagram)"
                                 class="px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 cursor-pointer flex items-center gap-2">
                                <span x-html="Instagram"></span> <span>Instagram</span>
                            </a>
                            <a href="{{route('linkedin.analytics')}}"  @click="select('Linkedin', Linkedin)"
                                 class="px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 cursor-pointer flex items-center gap-2">
                                <span x-html="Linkedin"></span> <span>Linkedin</span>
                            </a>
                            <a href="{{route('youtube.analytics')}}" @click="select('Youtube', Youtube)"
                                 class="px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 cursor-pointer flex items-center gap-2">
                                <span x-html="Youtube"></span> <span>Youtube</span>
                            </a>
                            <a href="{{route('meta.analytics')}}" @click="select('MetaAd', MetaAd)"
                                 class="px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 cursor-pointer flex items-center gap-2">
                                <span x-html="MetaAd"></span> <span>MetaAd</span>
                            </a>
                            <a href="{{route('meta.analytics')}}" @click="select('GoogleAd', GoogleAd)"
                                 class="px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 cursor-pointer flex items-center gap-2">
                                <span x-html="GoogleAd"></span> <span>GoogleAd</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="">
                    <label for="hs-hidden-select" class="sr-only">Label</label>
                    <select id="hs-hidden-select" class="rounded-sm h-10 flex items-center my-3">

                        <option selected x-html="Calendar">This week</option>
                        <option>Yesterday</option>
                        <option>This week</option>
                        <option>Last week</option>
                        <option>Last month</option>
                        <option>Last year</option>
                    </select>
                </div>
            </div>

        </div>
    </div>

    <div class="flex flex-row w-full gap-4">
        <div class="box w-full">
            <div class="box-header">
                <div class="box-title">Real Time Chart</div>
            </div>
            <div class="box-body">
                <div id="dynamic-chart"></div>
            </div>
        </div>

        <div class="box w-full">
            <div class="box-header">
                <div class="box-title">Zoomable Time Series</div>
            </div>
            <div class="box-body">
                <div id="zoom-chart"></div>
            </div>
        </div>

    </div>

    @section('scripts')

        <script>
            document.addEventListener("alpine:init", () => {
                Alpine.data("tableData", () => ({
                    columns: [
                        {name: "Post Name", visible: true},
                        {name: "Type", visible: true},
                        {name: "Date", visible: true},
                        {name: "Content", visible: true},
                        {name: "Average Watch Time", visible: true},
                        {name: "Impression", visible: true},
                        {name: "Reach", visible: true},
                        {name: "Reactions", visible: true},
                        {name: "Comments", visible: true},
                        {name: "Shares", visible: true},
                        {name: "Link Click", visible: true}
                    ],
                    rows: [
                        {
                            postName: "Blog Post",
                            type: "Feed",
                            date: "25/02/2025",
                            content: "Lorem5",
                            watchTime: "6 hours",
                            impression: "Lorem5",
                            reach: "20%",
                            reactions: "+24",
                            comments: "+16",
                            shares: "+10",
                            linkClick: "Lorem3"
                        },
                        {
                            postName: "News Article",
                            type: "News",
                            date: "26/02/2025",
                            content: "Lorem6",
                            watchTime: "7 hours",
                            impression: "Lorem6",
                            reach: "30%",
                            reactions: "+30",
                            comments: "+12",
                            shares: "+8",
                            linkClick: "Lorem4"
                        },
                        // Add more rows as needed
                    ]
                }));
            });

        </script>

        <script>
            document.addEventListener("alpine:init", () => {
                Alpine.data("dropdown", () => ({
                    open: false,
                    selectedText: "Select an option",
                    selectedIcon: "",

                    Facebook: `<svg class="w-5 h-5" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M85 45C85 22.9086 67.0914 5 45 5C22.9086 5 5 22.9086 5 45C5 64.9649 19.6273 81.5133 38.75 84.5141V56.5625H28.5938V45H38.75V36.1875C38.75 26.1625 44.7219 20.625 53.8586 20.625C58.2352 20.625 62.8125 21.4063 62.8125 21.4063V31.25H57.7687C52.8 31.25 51.25 34.3336 51.25 37.4969V45H62.3438L60.5703 56.5625H51.25V84.5141C70.3727 81.5133 85 64.9656 85 45Z" fill="#1877F2"/>
<path d="M60.5703 56.5625L62.3438 45H51.25V37.4969C51.25 34.3336 52.8 31.25 57.7687 31.25H62.8125V21.4062C62.8125 21.4062 58.2352 20.625 53.8586 20.625C44.7219 20.625 38.75 26.1625 38.75 36.1875V45H28.5938V56.5625H38.75V84.5141C40.7867 84.8336 42.8734 85 45 85C47.1266 85 49.2133 84.8336 51.25 84.5141V56.5625H60.5703Z" fill="white"/>
</svg>
`,
                    Twitter: `<svg class="w-5 h-5" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="5" y="5" width="80" height="80" rx="8" fill="#000008"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M54.3053 50.4599L47.8682 59.2922L56.7005 71.2683H69.7244L54.3053 50.4599ZM54.3053 42.0767L69.7244 21.418H56.7005L47.8682 33.394L54.3053 42.0767ZM32.7485 21.418H19.7246L38.1377 46.418L19.7246 71.418H32.7485L51.1616 46.418L32.7485 21.418Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M54.3053 50.4599L47.8682 59.2922L56.7005 71.2683H69.7244L54.3053 50.4599ZM54.3053 42.0767L69.7244 21.418H56.7005L47.8682 33.394L54.3053 42.0767ZM32.7485 21.418H19.7246L38.1377 46.418L19.7246 71.418H32.7485L51.1616 46.418L32.7485 21.418Z" fill="white"/>
</svg>
`,
                    Instagram: `<svg class="w-5 h-5" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
<mask id="mask0_799_5500" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="4" y="4" width="81" height="81">
<path d="M28.2542 5.09731C23.9981 5.29819 21.0912 5.9799 18.551 6.97524C15.9214 8.00037 13.6923 9.37419 11.4749 11.6007C9.2548 13.8286 7.89141 16.0616 6.87408 18.6938C5.8891 21.2405 5.22165 24.1488 5.0337 28.4075C4.8471 32.674 4.80431 34.0348 4.82511 44.8968C4.84583 55.7574 4.89377 57.1208 5.09722 61.3886C5.30067 65.6435 5.97984 68.5491 6.97517 71.0906C8.0016 73.7202 9.37401 75.9481 11.6018 78.1669C13.8284 80.3857 16.0627 81.7478 18.6961 82.7665C21.2402 83.7502 24.1497 84.4202 28.4071 84.6068C32.6736 84.7947 34.0356 84.8362 44.8949 84.8155C55.7592 84.7947 57.1214 84.7468 61.3878 84.5446C65.6439 84.3411 68.5482 83.6594 71.091 82.6667C73.7205 81.6376 75.9496 80.2677 78.1671 78.0399C80.3846 75.8133 81.7479 73.579 82.7654 70.9455C83.7503 68.4014 84.4203 65.4918 84.6057 61.237C84.7923 56.9679 84.8364 55.6045 84.8156 44.7438C84.7949 33.8819 84.7457 32.5211 84.5435 28.2559C84.3413 23.9972 83.6596 21.0928 82.6655 18.55C81.6378 15.9204 80.2667 13.6938 78.0401 11.4737C75.8136 9.25625 73.5793 7.89023 70.9458 6.87546C68.4005 5.89047 65.4922 5.21912 61.2348 5.03509C56.9684 4.84587 55.6063 4.80443 44.7432 4.82515C33.8827 4.84588 32.5207 4.89255 28.2542 5.09731ZM28.7208 77.4074C24.8211 77.2376 22.7034 76.5896 21.2921 76.0466C19.4232 75.3234 18.0897 74.4564 16.6861 73.0632C15.2851 71.6647 14.4155 70.335 13.6858 68.4701C13.1376 67.0587 12.478 64.9436 12.2952 61.0439C12.0969 56.8279 12.0516 55.563 12.0321 44.8825C12.0114 34.2046 12.0502 32.9397 12.2343 28.7199C12.4015 24.8227 13.0534 22.7024 13.5951 21.2924C14.3182 19.4209 15.1827 18.0899 16.5785 16.6863C17.9769 15.2827 19.3066 14.4157 21.1728 13.686C22.5829 13.1352 24.698 12.4807 28.5963 12.2954C32.8148 12.0958 34.0784 12.053 44.7562 12.0323C55.4365 12.0115 56.7014 12.0492 60.9212 12.2345C64.8183 12.4043 66.9385 13.0497 68.3473 13.5953C70.2174 14.3185 71.551 15.1803 72.9533 16.5787C74.3556 17.9772 75.2252 19.3043 75.9548 21.1744C76.5056 22.5806 77.1601 24.6983 77.3442 28.5954C77.545 32.814 77.5904 34.0789 77.6098 44.7568C77.6305 55.4373 77.5917 56.7022 77.4064 60.9194C77.2366 64.8191 76.5899 66.9382 76.0456 68.3508C75.3224 70.2184 74.4579 71.552 73.0608 72.9556C71.6638 74.354 70.3341 75.2262 68.4665 75.9559C67.0591 76.5053 64.9414 77.1611 61.0456 77.3465C56.8272 77.5448 55.5635 77.5901 44.8819 77.6096C34.2041 77.6303 32.9405 77.5901 28.7208 77.4074ZM61.3295 23.4386C61.3346 26.0877 63.4886 28.2326 66.1376 28.2274C68.7879 28.2222 70.9328 26.0695 70.929 23.4204C70.9237 20.7714 68.7698 18.6252 66.1195 18.6304C63.4692 18.6355 61.3243 20.7895 61.3295 23.4386ZM24.282 44.8592C24.304 56.2032 33.5173 65.379 44.8586 65.357C56.2012 65.335 65.382 56.1242 65.3601 44.7801C65.338 33.44 56.1234 24.259 44.7795 24.281C33.4382 24.303 24.2599 33.5177 24.282 44.8592ZM31.4864 44.8449C31.4734 37.4822 37.4325 31.5011 44.7938 31.4882C52.1564 31.4739 58.1387 37.4304 58.1529 44.7944C58.1673 52.1584 52.2082 58.1382 44.8443 58.1525C37.483 58.1667 31.5007 52.2089 31.4864 44.8449Z" fill="#000008"/>
</mask>
<g mask="url(#mask0_799_5500)">
<rect x="1.46875" y="1.47168" width="87.1" height="87.1" fill="url(#paint0_radial_799_5500)"/>
<g filter="url(#filter0_f_799_5500)">
<ellipse cx="17.769" cy="-1.84334" rx="50.25" ry="35.175" transform="rotate(-14.9317 17.769 -1.84334)" fill="#7334FF"/>
</g>
<g filter="url(#filter1_f_799_5500)">
<circle cx="85.7786" cy="2.02962" r="47.4583" fill="#B202F5"/>
</g>
<g filter="url(#filter2_f_799_5500)">
<circle cx="18.218" cy="79.6379" r="26.8" fill="#FFB401"/>
</g>
</g>
<defs>
<filter id="filter0_f_799_5500" x="-68.4828" y="-75.0736" width="172.501" height="146.46" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="18.425" result="effect1_foregroundBlur_799_5500"/>
</filter>
<filter id="filter1_f_799_5500" x="-6.34636" y="-90.0954" width="184.251" height="184.25" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="22.3333" result="effect1_foregroundBlur_799_5500"/>
</filter>
<filter id="filter2_f_799_5500" x="-44.3154" y="17.1046" width="125.068" height="125.066" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="17.8667" result="effect1_foregroundBlur_799_5500"/>
</filter>
<radialGradient id="paint0_radial_799_5500" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(36.0854 84.6633) rotate(-61.8868) scale(46.2103)">
<stop stop-color="#FFD502"/>
<stop offset="0.869374" stop-color="#FF1154"/>
</radialGradient>
</defs>
</svg>
`,
                    Linkedin: `<svg class="w-5 h-5" viewBox="0 0 99 90" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M92.7853 74.1664C91.3532 74.1802 89.9849 74.7605 88.9796 75.7804C87.9742 76.8004 87.4137 78.177 87.4205 79.6091C87.4274 81.0412 88.0012 82.4124 89.0163 83.4226C90.0314 84.4329 91.4053 85 92.8374 85C94.2696 85 95.6434 84.4329 96.6585 83.4226C97.6736 82.4124 98.2474 81.0412 98.2543 79.6091C98.2612 78.177 97.7006 76.8004 96.6953 75.7804C95.69 74.7605 94.3216 74.1802 92.8895 74.1664H92.7853ZM92.7853 84.3798C91.846 84.3955 90.9231 84.1322 90.1334 83.6234C89.3437 83.1145 88.7227 82.3829 88.3488 81.5211C87.9748 80.6592 87.8649 79.7059 88.0328 78.7816C88.2007 77.8573 88.639 77.0035 89.2921 76.3282C89.9452 75.653 90.784 75.1866 91.7022 74.988C92.6204 74.7894 93.5769 74.8675 94.4507 75.2125C95.3245 75.5575 96.0763 76.1539 96.6112 76.9262C97.146 77.6985 97.4399 78.6121 97.4555 79.5514V79.6311C97.4818 80.8634 97.0177 82.0556 96.1651 82.9456C95.3125 83.8357 94.1414 84.3507 92.9091 84.3774H92.7865M71.9918 72.6865H60.2212V54.2532C60.2212 49.8576 60.1427 44.1991 54.0993 44.1991C47.9687 44.1991 47.0307 48.9883 47.0307 53.9332V72.6852H35.2601V34.7789H46.5599V39.9592H46.7181C47.8489 38.0257 49.483 36.4351 51.4463 35.3568C53.4097 34.2786 55.6287 33.753 57.8671 33.8361C69.7971 33.8361 71.9967 41.6831 71.9967 51.8917L71.9918 72.6865ZM21.979 29.5974C20.628 29.5977 19.3073 29.1973 18.1839 28.4469C17.0604 27.6966 16.1848 26.6299 15.6675 25.3819C15.1503 24.1338 15.0148 22.7605 15.2781 21.4354C15.5415 20.1103 16.1918 18.8931 17.1469 17.9377C18.102 16.9822 19.319 16.3314 20.644 16.0676C21.9689 15.8038 23.3424 15.9389 24.5906 16.4556C25.8388 16.9724 26.9058 17.8477 27.6565 18.9709C28.4073 20.094 28.8081 21.4146 28.8084 22.7656C28.8085 23.6626 28.632 24.5508 28.2889 25.3796C27.9458 26.2084 27.4428 26.9615 26.8086 27.5959C26.1744 28.2303 25.4215 28.7336 24.5929 29.077C23.7642 29.4204 22.876 29.5973 21.979 29.5974ZM27.8643 72.6865H16.0814V34.7789H27.8643V72.6865ZM77.8599 5.00541H10.1667C8.63024 4.98807 7.14977 5.58143 6.05058 6.65509C4.9514 7.72876 4.32344 9.1949 4.30469 10.7313V78.7054C4.3228 80.2426 4.95036 81.7097 6.04951 82.7845C7.14866 83.8593 8.62948 84.4538 10.1667 84.4375H77.8599C79.4002 84.4568 80.8852 83.864 81.9886 82.7892C83.0921 81.7145 83.7239 80.2457 83.7452 78.7054V10.7264C83.7233 9.18694 83.0911 7.71915 81.9875 6.6455C80.884 5.57186 79.3994 4.9802 77.8599 5.00051M93.6448 79.9266C93.8464 79.9286 94.0462 79.8892 94.2319 79.8108C94.4176 79.7324 94.5853 79.6166 94.7244 79.4707C94.8635 79.3248 94.9711 79.1519 95.0406 78.9627C95.1101 78.7734 95.14 78.5719 95.1284 78.3707C95.1284 77.2672 94.4626 76.74 93.0967 76.74H90.8897V82.5174H91.7198V79.999H92.7399L92.7632 80.0296L94.3462 82.5174H95.2339L93.5308 79.9426L93.6448 79.9266ZM92.6848 79.3479H91.7223V77.3947H92.9422C93.5725 77.3947 94.2909 77.4977 94.2909 78.3229C94.2909 79.2719 93.5639 79.3479 92.6799 79.3479" fill="#2867B2"/>
</svg>
`,
                    Calendar: `<svg class="w-5 h-5" viewBox="0 0 90 90" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M32.5853 56.6104C31.0117 55.5472 29.9221 53.9948 29.3273 51.942L32.9801 50.4368C33.3117 51.7 33.8905 52.6788 34.7169 53.3736C35.5381 54.0684 36.5381 54.4104 37.7065 54.4104C38.9013 54.4104 39.9277 54.0472 40.7854 53.3208C41.643 52.5944 42.075 51.668 42.075 50.5472C42.075 49.4 41.6222 48.4628 40.7169 47.7368C39.8117 47.0108 38.6749 46.6472 37.3169 46.6472H35.2065V43.0316H37.1009C38.2693 43.0316 39.2537 42.716 40.0537 42.0844C40.8538 41.4528 41.2538 40.5896 41.2538 39.4896C41.2538 38.5108 40.8958 37.7316 40.1801 37.1476C39.4645 36.5636 38.5589 36.2688 37.4589 36.2688C36.3853 36.2688 35.5325 36.5532 34.9009 37.1268C34.2693 37.7004 33.8113 38.4056 33.5221 39.2372L29.9065 37.732C30.3853 36.374 31.2645 35.174 32.5537 34.1372C33.8433 33.1004 35.4905 32.5792 37.4905 32.5792C38.9693 32.5792 40.3009 32.8636 41.4802 33.4372C42.659 34.0108 43.5854 34.8056 44.2538 35.816C44.9222 36.8316 45.2538 37.9688 45.2538 39.2316C45.2538 40.5212 44.9434 41.6104 44.3222 42.5052C43.701 43.4 42.9378 44.084 42.0326 44.5632V44.7788C43.2274 45.2788 44.201 46.042 44.9694 47.0684C45.7326 48.0948 46.1166 49.3212 46.1166 50.7528C46.1166 52.1844 45.7534 53.4632 45.027 54.5844C44.3006 55.7056 43.2954 56.5896 42.0218 57.2316C40.743 57.8736 39.3061 58.2 37.7113 58.2C35.8641 58.2052 34.1589 57.6736 32.5853 56.6104Z"
                                    fill="#4285F4"/>
                                <path d="M54.9988 38.4848L51.0092 41.3848L49.004 38.3428L56.1988 33.1532H58.9569V57.632H54.9988V38.4848Z"
                                      fill="#4285F4"/>
                                <path d="M66.0528 85.0001L85 66.0529L75.5264 61.8425L66.0528 66.0529L61.8423 75.5265L66.0528 85.0001Z" fill="#EA4335"/>
                                <path d="M19.7375 75.5263L23.948 84.9998L66.0528 85.0001V66.0529L23.948 66.0527L19.7375 75.5263Z" fill="#34A853"/>
                                <path
                                    d="M11.3157 5C7.82651 5 5.00011 7.82639 5.00011 11.3156V66.0523L14.4737 70.2627L23.948 66.0527L23.9474 23.9472H66.0527L70.2631 14.4736L66.0531 5H11.3157Z"
                                    fill="#4285F4"/>
                                <path d="M5.00011 66.0523L5 78.684C5 82.1736 7.82641 84.9996 11.3156 84.9996L23.948 84.9998V66.0527L5.00011 66.0523Z"
                                      fill="#188038"/>
                                <path d="M66.0527 23.9472L66.0527 66.0519H84.9999V23.9468L75.5263 19.7364L66.0527 23.9472Z" fill="#FBBC05"/>
                                <path
                                    d="M84.9999 23.9468V11.3157C84.9999 7.82608 82.1735 5.00009 78.6843 5.00009L66.0531 5L66.0527 23.9472L84.9999 23.9468Z"
                                    fill="#1967D2"/>
                                </svg>
                                `,
                    Youtube: `<svg class="w-5 h-5" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M83.3282 25.8014C82.4082 22.3373 79.6977 19.6086 76.2555 18.6827C70.0168 17 45 17 45 17C45 17 19.9832 17 13.7441 18.6827C10.3023 19.6086 7.59136 22.3373 6.67136 25.8014C5 32.0809 5 45.1818 5 45.1818C5 45.1818 5 58.2832 6.67136 64.5627C7.59136 68.0268 10.3023 70.755 13.7441 71.6813C19.9832 73.3636 45 73.3636 45 73.3636C45 73.3636 70.0168 73.3636 76.2555 71.6813C79.6977 70.755 82.4082 68.0268 83.3282 64.5627C85 58.2832 85 45.1818 85 45.1818C85 45.1818 85 32.0809 83.3282 25.8014Z" fill="#ED1F24"/>
<path d="M36.8125 57.0766L57.7216 45.1821L36.8125 33.2871V57.0766Z" fill="white"/>
</svg>
`,
                    MetaAd: `<svg class="w-5 h-5" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_887_4007)">
<mask id="mask0_887_4007" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="4" y="4" width="81" height="81">
<path fill-rule="evenodd" clip-rule="evenodd" d="M44.918 4.72705C66.9946 4.72705 84.918 22.6504 84.918 44.7269C84.918 66.8035 66.9946 84.7268 44.918 84.7268C22.8414 84.7268 4.91797 66.8035 4.91797 44.7269C4.91797 22.6504 22.8414 4.72705 44.918 4.72705ZM44.918 36.2026L33.0916 49.2722H56.7444L44.918 36.2026Z" fill="url(#paint0_linear_887_4007)"/>
</mask>
<g mask="url(#mask0_887_4007)">
<path fill-rule="evenodd" clip-rule="evenodd" d="M44.918 4.72705C66.9946 4.72705 84.918 22.6504 84.918 44.7269C84.918 66.8035 66.9946 84.7268 44.918 84.7268C22.8414 84.7268 4.91797 66.8035 4.91797 44.7269C4.91797 22.6504 22.8414 4.72705 44.918 4.72705ZM44.918 36.2026L33.0916 49.2722H56.7444L44.918 36.2026Z" fill="url(#paint1_linear_887_4007)"/>
<path d="M86.9232 -47.2184L152.467 25.8672L100.188 72.7508L34.6443 -0.334802L86.9232 -47.2184Z" fill="url(#paint2_linear_887_4007)"/>
<path d="M21.3757 140.392L-44.168 67.3062L8.11089 20.4225L73.6545 93.5081L21.3757 140.392Z" fill="url(#paint3_linear_887_4007)"/>
<path d="M33.1315 128.367L-32.4121 55.2817L19.8668 8.3981L85.4104 81.4837L33.1315 128.367Z" fill="url(#paint4_linear_887_4007)"/>
<path d="M91.751 149.119L-6.41992 149.119L-6.41992 78.8965L91.751 78.8965L91.751 149.119Z" fill="url(#paint5_linear_887_4007)"/>
<path d="M78.8204 147.798L145.137 75.4126L93.3588 27.9762L27.0425 100.362L78.8204 147.798Z" fill="url(#paint6_linear_887_4007)"/>
<path d="M10.6894 -54.6923L-55.627 17.6934L-3.84908 65.1298L62.4673 -7.25591L10.6894 -54.6923Z" fill="url(#paint7_linear_887_4007)"/>
<path d="M22.4374 -42.9453L-43.8789 29.4404L7.89897 76.8768L74.2153 4.49116L22.4374 -42.9453Z" fill="url(#paint8_linear_887_4007)"/>
<path d="M86.6996 49.2764H3.78711V64.8542H86.6996V49.2764Z" fill="url(#paint9_linear_887_4007)"/>
</g>
</g>
<defs>
<linearGradient id="paint0_linear_887_4007" x1="20.4947" y1="28.0803" x2="71.3873" y2="72.6696" gradientUnits="userSpaceOnUse">
<stop stop-color="#01BB99"/>
<stop offset="1" stop-color="#206ED4"/>
</linearGradient>
<linearGradient id="paint1_linear_887_4007" x1="20.4947" y1="28.0803" x2="71.3873" y2="72.6696" gradientUnits="userSpaceOnUse">
<stop stop-color="#01BB99"/>
<stop offset="1" stop-color="#206ED4"/>
</linearGradient>
<linearGradient id="paint2_linear_887_4007" x1="82.7527" y1="47.405" x2="68.6092" y2="0.940961" gradientUnits="userSpaceOnUse">
<stop stop-color="#094FCF" stop-opacity="0.4"/>
<stop offset="0.53" stop-color="#094FCF" stop-opacity="0.111373"/>
<stop offset="1" stop-color="#094FCF" stop-opacity="0"/>
</linearGradient>
<linearGradient id="paint3_linear_887_4007" x1="39.0502" y1="54.9675" x2="27.6127" y2="65.435" gradientUnits="userSpaceOnUse">
<stop stop-color="#094FCF" stop-opacity="0.1"/>
<stop offset="0.53" stop-color="#094FCF" stop-opacity="0.027451"/>
<stop offset="1" stop-color="#094FCF" stop-opacity="0"/>
</linearGradient>
<linearGradient id="paint4_linear_887_4007" x1="50.908" y1="42.969" x2="40.1015" y2="53.4833" gradientUnits="userSpaceOnUse">
<stop stop-color="#094FCF" stop-opacity="0.1"/>
<stop offset="0.53" stop-color="#094FCF" stop-opacity="0.027451"/>
<stop offset="1" stop-color="#094FCF" stop-opacity="0"/>
</linearGradient>
<linearGradient id="paint5_linear_887_4007" x1="40.9364" y1="79.137" x2="41.5226" y2="114.87" gradientUnits="userSpaceOnUse">
<stop stop-color="#5994FE" stop-opacity="0.2"/>
<stop offset="1" stop-color="#5994FE" stop-opacity="0"/>
</linearGradient>
<linearGradient id="paint6_linear_887_4007" x1="62.2457" y1="62.6282" x2="73.6652" y2="73.0038" gradientUnits="userSpaceOnUse">
<stop stop-color="#094FCF" stop-opacity="0.3"/>
<stop offset="1" stop-color="#094FCF" stop-opacity="0"/>
</linearGradient>
<linearGradient id="paint7_linear_887_4007" x1="28.033" y1="30.2269" x2="20.0858" y2="22.4948" gradientUnits="userSpaceOnUse">
<stop stop-color="#094FCF" stop-opacity="0.05"/>
<stop offset="0.53" stop-color="#094FCF" stop-opacity="0.0137255"/>
<stop offset="1" stop-color="#094FCF" stop-opacity="0"/>
</linearGradient>
<linearGradient id="paint8_linear_887_4007" x1="39.6811" y1="41.7372" x2="32.2879" y2="33.9307" gradientUnits="userSpaceOnUse">
<stop stop-color="#094FCF" stop-opacity="0.05"/>
<stop offset="0.53" stop-color="#094FCF" stop-opacity="0.0137255"/>
<stop offset="1" stop-color="#094FCF" stop-opacity="0"/>
</linearGradient>
<linearGradient id="paint9_linear_887_4007" x1="83.2705" y1="56.3101" x2="18.0732" y2="56.0633" gradientUnits="userSpaceOnUse">
<stop stop-color="#094FCF" stop-opacity="0.4"/>
<stop offset="1" stop-color="#094FCF" stop-opacity="0"/>
</linearGradient>
<clipPath id="clip0_887_4007">
<rect width="80" height="79.9998" fill="white" transform="translate(4.91797 4.72705)"/>
</clipPath>
</defs>
</svg>
`,
                    GoogleAd: `<svg class="w-5 h-5" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M32.2234 17.2038C32.9966 15.1741 34.0598 13.3054 35.6385 11.7912C41.9533 5.63745 52.3921 7.18393 56.6771 14.9163C59.899 20.7801 63.3141 26.515 66.6326 32.3143C72.1742 41.9476 77.7802 51.5809 83.2573 61.2464C87.8645 69.3332 82.8707 79.5464 73.7206 80.9318C68.1146 81.7695 62.863 79.192 59.9634 74.166C55.0984 65.6925 50.2012 57.2191 45.3362 48.7779C45.2396 48.5846 45.1107 48.4235 44.9818 48.2624C44.4663 47.8435 44.2408 47.2314 43.9186 46.6837C41.76 42.8819 39.5369 39.1124 37.3783 35.3428C35.9929 32.8942 34.5431 30.4778 33.1577 28.0292C31.9012 25.8384 31.3213 23.4542 31.3857 20.9412C31.4823 19.6524 31.6434 18.3637 32.2234 17.2038Z" fill="#4285F4"/>
<path d="M32.2234 17.2036C31.9334 18.3635 31.6757 19.5233 31.6112 20.7476C31.5146 23.454 32.1912 25.967 33.5443 28.319C37.0884 34.4082 40.6324 40.5297 44.1442 46.6512C44.4664 47.1989 44.7241 47.7466 45.0463 48.2621C43.1132 51.6129 41.1801 54.9313 39.2148 58.2821C36.5084 62.9537 33.8021 67.6576 31.0635 72.3293C30.9347 72.3293 30.9024 72.2648 30.8702 72.1682C30.838 71.9104 30.9347 71.6849 30.9991 71.4272C32.32 66.5944 31.2246 62.3094 27.9061 58.6365C25.8764 56.4134 23.2989 55.1569 20.3348 54.738C16.4686 54.1903 13.0535 55.1891 9.99271 57.6055C9.445 58.0243 9.0906 58.6365 8.44623 58.9586C8.31736 58.9586 8.25292 58.8942 8.2207 58.7976C9.76719 56.1234 11.2814 53.4493 12.8279 50.7752C19.2072 39.692 25.5864 28.6089 31.9979 17.558C32.0623 17.4291 32.159 17.3325 32.2234 17.2036Z" fill="#FBBC05"/>
<path d="M8.35 58.8946C8.96215 58.3469 9.54208 57.767 10.1864 57.2515C18.0155 51.0655 29.7752 55.5439 31.4828 65.3383C31.9016 67.6902 31.6761 69.9455 30.9673 72.2008C30.9351 72.3941 30.9029 72.5552 30.8384 72.7485C30.5485 73.264 30.2907 73.8117 29.9685 74.3272C27.1011 79.0633 22.8805 81.4153 17.3389 81.0609C10.9919 80.6098 5.99806 75.8415 5.12816 69.5267C4.70932 66.4659 5.32147 63.5985 6.90017 60.9566C7.22235 60.3766 7.60898 59.8612 7.96338 59.2812C8.12447 59.1523 8.06003 58.8946 8.35 58.8946Z" fill="#34A853"/>
<path d="M8.34964 58.8945C8.22077 59.0234 8.22077 59.2489 7.99524 59.2811C7.96302 59.0556 8.0919 58.9267 8.22077 58.7656L8.34964 58.8945Z" fill="#FBBC05"/>
</svg>

`,


                    select(optionText, optionIcon) {
                        this.selectedText = optionText;
                        this.selectedIcon = optionIcon;
                        this.open = false;
                    }
                }));

                Alpine.data("theme", () => ({
                    darkMode: localStorage.getItem("darkMode") === "true",
                    toggleTheme() {
                        this.darkMode = !this.darkMode;
                        localStorage.setItem("darkMode", this.darkMode);
                        document.documentElement.classList.toggle("dark", this.darkMode);
                    }
                }));
            });
        </script>

        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Used In Zoomable TIme Series Chart -->
        <script src="{{asset('build/assets/dataseries.js')}}"></script>

        <!---Used In Annotations Chart-->
        <script src="{{asset('build/assets/apexcharts-stock-prices.js')}}"></script>

        <!-- Internal Apex Line Charts JS -->
@vite('resources/assets/js/apexcharts-line.js')

@endsection
