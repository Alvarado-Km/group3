<x-layout>
    <x-artisannav/>

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

    <!-- Why Artesia -->

    <h1 class="text-center font-common text-bold text-6xl mt-24 mb-4"> ¿Por qué Artesía? </h1>

    <p class="text-lg mb-16 mx-48 text-justify font-common mt-16">¿Por qué deberías usar artesía?
        Con el propósito de ser un apoyo para artesanos y comerciantes en el mundo de las artesanías, surge artesía, un
        sitio web donde tu siendo artesano podrás promocionar tus productos de una manera rapida y segura, artesía te
        permitirá tener un espacio creado por ti para tu negocio artesanal. De igual forma si eres cliente podrás
        acceder a los productos que desees adquirir de una manera organizada y segura a la hora de comprar un producto.
    </p>

    <h2 class="text-center font-common text-bold text-6xl mt-24 mb-4">¿Cómo tomar mejores fotos para tus productos?</h2>

    <div class="grid grid-cols-3 my-16 mx-12 gap-x-8 gap-y-6">
        <div class="flex items-center">
            <img class="rounded-full h-32" src="/img/number1.png">
            <p class="text-justify font-common ml-4">
                Asegúrate que tengas una buena iluminación la mejor es la luz natural puedes tomar, si utilizas luz
                artificial ten en cuenta que sea suave y uniforme, evitando que
                se vean sombras muy duras. </p>
        </div>

        <div class="flex items-center">
            <img class="rounded-full h-32" src="/img/number2.png">
            <p class="text-justify font-common ml-4">
                El fondo tiene que ser de colores neutros, el blanco es una buena opción o colores pasteles, puedes
                intentar utilizando algunos fondos que complementen al producto sin que el producto se vea opacado.</p>
        </div>

        <div class="flex items-center">
            <img class="rounded-full h-32" src="/img/number3.png">
            <p class="text-justify font-common ml-4"> Deja un margen en cada imagen y centra el producto.</p>
        </div>

        <div class="flex items-center">
            <img class="rounded-full h-32" src="/img/number4.png">
            <p class="text-justify font-common ml-4">
                Asegúrate de que el producto esté bien enfocado. Si tiene detalles importantes, como texturas o
                características especiales, haz tomas cercanas para mostrarlos. </p>
        </div>

        <div class="flex items-center">
            <img class="rounded-full h-32" src="/img/number5.png">
            <p class="text-justify font-common ml-4">
                Toma fotos en diferentes ángulos para podes mostrar mejor los detalles del producto. </p>
        </div>

        <div class="flex items-center">
            <img class="rounded-full h-32" src="/img/number6.png">
            <p class="text-justify font-common ml-4">
                Mantén la consistencia en el estilo, iluminación y fondo para que todas las imágenes tengan una apariencia
                cohesiva. </p>
        </div>
    </div>
</x-layout>
