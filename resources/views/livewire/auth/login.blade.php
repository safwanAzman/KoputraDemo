@section('title', 'Sign in to your account')

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
                <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Log in to your account</h1>
                <form wire:submit.prevent="authenticate" class="mt-6">
                    <div>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input wire:model.lazy="email" id="email" name="email" type="email" placeholder="Enter Email Address"
                            required autofocus class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-pink-800 focus:bg-white focus:outline-none 
                            @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
                        </div>

                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <div class="mt-1 rounded-md shadow-sm">
                            <input wire:model.lazy="password" id="password" type="password" placeholder="Enter Password"
                            required class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-pink-800 focus:bg-white focus:outline-none 
                            @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
                        </div>

                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center">
                            <input wire:model.lazy="remember" id="remember" type="checkbox" class="form-checkbox w-4 h-4 text-pink-800 transition duration-150 ease-in-out" />
                            <label for="remember" class="block ml-2 text-sm text-gray-900 leading-5">
                                Remember
                            </label>
                        </div>

                        <div class="text-sm leading-5">
                            <a href="{{ route('password.request') }}" class="text-sm font-semibold text-gray-700 hover:text-pink-800 focus:text-pink-800">
                                Forgot your password?
                            </a>
                        </div>
                    </div>

                    <div class="mt-6">
                        <span class="block w-full rounded-md shadow-sm">
                            <button type="submit" class="w-full block bg-pink-800 hover:bg-pink-900 focus:bg-pink-800 text-white font-semibold rounded-lg px-4 py-3 mt-6">
                                Sign in
                            </button>
                        </span>
                    </div>
                </form>

                <hr class="my-6 border-gray-300 w-full">

                <p class="mt-8">Need an account? 
                    <a href="{{ route('register') }}" class="text-pink-800 hover:text-pink-900 font-semibold">
                        Create an account
                    </a>
                </p>
            </div>
        </div>
    </section>
</div>