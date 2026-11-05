@extends('layouts.app')
@section('title', 'Daftar Laporan Banjir')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Laporan Banjir</h2>
    <a href="{{ route('laporans.create') }}" class="btn btn-primary"><i class="fas fa-plus me-1"></i>Tambah Laporan</a>
</div>
<table class="table table-bordered align-middle">
    <thead class="table-light">
        <tr>
            <th>No</th><th>Foto</th><th>Pelapor</th><th>Lokasi & Kecamatan</th><th>Tinggi Air</th><th>Status</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($laporans as $laporan)
        <tr>
            <td>{{ $laporans->firstItem() + $loop->index }}</td>
            <td>
                @if($laporan->foto)
                    <img src="{{ asset('storage/' . $laporan->foto) }}" width="60" height="60" class="rounded object-fit-cover">
                @else
                    Tidak ada
                @endif
            </td>
            <td>{{ $laporan->nama_pelapor }}<br><small class="text-muted">{{ $laporan->no_hp }}</small></td>
            <td>{{ $laporan->lokasi }} (<span class="text-primary">{{ $laporan->kecamatan }}</span>)</td>
            <td>{{ $laporan->tinggi_air }} cm</td>
            <td>
                <span class="badge bg-{{ $laporan->status == 'Selesai' ? 'success' : ($laporan->status == 'Diproses' ? 'warning' : 'secondary') }}">
                    {{ $laporan->status }}
                </span>
            </td>
            <td>
                <a href="{{ route('laporans.show', $laporan) }}" class="btn btn-info btn-sm">Lihat</a>
                <a href="{{ route('laporans.edit', $laporan) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('laporans.destroy', $laporan) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="7" class="text-center">Belum ada data laporan.</td></tr>
        @endforelse
    </tbody>
</table>
{{ $laporans->links() }}
@endsection