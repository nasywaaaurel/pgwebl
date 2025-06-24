<style>
    .beach-icon {
        font-size: 1.5rem;
        color: #e67e22;
        transition: transform 0.3s ease-in-out;
        margin-right: 8px;
    }

    .beach-icon:hover {
        transform: rotate(-10deg) scale(1.1);
    }

    .navbar-brand-text {
        font-weight: bold;
        font-family: 'Playfair Display', serif;
        font-size: 1.3rem;
        color: #5a3e2b;
        margin-bottom: 0;
    }

    .navbar-subtext {
        font-size: 0.75rem;
        font-style: italic;
        color: #9c6b4d;
        margin-top: -4px;
        margin-left: 28px;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color: #fff4e6;">
    <div class="container-fluid">
        <div class="d-flex flex-column align-items-start">
            <a class="navbar-brand d-flex align-items-center p-0" href="{{ route('home') }}">
                <i class="fa-solid fa-umbrella-beach beach-icon"></i>
                <span class="navbar-brand-text">KEJORA</span>
            </a>
            <small class="navbar-subtext">Kebumen Jelajah Objek Wisata dan Ruang Spasial</small>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('map') }}"><i class="fa-solid fa-map"></i> Peta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('table') }}"><i class="fa-solid fa-table"></i> Tabel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('berita') }}"><i class="fa-solid fa-newspaper"></i> Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kontak') }}"><i class="fa-solid fa-address-book"></i> Kontak</a>
                </li>

                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa-solid fa-database"></i> Data
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('api.points') }}" target="_blank">Points</a></li>
                            <li><a class="dropdown-item" href="{{ route('api.polylines') }}" target="_blank">Polylines</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('api.polygons') }}" target="_blank">Polygons</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="nav-link text-danger btn btn-link" type="submit">
                                <i class="fa-solid fa-right-from-bracket"></i> Logout
                            </button>
                        </form>
                    </li>
                @endauth

                @guest
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="{{ route('login') }}">
                            <i class="fa-solid fa-right-to-bracket"></i> Login
                        </a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
