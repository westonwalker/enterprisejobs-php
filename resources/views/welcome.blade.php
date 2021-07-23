<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body class="antialiased ">
        <div class="bg-gradient-to-r from-blue-900 via-gray-900 to-purple-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-6">
                <div class="md:flex md:items-center md:justify-between">
                    <div class="flex-1 min-w-0">
                        <h1 class="text-3xl font-bold leading-7 text-white sm:text-4xl sm:truncate">
                        EnterpriseDevJobs
                        </h1>
                        <p class="text-md font-medium leading-7 text-gray-200 sm:text-lg sm:truncate">
                        Post your job openings to thousands of experienced professional developers.
                        </p>
                    </div>
                    <div class="mt-4 flex md:mt-0 md:ml-4">
                        @if (Route::has('login'))
                        <div class="">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-md font-medium leading-7 sm:text-lg text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-indigo-500">
                                Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}"  class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-md font-medium leading-7 sm:text-lg text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-indigo-500">
                                My Account
                                </a>

                                @if (Route::has('register'))
                                <a href="{{ route('register') }}"  class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-md font-medium leading-7 sm:text-lg text-white bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-indigo-500">
                                Post a Job
                                </a>
                                @endif
                            @endauth
                        </div>
                        @endif 
                    </div>
                </div>
                <x-subscribe-form></x-subscribe-form>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-6 bg-white mb-24">
            <x-job-list></x-job-list>
        </div>
        <div class="fixed bottom-0 right-0 bg-gray-800">
            <div class="flex w-screen sm:items-center sm:justify-between px-24 py-4"> 
                <p class="text-md font-medium leading-7 text-gray-100 sm:text-lg sm:truncate">
                    Send your job opening to thousands of developer's inboxes in 5 minutes.
                </p>
                <div class="mt-3 flex sm:mt-0 sm:ml-4">
                    <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-md font-medium leading-7 sm:text-lg text-white bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Post a Job
                    </button>
                </div>
            </div>
        </div>
    </body>
</html>
