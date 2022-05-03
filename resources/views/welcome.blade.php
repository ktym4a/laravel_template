<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="antialiased">
    <!-- This example requires Tailwind CSS v2.0+ -->
    <header class="bg-indigo-600">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Top">
            <div class="w-full py-6 flex items-center justify-between border-b border-indigo-500 lg:border-none">
                <div class="flex items-center">
                    <a href="#">
                        <span class="sr-only">Workflow</span>
                        <img class="h-10 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white"
                            alt="">
                    </a>
                    <div class="hidden ml-10 space-x-8 lg:block">
                        <a href="#" class="text-base font-medium text-white hover:text-indigo-50"> Solutions </a>

                        <a href="#" class="text-base font-medium text-white hover:text-indigo-50"> Pricing </a>

                        <a href="#" class="text-base font-medium text-white hover:text-indigo-50"> Docs </a>

                        <a href="#" class="text-base font-medium text-white hover:text-indigo-50"> Company </a>
                    </div>
                </div>
                <div class="ml-10 space-x-4">
                    @auth
                    <form action="{{route('logout')}}" method="POST">
                        {{ csrf_field() }}
                        <button type="submit"
                            class="inline-block bg-white py-2 px-4 border border-transparent rounded-md text-base font-medium text-indigo-600 hover:bg-indigo-50">log
                            out</button>
                    </form>
                    @else
                    <a href="{{route('login')}}"
                        class="inline-block bg-indigo-500 py-2 px-4 border border-transparent rounded-md text-base font-medium text-white hover:bg-opacity-75">Sign
                        in</a>
                    <a href="{{route('register')}}"
                        class="inline-block bg-white py-2 px-4 border border-transparent rounded-md text-base font-medium text-indigo-600 hover:bg-indigo-50">Sign
                        up</a>
                    @endcan
                </div>
            </div>
            <div class="py-4 flex flex-wrap justify-center space-x-6 lg:hidden">
                <a href="#" class="text-base font-medium text-white hover:text-indigo-50"> Solutions </a>

                <a href="#" class="text-base font-medium text-white hover:text-indigo-50"> Pricing </a>

                <a href="#" class="text-base font-medium text-white hover:text-indigo-50"> Docs </a>

                <a href="#" class="text-base font-medium text-white hover:text-indigo-50"> Company </a>
            </div>
        </nav>
    </header>
</body>

</html>
