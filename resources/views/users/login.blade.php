<x-layout>
    <div class=" bg-cover bg-center" style="background-image: url({{ asset('/img/2.png') }}">
        <div class="w-screen h-screen grid md:grid-cols-2 place-items-center">
            <div class="col-start-1 pb-4 grid place-items-center">
                <div class="py-16 text-6xl">
                    <h1 class="font-title text-center">Log In</h1>
                </div>

                <form method="POST" action="{{ route('login') }}"
                    class="font-common container grid place-items-center shadow-xl rounded-xl bg-[#FFE4C4] px-16 py-6">
                    @csrf

                    <x-input titulo="Email" type="email" name="email" />
                    <x-input titulo="Contraseña" type="password" name="password" />
                    <x-button type="submit">Continuar</x-button>

                    <p class= "pt-4 ">¿Nuevo usuario? </p>
                    <a href="{{ route('signup') }}" class="hover:text-slate-600  text-[#48492d] animate-pulse underline decoration-solid"> Crear cuenta </a>
                </form>
            </div>
        </div>
    </div>
</x-layout>
