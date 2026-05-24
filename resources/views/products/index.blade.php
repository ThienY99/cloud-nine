<x-site-layout>
<h1>Our Menu</h1>
<ul>
@foreach($categories as $category)
    <h2>{{ $category->name }}</h2>

    @forelse($category->products as $product)
        <div>
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" width="150"><br>
            @endif
            <strong>{{$product->name}}</strong> — €{{$product->price}}<br>
            @if($product->description)
                <p>{{$product->description}}</p>
            @endif
        </div>
        <hr>
    @empty
        <p>No products in this category yet.</p>
    @endforelse
@endforeach
</x-site-layout>