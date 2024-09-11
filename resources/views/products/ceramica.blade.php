<x-layout>
    <div>

        <x-allnav></x-allnav>

        <form class="ml-10  max-w-96 ">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class=" font-common block  p-4 ps-10 text-sm text-black border border-gray-300 rounded-full   dark:bg-gray-300    "
                    placeholder="  Buscar" required />

            </div>
        </form>
    </div>


    <div class="grid grid-cols-4 mx-4 mt-36 mb-16 font-common text-2xl">
        @foreach ($products as $item)
        <x-card src='{{ asset("/img/productos/ceramica$item->id.jpeg") }}' id="{{$item->id}}" name="{{$item->name}}"/>
        @endforeach
    </div>


</x-layout>
