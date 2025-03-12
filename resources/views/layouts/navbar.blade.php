  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-5">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-3 px-lg-5">
    <img src="{{asset('assets/img/logo_bat_edited.png')}}" width="150px" alt="" srcset="">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : ''}} {{ request()->is('home') ? 'active' : ''}}">Home</a>
            <a href="/about" class="nav-item nav-link {{ request()->is('about') ? 'active' : ''}}">About</a>
            <a href="/service" class="nav-item nav-link {{ request()->is('service') ? 'active' : ''}}">Services</a>
            <a href="/contact" class="nav-item nav-link {{ request()->is('contact') ? 'active' : ''}}">Contact</a>
            <a href="/login" target="_blank" class="nav-item nav-link {{ request()->is('login') ? 'active' : ''}}">Recruitment</a>
        </div>
        <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block" style="background-color: #035A8F; border-color: #035A8F;">LIBAT<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->