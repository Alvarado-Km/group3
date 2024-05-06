<x-layout>
    <div class="bg-cover" style="background-image: url({{ asset('/img/1.png') }}">

        <div class="w-screen h-screen grid md:grid-cols-2 place-items-center">

            <div class="col-start-2">

                <x-input  titulo="Nombre" type="text" nombre="nombre" />

                <x-input class="my-8" titulo="Email" type="email" nombre="email" />

                <x-input  titulo="Contraseña" type="password" nombre="contraseña" />

                <x-input  titulo="Fecha de nacimiento" type="date" nombre="fecha de nacimiento" />

            </div>
        </div>
    </div>
</x-layout>
