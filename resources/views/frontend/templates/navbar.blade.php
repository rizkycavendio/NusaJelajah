<nav>
    <ul>
        @guest
            <li>Silahkan Login</li>
            <li><a href="{{ route('login') }}">Login</a></li>
        @else
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <li>Silahkan Logout {{ Auth::user()->name }}</li>
                    <button type="submit">Logout</button>
                </form>
            </li>
        @endguest
    </ul>
</nav>
