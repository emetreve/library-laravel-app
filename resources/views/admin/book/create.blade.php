<x-user-input-layout>

    <h1 class="mb-8 text-xl font-bold leading-tight tracking-tight  md:text-2xl text-white pb-4">
        Add new book
    </h1>

    <form method="POST" action="{{ route('books.store') }}" novalidate enctype="multipart/form-data"
        class="space-y-4 md:space-y-6">
        @csrf
        <div>

            <div>
                <label for="title" class="block mb-2 text-sm font-medium text-white">Title</label>
                <input value="{{ old('title') }}" type="text" name="title" id="title"
                    class="border sm:text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-500 text-white"
                    placeholder="Start typing the title...">
                <div class="h-6 mt-1">
                    @if ($errors->has('title'))
                        @foreach ($errors->get('title') as $error)
                            <p class="text-red-500 text-xs">{{ $error }}</p>
                        @endforeach
                    @endif
                </div>
            </div>

            <div>
                <label for="year" class="block mb-2 text-sm font-medium text-white">Year</label>
                <input value="{{ old('year') }}" type="text" name="year" id="year"
                    class="border sm:text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-500 text-white"
                    placeholder="Start typing the year...">
                <div class="h-6 mt-1">
                    @if ($errors->has('year'))
                        @foreach ($errors->get('year') as $error)
                            <p class="text-red-500 text-xs">{{ $error }}</p>
                        @endforeach
                    @endif
                </div>
            </div>


            <div class="">
                <label class="block mb-2 text-sm font-medium text-white">Authors</label>
                @foreach ($authors as $author)
                    <label class="mt-2 mr-2">
                        <input type="checkbox" name="authors[]" value="{{ $author->id }}"
                            {{ in_array($author->id, old('authors', [])) ? 'checked' : '' }}>
                        <span class="text-white opacity-75">{{ ucwords($author->name) }}</span>
                    </label>
                @endforeach

                <div class="h-8 mt-2">
                    @if ($errors->has('authors'))
                        @foreach ($errors->get('authors') as $error)
                            <p class="text-red-500 text-xs">{{ $error }}</p>
                        @endforeach
                    @endif
                </div>
            </div>


            <div class="relative mb-5">
                <label class="mb-2 text-sm font-medium text-white mr-2 mt-2 inline relative bottom-[0.2rem]"
                    for="status">Availability</label>
                <input class="w-4 h-4 rounded border-gray-200" type="checkbox" name="status" id="status">
            </div>


            <button type="submit"
                class="w-full text-white bg-gray-900 hover:bg-customGray border border-gray-900 hover:border-gray-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Create Book</button>

        </div>

    </form>
</x-user-input-layout>
