<x-layout>
    <x-allnav></x-allnav>
    <form method="POST" action="/create">
        @csrf
        <h1 class="font-title grid justify-center mt-8 text-4xl"> Registre su producto </h1>
        <div class="rounded-lg bg-yellow-600 mx-96 grid justify-center mt-14 relative">
            <img src="{{ asset('/img/Colombia.png') }}" class="absolute -bottom-20 -left-24 w-64" />
            <x-input2 titulo="Nombre" type="text" name="name"> Nombre </x-input2>
            <x-input2 titulo="Disponibilidad" type="number" name="disponibilidad"> Disponibilidad </x-input2>
            <x-input2
                class=" file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100 "
                titulo="Imagen" type="file" name="img"> Imagen </x-input2>
            <x-input2 titulo="Historia" type="history" name="historia"> Historia </x-input2>

            <a href="/ready">
                <button
                    class="px-10 py-2 mt-4 mb-4 bg-[#8B4513] rounded border-amber-700 font-bold text-slate-50  hover:bg-[#C2B280] active:bg-[#966919] focus:outline-none focus:ring focus:ring-[#988558] "
                    type="button"> Publicar</button>
            </a>
    </form>




</x-layout>
