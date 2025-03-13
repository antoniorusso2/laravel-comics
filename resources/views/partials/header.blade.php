<header>
    <nav class="navbar navbar-expand-lg bg-body-primary container">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img class="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="page"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('comics') ? 'active' : '' }}"
                            href="{{ route('comics') }}">Comics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('faq') ? 'active' : '' }}"
                            href="{{ route('faq') }}">F.A.Q.</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
