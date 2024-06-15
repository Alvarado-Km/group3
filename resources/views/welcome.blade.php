<x-layout>

    <nav class="break-after-all sticky top-0 z-50 bg-white">
        <div class="static">
            <h1 class="text-6xl font-title grid place-items-center">Artesía</h1>
        </div>

        <svg class="absolute top-0 right-6 h-16 w-10 " xmlns="http://www.w3.org/2000/svg" height="24px"
            viewBox="0 -960 960 960" width="24px" fill="#5f6368">
            <path
                d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z" />
        </svg>

        <svg class="absolute top-0 right-20 h-16 w-10 " xmlns="http://www.w3.org/2000/svg" height="24px"
            viewBox="0 -960 960 960" width="24px" fill="#5f6368">
            <path
                d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z" />
        </svg>

        <svg class="absolute top-0 right-36 h-16 w-10" xmlns="http://www.w3.org/2000/svg" height="24px"
            viewBox="0 -960 960 960" width="24px" fill="#5f6368">
            <path
                d="M80-80v-720q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H240L80-80Zm126-240h594v-480H160v525l46-45Zm-46 0v-480 480Z" />
        </svg>

        <svg class="absolute top-0 left-4 h-16 w-10" xmlns="http://www.w3.org/2000/svg" height="24px"
            viewBox="0 -960 960 960" width="24px" fill="#5f6368">
            <path
                d="M468-240q-96-5-162-74t-66-166q0-100 70-170t170-70q97 0 166 66t74 162l-84-25q-13-54-56-88.5T480-640q-66 0-113 47t-47 113q0 57 34.5 100t88.5 56l25 84Zm48 158q-9 2-18 2h-18q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480v18q0 9-2 18l-78-24v-12q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93h12l24 78Zm305 22L650-231 600-80 480-480l400 120-151 50 171 171-79 79Z" />
        </svg>
    </nav>

    <swiper-container class="h-[80vh]" pagination="true" pagination-clickable="true" navigation="true"
        slides-per-view="3" space-between="30" centered-slides="true" loop="true" autoplay="true">
        @for ($i = 0; $i <= 10; $i++)
            <swiper-slide class="flex items-center justify-center">
                <img src="img/Velas.jpg" class="h-full w-full object-cover">
            </swiper-slide>
        @endfor
    </swiper-container>

    <div class="columns-4 mt-36 ml-16 ">
        <img class="rounded-full col-start-1 h-56" src="img/ropa.jpeg">
        <h2 class="font-common grid justify-items-center mr-32  text-xl "> ROPA </h2>
        </img>
        <img class="rounded-full col-start-2 h-56" src="img/Joyeria.jpg">
        <h2 class="font-common grid justify-items-center mr-32  text-xl"> JOYERIA </h2>
        </img>
        <img class="rounded-full col-start-3 h-56" src="img/Velas.jpg">
        <h2 class="font-common grid justify-items-center mr-32  text-xl">VELAS</h2>
        </img>
        <img class="rounded-full column-end h-56" src="img/muebles.jpg">
        <h2 class="font-common grid justify-items-center mr-32 text-xl">MUEBLES</h2>
        </img>

    </div class="column-end">

    <div class="columns-4 mt-10 ml-16 ">
        <img class="rounded-full col-start-1 h-56" src="img/ceramica.jpg">
        <h2 class="font-common pl-14 mr-32 text-xl">CERAMICA</h2>
        </img>
        <img class="rounded-full col-start-2 h-56" src="img/Instrumentos.jpg">
        <h2 class="font-common pl-10 mr-32 text-xl">INSTRUMENTOS</h2>
        </img>
        <img class="rounded-full col-start-3 h-56" src="img/Vidrios.jpg">
        <h2 class="font-common pl-16 mr-32 text-xl">VIDRIOS</h2>
        </img>
        <img class="rounded-full col-start-4 h-56" src="img/Dulces.jpg">
        <h2 class="font-common pl-20 mr-32 text-xl">DULCES</h2>
        </img>

    </div>

</x-layout>
