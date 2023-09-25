<x-layout>
    <section class="bg-grayMain min-h-screen">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

            <div class="w-full rounded-lg md:mt-0 sm:max-w-md xl:p-0 bg-gray-800">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    {{ $slot }}
                </div>
            </div>

        </div>
    </section>
</x-layout>
