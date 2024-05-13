@props(['titulo'])

<div class="inline-block align-top my-4">

    <label class="block">{{ $titulo }}</label>
    <input {{ $attributes }} class="font-common text-black bg-white border hover border-slate-300 shadow-inner  hover:bg-[#F5DEB3] active:bg-[#966919] focus:outline-none focus:ring focus:ring-[#988558] rounded-lg px-5 py-1 shadow-xl">
    @error( '{{ $attributes["name"] }}' )
        <p>{{ $message }} </p>
    @enderror

</div>
