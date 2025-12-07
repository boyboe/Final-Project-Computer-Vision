<header id="header" class="header sticky-top">
    <div class="container-fluid container-xl position-relative">

        <div class="top-row d-flex align-items-center justify-content-between">
            
            {{-- Bagian Kiri (Logo) --}}
            <a href="{{ route('homepage') }}" class="logo d-flex align-items-center">
                <h1 class="sitename">Hantam Host</h1>
            </a>
            
            {{-- Bagian Kanan (Tombol Login) --}}
            <a href="/admin" class="btn btn-sm btn-primary-ghost">
                <i class="bi bi-person-circle me-1"></i> Login Admin
            </a>
        </div>
    </div>

    <div class="nav-wrap">
        <div class="container d-flex justify-content-center position-relative">
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#services">Packages</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
                    
                    {{-- Link Login dihapus dari daftar menu di sini --}}
                    
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </div>
</header>