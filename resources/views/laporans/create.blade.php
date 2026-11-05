@extends('layouts.app')
@section('title', 'Buat Laporan Baru')
@section('content')
<div class="row justify-content-center"><div class="col-md-8"><div class="card"><div class="card-header">Form Lapor Banjir</div><div class="card-body">
    <form action="{{ route('laporans.store') }}" method="POST" enctype="multipart/form-data">@csrf
        <div class="mb-3"><label class="form-label">Nama Pelapor</label><input type="text" name="nama_pelapor" class="form-control" required></div>
        <div class="mb-3"><label class="form-label">No HP</label><input type="text" name="no_hp" class="form-control" required></div>
        <div class="mb-3"><label class="form-label">Lokasi</label><input type="text" name="lokasi" class="form-control" required></div>
        <div class="mb-3"><label class="form-label">Kecamatan</label><input type="text" name="kecamatan" class="form-control" required></div>
        <div class="mb-3"><label class="form-label">Tinggi Air (cm)</label><input type="number" name="tinggi_air" class="form-control" required></div>
        <div class="mb-3"><label class="form-label">Keterangan</label><textarea name="keterangan" class="form-control" rows="3"></textarea></div>
        <div class="mb-3"><label class="form-label">Foto Bukti (JPG/PNG, Maks 2MB)</label><input type="file" name="foto" class="form-control" accept="image/*" required></div>
        <button type="submit" class="btn btn-primary">Kirim Laporan</button>
        <a href="{{ route('laporans.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div></div></div></div>
@endsection