<header>
    <nav>
        <ul>
            @guest
            <li><a href="/">Sākums</a></li>
            <li><a href="/register">Pierakstīties</a></li>
            <li><a href="/login">Pieteikties</a></li>
            @endguest
            @auth
            <li><a href="/todos">Visi uzdevumi</a></li>
            <li><a href="/todos/create">Pievieno uzdevumu</a></li>
            <li><a href="/diary">Dienasgrāmata</a></li>
            <li><a href="/diary/create">Pievienot dienasgrāmatas ierakstu</a></li>
            <li><a href="/profile">Profils</a></li>
            @endauth
        </ul>
    </nav>
</header>