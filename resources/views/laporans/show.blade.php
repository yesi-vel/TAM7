@extends('layouts.app')
@section('title', 'Detail Laporan')
@section('content')
<div class="row justify-content-center"><div class="col-md-8"><div class="card"><div class="card-header">Detail Laporan</div><div class="card-body text-center">
    @if($laporan->foto)<img src="{{ asset('storage/' . $laporan->foto) }}" width="200" class="rounded mb-3"><br>@endif
    <h4>{{ $laporan->nama_pelapor }} ({{ $laporan->no_hp }})</h4>
    <p><strong>Lokasi:</strong> {{ $laporan->lokasi }}, Kec. {{ $laporan->kecamatan }}</p>
    <p><strong>Tinggi Air:</strong> {{ $laporan->tinggi_air }} cm</p>
    <p><strong>Status:</strong> <span class="badge bg-primary">{{ $laporan->status }}</span></p>
    <p><strong>Keterangan:</strong> {{ $laporan->keterangan ?? '-' }}</p>
    <a href="{{ route('laporans.index') }}" class="btn btn-secondary">Kembali</a>
</div></div></div></div>
@endsection