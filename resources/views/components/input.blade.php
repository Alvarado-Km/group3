
@props(['titulo', 'type', 'nombre'])

<div class=" my-2">

    <label for="" class="font-a ">{{ $titulo}}</label>
    <input type={{ $type }} name={{ $nombre }} class=" text-black bg-[#fdba74] border border-amber-700 rounded-lg px-5 py-2c">

    @error( $nombre )
    <p>{{ $message }} </p>
    @enderror

</div>
