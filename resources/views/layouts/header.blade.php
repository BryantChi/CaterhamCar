<header role="banner">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{ asset('assets/img/caterham-sm-logo.png') }}" class="img-fluid" width="50" alt="{{ __('caterham') }}">
                <img src="{{ asset('assets/img/caterham-logo-W.png') }}" class="img-fluid" width="168" alt="{{ __('caterham') }}">
            </a>
            {{-- caterham --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05"
                aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarsExample05">
                <ul class="navbar-nav pl-md-5 ml-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                            href="{{ route('index') }}">首頁<br>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">關於我們<br>About
                            Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('news*') ? 'active' : '' }}"
                            href="{{ route('news') }}">最新消息<br>News</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="services.html" id="dropdown04"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="services.html">Architectural Design</a>
                            <a class="dropdown-item" href="services.html">Interior</a>
                            <a class="dropdown-item" href="services.html">Building</a>
                        </div>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('models') ? 'active' : '' }}"
                            href="{{ route('models') }}">車款介紹<br>Models</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">聯絡我們<br>Contact</a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>
</header>
<!-- END header -->

{{-- <div class="top-shadow"></div> --}}
