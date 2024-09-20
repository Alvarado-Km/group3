<x-layout>
   <x-allnav/>

    <div class="grid grid-cols-6 mx-12 mb-16">
        <div class="mt-5 col-span-2 mr-10">
          <img class="mx-auto cursor-pointer w-64 h-64 rounded-full" src="/img/profilepic.jpg" alt="Rounded avatar">
          <h1 class="font-common text-2xl border boder-gray bg-grass rounded text-center mt-3 py-1">{{ $user->name }}</h1>
          <p class="font-common mt-3 text-justify text-1xl">{{ $user->description }}</p>
        </div>

            <div class="mt-5 mr-40 grid grid-cols-4 gap-64">
                @foreach($user->products->chunk(2) as $blocks)
                    <div>
                        @foreach($blocks as $product)
                            <a href="{{ route('handicrafts', $product->id) }}" class="mt-5 flex flex-col items-center bg-white  rounded-lg  md:flex-row md:max-w-xl  ">
                                <img class="h-auto max-w-xs size-60 rounded" src='{{ asset("img/productos/$product->category_id.$product->id.jpeg") }}' alt="">
                            </a>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
