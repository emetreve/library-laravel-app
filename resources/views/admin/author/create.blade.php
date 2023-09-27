<x-user-input-layout>

    <h1 class="mb-8 text-xl font-bold leading-tight tracking-tight  md:text-2xl text-white pb-4">
        Add new author
    </h1>

    <form method="POST" action="{{ route('authors.store') }}" novalidate class="space-y-4 md:space-y-6">
        @csrf
        <div>

            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-white">Name</label>
                <input value="{{ old('name') }}" type="text" name="name" id="name"
                    class="border sm:text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-500 text-white"
                    placeholder="Start typing author name...">
                <div class="h-6 mt-1">
                    @if ($errors->has('name'))
                        @foreach ($errors->get('name') as $error)
                            <p class="text-red-500 text-xs">{{ $error }}</p>
                        @endforeach
                    @endif
                </div>
            </div>

            <button type="submit"
                class="w-full text-white bg-gray-900 hover:bg-customGray border border-gray-900 hover:border-gray-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Add Author</button>

        </div>

    </form>
</x-user-input-layout>
