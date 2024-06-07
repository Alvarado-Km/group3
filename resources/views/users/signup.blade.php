<x-layout>
    <div class="bg-cover bg-center" style="background-image: url({{ asset('/img/1.png') }}">
        <div class="w-screen h-screen grid md:grid-cols-2 place-items-center">
            <div class="col-start-2 grid place-items-center">
                <div class="font-title pb-4 text-6xl">
                    <h1> ¡Bienvenido! </h1>
                </div>
                <div>
                    <p class="text-xl font-common pb-4"> Ingrese sus datos por favor. </p>
                </div>

                <div class="bg-[#FFE4C4] rounded-xl px-24 shadow-xl rounded-xl">

                    <form method="POST" action="/signup" class="font-common md:container grid place-items-center ">
                        @csrf
                        <x-input titulo="Nombre" type="text" name="name" />
                        <x-input titulo="Email" type="email" name="email" />
                        <x-input titulo="Contraseña" type="password" name="password" />

                        <div class=" grid md:grid-cols-2 place-items-center">
                            <x-input titulo="Birthday" type="date" name="birthday" />
                            <x-input titulo="Distritos" type="text" name="state" />
                        </div>

                    <div class="flex space-x-2">
                        <input type="radio" id="cliente" name="is_artisan" value="0" checked>
                        <label for="cliente">Comprar artesanías</label>

                                <input type="radio" id="artesano" name="is_artisan" value="1">
                            <label for="artesano">Vender artesanías</label>
                        </div>

                        <x-button type="submit"> Registrarse </x-button>
                        <div class="pl-4">
                            <p> ¿Posee cuenta? </p>
                            <a class="animate-pulse grid place-self-end text-blue-600 hover:text-slate-600 underline decoration-solid"
                                href="/login"> Ir a iniciar sesion </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
