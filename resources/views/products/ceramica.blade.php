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

    <div class="columns-4 mt-36 ml-16 mb-16 font-common text-2xl">
        <x-card  src="/img/c6.jpeg"> </x-card>
        <p class="text-center">Taza con una mariposa</p>
        <x-card    src="/img/c1.jpeg">  </x-card>
        <p class="text-center mr-2"> Joyero en forma de caracol</p>
        <x-card  src="/img/c2.jpeg"> </x-card>
        <p class="text-center"> Tetera con diseño floral</p>
        <x-card    src="/img/c3.jpeg"> </x-card>
        <p class="text-center">Set mariposa y flores</p>
    </div>

    </div class="column-end">

    <div class="columns-4 mt-36 ml-16 mb-16 font-common text-2xl ">
        <x-card  src="/img/c4.jpeg">  </x-card>
        <p class="text-center">Set forma cactus</p>
        <x-card  src="/img/c5.jpeg"> </x-card>
        <p class="text-center"> Vasos para café</p>
        <x-card  src="/img/c6.jpeg"> </x-card>
        <p class="text-center">Taza con una mariposa</p>
        <x-card    src="/img/c1.jpeg"> </x-card>
        <p class="text-center">Joyero en forma de caracol</p>

    </div>


</x-layout>
