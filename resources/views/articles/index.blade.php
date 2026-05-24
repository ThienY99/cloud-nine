<x-site-layout>

    <h1>Latest News</h1>

@forelse($articles as $article)
    <div>
        @if($article->image)
            <img src="{{ asset('storage/' . $article->image) }}" width="200"><br>
        @endif
        <h2>{{$article->title}}</h2>
        <p>{{ $article->published_at?->format('d/m/Y') }}</p>
        <a href="{{ route('articles.show', $article) }}">Read more</a>
    </div>
    <hr>
@empty
    <p>No articles yet.</p>
@endforelse
</x-site-layout>