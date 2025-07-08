<x-layout>
    <x-allnav />

    <div class="grid grid-cols-6 h-10  mx-5 ">
        <!--barra de chat-->
        <div class=" col-span-2  ">
            <div class="w-full Dark: bg-green-900 rounded w-20 h-40">
                <h5 class="text-tittle font-bold  text-6xl text-white">
                    CHATS
                </h5>
            </div>
            <!--barra de busqueda-->
            <div class="px-4 mt-5 mb-4 ">
      <input type="text" placeholder="Buscar..." class="w-full px-3 py-2 rounded bg-white text-white bg-gray-500 focus:outline-none">
    </div>
<!--chats-->
<div class="flex-1 bg-white text-black">
    <a href="/chat">
      <div class="border-b p-4 hover:bg-gray-100 cursor-pointer">
        <p class="font-semibold">Andrea Pérez</p>
        <p class="text-sm text-gray-600 truncate">¡Hola! Me gustaría saber si tiene disp..</p>
      </div>
    </a >
<a href="/chat2">
      <div class="border-b p-4 hover:bg-gray-100 cursor-pointer">
        <p class="font-semibold">Kamila Cipriano</p>
        <p class="text-sm text-gray-600 truncate">¡Hola! ¿Tiene envíos a Santa Ana?</p>
      </div>
</a>
    </div>

        </div>



<!--barra del chat (en linea o no)-->

            <div class="col-span-4 grid grid Dark: bg-green-900 rounded  w-65 h-20 ">
                 <div class=" flex items-center">
                <img class="w-10 h-10 rounded-full  " src="/img/señora.jpg" alt="">
                <div class="font-bold ml-5 text-white ">
                    <div>Andrea Perez</div>
                    <div class="text-sm  text-gray-500 text-white"> En linea</div>
                </div>
            </div>

<!--mensajes-->
<div class="bg-gray-200">
<div class="flex items-start gap-2.5 mt-20 ">
   <img class="w-8 h-8 rounded-full ml-5" src="/img/señora.jpg" >
   <div class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl bg-gray-600 ">
      <div class="flex items-center space-x-2 rtl:space-x-reverse">
         <span class="text-sm font-semibold text-gray-900 dark:text-white">Andrea Peréz</span>
         <span class="text-sm font-normal text-gray-500 dark:text-gray-400">11:46</span>
      </div>
      <p class="text-sm font-normal py-2.5 text-gray-500 text-white">hola me interesa un jarrón de barrio, quiero el saber precio unitario o por mayoreo.
        ¿cuenta con servicio a dominio?
      </p>
   </div>

</div>


<!--mensajes 2-->
<div class="flex justify-end ml-auto gap-2.5 mb-5 mt-20">
   <div class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl bg-gray-600 ">
      <div class="flex items-center space-x-2 rtl:space-x-reverse">
         <span class="text-sm font-semibold text-gray-900 dark:text-white">Lindsay Valle</span>
         <span class="text-sm font-normal text-gray-500 dark:text-gray-400">12:00</span>
      </div>
      <p class="text-sm font-normal py-2.5 text-gray-500 text-white"> ¡Hola! claro, el precio unitario del jarrón es de $25.00 y el precio por mayoreo es de $15.00,
        si, contamos con sevicio adomicilio.¿Adonde quisiera el envío?
      </p>
   </div>




  </div>


<!--barra de chat-->
<div class="flex items-center p-4 bg-white border-t ">
      <input type="text" placeholder="Escribe un mensaje..." class="flex-1 px-4 py-2 rounded-full bg-gray-100 focus:outline-none">
      <button class="ml-2 bg-red-500 hover:bg-red-600 text-white p-2 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7" />
        </svg>
      </button>
    </div>


              </div>
</x-layout>
