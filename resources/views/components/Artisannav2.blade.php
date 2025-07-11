<nav class="break-after-all sticky top-0 z-50 bg-white">
    <div class="static">
        <h1 class="text-6xl font-bold my-4 text-red-600 font-title grid place-items-center">Artesía</h1>
    </div>

    <!-- categorias -->
    <div class="static">
        <a href="/homepage ">
            <h1 class="absolute pr-60  top-4 right-32 font-title mr-32 font-bold text-2xl h-16 w-10  "
                viewBox="0 -960 960 960 "> Categorías </h1>
        </a>
    </div>




    <!--Sobre nosotros-->

    <a href="/AboutUs  ">
        <h1 class="absolute pr-16 top-4 right-20 mr-0 pl-4 ml-12 font-title font-bold text-2xl  "
            viewBox="0 -960 960 960 "> Acerca de nosotros </h1>

    </a>

    <!-- Retornar -->
    <a href="Javascript:history.back(-1);">
        <svg class="absolute top-2 left-4 h-10 w-10" xmlns="http://www.w3.org/2000/svg" height="24px"
            viewBox="0 -960 960 960" width="24px" fill="#5f6368">
            <path d="M400-80 0-480l400-400 71 71-329 329 329 329-71 71Z" />
        </svg>

    </a>

  @guest
        <a href="{{ route('login') }}">
            <svg  class="absolute top-0 mr-6 right-6 h-16 w-10 " xmlns="http://www.w3.org/2000/svg" height="24px"
                  viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                <path
                    d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z" />
            </svg>
        </a>
    @endguest


</nav>
