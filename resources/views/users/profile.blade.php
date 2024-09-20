<x-layout>
   <x-allnav/>
    <div class="flex justify-center mt-5">
        <img class="w-64 h-64 rounded-full" src="/img/profilepic.jpg" alt="Rounded avatar">
    </div>

    <h1 class="font-title text-2xl flex justify-center mt-5">{{ $user->name }}</h1>
    <div class="mt-3 flex justify-center">
        <svg class="fill-black" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/></svg>
        <h1 class="font-common ml-2">{{ $user->email }}</h1>
    </div>

    <div class="mt-3 flex justify-center">
        <svg class="fill-black" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/></svg>
        <h1 class="font-common ml-2">{{ $user->state }}</h1>
    </div>

    <div class="mt-3 flex justify-center">
        <form method="post" action="{{ route('logout') }}">
            @csrf
            <button class="font-common bg-paleGreen rounded-full py-1 px-6" type="submit">Cerrar sesión</button>
        </form>
    </div>

    <div class="mt-5 flex justify-around">
        <button class="Border font-title border-gray-400 bg-orange rounded-full py-4 px-20 ">Favorito</button>
        <button class="Border font-title border-gray-400 bg-orange rounded-full py-3 px-20 " >Mis compras</button>
        <button class="Border font-title border-gray-400 bg-orange rounded-full py-3 px-20 " >Ordenes</button>
    </div>
</x-layout>
