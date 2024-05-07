
@props(['titulo', 'type', 'nombre'])

<div class="inline-block align-top my-2">

    <label class=" block">{{ $titulo}}</label>
    <input type={{ $type }} name={{ $nombre }} class=" font-a text-black bg-[#fdba74] border border-amber-700 rounded-lg px-5 py-1">

    @error( $nombre )
    <p>{{ $message }} </p>
    @enderror

</div>
