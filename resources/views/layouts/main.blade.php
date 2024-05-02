<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Movie App</title>
</head>

<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex items-center flex-col md:flex-row">
                <li>
                    <a href="/">Logo</a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="/movie" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="" class="hover:text-gray-300">Tv Show</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <div class="relative mt-3 md:mt-0">
                    <div class="absolute top-1 left-2">
                        <box-icon name='search' color='#757575' class="fill-current"></box-icon>
                    </div>
                    <input type="text"
                        class="bg-gray-800 rounded-full w-64 px-4 pl-9 py-1 focus:outline-dotted focus:outline-gray-500"
                        placeholder="Search...">
                </div>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="/img/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>

    </nav>
    @yield('content')
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</body>

</html>
