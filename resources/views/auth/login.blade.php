<x-user-input-layout>


    @if (session('success'))
        <div class="text-green-600 text-xl font-bold leading-tight tracking-tight  md:text-2xl pb-6">
            {{ session('success') }}
        </div>
    @else
        <h1 class="text-xl font-bold leading-tight tracking-tight  md:text-2xl text-white pb-6">
            Sign in to your account
        </h1>
    @endif
    <form method="POST" action="" novalidate class="space-y-4 md:space-y-6">

        @csrf

        <div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-white">Email Address</label>
                <input type="email" name="email" id="email"
                    class="border sm:text-sm rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-500 text-white"
                    placeholder="example@gmail.com">
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

            <button type="submit"
                class="w-full mt-6 text-white bg-gray-900 hover:bg-customGray border border-gray-900 hover:border-gray-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Log in</button>

        </div>
    </form>
</x-user-input-layout>
