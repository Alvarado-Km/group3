<x-layout>
    <div x-data="data">
        <x-allnav/>
        <form class="mt-12 w-full">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative mx-12">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search" x-model="search"
                    class=" font-common block w-full p-4 ps-10 text-sm text-black border border-gray-300 rounded-full"
                    placeholder=" Buscar" required />
            </div>
        </form>

        <div class="grid grid-cols-4 mx-4 mb-16 font-common text-2xl mt-6 h-fit">
            <template x-for="item in filteredProducts">
                <a :href="`/handicrafts/{item.id}`" class=" ml-10 flex flex-col items-center bg-white  rounded-lg  md:flex-row md:max-w-xl  ">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <img :src="`/img/productos/{category.id+'.'+item.id}.jpeg`" class="object-cover size-64 rounded" >
                        <p class="ml-4 mr-4" x-text="item.name"></p>
                    </div>
                </a>
            </template>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('data', () => ({
                search: '',
                category: {!! json_encode($category) !!},
                products: {!! json_encode($category->products) !!},

                get filteredProducts() {
                    return this.products.filter(
                        item => item.name.toLowerCase().includes(this.search.toLowerCase())
                    )
                },
            }))
        })
    </script>
</x-layout>
