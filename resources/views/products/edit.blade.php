<x-site-layout>
<h1>Edit Product</h1>
<form action="/admin/products/{{$product->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')

    <label for="category_id">Category</label><br>
    <select name="category_id" id="category_id">
        <option value="">-- Pick a category --</option>
        @foreach($categories as $category)
            <option value="{{$category->id}}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                {{$category->name}}
            </option>
        @endforeach
    </select><br>
    @error('category_id') <p style="color:red">{{$message}}</p> @enderror

    <x-form-textinput
    name="name"
    label="Name"
    placeholder="product name"
    value="{{ $product ->name }}"
    />

    <label for="description">Description</label><br>
    <textarea name="description" id="description" rows="3">{{ old('description', $product->description) }}</textarea><br>

    <x-form-textinput name="price" label="Price" placeholder="0.00" value="{{$product->price}}"/>

    @if($product->image)
        <img src="{{ asset('storage/' . $product->image) }}" width="100"><br>
    @endif

    <label for="image">Image (leave empty to keep current)</label><br>
    <input type="file" name="image" id="image"><br>
    @error('image') <p style="color:red">{{$message}}</p> @enderror

    <button type="submit" class="bg-black p-2 text-white">Update</button>
</form>
</x-site-layout>