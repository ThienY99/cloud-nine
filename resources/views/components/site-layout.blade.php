<div>
    <nav style="background: #8B7355; padding: 12px 24px; display: flex; justify-content: space-between;">
        <a href="{{ route('welcome') }}" style="color: white; font-weight: bold;">Cloud 9 Café</a>
        <div style="display: flex; gap: 16px;">
            <a href="{{ route('categories.index') }}" style="color: white;">Category</a>
            <a href="{{ route('products.index') }}">Menu</a>
            <a href="{{ route('faqs.index') }}" style="color: white;">FAQ</a>
            <a href="{{ route('articles.index') }}">News</a>
            @auth
                <a href="{{ route('dashboard') }}" style="color: white;">Dashboard</a>
                <form method="POST" action="{{ route('logout') }}" style="display:inline">
                    @csrf
                    <button type="submit" style="color: white; background: none; border: none; cursor: pointer;">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" style="color: white;">Login</a>
                <a href="{{ route('register') }}" style="color: white;">Register</a>
            @endauth
        </div>
    </nav>

    <main style="max-width: 900px; margin: 24px auto; padding: 0 16px;">
        {{$slot}}
    </main>

    <footer style="background: #8B7355; color: white; text-align: center; padding: 16px; margin-top: 40px;">
        © Cloud 9 Café
    </footer>
</div>