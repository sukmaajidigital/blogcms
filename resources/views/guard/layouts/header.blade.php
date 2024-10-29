<div class="container-fluid" style="box-shadow: 0 4px 2px -2px rgba(0, 0, 0, 0.1);"> <!-- Membuat container tetap penuh -->
    <div class="container-md"> <!-- Ini membungkus logo dan menu agar di tengah -->
        <header class="d-flex flex-wrap justify-content-between align-items-center py-3 mb-4 ">
            <a href="{{ route('guard.index') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="img/logo/logo.png" alt="Logo MBK" style="width: 50px;" class="me-2">
            </a>

            <style>
                .nav-link,
                .btn {
                    font-family: 'DM Sans', sans-serif;
                    font-size: 1em;
                }
            </style>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{ route('guard.index') }}" class="nav-link {{ request()->routeIs('guard.index') ? 'active' : '' }}">Home</a></li>
                <li class="nav-item"><a href="{{ route('guard.index') }}" class="nav-link {{ request()->routeIs('') ? 'active' : '' }}">Berita</a></li>
                <li class="nav-item"><a href="{{ route('guard.index') }}" class="nav-link {{ request()->routeIs('') ? 'active' : '' }}">Produk</a></li>
                <div class="vr mx-3"></div> <!-- Garis vertikal -->
                <li class="nav-item"><a href="{{ route('login') }}" class="btn btn-warning">Login</a></li>
            </ul>
        </header>
        <script>
            document.getElementById('btnSwitch').addEventListener('click', () => {
                if (document.documentElement.getAttribute('data-bs-theme') == 'dark') {
                    document.documentElement.setAttribute('data-bs-theme', 'light')
                    document.getElementById('btnSwitch').innerHTML = '<i class="fas fa-sun"></i>'
                } else {
                    document.documentElement.setAttribute('data-bs-theme', 'dark')
                    document.getElementById('btnSwitch').innerHTML = '<i class="fas fa-moon"></i>'
                }
            })
        </script>
    </div>
</div>
