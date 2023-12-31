<x-user-input-layout>

    <form method="POST" action="{{ route('signup') }}" novalidate class="space-y-4 md:space-y-6">

        @csrf

        <div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-white">Username</label>
                <input type="text" name="name" id="name"
                    class="border sm:text-sm rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-500 text-white"
                    placeholder="username" value="{{ old('name') }}">
                <div class="h-2 mt-1">
                    @error('name')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-white">Email Address</label>
                <input type="email" name="email" id="email"
                    class="border sm:text-sm rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-500 text-white"
                    placeholder="example@gmail.com" value="{{ old('email') }}">
                <div class="h-2 mt-1">
                    @error('email')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                <input type="password" name="password" id="password" placeholder="••••••••"
                    class=" border sm:text-sm rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-500 text-white mb-2">
                <div class="h-2 mt-1">
                    @error('password')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mt-3">
                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-white">Confirm
                    Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••"
                    class=" border sm:text-sm rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-500 text-white mb-2">
                <div class="h-2 mt-1">
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <button type="submit"
                class="w-full mt-6 text-white bg-gray-900 hover:bg-grayMain border border-gray-900 hover:border-gray-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Sign up</button>

            <div class="flex justify-center mt-8 opacity-75 text-sm">
                <p class="mr-2">Already have an account?</p>
                <a href="{{ route('login') }}" class="text-blue-500">Log in</a>
            </div>

        </div>
    </form>

</x-user-input-layout>
