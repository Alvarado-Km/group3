<x-layout>
    <div class="flex-row" style="background-image: url({{ asset('/img/velas.png') }}">
        <div class="w-screen h-screen grid md:grid-cols-2 place-items-left">
            <div class="col-start-1 pb-4 grid place-items-center ">



                <form method="POST" action="/product"
                    class="font-common container grid place-items-center shadow-xl rounded-xl w-2/3 bg-[#FFE4C4]">
                    @csrf


                </form>
            </div>
        </div>
    </div>
</x-layout>
