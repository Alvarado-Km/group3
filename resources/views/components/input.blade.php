@props(['titulo'])

<div class="inline-block align-top my-4">

    <label class="block">{{ $titulo }}</label>
    <input {{ $attributes }} class="font-a text-black bg-[#fdba74] border border-amber-700 rounded-lg px-5 py-1">

    @error( '{{ $attributes["name"] }}' )
    <p>{{ $message }} </p>
    @enderror

</div>
