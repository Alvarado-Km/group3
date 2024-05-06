<x-layout>

 <form action="/login" method="POST">
  
   
        @csrf

        <div class=" font-serif grid justify-items-center py-6"></div>
        <x-input type="text" titulo="email" nombre="email" />
        <x-input type="password" titulo="password" nombre="password" />
        <x-button />
        </div>

    </form>




</x-layout>
<!-- bg-['url('{{ asset('img/1.png') }} '] -->
