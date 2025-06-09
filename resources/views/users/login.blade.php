<x-layout>
    <img src="{{ asset('/img/signin.jpg') }}" class="absolute right-0 h-full max-w-full" />
        <div class="w-screen h-screen grid md:grid-cols-2 place-items-center">
            <div class="col-start-1 pb-4 grid place-items-center">
                <div class="py-16 text-6xl">
                    <h1 class="font-title text-center">Inicio de sesión</h1>
                </div>

                <form method="POST" action="{{ route('login') }}"
                    class="font-common container grid place-items-center shadow-xl rounded-xl bg-[#FFE4C4] px-16 py-6">
                    @csrf

                    <x-input titulo="Email" type="email" name="email" />
                    <x-input titulo="Contraseña" type="password" name="password" />
                    <h1 class="text-blue-600 hover:text-slate-600 underline">¿Olvidaste tu contraseña?</h1>
                    <x-button type="submit">Continuar</x-button>

                    <p class= "pt-4 ">¿Nuevo usuario? </p>
                    <a href="{{ route('signup') }}" class="hover:text-slate-600  text-blue-600 animate-pulse underline decoration-solid"> Crear cuenta </a>
                </form>
            </div>
        </div>

</x-layout>
