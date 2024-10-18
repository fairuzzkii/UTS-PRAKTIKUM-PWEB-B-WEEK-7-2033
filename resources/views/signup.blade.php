@extends('components.template')
@section('title','Create New Account')
@section('content')

<section class="flex min-h-screen">

    
    <div class="hidden md:flex w-1/2 bg-gradient-to-r from-red-500 via-red-600 to-red-800 items-center justify-center">
        <div class="flex items-end justify-center space-x-4">
            <div class="bg-purple-500 w-16 h-32 rounded-lg flex justify-center items-center">
                <span class="text-white text-3xl">😃</span>
            </div>
            <div class="bg-black w-12 h-24 rounded-lg flex justify-center items-center">
                <span class="text-white text-2xl">👁️</span>
            </div>
            <div class="bg-orange-400 w-24 h-16 rounded-full flex justify-center items-center">
                <span class="text-white text-3xl">😊</span>
            </div>
            <div class="bg-yellow-500 w-12 h-24 rounded-full flex justify-center items-center">
                <span class="text-black text-3xl">😐</span>
            </div>
        </div>
    </div>

    <div class="w-full md:w-1/2 flex items-center justify-center bg-zinc-900 p-8">
        <div class="w-full max-w-md bg-zinc-900 p-6 rounded-lg">
            <h1 class="text-3xl font-bold text-white mb-4">Create New Account</h1>

           
            <div>
                
                <div class="mb-4">
                    <label for="first_name" class="block text-sm font-medium text-gray-300">First name</label>
                    <input type="text" name="first_name" id="first_name" placeholder="Enter your first name"
                        class="w-full mt-1 p-2.5 border border-zinc-900 rounded-lg bg-zinc-700 text-white focus:ring-red-500 focus:border-red-500" required>
                </div>

                
                <div class="mb-4">
                    <label for="last_name" class="block text-sm font-medium text-gray-300">Last name</label>
                    <input type="text" name="last_name" id="last_name" placeholder="Enter your last name"
                        class="w-full mt-1 p-2.5 border border-zinc-900 rounded-lg bg-zinc-700 text-white focus:ring-red-500 focus:border-red-500" required>
                </div>

                
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email"
                        class="w-full mt-1 p-2.5 border border-zinc-900 rounded-lg bg-zinc-700 text-white focus:ring-red-500 focus:border-red-500" required>
                </div>

               
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-300">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password"
                        class="w-full mt-1 p-2.5 border border-zinc-900 rounded-lg bg-zinc-700 text-white focus:ring-red-500 focus:border-red-500" required>
                </div>

                
                <a href="/home">
                    <button class="w-full bg-red-600 text-white font-medium rounded-lg px-4 py-2 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-opacity-50">
                        Create Account
                    </button>
                </a>

              
                <p class="mt-4 text-sm text-center text-gray-400">
                    Already a member? <a href="/login" class="text-red-400 hover:underline">Log In</a>
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
