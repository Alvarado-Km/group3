<x-layout>
    <div class="bg-cover bg-center" style="background-image: url({{ asset('/img/1.png') }}">

        <div class="w-screen h-screen grid md:grid-cols-2 place-items-center">

            <div class="col-start-2 pb-4 grid place-items-center">

                <div class="pb-20 text-8xl">
                    <h1> Registrarse </h1>
                </div>

                <div class="pb-4">
                    <x-input titulo="Nombre" type="text" nombre="nombre" />
                </div>

                <div class="pb-4">
                    <x-input titulo="Email" type="email" nombre="email" />
                </div>

                <div class="pb-4">
                    <x-input titulo="Contraseña" type="password" nombre="contraseña" />
                </div>

                <div class="pb-4">
                    <x-input titulo="Fecha de nacimiento" type="date" nombre="fecha de nacimiento" />
                </div>

                <x-button />
            </div>
        </div>
    </div>
</x-layout>
