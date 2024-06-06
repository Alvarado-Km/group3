<x-layout>
    <div class="bg-cover bg-center" style="background-image: url({{ asset('/img/2.png') }}">
        <div class="w-screen h-screen grid md:grid-cols-2 place-items-center">
            <div class="col-start-1 pb-4 grid place-items-center ">

                <div class="pb-20 text-8xl">
                    <h1 class="font-title">Iniciar Sesión </h1>
                </div>

                <form method="POST" action="/login"
                    class="font-common container grid place-items-center shadow-xl rounded-xl w-2/3 bg-[#FFE4C4]">
                    @csrf

                    <x-input titulo="Email" type="email" name="email" />
                    <x-input titulo="Contraseña" type="password" name="password" />
                    <x-butt on type="submit">Continuar</x-button>

                    <p class= " pt-4 ">¿Nuevo usuario? </p>
                    <a href="/signup" class=" animate-pulse  hover:text-blue-600 underline decoration-solid"> Crear
                        cuenta </a>

                </form>
            </div>
        </div>
    </div>
</x-layout>
