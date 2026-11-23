@extends('layouts.app')

@section('content')
<div class="mb-3">
    <a href="{{ route('products.index') }}" class="btn btn-secondary">&larr; Kembali ke Katalog</a>
</div>

<div class="card shadow border-0 rounded-4 overflow-hidden mb-5">
    <div class="row g-0">
        <div class="col-md-5">
            <img src="{{ $product->image }}" class="img-fluid w-100 h-100" alt="{{ $product->name }}" style="object-fit: cover; min-height: 350px;">
        </div>
        <div class="col-md-7">
            <div class="card-body p-4 p-md-5 d-flex flex-column justify-content-between h-100">
                <div>
                    <span class="badge bg-info text-dark mb-2 px-3 py-2">{{ $product->category }}</span>
                    <h2 class="fw-bold mb-3">{{ $product->name }}</h2>
                    <h3 class="text-primary fw-bold mb-4">Rp {{ number_format($product->price, 0, ',', '.') }}</h3>
                    
                    <h5 class="fw-bold">Deskripsi Produk:</h5>
                    <p class="text-secondary lh-lg">{{ $product->description }}</p>
                </div>

                <!-- Tombol Beli / Pesan -->
                <div class="mt-4 pt-3 border-top">
                    <button class="btn btn-success btn-lg w-100 fw-bold" data-bs-toggle="modal" data-bs-target="#orderModal">
                        🛒 Beli / Pesan Sekarang
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tombol Share Media Sosial -->
<div class="mt-3 text-muted small">
    <span>Bagikan produk ini:</span>
    <div class="d-flex gap-2 mt-2">
        <button class="btn btn-outline-primary btn-sm" onclick="alert('Link produk disalin ke clipboard!')">📋 Salin Link</button>
        <button class="btn btn-outline-success btn-sm" onclick="alert('Membagikan ke WhatsApp...')">💬 WhatsApp</button>
    </div>
</div>

<!-- Modal Pemesanan (Tampilan Interaktif) -->
<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title fw-bold" id="orderModalLabel">Form Pemesanan Produk</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-info py-2 small">
                    Fitur ini disediakan sebagai simulasi tampilan pemesanan produk.
                </div>
                <form onsubmit="event.preventDefault(); alert('Pesanan berhasil dibuat (Simulasi)!'); $('#orderModal').modal('hide');">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Produk</label>
                        <input type="text" class="form-readonly form-control-plaintext fw-bold text-primary" value="{{ $product->name }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Harga</label>
                        <input type="text" class="form-readonly form-control-plaintext" value="Rp {{ number_format($product->price, 0, ',', '.') }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Jumlah Pasang/Pcs</label>
                        <input type="number" class="form-control" value="1" min="1" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Catatan Pembelian</label>
                        <textarea class="form-control" rows="2" placeholder="Contoh: Ukuran L, Warna Hitam"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 fw-bold">Konfirmasi Pemesanan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection