<x-site-layout>
<h1>Add Article</h1>

<form action="/admin/articles" method="post" enctype="multipart/form-data">
    @csrf


    <x-form-textinput
        name="title"
        label="Article name"
        placeholder="article name"
    />

    <label for="content">Content</label><br>
    <textarea name="content" id="content" rows="6">{{ old('content') }}</textarea><br>
    @error('content') <p style="color:red">{{$message}}</p> @enderror

    <label for="image">Image</label><br>
    <input type="file" name="image" id="image"><br>
    @error('image') <p style="color:red">{{$message}}</p> @enderror

    <label for="published_at">Published at</label><br>
    <input type="date" name="published_at" id="published_at" value="{{ old('published_at') }}"><br>

    <button type="submit">Create</button>

</form>
</x-site-layout>