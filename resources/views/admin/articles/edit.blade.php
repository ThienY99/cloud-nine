<x-site-layout>
<h1>Edit Article</h1>
<form action="/admin/articles/{{$article->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')

    <x-form-textinput
    name="title"
    label="Article name"
    placeholder="article name"
    value="{{ $article->name }}"
    />

    <label for="content">Content</label><br>
    <textarea name="content" id="content" rows="6">{{ old('content', $article->content) }}</textarea><br>
    @error('content') <p style="color:red">{{$message}}</p> @enderror

    @if($article->image)
        <img src="{{ asset('storage/' . $article->image) }}" width="200"><br>
    @endif

    <label for="image">Image (leave empty to keep current)</label><br>
    <input type="file" name="image" id="image"><br>
    @error('image') <p style="color:red">{{$message}}</p> @enderror

    <label for="published_at">Published at</label><br>
    <input type="date" name="published_at" id="published_at" value="{{ old('published_at', $article->published_at?->format('Y-m-d')) }}"><br>

    <button type="submit">Update</button>
</form>
</x-site-layout>