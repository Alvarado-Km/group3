<x-layout>
   <x-allnav/>

       <section class="max-w-6xl mx-auto  gap-8 mt-5 p-6 rounded flex flex-col items-center bg-gray-100  " >

<!-- sing out -->
   <div class="">
        <form method="post" action="{{ route('logout') }}">
            @csrf
            <button type="submit">
              <img class=" " src=/img/salida.png ></img>
              </button>
        </form>
    </div>

<!--  user-icon -->
    <div class="flex justify-center ">
        <img class="w-64 h-64 rounded-full" src="/img/user.png" alt="Rounded avatar">
    </div>
<!--  rating -->
     <div class="flex justify-center ">
       <img class=" w-70 h-70  rounded-full" src="/img/rating (4).png " >
      </div>
<!-- user-email and user-name -->
    <h1 class="font-title text-2xl flex justify-center  ">{{ $user->name }}</h1>
    <div class=" flex  justify-center">
        <svg class=" fill-black" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path  /></svg>
        <h1 class="font-common mr-5">{{ $user->email }}</h1>
    </div>
</section>


<section class="max-w-3xl mx-auto grid grid-cols-2 gap-8 mt-5 mb-20 ">
  <!-- Tarjeta Compras -->
  <div class="flex items-center bg-white p-8 rounded-xl shadow hover:bg-gray-200 transition ">
    <div class="p-4 bg-red-100 rounded-full">
      <!-- Icono carrito -->
      <svg class="h-8 w-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path d="M3 3h2l.4 2M7 13h10l4-8H5.4"></path>
        <circle cx="9" cy="21" r="1"></circle>
        <circle cx="20" cy="21" r="1"></circle>
      </svg>
    </div>
    <div class="ml-6">
      <h3 class="text-gray-500 text-base">Compras</h3>
      <p class="text-4xl font-bold text-gray-800">27</p>
      <p class="text-gray-400 text-sm">Artículos adquiridos</p>
    </div>
  </div>

  <!-- Tarjeta Favoritos -->
  <div class="flex items-center bg-white p-8 rounded-xl shadow hover:bg-gray-200 transition ">
    <div class="p-3 bg-pink-100 rounded-full">
      <!-- Icono corazón -->
      <svg class="h-8 w-8 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path d="M4.318 6.318C5.452 5.184 7.26 5.184 8.394 6.318L12 10l3.606-3.682c1.135-1.134 2.943-1.134 4.077 0 1.133 1.134 1.133 2.942 0 4.076L12 21 4.318 10.394c-1.133-1.134-1.133-2.942 0-4.076z"></path>
      </svg>
    </div>
    <div class="ml-6">
      <h3 class="text-gray-500 text-base">Favoritos</h3>
      <p class="text-4xl font-bold text-gray-800">43</p>
      <p class="text-gray-400 text-sm">Artículos guardados</p>
    </div>
  </div>
</section>


</div class=" mt-20 " >
<!-- botones de Favoritos,compras  -->
<div class="flex space-x-6 border-b ml-20" >
   <a  href="/profile">
  <button class="text-gray-500 text-xl text-red-600  mr-10 border-b-2  border-red-600 pb-2  ">Mis compras</button>
   </a>
    <a  href="/favorite">
  <button class="text-gray-500 text-xl hover:text-red-600  mr-10 border-b-2  hover:border-red-600 pb-2">Favorito</button>
   </a>
</div>

<!-- Tarjetas -->
<div class="flex items-center justify-between mt-6 ">
  <h2 class="text-gray-500 text-base ml-20 text-xl ">Compras recientes</h2>
  <a class="text-red-400 hover:text-red-600 text-xl font-semibold mr-20">Ver todas</a>
