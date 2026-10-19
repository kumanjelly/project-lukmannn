@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-9">
        <div class="card shadow border-0 p-4 p-md-5 rounded-4">
            <h2 class="fw-bold mb-3 text-center">✨ Tentang LookAtMe</h2>
            <p class="text-muted text-center lh-lg mb-4">
                <strong>LookAtMe</strong> adalah merek e-commerce fashion terdepan di Indonesia yang menghadirkan koleksi pakaian kasual, formal, hingga tren busana modern masa kini dengan kualitas bahan terbaik dan harga yang terjangkau.
            </p>

            <hr class="my-4">

            <!-- Visi & Misi Toko -->
            <div class="row g-4 mb-4">
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded-3 h-100 border">
                        <h5 class="fw-bold text-dark mb-2">🎯 Visi Kami</h5>
                        <p class="text-secondary small mb-0">
                            Menjadi e-commerce fashion lokal pilihan nomor satu di Indonesia yang menginspirasi setiap individu untuk tampil percaya diri melalui gaya busana yang trendi dan berkualitas.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded-3 h-100 border">
                        <h5 class="fw-bold text-dark mb-2">🚀 Misi Kami</h5>
                        <p class="text-secondary small mb-0">
                            Menyediakan berbagai pilihan pakaian berkualitas tinggi, memberikan pengalaman belanja online yang mudah dan cepat, serta menghadirkan layanan pelanggan yang responsif.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Keunggulan Toko -->
            <h5 class="fw-bold mb-3">🌟 Keunggulan Belanja di LookAtMe:</h5>
            <div class="row row-cols-1 row-cols-md-3 g-3 mb-4">
                <div class="col">
                    <div class="border p-3 text-center rounded-3">
                        <div class="fs-3 mb-1">🧵</div>
                        <h6 class="fw-bold mb-1">Bahan Premium</h6>
                        <p class="text-muted small mb-0">Katun berkualitas & adem dipakai</p>
                    </div>
                </div>
                <div class="col">
                    <div class="border p-3 text-center rounded-3">
                        <div class="fs-3 mb-1">🚚</div>
                        <h6 class="fw-bold mb-1">Pengiriman Cepat</h6>
                        <p class="text-muted small mb-0">Jangkauan pengiriman seluruh Indonesia</p>
                    </div>
                </div>
                <div class="col">
                    <div class="border p-3 text-center rounded-3">
                        <div class="fs-3 mb-1">💳</div>
                        <h6 class="fw-bold mb-1">Pembayaran Aman</h6>
                        <p class="text-muted small mb-0">Metode pembayaran lengkap & praktis</p>
                    </div>
                </div>
            </div>

            <div class="text-center pt-2">
                <a href="{{ route('products.catalog') }}" class="btn btn-dark btn-lg px-4 fw-bold">Jelajahi Katalog Baju &rarr;</a>
            </div>
        </div>
    </div>
</div>
@endsection