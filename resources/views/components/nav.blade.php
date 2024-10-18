<nav class="bg-white border-gray-200 dark:bg-black">
    <div class="max-w-screen-xl mx-auto p-4 flex items-center justify-between">       
        <div class="flex-shrink-0">
            <h1 class="text-lg font-bold text-gray-900 dark:text-white">
                Muhammad Fairuz Zaki
            </h1>
        </div>       
        <div class="ml-auto">
            <ul class="font-medium flex flex-row space-x-8 text-right">
                @if($showNav === 'nav1')
                    <li>
                        <a href="/login"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:text-[#FF2D20] md:hover:bg-transparent md:border-0 md:hover:text-[#FF2D20] md:p-0 dark:text-white md:dark:hover:text-[#FF2D20] dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                            aria-current="page">Login</a>
                    </li>
                    <li>
                        <a href="/signup"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:text-[#FF2D20] md:hover:bg-transparent md:border-0 md:hover:text-[#FF2D20] md:p-0 dark:text-white md:dark:hover:text-[#FF2D20] dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                            aria-current="page">Sign Up</a>
                    </li>
                @else
                    <li>
                        <a href="/"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:text-[#FF2D20] md:hover:bg-transparent md:border-0 md:hover:text-[#FF2D20] md:p-0 dark:text-white md:dark:hover:text-[#FF2D20] dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/login"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:text-[#FF2D20] md:hover:bg-transparent md:border-0 md:hover:text-[#FF2D20] md:p-0 dark:text-white md:dark:hover:text-[#FF2D20] dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                            aria-current="page">Login</a>
                    </li>
                    <li>
                        <a href="/signup"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:text-[#FF2D20] md:hover:bg-transparent md:border-0 md:hover:text-[#FF2D20] md:p-0 dark:text-white md:dark:hover:text-[#FF2D20] dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                            aria-current="page">Sign Up</a>
                    </li>
                   
                @endif
            </ul>
        </div>
    </div>
</nav>
