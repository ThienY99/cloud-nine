<x-site-layout>
<h1>Add Product</h1>

<form action="/admin/products" enctype="multipart/form-data">
    @csrf

    <label for="category_id">Category</label><br>
    <select name="category_id" id="category_id">
        <option value="">-- Pick a category --</option>
        @foreach($categories as $category)
            <option value="{{$category->id}}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                {{$category->name}}
            </option>
        @endforeach
    </select><br>
    @error('category_id') <p style="color:red">{{$message}}</p> @enderror

    <x-form-textinput
        name="name"
        label="Name"
        placeholder="product name"
    />

    <label for="description">Description</label><br>
    <textarea name="description" id="description" rows="3">{{ old('description') }}</textarea><br>

    <x-form-textinput name="price" label="Price" placeholder="0.00"/>

    <label for="image">Image</label><br>
    <input type="file" name="image" id="image"><br>
    @error('image') <p style="color:red">{{$message}}</p> @enderror

    <button type="submit">Create</button>

</form>
</x-site-layout>