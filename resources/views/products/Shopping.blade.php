<x-layout>
    <x-artisannav2> </x-artisannav2>

    <div class="flex flex-col md:flex-row justify-between p-6 bg-white text-[#5a3d2b] font-serif gap-10 max-w-7xl mx-auto">

  <!-- Lista de productos -->
  <div class="flex-1 space-y-6 mt-16">

    <!-- Producto 1 -->
    <div class="flex items-center justify-between border-b pb-4">
      <div class="flex items-center gap-4">
        <div class="bg-[#f3e8dc] p-4 rounded-lg">
          <img src="https://www.w3schools.com/icons/icon_image.png" alt="Producto" class="w-10 h-10" />
        </div>
        <div>
          <h3 class="font-semibold text-[18px]">Camiseta Orgánica</h3>
          <p class="text-sm text-[#7d6653]">Talla: M | Color: Terracota</p>
          <button class="text-sm text-red-500 mt-1 hover:underline">Eliminar</button>
        </div>
      </div>
      <div class="flex items-center gap-2">
        <button class="px-2 py-1 bg-[#f3e8dc] rounded">-</button>
        <span>1</span>
        <button class="px-2 py-1 bg-[#f3e8dc] rounded">+</button>
        <span class="ml-4 font-semibold">$32.99</span>
      </div>
    </div>

    <!-- Producto 2 -->
    <div class="flex items-center justify-between border-b pb-4">
      <div class="flex items-center gap-4">
        <div class="bg-[#f3e8dc] p-4 rounded-lg">
          <img src="https://www.w3schools.com/icons/icon_image.png" alt="Producto" class="w-10 h-10" />
        </div>
        <div>
          <h3 class="font-semibold text-[18px]">Sandalias Artesanales</h3>
          <p class="text-sm text-[#7d6653]">Talla: 42 | Color: Cuero Natural</p>
          <button class="text-sm text-red-500 mt-1 hover:underline">Eliminar</button>
        </div>
      </div>
      <div class="flex items-center gap-2">
        <button class="px-2 py-1 bg-[#f3e8dc] rounded">-</button>
        <span>1</span>
        <button class="px-2 py-1 bg-[#f3e8dc] rounded">+</button>
        <span class="ml-4 font-semibold">$78.50</span>
      </div>
    </div>

    <!-- Producto 3 -->
    <div class="flex items-center justify-between border-b pb-4">
      <div class="flex items-center gap-4">
        <div class="bg-[#f3e8dc] p-4 rounded-lg">
          <img src="https://www.w3schools.com/icons/icon_image.png" alt="Producto" class="w-10 h-10" />
        </div>
        <div>
          <h3 class="font-semibold text-[18px]">Bolsa de Yute</h3>
          <p class="text-sm text-[#7d6653]">Color: Natural</p>
          <button class="text-sm text-red-500 mt-1 hover:underline">Eliminar</button>
        </div>
      </div>
      <div class="flex items-center gap-2">
        <button class="px-2 py-1 bg-[#f3e8dc] rounded">-</button>
        <span>1</span>
        <button class="px-2 py-1 bg-[#f3e8dc] rounded">+</button>
        <span class="ml-4 font-semibold">$45.00</span>
      </div>
    </div>

    <!-- Botón seguir comprando -->
    <div class="mt-6">
      <a href="/homepage" class="text-[#3b4c3d] font-medium inline-flex items-center  hover:text-blue-600">
        ← Seguir comprando
      </a>
    </div>
  </div>

  <!-- Resumen de compra -->
  <div class="w-full md:w-1/3 bg-[#f9f5f0] p-6 rounded-lg space-y-4 shadow-md mt-16">
    <h2 class="text-lg font-semibold">Resumen de compra</h2>

    <div class="text-sm space-y-2">
      <div class="flex justify-between">
        <span>Subtotal</span>
        <span>$156.49</span>
      </div>
      <div class="flex justify-between">
        <span>Envío</span>
        <span>$4.50</span>
      </div>
      <div class="flex justify-between">
        <span>Impuestos</span>
        <span>$13.30</span>
      </div>
    </div>

    <div class="flex justify-between font-semibold text-lg text-[#c06028] border-t pt-4">
      <span>Total</span>
      <span>$174.29</span>
    </div>

    <div>
      <label for="discount" class="block text-sm mb-1">Código de descuento</label>
      <div class="flex">
        <input id="discount" type="text" placeholder="Ingresa tu código" class="w-full px-3 py-2 border border-gray-300 rounded-l-md text-sm">
        <button class="bg-[#d8a45e] text-white px-4 rounded-r-md text-sm">Aplicar</button>
      </div>
    </div>

    <button class="w-full bg-[#3b4c3d] text-white py-2 rounded-md font-semibold hover:bg-[#2c3b2d]">
      Proceder al pago
    </button>


    <!-- Métodos de pago -->
    <div class="flex justify-between items-center pt-2 text-xs text-gray-500">
      <span>Métodos de pago aceptados</span>
      <div class="flex gap-1">
        <div class="w-4 h-3 bg-[#6f3b2a] rounded-sm"></div>
        <div class="w-4 h-3 bg-[#c06028] rounded-sm"></div>
        <div class="w-4 h-3 bg-[#d8a45e] rounded-sm"></div>
        <div class="w-4 h-3 bg-[#3b4c3d] rounded-sm"></div>
      </div>
    </div>
  </div>
</div>


<!-- Botón de vaciar carrito -->
<div class="text-center mt-6">
  <button class="bg-[#8c1d1d] text-white px-6 py-2 rounded-md hover:bg-[#731616]">Vaciar carrito</button>
</div>

</x-layout>
