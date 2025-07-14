<x-layout>
    <div class="h-screen w-screen bg-cover bg-center" style="background-image: url({{ asset('img/image.png') }}">

    <x-primarynav />

    <div>
        <h1 class=" font-semibold text-6xl flex justify-center mt-20 ">"Tradition is in every piece"</h1>
    </div>

    <main class="mt-10 flex flex-col items-center justify-center text-center px-10 font-common text-bold">
        <p class=" front-extrabold text-lg mb-8 max-w-2xl px-8 py-3">
            En Artesía, celebramos el arte de la excelencia hecha a mano.
            Nuestro sitio web es una puerta de entrada al mundo de los artesanos
            hábiles, donde cada producto cuenta una historia de pasión, dedicación
            y la búsqueda de la perfección.
        </p>
        <div class="flex space-x-4 mt-8">
            <a href="{{ route('signup') }}">
            <button class="bg-gray-200 text-gray-800 px-4 py-2 rounded bg-white-100">Descubrir Más</button>
            </a>
        </div>
        <p class="mt-8 text-gray-800">Eleva tu vida con tesoros artesanales</p>
    </main>

    <div class="flex justify-center py-8">
        <div class="flex items-center space-x-4">
            <div class="bg-amber-500 rounded-full w-8 h-8"></div>
            <div class="bg-red-500 rounded-full w-8 h-8"></div>
            <div class="bg-teal-500 rounded-full w-8 h-8"></div>

        </div>
    </div>
</div>
</x-layout>
