@extends('layouts.app')
@section('title', 'Register Petugas')
@section('content')
<div class="row justify-content-center"><div class="col-md-6"><div class="card"><div class="card-header">Register</div><div class="card-body">
    <form action="{{ route('register') }}" method="POST">@csrf
        <div class="mb-3"><label class="form-label">Nama</label><input type="text" name="name" class="form-control" required></div>
        <div class="mb-3"><label class="form-label">Email</label><input type="email" name="email" class="form-control" required></div>
        <div class="mb-3"><label class="form-label">Password</label><input type="password" name="password" class="form-control" required></div>
        <div class="mb-3"><label class="form-label">Konfirmasi Password</label><input type="password" name="password_confirmation" class="form-control" required></div>
        <button type="submit" class="btn btn-primary">Register</button>
        <a href="{{ route('login') }}" class="ms-2">Sudah punya akun? Login</a>
    </form>
</div></div></div></div>
@endsection