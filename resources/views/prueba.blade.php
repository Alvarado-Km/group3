<x-layout>


    <div class="bg-cover bg-center justify-end" style="background-image: url({{ asset('/img/2.png') }}">

        <div class="w-screen h-screen grid md:grid-cols-2 place-items-center">

            <div class="col-start-1 pb-4 grid place-items-center">

                <div class="pb-20 text-8xl">
                    <h1> Iniciar Sesión </h1>
                </div>

                <div class="pb-4">
                    <x-input titulo="Email" type="email" nombre="email" />
                </div>

                <div class="pb-4">
                    <x-input titulo="Contraseña" type="password" nombre="contraseña" />
                </div>

                <x-button />
            </div>
        </div>
    </div>
</x-layout>
