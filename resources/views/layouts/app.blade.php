<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For You</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex">
        <nav class="flex flex-col items-center flex-1">
            <div class="flex justify-evenly items-center">
                <div>
                    <span class="text-2xl italic font-semibold">@thready</span>
                </div>
                <div>
                    ——
                </div>
            </div>
            <div class="flex-1">
                <ul class="flex flex-col gap-1 items-center justify-center">
                    <a href="{{ route('post') }}">
                        <li class="px-3 py-0.5">For You</li>
                    </a>
                    <a href="">
                        <li class="px-3 py-0.5"><span class="text-xl">+</span> New thread</li>
                    </a>
                </ul>
            </div>
            <div class="flex-1">
                <ul>
                    <li class="px-3 py-0.5" href="">Profile</li>
                </ul>
            </div>
            <div class="flex-1">
                <ul>
                    <a href="">
                        <li class="px-3 py-0.5">Saved</li>
                    </a>
                    <a href="">
                        <li class="px-3 py-0.5">Liked</li>
                    </a>
                </ul>
            </div>
        </nav>

        <div class="flex-2">
           @yield('content')
        </div>
        
        <div class="flex-1">

        </div>

    </div>
</body>

</html>