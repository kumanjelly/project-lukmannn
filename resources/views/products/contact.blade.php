@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow border-0 p-4 rounded-4">
            <h2 class="fw-bold mb-3">📞 Hubungi Kami</h2>
            <p class="text-muted">Punya pertanyaan seputar produk baju LookAtMe? Silakan hubungi layanan pelanggan kami melalui informasi di bawah ini:</p>

            <div class="row g-3 my-3">
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded-3 border">
                        <h6 class="fw-bold">💬 WhatsApp CS</h6>
                        <p class="mb-0 text-primary">+62 812-3456-7890</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded-3 border">
                        <h6 class="fw-bold">📧 Email Resmi</h6>
                        <p class="mb-0 text-primary">support@lookatme.com</p>
                    </div>
                </div>
            </div>

            <form onsubmit="event.preventDefault(); alert('Pesan berhasil dikirim!');">
                <div class="mb-3">
                    <label class="form-label fw-bold">Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama Anda" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Pesan / Kendala</label>
                    <textarea class="form-control" rows="3" placeholder="Tulis pesan Anda di sini..." required></textarea>
                </div>
                <button type="submit" class="btn btn-dark w-100 fw-bold">Kirim Pesan</button>
            </form>
        </div>
    </div>
</div>
@endsection