<x-layout>
   <x-primarynav/>

    <!--display-->
    <swiper-container class="h-[80vh] mt-7" pagination="true" pagination-clickable="true" navigation="true"
        slides-per-view="3" space-between="30" centered-slides="true" loop="true" autoplay="true">
            <swiper-slide class="flex items-center justify-center">
                <img src="img/display1.jpg" class="h-full w-full object-cover">
            </swiper-slide>
            <swiper-slide class="flex items-center justify-center">
                <img src="img/display2.jpg" class="h-full w-full object-cover">
            </swiper-slide>
            <swiper-slide class="flex items-center justify-center">
                <img src="img/display3.jpg" class="h-full w-full object-cover">
            </swiper-slide>
            <swiper-slide class="flex items-center justify-center">
                <img src="img/display4.jpg" class="h-full w-full object-cover">
            </swiper-slide>
            <swiper-slide class="flex items-center justify-center">
                <img src="img/display5.jpg" class="h-full w-full object-cover">
            </swiper-slide>
    </swiper-container>

    <div class="static">
        <h1 class="text-3xl grid place-items-center font-common my-20">Explora nuestras categorías</h1>
    </div>

    <!-- categories -->
    <div class="grid grid-cols-4 gap-y-10 mx-12 mb-16">
        @foreach($categories as $category)
            <a href="{{ route('categories', $category->id) }}">
                <img  class="rounded-full h-56 mx-auto" src="{{ asset($category->img) }}">
                <h2 class="font-common text-center text-xl mt-2"> {{ $category->name }} </h2>
            </a>
        @endforeach
    </div>
</x-layout>
