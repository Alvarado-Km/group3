<x-layout>
    <div>
        <x-artisannav2> </x-artisannav2>


        <div class="grid grid-cols-2 h-screen ">

            <!-- Columna izquierda: header -->
            <container class=" h-fit grid col-start-1">
                <div class="">
                    <div class="p-6 flex flex-col justify-center">
                        <h1
                            class="text-2xl font-title mb-4 text-red-800 grid justify-center font-bold text-4xl text-underline">
                            Tiendas
                            de
                            artesanías</h1>
                    </div>


                </div>

                <form class="max-w-md mx-auto h-full w-full">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Busca tu tienda más cercana" required />
                    </div>
                </form>

                <!-- Menu cards -->


                <div class="mt-6">
                    <div class="flow-root">
                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center">
                                    <div class="shrink-0">

                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="ml-6 font-medium text-green-800  text-2xl  dark:text-white">
                                            Artesanías Don Pedro
                                        </p>
                                        <p class="text-xl ml-6 text-gray-500 truncate dark:text-gray-400">
                                            Calle Los Artesanos #45, San Salvador
                                        </p>
                                    </div>

                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center ">
                                    <div class="shrink-0">
                                         </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="ml-6 font-medium text-green-800  text-2xl  dark:text-white">
                                            Mercado de Artesanías
                                        </p>
                                        <p class="ml-6 font-medium text-gray-500  text-xl  dark:text-white">
                                            Av. Artesana #123, San Salvador
                                        </p>
                                    </div>

                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center">
                                    <div class="shrink-0">
                                          </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="ml-6 font-medium text-green-800  text-2xl  dark:text-white">
                                            Artesanias la palma
                                        </p>
                                        <p class="ml-6 font-medium text-gray-500  text-xl  dark:text-white">
                                          Calle Principal #10, La Palma, Chalatenango
                                        </p>
                                    </div>

                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center ">
                                    <div class="shrink-0">
                                             </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="ml-6 font-medium text-green-800  text-2xl  dark:text-white">
                                            Ilobasco Artesanal
                                        </p>
                                        <p class="ml-6 font-medium text-gray-500  text-xl  dark:text-white">
                                            Barrio el centro, Ilobasco
                                        </p>
                                    </div>

                                </div>
                            </li>
                            <li class="pt-3 pb-0 sm:pt-4">
                                <div class="flex items-center ">
                                    <div class="shrink-0">
                                           </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="ml-6 font-medium text-green-800  text-2xl  dark:text-white">
                                            Artesanías de Sonsonate
                                        </p>
                                        <p class="ml-6 font-medium text-gray-500  text-xl  dark:text-white">
                                            Calle playa azul, Sonsonate
                                        </p>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


            </container>
            <!-- Columna derecha: mapa -->
            <div class="relative">
                <script type="module" src="./map.js"></script>

                <!-- Selector de estilo -->
             

                <!-- Mapa -->
                <div id="map" class="h-full w-full">
                </div>
            </div>

        </div>

</x-layout>
