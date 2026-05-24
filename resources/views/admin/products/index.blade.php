<x-site-layout>
<h1>Categories</h1>
<ul>
@foreach($products as $product)
    <li>
        {{ $product->name }} ({{$product->category->name}}) — €{{$product->price}}
        -
        <a href="/admin/products/{{ $product->id }}/edit">edit</a>
        |
        <form action="/admin/products/{{ $product->id }}" method="post" style="display:inline">
            @csrf
            @method('delete')
            <button type="submit">delete</button>
        </form>
    </li>

@endforeach
</ul>

<a href="/admin/products/create">Add product</a>
</x-site-layout>