<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            {{-- <a class="navbar-brand" href="{{route('home')}}">Görbicz Roland</a> --}}

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <!-- DEV -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="devDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dev
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="devDropdown">
                            <li><a class="dropdown-item" href="{{route('references')}}">Referenciák</a></li>
                            <li><a class="dropdown-item" href="{{route('stack')}}">Stack</a></li>
                        </ul>
                    </li>

                    <!-- PS -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="psDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PS
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="psDropdown">
                            <li><a class="dropdown-item" href="{{route('consoles')}}">Konzolok</a></li>
                            <li><a class="dropdown-item" href="{{route('games')}}">Játékok</a></li>
                        </ul>
                    </li>

                    <!-- Booze -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('booze')}}">Booze</a>
                    </li>

                    <!-- Music -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('music')}}">Zene</a>
                    </li>

                    <!-- Contact -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Kapcsolat</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>