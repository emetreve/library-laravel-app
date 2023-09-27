<x-layout>

    <div class="bg-grayMain min-h-screen py-20 text-white">

        <div class="flex mb-8 justify-between w-1/2 lg:w-1/3 mx-auto">
            <h1 class="text-xl font-bold leading-tight tracking-tight  md:text-2xl">
                Authors
            </h1>
            <div>
                <a href={{ route('authors.create') }} class="border rounded border-neutral-400 py-1 px-2">
                    Add new</a>
                <a href={{ route('dashboard') }} class="border rounded opacity-60 border-neutral-400 py-1 px-2">
                    Back to Dashboard</a>
            </div>
        </div>

        <div class="bg-gray-700 sm:text-sm rounded-lg w-1/2 lg:w-1/3 mx-auto">
            @foreach ($authors as $author)
                <p class="block w-full p-2.5 border-none">
                    {{ $author->name }}</p>
            @endforeach
        </div>

    </div>

</x-layout>