</div>
</div>

 <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-5xl mx-auto mt-6">
  <!-- Tarjeta 1 -->
  <div class="bg-white rounded-lg shadow p-4 relative">
    <span class="absolute top-2 right-2 text-xs text-gray-400 font-semibold">Entregado</span>

    <div class="h-32 w-full bg-gray-200 rounded flex items-center justify-center overflow-hidden mb-4">
      <img src="/img/9.jpg" class="h-full w-full object-cover">
    </div>

    <h3 class="font-semibold text-lg">Jarrón de Cerámica Artesanal</h3>
    <p class="text-sm text-gray-500">Comprado el 15 de mayo, 202</p>

    <div class="flex justify-between items-center mt-2">
      <span class="text-green-700 font-bold">$120.00</span>
      <a href="#" class="text-red-400 hover:underline text-sm">Ver detalles</a>
    </div>
  </div>

  <!-- Tarjeta 2 -->
  <div class="bg-white rounded-lg shadow p-4 relative">
    <span class="absolute top-2 right-2 bg-yellow-400 text-white text-xs font-bold px-2 py-0.5 rounded">En camino</span>

    <div class="bg-gray-200 h-32 flex items-center justify-center rounded mb-4">
      <img src="/img/8.jpg" class="h-full w-full object-cover">
    </div>

    <h3 class="font-semibold text-lg">Cartera de manta</h3>
    <p class="text-sm text-gray-500">Comprado el 2 de junio, 2023</p>

    <div class="flex justify-between items-center mt-2">
      <span class="text-green-700 font-bold">$10.00</span>
      <a  href="#" class="text-red-400 hover:underline text-sm">Ver detalles</a>
    </div>
  </div>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-5xl mx-auto mt-6">
  <!-- Tarjeta  3-->
  <div class="bg-white rounded-lg shadow p-4 relative">
    <span class="absolute top-2 right-2 text-xs text-gray-400 font-semibold">Entregado</span>

    <div class="bg-gray-200 h-32 flex items-center justify-center rounded mb-4">
      <img src="/img/5.jpg" class="h-full w-full object-cover">
    </div>

    <h3 class="font-semibold text-lg">Jarrón de Cerámica Artesanal</h3>
    <p class="text-sm text-gray-500">Comprado el 15 de mayo, 2023</p>

    <div class="flex justify-between items-center mt-2">
      <span class="text-green-700 font-bold">$35.00</span>
      <a href="#" class="text-red-400 hover:underline text-sm">Ver detalles</a>
    </div>
  </div>

  <!-- Tarjeta 4-->
  <div class="bg-white rounded-lg shadow p-4 relative">
    <span class="absolute top-2 right-2 bg-yellow-400 text-white text-xs font-bold px-2 py-0.5 rounded">En camino</span>

    <div class="bg-gray-200 h-32 flex items-center justify-center rounded mb-4">
       <img src="/img/c3.jpeg" class="h-full w-full object-cover">
    </div>

    <h3 class="font-semibold text-lg">Tapete Tejido a Mano</h3>
    <p class="text-sm text-gray-500">Comprado el 2 de junio, 2023</p>

    <div class="flex justify-between items-center mt-2">
      <span class="text-green-700 font-bold">$20.00</span>
      <a href="#" class="text-red-400 hover:underline text-sm">Ver detalles</a>
    </div>
  </div>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-5xl mx-auto mt-6">
  <!-- Tarjeta 5 -->
  <div class="bg-white rounded-lg shadow p-4 relative">
    <span class="absolute top-2 right-2 text-xs text-gray-400 font-semibold">Entregado</span>

    <div class="bg-gray-200 h-32 flex items-center justify-center rounded mb-4">
      <img src="/img/c4.jpeg" class="h-full w-full object-cover">
    </div>

    <h3 class="font-semibold text-lg">Jarrón de Cerámica Artesanal</h3>
    <p class="text-sm text-gray-500">Comprado el 15 de mayo, 2023</p>

    <div class="flex justify-between items-center mt-2">
      <span class="text-green-700 font-bold">$150</span>
      <a href="#" class="text-red-400 hover:underline text-sm">Ver detalles</a>
    </div>
  </div>

  <!-- Tarjeta 6 -->
  <div class="bg-white rounded-lg shadow p-4 relative">
    <span class="absolute top-2 right-2 bg-yellow-400 text-white text-xs font-bold px-2 py-0.5 rounded">En camino</span>

    <div class="bg-gray-200 h-32 flex items-center justify-center rounded mb-4">
      <img src="/img/6.jpg" class="h-full w-full object-cover">
    </div>

    <h3 class="font-semibold text-lg">Tapete Tejido a Mano</h3>
    <p class="text-sm text-gray-500">Comprado el 2 de junio, 2023</p>

    <div class="flex justify-between items-center mt-2">
      <span class="text-green-700 font-bold">$2.00</span>
      <a href="#" class="text-red-400 hover:underline text-sm">Ver detalles</a>
    </div>
  </div>
</div>



</x-layout>
