<x-layout>
    <x-allnav/>

    <div class="grid grid-cols-2 gap-2 m-16">
        <div class="">
            <swiper-container class="h-[70vh] my-7 mr-10" pagination="true" pagination-clickable="true" navigation="true"
                slides-per-view="1" space-between="30" centered-slides="true" loop="true" autoplay="true">
                <swiper-slide class="">
                    <img src='{{ asset("/img/$producto->id/$producto->id.1.jpeg") }}' class="w-fit">
                </swiper-slide>
                <swiper-slide class="">
                    <img src='{{ asset("/img/$producto->id/$producto->id.2.jpeg") }}' class="w-fit">
                </swiper-slide>
            </swiper-container>
        </div>

        <div>
            <h1 class="font-title text-5xl mt-5 mb-5 ">{{ $producto->name }}</h1>
            <div class="mt-5 flex">
                <a href="/products/ProfileArtisan" class="flex">
                    <img  class="w-10 h-10 rounded-full mr-5" src="/img/{{ rand(3, 10) }}.jpg" alt="Rounded avatar">
                    <h1 class="font-common mt-2">
                        <span class="font-bold">
                            Creado por:
                        </span>
                        {{ $producto->user->name }}
                    </h1>
                </a>
            </div>

            <div class="mt-12">
                <div class="col-start-2">
                    <h2 class="font-common text-2xl text-bold mb-5">Descripción del producto</h2>
                    <p class="font-common ">{{ $producto->description }}</p>
                </div>
            </div>

            <div class="mt-10 mb-5">
                <div class="col-start-2 font-common">
                    <h2 class="text-2xl text-bold mb-5"> Historia del producto </h2>
                    <p>{{ $producto->story }}</p>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-2 mb-5">
                <h1 class="font-common border border-gray-200 rounded bg-paleGreen py-3 px-5 w-fit ml-auto">Precio:$5.00</h1>
                <button class="font-common border border-gray-200 bg-paleGreen rounded py-3 px-5 w-fit">¡Comprar!</button>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-2 my-10 mx-12">
        <div class="mt-2 mr-10">
            <h1 class="font-title text-3xl mb-5">Reseñas</h1>
            <div class="border border-gray-200 rounded ml-10 bg-gray-200 py-3 px-5">
                <h1 class="font-common mt-2 text-2xl">Escribir opiniones sobre este producto</h1>
                <h1>Comparte tu opinión con otros clientes</h1>
                <div class="flex mt-24 mb-2">
                    <img class="w-10 h-10 rounded-full" src="/img/{{ rand(3, 10) }}.jpg" alt="Rounded avatar">
                    <form method="POST" action="{{ route('create.review') }}" class="flex">
                        @csrf
                        <input
                            class="bg-gray-50 border mx-3 border-gray-300 text-sm rounded-full block w-full p-1.5
                            dark:bg-gray-400 dark:border-gray-200 dark:placeholder-gray-400 dark:text-white
                            dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Escribe tu opinión" required />
                        <button type="submit" class="px-4 bg-paleGreen rounded-full">Enviar</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-16">
            @foreach($producto->reviews as $review)
                <div class="my-5">
                    <div class="mt-5 flex items-center">
                        <img class="w-10 h-10 rounded-full mr-5" src="/img/{{ rand(3, 10) }}.jpg" alt="Rounded avatar">
                        <h1 class="font-common">{{ $review->user->name }}</h1>
                    </div>

                    <div class="flex cursor-pointer mt-4">
                        @for($i = 1; $i <= 5; $i++)
                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                class="{{ $i <= $review->rating ? 'text-yellow-300 w-4 h-4 ms-1' : 'text-gray-500 w-4 h-4 ms-1' }}"
                                 fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                        @endfor
                    </div>

                    <p class="mr-40 font-common mt-2">"{{ $review->comment }}"</p>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
</x-layout>
