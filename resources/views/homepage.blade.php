<x-layout>
    <x-primarynav />

    <!--display-->
    <div id="controls-carousel" class="relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/display1.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="img/display2.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/display3.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/display3.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/docs/images/carousel/carousel-5.svg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <!-- -->
    <swiper-container class="h-[80vh] mt-7" pagination="true" pagination-clickable="true" navigation="true"
        slides-per-view="3" space-between="2" centered-slides="true" loop="true" autoplay="true">
        <swiper-slide class="flex items-center justify-center">
            <img src="img/display1.jpg" class="h-full w-full object-cover">
        </swiper-slide>
        <swiper-slide class="flex items-center justify-center">
            <img src="img/display2.jpg" class="h-full w-full object-cover">
        </swiper-slide>
        <swiper-slide class="flex items-center justify-center">
            <img src="img/display3.jpg" class="h-full w-full object-cover">
        </swiper-slide>
        <swiper-slide class="flex items-center justify-center">
            <img src="img/display4.jpg" class="h-full w-full object-cover">
        </swiper-slide>
        <swiper-slide class="flex items-center justify-center">
            <img src="img/display5.jpg" class="h-full w-full object-cover">
        </swiper-slide>
    </swiper-container>


    <!-- categories titulo -->
    <div class="static">
        <h1 class="text-7xl grid place-items-center font-common my-20 text-red-700">Explora nuestras categorías</h1>
    </div>
    <!-- categories titulo -->

    <!-- categories inicio -->

    <div class="grid grid-cols-5">
        <!-- elemento1 -->
        <div class="grid-cols-1">
            <div class=" gap-y-10 mx-4 mb-16 ml-11">
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a>
                        <img class="rounded-xl" src="/img/categories/joyeria.png" alt="" />
                    </a>

                    <div class="p-0.5">
                        <a>
                            <h5
                                class=" flex items-center justify-center text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                                Joyería y Bisutería</h5>
                        </a>
                    </div>
                </div>
            </div>

            <div class=" gap-y-10 mx-4 mb-16 ml-11">
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a>
                        <img class="rounded-xl" src="/img/categories/vidrio.webp" alt="" />
                    </a>

                    <div class="p-0.5">
                        <a>
                            <h5
                                class="flex items-center justify-center text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                                Vidrio</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- elemento2 -->
        <div class="grid-cols-2">
            <div class=" gap-y-10 mx-4 mb-16 ml-11">
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a>
                        <img class="rounded-xl" src="/img/categories/ceramica.jpg" alt="" />
                    </a>

                    <div class="p-0.5">
                        <a>
                            <h5
                                class="flex items-center justify-center text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                                Cerámica</h5>
                        </a>
                    </div>
                </div>
            </div>

            <div class=" gap-y-10 mx-4 mb-16 ml-11">
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a>
                        <img class="rounded-xl max-h-80" src="/img/categories/instru.jpg" alt="" />
                    </a>

                    <div class="p-0.5">
                        <a>
                            <h5
                                class="flex items-center justify-center text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                                Instrumentos</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- elemento3 -->
        <div class="grid-cols-3">
            <div class=" gap-y-10 mx-4 mb-16 ml-11">

                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a>
                        <img class="rounded-xl" src="/img/categories/textiles.jpg" alt="" />
                    </a>

                    <div class="p-0.5">
                        <a>
                            <h5
                                class="flex items-center justify-center text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                                Textiles y bordados</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class=" gap-y-10 mx-4 mb-16 ml-11">

                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a>
                        <img class="rounded-xl" src="/img/categories/casa.png" alt="" />
                    </a>

                    <div class="p-0.5">
                        <a>
                            <h5
                                class="flex items-center justify-center text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                                Decoración y hogar</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- elemento4 -->
        <div class="grid-cols-4">
            <div class=" gap-y-10 mx-4 mb-16 ml-11">

                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a>
                        <img class="rounded-xl" src="/img/categories/velaas.jpg" alt="" />
                    </a>

                    <div class="p-0.5">
                        <a>
                            <h5
                                class="flex items-center justify-center text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                                Velas</h5>
                        </a>
                    </div>
                </div>
            </div>

            <div class=" gap-y-10 mx-4 mb-16 ml-11">
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a>
                        <img class="rounded-xl max-h-80" src="/img/categories/bolsos.jpg" alt="" />
                    </a>

                    <div class="p-0.5">
                        <a>
                            <h5
                                class="flex items-center justify-center text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                                Bolsos carteras</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- elemento5 -->
        <div class="grid-cols-5">
            <div class=" gap-y-10 mx-4 mb-16 ml-11">

                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a>
                        <img class="rounded-xl" src="/img/categories/muuebles.jpg" alt="" />
                    </a>

                    <div class="p-0.5">
                        <a>
                            <h5
                                class="flex items-center justify-center text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                                Muebles</h5>
                        </a>
                    </div>
                </div>
            </div>

            <div class=" gap-y-10 mx-4 mb-16 ml-11">

                <div
                    class=" max-w-sm bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a>
                        <img class="rounded-xl" src="/img/categories/jugueete.webp" alt="" />
                    </a>

                    <div class="p-0.5">
                        <a>
                            <h5
                                class="flex items-center justify-center text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                                Juguetes</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- categories final-->

    <!-- categories -->
    </div>
    @foreach ($categories as $category)
        <a href="{{ route('categories', $category->id) }}">
            <img class="rounded-full h-56 mx-auto" src="{{ asset($category->img) }}">
            <h2 class="font-common text-center text-xl mt-2"> {{ $category->name }} </h2>
        </a>
    @endforeach

</x-layout>
