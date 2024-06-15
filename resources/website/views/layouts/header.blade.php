<header>
    <nav class="bg-blue-300 border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap justify-between mx-auto max-w-screen-2xl p-4">
            <div class="flex flex-nowrap gap-5 items-end">
                <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('assets/images/logo.png') }}" class="h-16" alt="Flowbite Logo" />
                </a>

                <form class="max-w-md mx-auto w-[800px]">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-5 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full p-4 ps-11 pr-[90px] text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="find product..." required />
                        <button type="submit" class="text-white absolute end-[5px] bottom-[5px] bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-3 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>
            </div>

            <div class="flex items-end space-x-8 rtl:space-x-reverse">
                <div class="flex flex-col items-center">
                    <i class="text-2xl fa-solid fa-circle-user"></i>
                    <h1 class="text-sm">Hello, Log in</h1>
                </div>
                <div class="flex flex-col items-center">
                    <i class="text-2xl fa-solid fa-cart-shopping"></i>
                    <h1 class="text-sm">My cart</h1>
                </div>
                <div class="flex flex-col items-center">
                    <i class="text-2xl fa-solid fa-people-roof"></i>
                    <h1 class="text-sm">About us</h1>
                </div>
            </div>
        </div>
    </nav>
    <nav class="bg-blue-500 dark:bg-gray-700 relative">
        <div class="max-w-screen-xl py-3 mx-auto">
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="flex flex-row font-medium w-full mt-0 space-x-4 rtl:space-x-reverse text-sm items-center">
                    <!-- computer -->
                    <li x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <a class="text-slate-800 py-2 hover:text-slate-50" href="#0" :aria-expanded="open">Computer</a>
                        <button class="shrink-0 p-1" :aria-expanded="open" @click.prevent="open = !open">
                            <span class="sr-only">Show submenu for "Flyout Menu"</span>
                        </button>
                        <!-- 2nd level menu -->
                        <div class="!m-0 absolute w-5/6 max-w-screen-xl h-[32rem] top-[100%] left-1/2 -translate-x-1/2 bg-opacity-[0.8] border border-slate-200 shadow-xl [&[x-cloak]]:hidden" x-show="open" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)">
                            <div class="grid grid-cols-4 space-x-2 max-w-screen-xl w-full mx-auto bg-white place-items-center">
                                <table>
                                    <thead>
                                        <tr>
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                            <img src="{{asset('assets/images/mac.jpeg')}}" alt="">
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="border border-gray-100 mt-6"></div>
                            <!-- see more -->
                            <div class="text text-center text-slate-500 text-lg mt-1">See More
                                <button class="shrink-0 p-1">
                                    <span class="sr-only"></span>
                                    <svg class="w-3 h-3 fill-slate-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                        <path d="M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z" />
                                    </svg>
                                </button>
                            </div>
                            <!-- list -->
                            <div class="grid grid-cols-4 space-x-2 max-w-screen-xl w-full mx-auto bg-white place-items-center mt-2">
                                <table>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </li>
                    <!-- <li>
                        <a href="{{ route('category') }}"
                            class="text-gray-900 dark:text-white hover:underline">category</a>
                    </li> -->
                    <!-- projector -->
                    <li x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <a class="text-slate-800 py-2 hover:text-slate-900" href="#0" :aria-expanded="open">Projector</a>
                        <button class="shrink-0 p-1" :aria-expanded="open" @click.prevent="open = !open">
                            <span class="sr-only">Show submenu for "Flyout Menu"</span>
                        </button>
                        <!-- 2nd level menu -->
                        <div class="!m-0 absolute w-5/6 max-w-screen-xl h-screen top-[100%] left-1/2 -translate-x-1/2 bg-opacity-[0.8] border border-slate-200 shadow-xl [&[x-cloak]]:hidden" x-show="open" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)">
                            <div class="grid grid-cols-4 space-x-2 max-w-screen-xl w-full mx-auto bg-white place-items-center">
                                <table>
                                    <thead>
                                        <tr>
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                            <img src="{{asset('assets/images/mac.jpeg')}}" alt="">
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="border border-gray-100 mt-6"></div>
                            <!-- see more -->
                            <div class="text text-center text-slate-500 text-lg mt-1">See More
                                <button class="shrink-0 p-1">
                                    <span class="sr-only"></span>
                                    <svg class="w-3 h-3 fill-slate-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                        <path d="M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z" />
                                    </svg>
                                </button>
                            </div>
                            <!-- list -->
                            <div class="grid grid-cols-4 space-x-2 max-w-screen-xl w-full mx-auto bg-white place-items-center mt-2">
                                <table>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </li>
                    <!-- Docking Station -->
                    <li x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <a class="text-slate-800 py-2 hover:text-slate-900" href="#0" :aria-expanded="open">Docking Station</a>
                        <button class="shrink-0 p-1" :aria-expanded="open" @click.prevent="open = !open">
                            <span class="sr-only">Show submenu for "Flyout Menu"</span>
                        </button>
                        <!-- 2nd level menu -->
                        <div class="!m-0 absolute w-5/6 max-w-screen-xl h-screen top-[100%] left-1/2 -translate-x-1/2 bg-opacity-[0.8] border border-slate-200 shadow-xl [&[x-cloak]]:hidden" x-show="open" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)">
                            <div class="grid grid-cols-4 space-x-2 max-w-screen-xl w-full mx-auto bg-white place-items-center">
                                <table>
                                    <thead>
                                        <tr>
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                            <img src="{{asset('assets/images/mac.jpeg')}}" alt="">
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="border border-gray-100 mt-6"></div>
                            <!-- see more -->
                            <div class="text text-center text-slate-500 text-lg mt-1">See More
                                <button class="shrink-0 p-1">
                                    <span class="sr-only"></span>
                                    <svg class="w-3 h-3 fill-slate-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                        <path d="M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z" />
                                    </svg>
                                </button>
                            </div>
                            <!-- list -->
                            <div class="grid grid-cols-4 space-x-2 max-w-screen-xl w-full mx-auto bg-white place-items-center mt-2">
                                <table>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </li>
                    <!-- connector -->
                    <li x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <a class="text-slate-800 py-2 hover:text-slate-900" href="#0" :aria-expanded="open">Connector</a>
                        <button class="shrink-0 p-1" :aria-expanded="open" @click.prevent="open = !open">
                            <span class="sr-only">Show submenu for "Flyout Menu"</span>
                        </button>
                        <!-- 2nd level menu -->
                        <div class="!m-0 absolute w-5/6 max-w-screen-xl h-screen top-[100%] left-1/2 -translate-x-1/2 bg-opacity-[0.8] border border-slate-200 shadow-xl [&[x-cloak]]:hidden" x-show="open" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)">
                            <div class="grid grid-cols-4 space-x-2 max-w-screen-xl w-full mx-auto bg-white place-items-center">
                                <table>
                                    <thead>
                                        <tr>
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                            <img src="{{asset('assets/images/mac.jpeg')}}" alt="">
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="border border-gray-100 mt-6"></div>
                            <!-- see more -->
                            <div class="text text-center text-slate-500 text-lg mt-1">See More
                                <button class="shrink-0 p-1">
                                    <span class="sr-only"></span>
                                    <svg class="w-3 h-3 fill-slate-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                        <path d="M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z" />
                                    </svg>
                                </button>
                            </div>
                            <!-- list -->
                            <div class="grid grid-cols-4 space-x-2 max-w-screen-xl w-full mx-auto bg-white place-items-center mt-2">
                                <table>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </li>
                    <!-- Drone & Camcoders -->
                    <li x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <a class="text-slate-800 py-2 hover:text-slate-900" href="#0" :aria-expanded="open">Drone & Camcoders</a>
                        <button class="shrink-0 p-1" :aria-expanded="open" @click.prevent="open = !open">
                            <span class="sr-only">Show submenu for "Flyout Menu"</span>
                        </button>
                        <!-- 2nd level menu -->
                        <div class="!m-0 absolute w-5/6 max-w-screen-xl h-screen top-[100%] left-1/2 -translate-x-1/2 bg-opacity-[0.8] border border-slate-200 shadow-xl [&[x-cloak]]:hidden" x-show="open" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)">
                            <div class="grid grid-cols-4 space-x-2 max-w-screen-xl w-full mx-auto bg-white place-items-center">
                                <table>
                                    <thead>
                                        <tr>
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                            <img src="{{asset('assets/images/mac.jpeg')}}" alt="">
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="border border-gray-100 mt-6"></div>
                            <!-- see more -->
                            <div class="text text-center text-slate-500 text-lg mt-1">See More
                                <button class="shrink-0 p-1">
                                    <span class="sr-only"></span>
                                    <svg class="w-3 h-3 fill-slate-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                        <path d="M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z" />
                                    </svg>
                                </button>
                            </div>
                            <!-- list -->
                            <div class="grid grid-cols-4 space-x-2 max-w-screen-xl w-full mx-auto bg-white place-items-center mt-2">
                                <table>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </li>
                    <!-- Cables -->
                    <li x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <a class="text-slate-800 py-2 hover:text-slate-900" href="#0" :aria-expanded="open">Cables</a>
                        <button class="shrink-0 p-1" :aria-expanded="open" @click.prevent="open = !open">
                            <span class="sr-only">Show submenu for "Flyout Menu"</span>
                        </button>
                        <!-- 2nd level menu -->
                        <div class="!m-0 absolute w-5/6 max-w-screen-xl h-screen top-[100%] left-1/2 -translate-x-1/2 bg-opacity-[0.8] border border-slate-200 shadow-xl [&[x-cloak]]:hidden" x-show="open" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)">
                            <div class="grid grid-cols-4 space-x-2 max-w-screen-xl w-full mx-auto bg-white place-items-center">
                                <table>
                                    <thead>
                                        <tr>
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                            <img src="{{asset('assets/images/mac.jpeg')}}" alt="">
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="border border-gray-100 mt-6"></div>
                            <!-- see more -->
                            <div class="text text-center text-slate-500 text-lg mt-1">See More
                                <button class="shrink-0 p-1">
                                    <span class="sr-only"></span>
                                    <svg class="w-3 h-3 fill-slate-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                        <path d="M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z" />
                                    </svg>
                                </button>
                            </div>
                            <!-- list -->
                            <div class="grid grid-cols-4 space-x-2 max-w-screen-xl w-full mx-auto bg-white place-items-center mt-2">
                                <table>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </li>
                    <!-- Audio-Visual -->
                    <li x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <a class="text-slate-800 py-2 hover:text-slate-900" href="#0" :aria-expanded="open">Audio-Visual</a>
                        <button class="shrink-0 p-1" :aria-expanded="open" @click.prevent="open = !open">
                            <span class="sr-only">Show submenu for "Flyout Menu"</span>
                        </button>
                        <!-- 2nd level menu -->
                        <div class="!m-0 absolute w-5/6 max-w-screen-xl h-screen top-[100%] left-1/2 -translate-x-1/2 bg-opacity-[0.8] border border-slate-200 shadow-xl [&[x-cloak]]:hidden" x-show="open" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)">
                            <div class="grid grid-cols-4 space-x-2 max-w-screen-xl w-full mx-auto bg-white place-items-center">
                                <table>
                                    <thead>
                                        <tr>
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                            <img src="{{asset('assets/images/mac.jpeg')}}" alt="">
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="border border-gray-100 mt-6"></div>
                            <!-- see more -->
                            <div class="text text-center text-slate-500 text-lg mt-1">See More
                                <button class="shrink-0 p-1">
                                    <span class="sr-only"></span>
                                    <svg class="w-3 h-3 fill-slate-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                        <path d="M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z" />
                                    </svg>
                                </button>
                            </div>
                            <!-- list -->
                            <div class="grid grid-cols-4 space-x-2 max-w-screen-xl w-full mx-auto bg-white place-items-center mt-2">
                                <table>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </li>
                    <!-- Software -->
                    <li x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <a class="text-slate-800 py-2 hover:text-slate-900" href="#0" :aria-expanded="open">Software</a>
                        <button class="shrink-0 p-1" :aria-expanded="open" @click.prevent="open = !open">
                            <span class="sr-only">Show submenu for "Flyout Menu"</span>
                        </button>
                        <!-- 2nd level menu -->
                        <div class="!m-0 absolute w-5/6 max-w-screen-xl h-screen top-[100%] left-1/2 -translate-x-1/2 bg-opacity-[0.8] border border-slate-200 shadow-xl [&[x-cloak]]:hidden" x-show="open" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)">
                            <div class="grid grid-cols-4 space-x-2 max-w-screen-xl w-full mx-auto bg-white place-items-center">
                                <table>
                                    <thead>
                                        <tr>
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                            <img src="{{asset('assets/images/mac.jpeg')}}" alt="">
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="border border-gray-100 mt-6"></div>
                            <!-- see more -->
                            <div class="text text-center text-slate-500 text-lg mt-1">See More
                                <button class="shrink-0 p-1">
                                    <span class="sr-only"></span>
                                    <svg class="w-3 h-3 fill-slate-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                        <path d="M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z" />
                                    </svg>
                                </button>
                            </div>
                            <!-- list -->
                            <div class="grid grid-cols-4 space-x-2 max-w-screen-xl w-full mx-auto bg-white place-items-center mt-2">
                                <table>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </li>
                    <!-- Surveillance -->
                    <li x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <a class="text-slate-800 py-2 hover:text-slate-900" href="#0" :aria-expanded="open">Surveillance</a>
                        <button class="shrink-0 p-1" :aria-expanded="open" @click.prevent="open = !open">
                            <span class="sr-only">Show submenu for "Flyout Menu"</span>
                        </button>
                        <!-- 2nd level menu -->
                        <div class="!m-0 absolute w-5/6 max-w-screen-xl h-screen top-[100%] left-1/2 -translate-x-1/2 bg-opacity-[0.8] border border-slate-200 shadow-xl [&[x-cloak]]:hidden" x-show="open" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)">
                            <div class="grid grid-cols-4 space-x-2 max-w-screen-xl w-full mx-auto bg-white place-items-center">
                                <table>
                                    <thead>
                                        <tr>
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                            <img src="{{asset('assets/images/mac.jpeg')}}" alt="">
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="border border-gray-100 mt-6"></div>
                            <!-- see more -->
                            <div class="text text-center text-slate-500 text-lg mt-1">See More
                                <button class="shrink-0 p-1">
                                    <span class="sr-only"></span>
                                    <svg class="w-3 h-3 fill-slate-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                        <path d="M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z" />
                                    </svg>
                                </button>
                            </div>
                            <!-- list -->
                            <div class="grid grid-cols-4 space-x-2 max-w-screen-xl w-full mx-auto bg-white place-items-center mt-2">
                                <table>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </li>
                    <!-- clearance -->
                    <li x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <a class="text-slate-800 py-2 hover:text-slate-900" href="#0" :aria-expanded="open">Clearance</a>
                        <button class="shrink-0 p-1" :aria-expanded="open" @click.prevent="open = !open">
                            <span class="sr-only">Show submenu for "Flyout Menu"</span>
                            <!-- <svg class="w-3 h-3 fill-slate-500" xmlns="http://www.w3.org/2000/svg" width="12"
                                height="12">
                                <path d="M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z" />
                            </svg> -->
                        </button>
                        <!-- 2nd level menu -->
                        <div class="!m-0 absolute w-5/6 max-w-screen-xl h-screen top-[100%] left-1/2 -translate-x-1/2 bg-opacity-[0.8] border border-slate-200 shadow-xl [&[x-cloak]]:hidden" x-show="open" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)">
                            <div class="grid grid-cols-4 space-x-2 max-w-screen-xl w-full mx-auto bg-white place-items-center">
                                <table>
                                    <thead>
                                        <tr>
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                            <img src="{{asset('assets/images/mac.jpeg')}}" alt="">
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="border border-gray-100 mt-6"></div>
                            <!-- see more -->
                            <div class="text text-center text-slate-500 text-lg mt-1">See More
                                <button class="shrink-0 p-1">
                                    <span class="sr-only"></span>
                                    <svg class="w-3 h-3 fill-slate-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                        <path d="M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z" />
                                    </svg>
                                </button>
                            </div>
                            <!-- list -->
                            <div class="grid grid-cols-4 space-x-2 max-w-screen-xl w-full mx-auto bg-white place-items-center mt-2">
                                <table>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </li>
                    <!-- special education -->
                    <li x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <a class="text-slate-800 py-2 hover:text-slate-900" href="#0" :aria-expanded="open">Special Education</a>
                        <button class="shrink-0 p-1" :aria-expanded="open" @click.prevent="open = !open">
                            <span class="sr-only">Show submenu for "Flyout Menu"</span>
                            <!-- <svg class="w-3 h-3 fill-slate-500" xmlns="http://www.w3.org/2000/svg" width="12"
                                height="12">
                                <path d="M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z" />
                            </svg> -->
                        </button>
                        <!-- 2nd level menu -->
                        <div class="!m-0 absolute w-5/6 max-w-screen-xl h-screen top-[100%] left-1/2 -translate-x-1/2 bg-opacity-[0.8] border border-slate-200 shadow-xl [&[x-cloak]]:hidden" x-show="open" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)">
                            <div class="grid grid-cols-4 space-x-2 max-w-screen-xl w-full mx-auto bg-white place-items-center">
                                <table>
                                    <thead>
                                        <tr>
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                            <img src="{{asset('assets/images/mac.jpeg')}}" alt="">
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                            <img src="{{asset('assets/images/laptop.webp')}}" alt="">
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="border border-gray-100 mt-6"></div>
                            <!-- see more -->
                            <div class="text text-center text-slate-500 text-lg mt-1">See More
                                <button class="shrink-0 p-1">
                                    <span class="sr-only"></span>
                                    <svg class="w-3 h-3 fill-slate-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                        <path d="M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z" />
                                    </svg>
                                </button>
                            </div>
                            <!-- list -->
                            <div class="grid grid-cols-4 space-x-2 max-w-screen-xl w-full mx-auto bg-white place-items-center mt-2">
                                <table>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                        <tr>
                                            <h1>Laptop</h1>
                                            <h1>MacBook</h1>
                                            <h1>Ipads & Tablets</h1>
                                            <h1>DeskTop</h1>
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>