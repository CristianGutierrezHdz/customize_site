<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <!-- component -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />

    @yield('style-page')
</head>

<body>

    <div class="min-h-screen flex flex-row bg-gray-100">
        <div class="flex flex-col w-56 bg-white rounded-r-3xl overflow-hidden">
            <div class="flex items-center justify-center h-20 shadow-md">
                <a href="{{ route('dashboard.index') }}">
                    <h1 class="text-3xl uppercase text-indigo-500">Logo</h1>
                </a>
            </div>
            <ul class="flex flex-col py-4">
                <li>
                    <a href="{{ route('dashboard.index') }}"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="bx bx-home"></i></span>
                        <span class="text-sm font-medium">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="bx bx-drink"></i></span>
                        <span class="text-sm font-medium">Hero</span>
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
                            <i class="bx bx-store"></i>
                        </span>
                        <span class="text-sm font-medium">Productos</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="bx bx-shopping-bag"></i></span>
                        <span class="text-sm font-medium">Shopping</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="bx bx-chat"></i></span>
                        <span class="text-sm font-medium">Chat</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.edit') }}"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="bx bx-user"></i></span>
                        <span class="text-sm font-medium">Profile</span>
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                            class="flex
                            flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in
                            duration-200 text-gray-500 hover:text-gray-800">
                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                    class="bx bx-log-out"></i></span>
                            <span class="text-sm font-medium">Logout</span>
                        </a>
                    </form>

                </li>

            </ul>
        </div>

        <div class="pl-20 pr-20 pt-24">

            @yield('content')

        </div>
    </div>

    @yield('script-page')

</body>

</html>
