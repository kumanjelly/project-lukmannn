<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
<<<<<<< HEAD
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prodi SI UNPAM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="/">Prodi SI UNPAM</a>
            <ul class="navbar-nav ms-auto flex-row gap-3">
                <li><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
                <li><a class="nav-link {{ Request::is('profile') ? 'active' : '' }}" href="/profile">Profile</a></li>
                <li><a class="nav-link {{ Request::is('project') ? 'active' : '' }}" href="/project">Project</a></li>
                <li><a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a></li>
            </ul>
        </div>
    </nav>

    <div class="container py-4 flex-grow-1">
        @yield('content')
    </div>

    <footer class="text-center text-muted py-3 bg-white border-top mt-auto">
        &copy; 2026 Profile Mahasiswa UNPAM. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
=======
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LookAtMe - E-Commerce Baju</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('products.index') }}">✨ LookAtMe</a>
            
            <div class="ms-auto d-flex gap-3 align-items-center">
                <a href="{{ route('products.index') }}" class="text-white text-decoration-none small {{ Route::is('products.index') ? 'fw-bold border-bottom pb-1' : '' }}">Beranda</a>
                <a href="{{ route('products.catalog') }}" class="text-white text-decoration-none small {{ Route::is('products.catalog') ? 'fw-bold border-bottom pb-1' : '' }}">Katalog Produk</a>
                <a href="{{ route('products.about') }}" class="text-white text-decoration-none small {{ Route::is('products.about') ? 'fw-bold border-bottom pb-1' : '' }}">Tentang Kami</a>
                <a href="{{ route('products.contact') }}" class="text-white text-decoration-none small {{ Route::is('products.contact') ? 'fw-bold border-bottom pb-1' : '' }}">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <div class="container my-4 flex-grow-1">
        <!-- Banner Hero -->
        <div class="p-5 mb-4 bg-dark text-white rounded-3 shadow text-center">
            <h1 class="fw-bold">Welcome To</h1>
            <h2 class="text-warning">Look At Me - Ecommerce Terbaik di Indonesia</h2>
        </div>

        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <p class="mb-0">&copy; {{ date('Y') }} LookAtMe. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
>>>>>>> 2d26f3e51a9e2dfaf5dcfd90529fde1f0f3febf1
</body>
</html>