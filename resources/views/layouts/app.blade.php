<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For You</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-950 text-white">
    <div class="flex">
        <nav class="flex flex-col gap-6 px-3 py-5 text-white w-[200px] bg-gray-900 min-h-screen">
            <div class="flex justify-between items-center px-1">
                <div>
                    <span class="text-2xl italic font-semibold">@Thready</span>
                </div>
                <button class="text-gray-400 flex flex-col justify-center items-center gap-1 p-2 rounded-lg">
                    <span class="block w-6 h-0.5 bg-red-400 rounded-full"></span>
                    <span class="block w-6 h-0.5 bg-red-400 rounded-full"></span>
                </button>
            </div>
            <div class="border-b border-gray-800 pb-4">
                <ul class="flex flex-col gap-1">
                    <li>
                        <a href="{{ route('posts.index') }}" class="block px-3 py-2 rounded-lg hover:bg-gray-800 {{ request()->routeIs('posts.index') ? 'text-white font-semibold' : 'text-gray-400' }}">For You</a>
                    </li>
                    <li>
                        <a href="" class="flex items-center gap-2 px-3 py-2 rounded-lg text-gray-400 hover:bg-gray-800 hover:text-white"><span class="text-xl">+</span>New thread</a>
                    </li>
                </ul>
            </div>
            <div class="border-b border-gray-800 pb-4">
                <ul class="flex flex-col gap-1">
                    <li>
                        <a href="" class="block px-3 py-2 rounded-lg text-gray-400 hover:bg-gray-800 hover:text-white">Profile</a>
                    </li>
                </ul>
            </div>
            <div>
                <ul class="flex flex-col gap-1">
                    <li>
                        <a href="" class="block px-3 py-2 rounded-lg text-gray-400 hover:bg-gray-800 hover:text-white">Saved</a>
                    </li>
                    <li>
                        <a href="" class="block px-3 py-2 rounded-lg text-gray-400 hover:bg-gray-800 hover:text-white">Liked</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="flex-2 flex justify-center py-4 px-4">
            <main class="w-full max-w-xl bg-gray-900 border border-gray-800 rounded-3xl min-h-screen">
                <div class="py-4 text-center font-semibold border-b border-gray-800">
                    For You
                </div>
                <div class="px-5 py-4">
                    @yield('content')
                </div>
            </main>
        </div>

        <div class="flex-1">

        </div>

    </div>
</body>
</html>