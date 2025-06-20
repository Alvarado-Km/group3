<x-layout>
    <x-artisannav2>



    </x-artisannav2>
    <section>
        <h1 class="text-5xl top-10 mt-12 grid justify-items-center font-title font-bold text-red-700">Selecciona tu
            método de
            pago</h1>
        <h2 class="text-xl font-title grid justify-items-center pb-8 mt-4"> Transacciones seguras con Artesía como
            mediador
            de
            confianza. </h2>


    </section>

    <section>
        <div class="grid grid-cols-4 py-6 grid justify-items-left ml-36  ">
            <!--Primer apartado-->
            <div class="col-start-1 col-end-1">

<form>
                <div
                    class="font-common mb-6ml-6 mr-6 w-sm grid place-items-center shadow-2xl rounded-xl  px-16 py-6 -mb-12 ">


                    <h2 class="font-bold py-6 text-xl font-title mb-4 -mt-2   ">Monedero Interno</h2>
                    <h2 class="font-common mb-6 text-xl text-wrap">Recibe un 5% de bonificación en depósitos</h2>
                    <div class="flex items-center px-4 grid place-items-center rounded-sm dark:border-gray-700">
                        <input id="bordered-radio-1" type="radio" value="" name="bordered-radio"
                            class="w-6 h-6 grid place-items-center text-blue-600    ">

                    </div>


                </div>
            </div>

            <!--segundo apartado-->
            <div class="grid col-start-2 col-end-2 ">
                <div
                    class="font-common w-auto grid place-items-center shadow-2xl rounded-xl  px-16 py-6 -mb-12">

                    <h2 class="font-bold text-xl font-title ml-12 mr-12">PayPal</h2>
                    <h2 class="font-common text-xl text-wrap grid place-items-center text-center">Integración con PayPal
                        para pagos rápidos</h2>
                    <div class="flex items-center ps-4 grid place-items-center rounded-sm dark:border-gray-700">
                        <input id="bordered-radio-2" type="radio" value="" name="bordered-radio"
                            class="w-6 h-6 grid place-items-center text-blue-600   ">


                    </div>
            </div>

            <!--Apartado tres-->

            <div class=" grid col-start-3 col-end-3 ml-6 ">

                <div
                    class="font-common w-auto grid place-items-center shadow-2xl rounded-xl  px-16 py-6 -mb-12">

                    <h2 class="font-bold text-xl w-7xl ml-12 mr-12 font-title mb-6 ">Contra entrega</h2>
                    <h2 class="font-common text-max text-xl text-center mb-6 text-wrap">Paga al momento de recibir tu
                        pedido
                    </h2>
                    <div class="flex items-center ps-4 grid place-items-center rounded-sm dark:border-gray-700">
                        <input id="bordered-radio-3" type="radio" value="" name="bordered-radio"
                            class="w-6 h-6 grid place-items-center text-blue-600 ">


                    </div>
            </div>
            <!--Débito o credito-->
            <div class=" grid col-start-4 col-end-4 ">

                <div class="font-common ml-6 w-auto grid place-items-center shadow-2xl rounded-xl  px-16 py-6 -mb-12 ">


                    <h2 class="font-bold text-xl w-7xl ml-6 mr-6 font-title ">Targeta crédito/débito</h2>
                    <h2 class="font-common text-2xl w-7xl text-wrap text-center">Paga usando tu targeta personal</h2>
                    <div class="flex items-center ps-4 grid place-items-center rounded-sm dark:border-gray-700">
                        <input id="bordered-radio-4" type="radio" value="" name="bordered-radio"
                            class="w-6 h-6 grid place-items-center text-blue-600   ">

                    </div>
                </div>

            </div>
        </form>
    </section>

    <section>
        <div class="grid justify-items-center mt-20  ">
            <x-button> Continuar </x-button>
        </div>
    </section>

</x-layout>
