<nav>
    <a href="/">Home</a>
    @guest
        <a href="/login">Login</a>
        <a href="/register">Register</a>
    @endguest
    @auth
        <a href="/demo">Demo</a>
        <a href="/profile">Profile</a>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @endauth
</nav>