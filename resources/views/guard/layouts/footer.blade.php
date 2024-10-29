<div class="container-fluid mt-5" style="background-color: #f8f9fa;">
    <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
            <div class="col mb-3">
                <a href="{{ route('guard.index') }}" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                    <img src="img/logo/logo.png" alt="Logo MBK" style="width: 100px;" class="me-2">
                </a>
            </div>
            <div class="col mb-3"></div>
            <div class="col mb-3">
                <h5>Halaman Halam</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="{{ route('guard.index') }}" class="nav-link p-0 text-body-secondary">Home</a></li>
                </ul>
            </div>
            <div class="col mb-3">
                <h5>Halaman Halam</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="{{ route('guard.index') }}" class="nav-link p-0 text-body-secondary">Home</a></li>
                </ul>
            </div>
            <div>
                <footer>
                    <p>&copy; {{ date('Y') }} {{ config('app.name') }}</p>
                </footer>
            </div>
        </footer>
    </div>
</div>
