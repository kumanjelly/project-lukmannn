@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold mb-1">🛍️ Katalog Produk Baju</h2>
        <p class="text-muted mb-0">Jelajahi seluruh koleksi pakaian terbaru dari LookAtMe</p>
    </div>
</div>

<!-- Filter Kategori -->
<div class="d-flex flex-wrap gap-2 mb-4">
    <a href="{{ route('products.catalog') }}" class="btn btn-dark btn-sm rounded-pill px-3">Semua Produk</a>
    <span class="btn btn-outline-secondary btn-sm rounded-pill px-3">T-Shirt</span>
    <span class="btn btn-outline-secondary btn-sm rounded-pill px-3">Jacket</span>
    <span class="btn btn-outline-secondary btn-sm rounded-pill px-3">Hoodie</span>
    <span class="btn btn-outline-secondary btn-sm rounded-pill px-3">Kemeja</span>
</div>

<!-- Grid Katalog Produk -->
<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($products as $item)
        <div class="col">
            <div class="card h-100 shadow-sm border-0 position-relative">
                <button class="position-absolute top-0 end-0 m-2 btn btn-light btn-sm rounded-circle shadow-sm" onclick="alert('Produk ditambahkan ke Wishlist!')" title="Suka" style="z-index: 10;">
                    ❤️
                </button>

                <img src="{{ $item->image }}" class="card-img-top" alt="{{ $item->name }}" style="height: 260px; object-fit: cover;">
                
                <div class="card-body d-flex flex-column">
                    <span class="badge bg-secondary mb-2 align-self-start">{{ $item->category }}</span>
                    <h5 class="card-title fw-bold">{{ $item->name }}</h5>
                    <p class="card-text text-muted small flex-grow-1">{{ Str::limit($item->description, 70) }}</p>
                    <p class="fw-bold text-primary fs-5 mb-3">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                    <a href="{{ route('products.show', $item->id) }}" class="btn btn-dark w-100">Lihat Detail Produk</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection