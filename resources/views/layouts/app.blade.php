<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home || Laratacts</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
        type="button"
        class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <aside id="default-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                {{-- <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <img src="{{ asset('images/dashboard.png') }}" alt=""
                            class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <span class="flex-1 ms-3 whitespace-nowrap">Dashboard</span>
                    </a>
                </li> --}}
                <li>
                    <a href="{{ route('contacts') }}"
                        class="{{ request()->routeIs('contacts') ? 'flex items-center p-2 text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 group bg-blue-500' : 'flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group ' }}">
                        <img src="{{ asset('images/contacts.png') }}" alt=""
                            class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <span class="flex-1 ms-3 whitespace-nowrap">All Contacts</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('new') }}"
                        class="{{ request()->routeIs('new') ? 'flex items-center p-2 text-gray-900  hover:bg-gray-100 dark:hover:bg-gray-700 group bg-blue-500' : 'flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group ' }}">
                        <img src="{{ asset('images/add.png') }}" alt=""
                            class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <span class="flex-1 ms-3 whitespace-nowrap">New Contact</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('favorite') }}"
                        class="{{ request()->routeIs('favorite') ? 'flex items-center p-2 text-gray-900  hover:bg-gray-100 dark:hover:bg-gray-700 group bg-blue-500' : 'flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group ' }}">
                        <img src="{{ asset('images/favorite.png') }}" alt=""
                            class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <span class="flex-1 ms-3 whitespace-nowrap">Favorite Contacts</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('groups') }}"
                        class="{{ request()->routeIs('groups') ? 'flex items-center p-2 text-gray-900  hover:bg-gray-100 dark:hover:bg-gray-700 group bg-blue-500' : 'flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group ' }}">
                        <img src="{{ asset('images/group.png') }}" alt=""
                            class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <span class="flex-1 ms-3 whitespace-nowrap">Contact Groups</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('import') }}"
                        class="{{ request()->routeIs('import') ? 'flex items-center p-2 text-gray-900  hover:bg-gray-100 dark:hover:bg-gray-700 group bg-blue-500' : 'flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group ' }}">
                        <img src="{{ asset('images/import.png') }}" alt=""
                            class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <span class="flex-1 ms-3 whitespace-nowrap">Import Contacts</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('export') }}"
                        class="{{ request()->routeIs('export') ? 'flex items-center p-2 text-gray-900  hover:bg-gray-100 dark:hover:bg-gray-700 group bg-blue-500' : 'flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group ' }}">
                        <img src="{{ asset('images/export.png') }}" alt=""
                            class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <span class="flex-1 ms-3 whitespace-nowrap">Export Contacts</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('settings') }}"
                        class="{{ request()->routeIs('settings') ? 'flex items-center p-2 text-gray-900  hover:bg-gray-100 dark:hover:bg-gray-700 group bg-blue-500' : 'flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group ' }}">
                        <img src="{{ asset('images/settings.png') }}" alt=""
                            class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <span class="flex-1 ms-3 whitespace-nowrap">Settings 1621</span>
                    </a>
                </li>
                <li>
                    <a href=" {{ route('logout') }}"
                        class="{{ request()->routeIs('logout') ? 'flex items-center p-2 text-gray-900  hover:bg-gray-100 dark:hover:bg-gray-700 group bg-blue-500' : 'flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group ' }}">
                        <img src="{{ asset('images/logout.png') }}" alt=""
                            class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64">

        <form class="flex items-center max-w-sm mx-auto bg-white w-full">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                {{-- <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                    </svg>
                </div> --}}
                <input type="text" id="simple-search"
                    class="bg-white border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 placeholder-gray-500"
                    placeholder="Search branch name..." required />
            </div>
            <button type="submit"
                class="p-2.5 ms-2 text-sm  flex font-medium text-white bg-blue-700  border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                {{-- <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg> --}}
                <p>Find</p>
                
                <span class="sr-only">Search</span>
            </button>
        </form> <br>
        <hr class="">



        <div class="content">
            @yield('content')
        </div>

    </div>

</body>

</html>
