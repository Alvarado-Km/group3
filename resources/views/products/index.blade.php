<x-layout>


@foreach ($productos as $product)
    <h1>{{$product->name}}</h1>
    <p>Categoría</p>
    <p>
        {{ $product->category->name }}
    </p>
        <form action="/product/{{ $product->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Borrar</button>
        </form>
@endforeach
</x-layout>
