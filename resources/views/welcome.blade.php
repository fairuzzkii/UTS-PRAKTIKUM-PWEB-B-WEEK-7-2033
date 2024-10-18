@extends('components.template')
@section('title','Welcome')
@section('content')

@include('components.nav', ['showNav' => 'nav1'])

<section class="font-sans antialiased dark:bg-black dark:text-white/50 h-screen flex items-center justify-center">
    <div class="text-black/50 dark:bg-black dark:text-white/50 relative w-full h-full flex items-center justify-center">
        <img id="background" class="absolute -left-20 max-w-[900px] h-full" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" />
        <div class="relative text-center">
            <div class="w-full">
                <section class="bg-transparent flex-grow">
                    <div class="py-16 px-4 mx-auto max-w-screen-xl lg:py-16">
                        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Hello...</h1>
                        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">
                            Ini adalah UTS Praktikum Pemrograman Berbasis Web menggunakan Laravel
                        </p>
                        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                            <a href="/login" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-[#FF2D20] hover:bg-red-900 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                Get started
                                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a>
                            <a href="https://laravel.com/" class="py-3 px-5 sm:ms-4 text-sm font-medium text-white focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-900 hover:text-red-900 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-70">
                                Learn more
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>

@endsection
