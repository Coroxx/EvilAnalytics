<!DOCTYPE html>
<html lang="en">
@php
use Carbon\Carbon;
use App\Models\Call;

@endphp


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EvilAnalytics - DashBoard</title>
    <link rel="icon" href="{{ asset('assets/vampire.png') }}">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"
        integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>

    <style>
        .bg-black-alt {
            background: #191919;
        }

        .text-black-alt {
            color: #191919;
        }

        .border-black-alt {
            border-color: #191919;
        }

        .bg-main {
            background-color: #141414;
        }

    </style>

</head>

<body class="font-sans leading-normal tracking-normal bg-black-alt">

    <nav id="header" class="z-10 w-full shadow bg-main">


        <div class="container flex flex-wrap items-center w-full pt-3 mx-auto mt-0">

            <div class="w-full pl-3 text-center md:pl-0">
                <a class="text-base font-bold no-underline md:text-2xl hover:no-underline" href="#">
                    <img src="{{ asset('assets/vampire.png') }}" alt="icon"
                        class="inline w-6 h-6 -mt-2 md:-mt-3 md:w-8 md:h-8">
                    <span class="font-extrabold text-red-600">EvilAnalytics</span>
                </a>
                <p class="text-sm font-bold text-white"><a class="hover:underline"
                        href="https://github.com/Coroxx/EvilAnalytics" rel="noreferrer" target=" _blank">Github -
                        Version
                        1.2</a>
                </p>
            </div>
            <div id="lang" class="w-full text-center md:w-auto md:absolute md:text-left md:m-0 top-4 right-4">
                <div>
                    <a href="{{ route('analytics', 'en') }}">
                        <img src="{{ asset('assets/ang.png') }}" class="inline w-6 h-6" alt="emoji_ang"> </a>
                    <a href="{{ route('analytics', 'fr') }}"> <img src="{{ asset('assets/france.png') }}"
                            class="inline w-6 h-6" alt="emoji_fr"> </a>
                </div>
            </div>

            <div class="w-1/2 pr-0">
            </div>


            <div class="z-20 items-center flex-grow block w-full mt-2 ml-4 lflex" id="nav-content"
                style="background-color : #141414">
                <ul class="items-center flex-1 px-4 list-reset lg:flex md:px-0">
                    <li class="w-24 my-2 mr-6 md:my-0">
                        <a href="#"
                            class="block py-1 pl-1 text-red-500 no-underline align-middle border-b-2 border-red-500 md:py-3 hover:text-red-600 hover:border-red-500">
                            <i class="mr-3 text-red-500 fas fa-home fa-fw"></i><span
                                class="pb-1 text-sm md:pb-0">{{ __('dashboard.home') }}</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!--Container-->
    <div class="container w-full mx-auto">
        <div class="w-full px-4 mb-16 leading-normal text-gray-800 md:px-0 md:mt-8">

            <!--Console Content-->

            <div class="flex flex-wrap">
                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <!--Metric Card-->
                    <div class="p-2 rounded shadow bg-main">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-3 bg-red-600 rounded"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 h-10" viewBox="0 0 20 20" fill="white">
                                        <path
                                            d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                                    </svg></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold text-red-500 uppercase">{{ __('dashboard.today_requests') }}</h5>
                                <h3 class="text-3xl font-bold text-white">{{ $today_requests }} <span
                                        class="text-green-500"><i class="fas fa-caret-up"></i></span></h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <!--Metric Card-->
                    <div class="p-2 rounded shadow bg-main">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-3 bg-red-600 rounded"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="white">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                                    </svg></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="-mt-1 font-bold text-red-500 uppercase">{{ __('dashboard.week_country') }}
                                </h5>
                                <h3 class="mt-1 text-2xl font-bold text-white">{{ $most_present_country->first() }}
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <!--Metric Card-->
                    <div class="p-2 rounded shadow bg-main">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-3 bg-red-600 rounded"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="white">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 11l7-7 7 7M5 19l7-7 7 7" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="-mt-1 font-bold text-red-500 uppercase">{{ __('dashboard.month_url') }}
                                </h5>
                                <h3 class="mt-1 text-2xl font-bold text-white">@php
                                    try {
                                        preg_match('/\/([a-z0-9_-]*[\/]?)$/', route("$most_visited_route"), $match);
                                    } catch (\Throwable $th) {
                                        $match = [__('dashboard.no_route')];
                                    }
                                @endphp
                                    {{ $match ? $match[0] : '/' }}
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <!--Metric Card-->
                    <div class="p-2 rounded shadow bg-main">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-3 bg-red-600 rounded"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 h-10" viewBox="0 0 20 20" fill="white">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                            clip-rule="evenodd" />
                                    </svg></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold text-red-500 uppercase">{{ __('dashboard.today_users') }}</h5>
                                <h3 class="text-3xl font-bold text-white">{{ $unique_users_today }} <span
                                        class="text-red-500"><i class="fas fa-exchange-alt"></i></span></h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <!--Metric Card-->
                    <div class="p-2 rounded shadow bg-main">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-3 bg-red-600 rounded"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="white">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold text-red-500 uppercase">{{ __('dashboard.week_device') }}</h5>
                                <h3 class="text-2xl font-bold text-white">
                                    {{ ucfirst($most_present_device->first()) }}</h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <!--Metric Card-->
                    <div class="p-2 rounded shadow bg-main">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-3 bg-red-600 rounded"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="white">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold text-red-500 uppercase">{{ __('dashboard.month_users') }}</h5>
                                <h3 class="mt-1 text-2xl font-bold text-white">{{ $unique_users_week }}
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
            </div>

            <!--Divider-->
            <hr class="mx-4 my-8 border-b-2 border-gray-600">

            <div class="flex flex-row flex-wrap flex-grow mt-2">

                <div class="w-full p-3 md:w-1/2">
                    <!--Graph Card-->
                    <div class="border border-gray-800 rounded shadow bg-main">
                        <div class="p-3 border-b border-gray-800">
                            <h5 class="font-extrabold uppercase" style="color: #4bc0c0">
                                {{ __('dashboard.uniques_visitors_requests') }}</h5>
                        </div>
                        <div class="p-5 h-80">
                            <canvas id="chartjs-7" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-7"), {
                                    "type": "bar",
                                    "data": {
                                        "labels": ["{{ now()->subDays(3)->format('d/m') }}", "{{ now()->subDays(2)->format('d/m') }}",
                                            "{{ __('dashboard.yesterday') }}", "{{ __('dashboard.today') }}"
                                        ],
                                        "datasets": [{

                                                "label": "   {{ __('dashboard.uniques_visitors') }}      ",
                                                "data": [
                                                    "{{ Call::whereDate('created_at', Carbon::today()->subDays(3))->distinct('session_id')->count() }}",
                                                    "{{ Call::whereDate('created_at', Carbon::today()->subDays(2))->distinct('session_id')->count() }}",
                                                    "{{ Call::whereDate('created_at', Carbon::yesterday())->distinct('session_id')->count() }}",
                                                    "{{ Call::whereDate('created_at', Carbon::today())->distinct('session_id')->count() }}"
                                                ],
                                                "type": "line",
                                                "fill": false,
                                                "borderColor": "rgb(75, 192, 192)",
                                            },
                                            {
                                                "label": "   {{ __('dashboard.requests') }}",
                                                "data": [
                                                    "{{ Call::whereDate('created_at', Carbon::today()->subDays(3))->count() }}",
                                                    "{{ Call::whereDate('created_at', Carbon::today()->subDays(2))->count() }}",
                                                    "{{ Call::whereDate('created_at', Carbon::yesterday())->count() }}",
                                                    "{{ Call::whereDate('created_at', Carbon::today())->count() }}"
                                                ],

                                                "borderColor": "rgb(78, 95, 222)",
                                                "backgroundColor": "rgba(78, 95, 222, 0.2)"
                                            }
                                        ]
                                    },
                                    "options": {
                                        responsive: true,
                                        maintainAspectRatio: false,
                                        "scales": {
                                            "yAxes": [{
                                                "ticks": {
                                                    "beginAtZero": true
                                                }
                                            }]
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>

                <div class="w-full p-3 md:w-1/2">
                    <!--Graph Card-->
                    <div class="border border-gray-800 rounded shadow bg-main">
                        <div class="p-3 border-b border-gray-800">
                            <h5 class="font-extrabold uppercase" style="color: #4bc0c0">
                                {{ __('dashboard.most_used_routes') }}
                            </h5>
                        </div>
                        <div class="p-5 h-80">
                            <canvas id="chartjs-0" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-0"), {
                                    "type": "bar",
                                    "data": {
                                        "labels": ["{{ isset($month_routes[4]) ? ucfirst($month_routes[4]) : 'NaN' }}",
                                            "{{ isset($month_routes[2]) ? ucfirst($month_routes[2]) : 'NaN' }}",
                                            "{{ isset($month_routes[1]) ? ucfirst($month_routes[1]) : 'NaN' }}",
                                            "{{ isset($month_routes[0]) ? ucfirst($month_routes[0]) : 'NaN' }}",
                                        ],
                                        "datasets": [{
                                            "label": "  {{ __('dashboard.index') }}",
                                            "data": [
                                                "{{ isset($month_routes[4]) ? $week_requests->where('route', $month_routes[4])->count() : 0 }}",
                                                "{{ isset($month_routes[2]) ? $week_requests->where('route', $month_routes[2])->count() : 0 }}",
                                                "{{ isset($month_routes[1]) ? $week_requests->where('route', $month_routes[1])->count() : 0 }}",
                                                "{{ isset($month_routes[0]) ? $week_requests->where('route', $month_routes[0])->count() : 0 }}"
                                            ],
                                            "fill": false,
                                            "type": "line",
                                            "borderColor": "rgb(75, 192, 192)",
                                            "lineTension": 0.1
                                        }]
                                    },
                                    "options": {
                                        responsive: true,
                                        maintainAspectRatio: false,
                                        "scales": {
                                            "yAxes": [{
                                                "ticks": {
                                                    "beginAtZero": true
                                                }
                                            }]
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>

                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <!--Graph Card-->
                    <div class="border border-gray-800 rounded shadow bg-main">
                        <div class="p-3 border-b border-gray-800">
                            <h5 class="font-bold uppercase" style="color:#ff6384">
                                {{ __('dashboard.most_used_devices') }}</h5>
                        </div>
                        <div class="p-5 h-80">
                            <canvas id="chartjs-4" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-4"), {
                                    "type": "doughnut",
                                    "data": {
                                        "labels": ["{{ isset($most_present_device[0]) ? ucfirst($most_present_device[0]) : 'NaN' }}",
                                            "{{ isset($most_present_device[1]) ? ucfirst($most_present_device[1]) : 'NaN' }}",
                                            "{{ isset($most_present_device[2]) ? ucfirst($most_present_device[2]) : 'NaN' }}"
                                        ],
                                        "datasets": [{
                                            "label": "Devices",
                                            "data": [
                                                "{{ isset($most_present_device[0]) ? $week_requests->where('device', $most_present_device[0])->count() : 'NaN' }}",
                                                "{{ isset($most_present_device[1]) ? $week_requests->where('device', $most_present_device[1])->count() : 'NaN' }}",
                                                "{{ isset($most_present_device[2]) ? $week_requests->where('device', $most_present_device[2])->count() : 'NaN' }}"
                                            ],
                                            "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                                        }]
                                    },
                                    "options": {
                                        responsive: true,
                                        maintainAspectRatio: false,
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>

                <div class="w-full p-3 md:w-1/2 xl:w-2/3">
                    <!--Graph Card-->
                    <div class="border border-gray-800 rounded shadow bg-main">
                        <div class="p-3 border-b border-gray-800">
                            <h5 class="font-bold uppercase" style="color:#ff6384">
                                {{ __('dashboard.most_present_countries') }}</h5>
                        </div>
                        <div class="p-5 h-80">
                            <canvas id="chartjs-1" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-1"), {
                                    "type": "bar",
                                    "data": {
                                        "labels": ["{{ isset($most_present_country[3]) ? ucfirst($most_present_country[3]) : 'NaN' }}",
                                            "{{ isset($most_present_country[2]) ? ucfirst($most_present_country[2]) : 'NaN' }}",
                                            "{{ isset($most_present_country[1]) ? ucfirst($most_present_country[1]) : 'NaN' }}",
                                            "{{ isset($most_present_country[0]) ? ucfirst($most_present_country[0]) : 'NaN' }}",
                                        ],
                                        "datasets": [{

                                            "label": "   {{ __('dashboard.requests') }}",
                                            "data": [
                                                "{{ isset($most_present_country[3]) ? $week_requests->where('country', $most_present_country[3])->count() : 'NaN' }}",
                                                "{{ isset($most_present_country[2]) ? $week_requests->where('country', $most_present_country[2])->count() : 'NaN' }}",
                                                "{{ isset($most_present_country[1]) ? $week_requests->where('country', $most_present_country[1])->count() : 'NaN' }}",
                                                "{{ isset($most_present_country[0]) ? $week_requests->where('country', $most_present_country[0])->count() : 'NaN' }}",
                                            ],

                                            "borderColor": "rgb(255, 99, 132)",
                                            "backgroundColor": "rgba(255, 99, 132, 0.7)"
                                        }]
                                    },
                                    "options": {
                                        responsive: true,
                                        maintainAspectRatio: false,
                                        "scales": {
                                            "yAxes": [{
                                                "ticks": {
                                                    "beginAtZero": true
                                                }
                                            }]
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>

                {{-- <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                     <!--Template Card-->
                    <div class="border border-gray-800 rounded shadow bg-main">
                        <div class="p-3 border-b border-gray-800">
                            <h5 class="font-bold text-gray-600 uppercase">Template</h5>
                        </div>
                        <div class="p-5">

                        </div>
                    </div>
                    <!--/Template Card-->
                </div> --}}


            </div>


        </div>
        <!--/container-->

        <footer class="border-t border-gray-400 shadow bg-main">
            <div class="container flex max-w-md py-8 mx-auto">

                <div class="flex flex-wrap w-full mx-auto">
                    <div class="flex w-full md:w-1/2 ">
                        <div class="px-8">
                            <h3 class="font-bold text-gray-100">EvilAnalytics</h3>
                            <p class="py-4 text-sm text-gray-600">
                                {{ __('dashboard.footer_bio') }}
                            </p>
                        </div>
                    </div>

                    <div class="flex w-full md:w-1/2">
                        <div class="px-8">
                            <h3 class="font-bold text-gray-100">{{ __('dashboard.footer_bio2') }}</h3>
                        </div>
                    </div>
                </div>



            </div>
        </footer>

        <script>
            var userMenuDiv = document.getElementById("userMenu");
            var userMenu = document.getElementById("userButton");

            var navMenuDiv = document.getElementById("nav-content");
            var navMenu = document.getElementById("nav-toggle");

            document.onclick = check;

            function check(e) {
                var target = (e && e.target) || (event && event.srcElement);

                //User Menu
                if (!checkParent(target, userMenuDiv)) {
                    // click NOT on the menu
                    if (checkParent(target, userMenu)) {
                        // click on the link
                        if (userMenuDiv.classList.contains("invisible")) {
                            userMenuDiv.classList.remove("invisible");
                        } else {
                            userMenuDiv.classList.add("invisible");
                        }
                    } else {
                        // click both outside link and outside menu, hide menu
                        userMenuDiv.classList.add("invisible");
                    }
                }

                //Nav Menu
                if (!checkParent(target, navMenuDiv)) {
                    // click NOT on the menu
                    if (checkParent(target, navMenu)) {
                        // click on the link
                        if (navMenuDiv.classList.contains("hidden")) {
                            navMenuDiv.classList.remove("hidden");
                        } else {
                            navMenuDiv.classList.add("hidden");
                        }
                    } else {
                        // click both outside link and outside menu, hide menu
                        navMenuDiv.classList.add("hidden");
                    }
                }

            }

            function checkParent(t, elm) {
                while (t.parentNode) {
                    if (t == elm) {
                        return true;
                    }
                    t = t.parentNode;
                }
                return false;
            }
        </script>

</body>

</html>
