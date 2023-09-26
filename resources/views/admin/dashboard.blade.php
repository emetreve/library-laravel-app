<x-layout>

    <div class=" pt-12 container sm:px-8 bg-grayMain min-h-screen min-w-full">
        <div class="py-8 px-24">
            <div>
                <h2 class="text-2xl font-semibold leading-tight text-white">All Books</h2>
            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="w-2/5 px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xl font-bold text-gray-700 uppercase tracking-wider">
                                    Book Title
                                    <a href="" class="ml-8 text-sm text-green-500 font-extrabold animate-pulse">
                                        Add New Book</a>
                                </th>
                                <th
                                    class="w-3/5 px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xl font-bold text-gray-700 uppercase tracking-wider">
                                    Details
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-md">
                                        <p class="break-all text-customGray font-semibold whitespace-no-wrap">
                                            {{ $book->title }}
                                        </p>
                                        <div class="mt-2">
                                            <a href="" class="text-blue-500">Edit</a>
                                            <form method="POST" class="inline" novalidate action="">
                                                @csrf
                                                @method('DELETE')
                                                <button class="ml-1 text-gray-500">Delete</button>
                                            </form>
                                        </div>
                                    </td>

                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-md">
                                        <div>
                                            <div class="flex">
                                                <p class="mr-2 text-gray-500">Written by:</p>
                                                @foreach ($book->authors as $author)
                                                    <p class="mr-1">
                                                        {{ !$loop->last ? $author->name . ',' : $author->name }}</p>
                                                @endforeach
                                            </div>
                                            <div class="flex">
                                                <p class="break-all mr-1 text-gray-500">Year:</p>
                                                <p class="break-all">{{ $book->year }}</p>
                                            </div>
                                            <p
                                                class="{{ $book->status ? 'text-green-500' : 'text-red-400' }} break-all text-xs font-bold border rounded-xl inline py-1 px-2">
                                                {{ $book->status ? 'available' : 'taken' }}
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-layout>
