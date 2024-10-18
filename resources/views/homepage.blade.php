@extends('components.template')
@section('title','homepage')
@section('content')
@include('components.nav', ['showNav' => 'nav2'])


<section class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <img id="background" class="absolute -left-20 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" />
        <div class="relative min-h-screen   items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="bg-transparent text-black/50 dark:bg-transparent dark:text-white/50">
                <div class="bg-transparent">
                    <div class="py-8 px-4 mx-auto max-w-full text-center lg:py-8">
                        <h1 class="mb-2 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Laravel Users Contacs</h1>
                    </div>
                </div>

                <div class="w-30 mx-20 bg-white dark:bg-zinc-800 shadow-md rounded-lg p-5 mt-4">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-m text-left rtl:text-right text-white dark:text-white rounded-lg">
                            <thead class="text-l text-white uppercase bg-gray-50 dark:bg-zinc-700 dark:text-white rounded-lg">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        No.
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Phone
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr class="text-l bg-white border-b dark:bg-zinc-800 dark:border-zinc-700 hover:bg-gray-50 dark:hover:bg-gray-600 ">
                                        <td class="px-6 py-4">{{{ $loop->iteration }}}</td>
                                        <td class="px-6 py-4">{{ $contact['name'] }}</td>
                                        <td class="px-6 py-4">{{ $contact['email'] }}</td>
                                        <td class="px-6 py-4">{{ $contact['phone'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section>
@endsection
