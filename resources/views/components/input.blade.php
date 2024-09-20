@props(['titulo'])

<div class="align-top my-3 w-full">
    <label class="block">{{ $titulo }}</label>
    <input {{ $attributes }} class="cursor-pointer w-full disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200
    disabled:shadow-none invalid:border-[#b32718] invalid:text-[#b32718]
    focus:invalid:border-[#b32718] focus:invalid:ring-[#b32718] font-common text-black bg-white border hover border-slate-300
    focus:outline-none focus:ring focus:ring-[#988558] rounded-xl px-3 py-1 shadow-xl">
    @error($attributes['name'])
        <p>{{ $message }} </p>
    @enderror
</div>
