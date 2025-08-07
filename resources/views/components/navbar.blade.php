@php
    $links = [
        [
            'name' => 'Home',
            'icon' => 'fa-solid fa-gauge-high',
            'route' => 'home.index',
            'active' => request()->routeIs('home.index'),
        ],
        [
            'name' => 'Services',
            'icon' => 'fa-solid fa-briefcase',
            'route' => 'services.index',
            'active' => request()->routeIs('services.index') || request()->routeIs('services.show'),
        ],
        [
            'name' => 'About Us',
            'icon' => 'fa-solid fa-users',
            'route' => 'home.about',
            'active' => request()->routeIs('home.about'),
        ],
        /*
        [
            'name' => 'Contact Us',
            'icon' => 'fa-solid fa-envelope',
            'route' => 'contact.index',
            'active' => request()->routeIs('contact.index'),
        ],*/
    ];
@endphp


<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="{{ route('home.index') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h1 class="m-0">Green Leaf Tree Service LLC</h1>
        <img src="/back/img/LOGOTIPO.jpg" alt="Logo" class="img-fluid ms-2 d-none d-md-block"
            style="max-height: 60px; height: auto; width: auto;">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            @foreach ($links as $link)
                <a href="{{ route($link['route']) }}" class="nav-item nav-link {{ $link['active'] ? 'active' : '' }}">
                    {{ $link['name'] }}
                </a>
            @endforeach
        </div>
        <a href="{{ route('login') }}" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">
            Sign In <i class="fa fa-arrow-right ms-3"></i>
        </a>
    </div>
</nav>
