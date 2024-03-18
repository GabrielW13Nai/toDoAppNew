<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        @if(Session::has('message'))
            <div class="mb-12" x-data="{open: true}" x-show="open">
                <div class="alert alert-dismissible fade show fixed top-0 right-0 left-0 z-[1030] w-full items-center justify-between bg-success p-2 text-center text-white md:flex md:text-left">
                    <div class="mb-4 flex flex-wrap items-center justify-center md:mb-0 md:justify-start">
                        <span class="mr-2 [&>svg]:h-5 [&>svg]:w-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
                        </svg>
                        </span>
                        <strong class="mr-1">{{Session::get('message')}}</strong> 
                    </div>
                    <div class="flex items-center justify-center">
                        <button @click="open = false" class="text-white" data-te-alert-dismiss aria-label="Close"></button>
                        <span class="[&>svg]:h-6 [&>svg]:w-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </span>
                        </button>
                    </div>
                </div>
            </div>
        @endif

        @if(Session::has('errors'))
            <div class="mb-12" x-data="{open: true}" x-show="open">
                <div class="alert alert-dismissible fade show fixed top-0 right-0 left-0 z-[1030] w-full items-center justify-between p-2 text-center text-white md:flex md:text-left" style="background-color: red">
                    <div class="mb-4 flex flex-wrap items-center justify-center md:mb-0 md:justify-start">
                        <span class="mr-2 [&>svg]:h-5 [&>svg]:w-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
                        </svg>
                        </span>
                        <strong class="mr-1">{{ Session::get('errors') }}</strong> 
                    </div>
                    <div class="flex items-center justify-center">
                        <button @click="open = false" class="text-white" data-te-alert-dismiss aria-label="Close"></button>
                        <span class="[&>svg]:h-6 [&>svg]:w-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </span>
                        </button>
                    </div>
                </div>
            </div>
        @endif
           
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

                <div class="flex-col md:flex md:flex-row md:min-h-screen">
                    <div @click.away="open = false" class="flex flex-col flex-shrink-0 w-full text-gray-700 bg-white md:w-64 dark-mode:text-gray-200 dark-mode:bg-gray-800" x-data="{ open: false }">
                        <div class="flex flex-row items-center justify-between flex-shrink-0 px-8 py-4">
                            <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline" style="margin-left: 1rem">TO DO APP</a>
                            <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6" style="margin-right: 1rem">
                                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                            <nav :class="{'block': open, 'hidden': !open}" class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
                                {{-- <x-admin-link :href="route('admin.roles.index')" :active="request()->routeIs('admin.roles.index')">Roles</x-admin-link>
                                <x-admin-link :href="route('admin.roles.index')" :active="request()->routeIs('admin.roles.index')">Roles</x-admin-link> --}}
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('admin.index') }}">Home</a>
                                
                                @if(auth()->user()->hasPermissionTo('create_permission'))
                                    <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('admin.roles.index')}}">Roles</a>
                                @endif
                                @if(auth()->user()->hasPermissionTo('create_permission'))
                                    <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('admin.permissions.index')}}">Permissions</a>
                                @endif
                                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                                    @if(auth()->user()->hasPermissionTo('alter_user_information'))
                                        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                            <span>Users</span>
                                            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        </button>
                                    @endif
                                    
                                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-700">
                                            @if(auth()->user()->hasPermissionTo('alter_user_information'))
                                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('admin.users.index')}}">User Information</a>
                                            @endif
                                            @if(auth()->user()->hasPermissionTo('view_all_tasks'))
                                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('admin.users.showTasks')}}">Task Assignment</a>
                                            @endif
                                            @if(auth()->user()->hasPermissionTo('add_user'))
                                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('admin.users.add')}}">Add User</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </nav>
                    </div>
                    <main>
                        {{ $slot }}
                    </main>
                </div>
            
            <!-- Page Content -->
            
        
        </div>
    </body>

    
</html>
