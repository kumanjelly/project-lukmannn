@extends('layouts.app')

@section('content')
<!-- Ringkasan Fitur / Promo Beranda -->
<div class="row text-center mb-5">
    <div class="col-md-4 mb-3">
        <div class="p-4 bg-white rounded-3 shadow-sm h-100 border">
            <div class="fs-1 mb-2">👕</div>
            <h5 class="fw-bold">Koleksi Terlengkap</h5>
            <p class="text-muted small mb-0">Temukan berbagai model pakaian mulai dari Kaos, Jaket, Hoodie, hingga Kemeja Formal.</p>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="p-4 bg-white rounded-3 shadow-sm h-100 border">
            <div class="fs-1 mb-2">⚡</div>
            <h5 class="fw-bold">Kualitas Premium</h5>
            <p class="text-muted small mb-0">Bahan pakaian piilihan dengan standar kualitas tinggi yang nyaman dipakai seharian.</p>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="p-4 bg-white rounded-3 shadow-sm h-100 border">
            <div class="fs-1 mb-2">🏷️</div>
            <h5 class="fw-bold">Harga Terbaik</h5>
            <p class="text-muted small mb-0">Dapatkan penawaran harga fashion baju terbaik dan terjangkau di seluruh Indonesia.</p>
        </div>
    </div>
</div>

<!-- Banner Call to Action ke Katalog -->
<div class="p-4 p-md-5 mb-4 bg-warning text-dark rounded-4 shadow-sm d-flex flex-column flex-md-row align-items-center justify-content-between">
    <div>
        <h3 class="fw-bold mb-1">Siap Memperbarui Penampilan Anda?</h3>
        <p class="mb-0">Lihat seluruh koleksi pakaian terbaru kami sekarang juga!</p>
    </div>
    <a href="{{ route('products.catalog') }}" class="btn btn-dark btn-lg px-4 mt-3 mt-md-0 fw-bold">Buka Katalog Produk &rarr;</a>
</div>
@endsection