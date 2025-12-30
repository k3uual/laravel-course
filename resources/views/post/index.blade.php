<x-app-layout>
    <div class="py-4"></div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 dark:text-gray-100">
                    <x-category-tabs>
                        No Categories Found
                    </x-category-tabs>

                </div>
            </div>
            <div class="text-gray-900 mt-8"></div>
                <div class="p-4 ">
                    @forelse ($posts as $p)
                        <x-post-item :post="$p"></x-post-item>
                    @empty
                        <div class="text-center"></div>
                    @endforelse
                    
                </div>
                {{  $posts->onEachSide(1)->links()  }}
            </div>
        </div>
    </div>
</x-app-layout>
