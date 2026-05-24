<x-site-layout>
<h1>Articles</h1>
<ul>
@foreach($articles as $article)
    <li>
        {{ $article->title }}
        -
        <a href="/admin/articles/{{ $article->id }}/edit">edit</a>
        |
        <form action="/admin/articles/{{ $article->id }}" method="post" style="display:inline">
            @csrf
            @method('delete')
            <button type="submit">delete</button>
        </form>
    </li>

@endforeach
</ul>

<a href="/admin/articles/create">Add article</a>
</x-site-layout>