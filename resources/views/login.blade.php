<x-layout>
    <div class="bg-cover bg-center justify-end" style="background-image: url({{ asset('/img/2.png') }}">

        <div class="w-screen h-screen grid md:grid-cols-2 place-items-center">

            <div class="col-start-1 pb-4 grid place-items-center ">

                <div class="pb-20 text-8xl">
                    <h1 class="font-title"> Iniciar Sesión </h1>
                </div>

                <form
                    class="font-common container w- grid place-items-center grid place-items-center pb-10 shadow-xl rounded-xl w-2/3"
                    style="background-image: url({{ asset('/img/5.gif') }}">
                    @csrf
                    <div class=" font-common grid place-items-center pb-4">
                        <x-input titulo="Email" type="email" name="email" />
                        <x-input titulo="Contraseña" type="password" name="password" />
                        <x-button type="submit" />

                        <p class= " pt-10 ">¿Nuevo usuario? </p>
                        <a href="/signup" class=" animate-pulse  hover:text-blue-600 underline decoration-solid"> Crear
                            cuenta </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
