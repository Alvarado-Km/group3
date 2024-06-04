<x-layout>
    <div class="bg-cover bg-center" style="background-image: url({{ asset('/img/1.png') }}">
        <div class="w-screen h-screen grid md:grid-cols-2 place-items-center">
            <div class="col-start-2 grid place-items-center">
                <div class="font-title pb-4 text-8xl">
                    <h1> ¡Bienvenido! </h1>
                </div>
                <div>
                    <p class="text-xl font-common pb-4"> Ingrese sus datos por favor. </p>
                </div>

                <form method="POST" action="/signup"
                    class="font-common md:container grid place-items-center pb-10 shadow-xl rounded-xl bg-[#FFE4C4]">
                    @csrf
                    <x-input titulo="Nombre" type="text" name="name" />
                    <x-input titulo="Email" type="email" name="email" />
                    <x-input titulo="Contraseña" type="password" name="password" />
                    <x-input titulo="Birthday" type="date" name="birthday"  />
                    <x-input titulo="Distritos" type="text" name="state"  />

                    <div class="flex space-x-2">
                        <input type="radio" id="cliente" name="is_artisan" value="0">
                        <label for="cliente">Comprar artesanías</label><br>
                    </div>

                    <div class="flex space-x-2">
                        <input type="radio" id="artesano" name="is_artisan" value="1">
                        <label for="artesano">Vender artesanías</label><br>
                    </div>

                    <x-button type="submit"> Registrarse </x-button>
                    <p class= "grid place-self-end mr-20"> ¿Posee cuenta? </p>
                    <a class="mr-16 animate-pulse grid place-self-end hover:text-blue-600 underline decoration-solid"
                        href="/login"> Ir a iniciar sesion </a>
                </form>
            </div>
        </div>
    </div>
</x-layout>
