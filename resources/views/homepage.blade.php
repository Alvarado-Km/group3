<x-layout>
    <x-primarynav />

    <swiper-container class="h-[80vh] mt-7" pagination="true" pagination-clickable="true" navigation="true"
        slides-per-view="3" space-between="2" centered-slides="true" loop="true" autoplay="true">
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


    <!-- categories titulo-->
    <div class="static">
        <h1 class="text-7xl grid place-items-center font-common my-20 text-red-700">Explora nuestras categorías</h1>
    </div>
    <!-- categories titulo -->

    <!-- categories inicio -->

    <div class="grid grid-cols-5">
    @foreach ($categories as $category)
    <div class=" gap-y-10 mx-4 mb-16 ml-11">
        <div class="max-w-sm bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="{{ route('categories', $category->id) }}">
                <img class="rounded-xl" src="{{ asset($category->img) }}">
            </a>
            <div class="p-0.5">
                <h5 class="flex items-center justify-center text-lg font-bold tracking-tight text-gray-900 dark:text-white"> {{ $category->name }} </h5>
            </div>
        </div>
    </div>
    @endforeach
    </div>

    <!-- categories final-->

    <!-- Ignore
    </div>
    @foreach ($categories as $category)
    <div class=" gap-y-10 mx-4 mb-16 ml-11">
        <div class="max-w-sm bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="{{ route('categories', $category->id) }}">
                <img class="rounded-xl" src="{{ asset($category->img) }}">
            </a>
            <div class="p-0.5">
                <h5 class="flex items-center justify-center text-lg font-bold tracking-tight text-gray-900 dark:text-white"> {{ $category->name }} </h5>
            </div>
        </div>
    </div>
    @endforeach
    -->
</x-layout>
