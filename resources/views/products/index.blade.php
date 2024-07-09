<x-layout>
    <div>

        <nav class="flex  justify-between ">
            <svg class=" ml-3 mt-10 size-10 cursor-pointer fill-black" xmlns="http://www.w3.org/2000/svg" height="24px"
                viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                <path d="M400-80 0-480l400-400 71 71-329 329 329 329-71 71Z" />
            </svg>
            <div>
                <h1 class="flex justify-center mt-5 text font-title text-4xl ">Velas</h1>
            </div>
            <img class="mr-3 cursor-pointer mt-5 w-10 h-10 rounded-full" src="/img/Velas.png" alt="Rounded avatar">
        </nav>


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
                        class=" font-common block w-5/6 p-4 ps-10 text-sm text-black border border-gray-300 rounded-full   dark:bg-gray-300    "
                        placeholder="  Buscar" required />

                </div>
            </form>
    </div>

    <div class="grid grid-cols-2 gap-2">
<Div>
    <x-card title="tecomata" description="Es un tecomate decorado como gallina" price="6.99"></x-card>
    <x-card title="tecomata" description="Es un tecomate decorado como gallina" price="6.99"></x-card>
    <x-card title="tecomata" description="Es un tecomate decorado como gallina" price="6.99"></x-card>
    <x-card title="tecomata" description="Es un tecomate decorado como gallina" price="6.99"></x-card>
</Div>
<div>
    <x-card title="tecomata" description="Es un tecomate decorado como gallina" price="6.99"></x-card>
    <x-card title="tecomata" description="Es un tecomate decorado como gallina" price="6.99"></x-card>
    <x-card title="tecomata" description="Es un tecomate decorado como gallina" price="6.99"></x-card>
    <x-card title="tecomata" description="Es un tecomate decorado como gallina" price="6.99"></x-card>
</div>


    </div>
</x-layout>
