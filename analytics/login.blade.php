<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EvilAnalytics - Login</title>
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

            <div class="w-full pb-4 pl-3 text-center md:pl-0">
                <a class="text-base font-bold no-underline md:text-2xl hover:no-underline" href="#">
                    <img src="{{ asset('assets/vampire.png') }}" alt="icon"
                        class="inline w-6 h-6 -mt-2 md:-mt-3 md:w-8 md:h-8">
                    <span class="font-extrabold text-red-600">EvilAnalytics</span>
                </a>
                <p class="text-sm font-bold text-white"><a class="hover:underline"
                        href="https://github.com/Coroxx/EvilAnalytics" target="_blank">Github - Version 1.0</a>
                </p>
            </div>
        </div>
    </nav>

    <main>
        <form action="{{ route('analytics.login.post') }}" method="POST">
            @csrf

            <div class="pt-4 text-xl font-bold text-center text-white">
                <h2>You must be logged in to access EvilAnalytics dashboard !</h2>
            </div>
            <div id="fields" class="mt-4 text-center text-white">
                <input required name="username" type="text" placeholder="Username"
                    class="px-2 py-1.5 text-center placeholder-white rounded-md focus:outline-none bg-main">
                <br>
                <input required name="password" type="password" placeholder="Password"
                    class="px-2 py-1.5 mt-4 text-center placeholder-white rounded-md focus:outline-none bg-main">
            </div>

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="py-2 text-center">
                        <div class="font-semibold text-red-500">
                            <p>{{ $error }}</p>
                        </div>
                    </div>
                @endforeach
            @endif
            <div class="mt-8 text-center">
                <input type="submit"
                    class="px-8 text-white py-1.5 font-extrabold cursor-pointer text-center placeholder-white rounded-md focus:outline-none bg-main"
                    value="Login">
            </div>

        </form>
    </main>
</body>

</html>
