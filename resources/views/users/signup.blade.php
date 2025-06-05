<x-layout>

        <img src="{{ asset('/img/signin.jpg') }}" class="absolute h-full max-w-full" />
        <div class="w-screen h-screen grid md:grid-cols-2 place-items-center">
            <div class="col-start-2 grid place-items-center">
                <div class="font-title pb-4 text-6xl">
                    <h1 class="mr-10"> Crear una cuenta </h1>
                </div>
                <div>
                    <p class="text-xl font-common pb-4 mr-6"> Ingrese sus datos por favor. </p>
                </div>

                <div class="bg-[#edbb99] rounded-xl ml-10 mx-20 px-12 py-4 shadow-xl">
                    <form method="POST" action="{{ route('signup') }}" class="font-common md:container grid place-items-center">
                        @csrf
                        <x-input titulo="Nombre" type="text" name="name" />
                        <x-input titulo="Email" type="email" name="email" />
                        <x-input titulo="Contraseña" type="password" name="password" />

                        <div class="grid md:grid-cols-2 place-items-center gap-4">
                            <x-input titulo="Birthday" type="date" name="birthday" />
                            <x-input titulo="Distritos" type="text" name="state" />
                        </div>

                        <div class="flex space-x-3">
                            <input type="radio" id="cliente" name="is_artisan" value="0" checked>
                            <label for="cliente">Comprar artesanías</label>

                            <input type="radio" id="artesano" name="is_artisan" value="1">
                            <label for="artesano">Vender artesanías</label>
                        </div>

                        <x-button type="submit">Registrarse</x-button>

                        <div class="pl-4 flex">
                            <p class="block mr-2"> ¿Posee cuenta? </p>
                            <a class="grid place-self-end text-blue-600 hover:text-cyan-600 underline decoration-solid"
                                href="{{ route('login') }}"> Ir a iniciar sesión </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
