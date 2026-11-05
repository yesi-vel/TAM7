@extends('layouts.app')
@section('title', 'Edit Laporan')
@section('content')
<div class="row justify-content-center"><div class="col-md-8"><div class="card"><div class="card-header">Edit Laporan</div><div class="card-body">
    <form action="{{ route('laporans.update', $laporan) }}" method="POST" enctype="multipart/form-data">@csrf @method('PUT')
        <div class="mb-3"><label class="form-label">Nama Pelapor</label><input type="text" name="nama_pelapor" value="{{ old('nama_pelapor', $laporan->nama_pelapor) }}" class="form-control" required></div>
        <div class="mb-3"><label class="form-label">No HP</label><input type="text" name="no_hp" value="{{ old('no_hp', $laporan->no_hp) }}" class="form-control" required></div>
        <div class="mb-3"><label class="form-label">Lokasi</label><input type="text" name="lokasi" value="{{ old('lokasi', $laporan->lokasi) }}" class="form-control" required></div>
        <div class="mb-3"><label class="form-label">Kecamatan</label><input type="text" name="kecamatan" value="{{ old('kecamatan', $laporan->kecamatan) }}" class="form-control" required></div>
        <div class="mb-3"><label class="form-label">Tinggi Air (cm)</label><input type="number" name="tinggi_air" value="{{ old('tinggi_air', $laporan->tinggi_air) }}" class="form-control" required></div>
        <div class="mb-3"><label class="form-label">Status Penanganan</label>
            <select name="status" class="form-control">
                <option value="Menunggu" {{ $laporan->status == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                <option value="Diproses" {{ $laporan->status == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                <option value="Selesai" {{ $laporan->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
            </select>
        </div>
        <div class="mb-3"><label class="form-label">Keterangan</label><textarea name="keterangan" class="form-control" rows="3">{{ old('keterangan', $laporan->keterangan) }}</textarea></div>
        <div class="mb-3">
            <label class="form-label d-block">Foto Saat Ini</label>
            @if($laporan->foto)<img src="{{ asset('storage/' . $laporan->foto) }}" width="120" class="rounded mb-2"><br>@endif
            <input type="file" name="foto" class="form-control" accept="image/*">
            <small class="text-muted">Kosongkan jika tidak ingin mengganti foto.</small>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('laporans.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div></div></div></div>
@endsection