@section('title', 'Create a new account')

<div>
    <section class="flex flex-col md:flex-row h-screen items-center">
        <div class="bg-pink-800 hidden lg:block w-full md:w-1/2 xl:w-3/5 h-screen">
            <img src="https://wallpaperaccess.com/full/1947484.jpg" alt="" class="w-full h-full object-cover">
        </div>
        <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:w-1/2 xl:w-2/5 h-screen px-6 lg:px-16 xl:px-12 flex items-center justify-center">
            <div class="w-full h-100">
                <div class="flex justify-between absolute top-0 py-10">
                    <a href="/">
                        <div class="flex justify-center">
                            <x-logo class="w-auto h-12 " />
                        </div>
                    </a>
                </div>
                <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Create your account</h1>

                <form wire:submit.prevent="register" class="mt-6">
                    <div>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input wire:model.lazy="name" id="name" type="text" required autofocus placeholder="Enter Full Name"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-pink-800 focus:bg-white focus:outline-none 
                            @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
                        </div>

                        @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <div class="mt-1 rounded-md shadow-sm">
                            <input wire:model.lazy="email" id="email" type="email" required  placeholder="Enter Email Address"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-pink-800 focus:bg-white focus:outline-none 
                            @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
                        </div>

                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <div class="mt-1 rounded-md shadow-sm">
                            <input wire:model.lazy="password" id="password" type="password" required placeholder="Enter Password"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-pink-800 focus:bg-white focus:outline-none 
                            @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
                        </div>

                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <div class="mt-1 rounded-md shadow-sm">
                            <input wire:model.lazy="passwordConfirmation" id="password_confirmation" type="password" required placeholder="Confirm Password"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-pink-800 focus:bg-white focus:outline-none " />
                        </div>
                    </div>

                    <div class="mt-6">
                        <span class="block w-full rounded-md shadow-sm">
                            <button type="submit" class="w-full block bg-pink-800 hover:bg-pink-900 focus:bg-pink-800 text-white font-semibold rounded-lg px-4 py-3 mt-6">
                                Register
                            </button>
                        </span>
                    </div>
                </form>

                <hr class="my-6 border-gray-300 w-full">

                <p class="mt-8">have an account? 
                    <a href="{{ route('login') }}" class="text-pink-800 hover:text-pink-900 font-semibold">
                        Sign in
                    </a>
                </p>
            </div>
        </div>
    </section>
</div>
