<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Cruise<span>Crafters</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item active"><a href="/about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="/pricing" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="/cars" class="nav-link">Cars</a></li>
            <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
            @if (Route::has('login'))
                
                    @auth
                    <li class="nav-item">
                        <x-app-layout>

                        </x-app-layout>
                    </li>
                        
                    @else
                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link"><button class="btn btn-primary log">Login</button></a></li>

                        {{-- @if (Route::has('register')) --}}
                            <li class="nav-item"><a href="{{ route('register') }}" class="nav-link"><button class="btn btn-secondary log">Register</button></a></li>
                        {{-- @endif --}}
                    @endauth
            @endif
            
            
        </ul>
        </div>
    </div>
</nav>