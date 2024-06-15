<x-layout>
        <form method="POST" action="/create">
            @csrf
            <h1 class="font-title grid justify-center mt-8 text-4xl"> Registre su producto </h1>
            <div class="rounded-lg bg-yellow-600 mx-96 grid justify-center mt-14 relative">
                <img src="{{ asset('/img/Leap.png') }}" class="absolute -bottom-20 -left-24 w-64" />
                <x-input2 titulo="Nombre" type="text" name="name"> Nombre </x-input2>
                <x-input2 titulo="Disponibilidad" type="number" name="stock"> Disponibilidad </x-input2>
                <x-input2
                    class=" file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100 "
                    titulo="Imagen" type="file" name="image"> Imagen </x-input2>
                <x-input2 titulo="Historia" type="history" name="history"> Historia </x-input2>
                <x-button class="mb-4" type="submit"> Publicar </x-button>
            </div>
    </form>
</x-layout>
