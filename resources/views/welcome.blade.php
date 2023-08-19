<x-guest-layout>
    <nav class="navbar navbar-light navbar-expand bg-light navigation-clean">
        <div class="container"><a class="navbar-brand" href="{{ route('welcome') }}"><img
            src="assets/img/684-SMA_KOLESE_DE_BRITTO_YOGYAKARTA.png" width="71" height="63">SMA Kolese De Britto</a>
            <div class="collapse navbar-collapse" id="navcol-1">
                <a class="btn btn-primary ms-auto" role="button" href="{{ route('login') }}">Sign In</a>
                <a class="btn btn-primary" role="button" href="{{ route('register') }}" style="margin: 5px;">Sign Up</a>
            </div>
        </div>
        <div class="topbar-bottom-colors">
            <i style="background-color: #5dc12e;"></i>
            <i style="background-color: #5dc12e;"></i>
            <i style="background-color: #5dc12e;"></i>
            <i style="background-color: #5dc12e;"></i>
            <i style="background-color: #5dc12e;"></i>
            <i style="background-color: #5dc12e;"></i>
            <i style="background-color: #5dc12e;"></i>
        </div>
    </nav>
    <div class="main-wrapper container">
        <div class="navbar-bg"></div>
        {{-- <nav class="navbar navbar-expand-lg main-navbar">
            <a href="{{ route('welcome') }}" class="navbar-brand sidebar-gone-hide"><img
                src="assets/img/684-SMA_KOLESE_DE_BRITTO_YOGYAKARTA.png" width="71" height="63">SMA Kolese De Britto</a>
            <div class="nav-collapse">
                <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
        </nav> --}}

        {{-- <nav class="navbar navbar-secondary navbar-expand-lg">
            <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">
                            <i class="fas fa-sign-in-alt"></i><span>Login</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">
                            <i class="fas fa-clipboard-list"></i><span>Register</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav> --}}

        <!-- Main Content -->
        <div class="main-content">
            <section class="text-center ">
                <div class="container">
                    <div class="row" style="padding: 30px;">
                        <div class="col-lg-4 offset-lg-1"><img src="assets/img/testimonials-1.jpg" style="width: 420px;height: 315px;">
                            <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3"><button class="btn btn-primary" type="button">Button</button></div>
                        </div>
                        <div class="col-lg-4 offset-lg-2"><img src="assets/img/testimonials-2.jpg" style="width: 419px;height: 315px;">
                            <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3"><button class="btn btn-primary" type="button">Button</button></div>
                        </div>
                    </div>
                    <div class="row" style="padding: 30px;">
                        <div class="col-lg-4 offset-lg-1"><img src="assets/img/testimonials-3.jpg" width="420" height="315" style="width: 420px;height: 315px;">
                            <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3"><button class="btn btn-primary" type="button">Button</button></div>
                        </div>
                        <div class="col-lg-4 offset-lg-2"><img src="assets/img/bg-showcase-3.jpg" width="420" height="316" style="width: 420px;height: 315px;">
                            <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3"><button class="btn btn-primary" type="button">Button</button></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                <small class="text-muted">Laravel Breeze + Stisla by Fahmi Jabbar ©2022</small>
            </div>
        </footer>
    </div>
</x-guest-layout>
