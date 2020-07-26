<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playground</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="/js/app.js"></script>
    <link rel="stylesheet" href="/css/main.css">
    <style>
        .active {
            display: block;
        }
    </style>
</head>

<body class="bg-gray-900 text-white">
    <header class="lg:px-16 px-6 border-b border-gray-400 flex flex-wrap items-center lg:py-1 py-2" id="navi">
        <div class="flex-1 flex items-center">
            <a href="#">
                <img src="images/logo.png" alt="Playground" class="w-32 flex-none" height="106px">
                <ul class="hidden lg:block lg:flex xl:flex lg:space-x-8 ml-16">
                    <li><a href="#" class="hover:text-gray-400">Games</a></li>
                    <li><a href="#" class="hover:text-gray-400">Reviews</a></li>
                    <li><a href="#" class="hover:text-gray-400">Coming Soon</a></li>
                </ul>
            </a>
        </div>
        <div class="hidden lg:flex xl:flex item-center space-x-2">
            <div class="relative">
                <input type="text" class="bg-gray-800 text-sm w-64 px-3 pl-8 py-1 focus:outline-none focus:shadow-outline rounded-full" name="search" id="search" placeholder="Search...">
                <div class="absolute top-0 flex item-center h-full ml-2">
                    <svg class="fill-current text-gray-600 w-4" viewBox="0 0 478.2 478.2">
                        <path d="M473.4 449.3L303.3 279a171 171 0 10-24.2 24.2l170.2 170.1a17 17 0 0024.1-24.1zM171.2 307.8a136.5 136.5 0 110-273 136.5 136.5 0 010 273z" /></svg>
                </div>
            </div>
            <div class="">
                <img src="images/avatar.png" alt="You!" class="flex-none rounded-full w-8" srcset="">
            </div>
        </div>
        <div class="lg:hidden block">
            <i v-on:click="isHidden = !isHidden" class="fa fa-bars text-white-50 cursor-pointer"></i>
        </div>
        <div v-if="isHidden" class=" lg:flex lg:items-center lg:w-auto w-full" id="menu">
            <nav>
                <ul class="lg:flex item-center justify-between text-base lg:space-x-8">
                    <li><a href="#" class="hover:text-gray-400">Games</a></li>
                    <li><a href="#" class="hover:text-gray-400">Reviews</a></li>
                    <li><a href="#" class="hover:text-gray-400">Coming Soon</a></li>
                </ul>
            </nav>
        </div>

    </header>

    <main class="py-8">
        @yield('content')
    </main>
    <footer class="py-6 px-4 text-center border-t border-gray-800">
        Powered By <a href="#" class="underline hover:text-gray-400">IGDB API</a>
    </footer>
    <script>
        var app = new Vue({
            el: '#navi',
            data: {
                isHidden: false
            }
        })
    </script>

</body>

</html>