@props(['titulo'])

<div class="inline-block align-top my-3">
    <label class="block">{{ $titulo }}</label>
    <input {{ $attributes }} class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
    invalid:border-pink-500 invalid:text-pink-600
    focus:invalid:border-pink-500 focus:invalid:ring-pink-500 font-common text-black bg-white border hover border-slate-300  hover:bg-[#F5DEB3] active:bg-[#966919] focus:outline-none focus:ring focus:ring-[#988558] rounded-lg px-2 -py-1 shadow-xl">
    @error($attributes['name'])
        <p>{{ $message }} </p>
    @enderror
</div>
