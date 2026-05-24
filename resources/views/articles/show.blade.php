<x-site-layout>
    @if($article->image)
        <img src="{{ asset('storage/' . $article->image) }}" width="400"><br>
    @endif
    <h1>{{$article->title}}</h1>
    <p>{{ $article->published_at?->format('d/m/Y') }}</p>
    <p>{{$article->content}}</p>
    <a href="{{ route('articles.index') }}">← Back to news</a>
</x-site-layout>
