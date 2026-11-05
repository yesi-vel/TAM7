@extends('layouts.app')
@section('title', 'Login Petugas')
@section('content')
<div class="row justify-content-center"><div class="col-md-6"><div class="card"><div class="card-header">Login</div><div class="card-body">
    <form action="{{ route('login') }}" method="POST">@csrf
        <div class="mb-3"><label class="form-label">Email</label><input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required></div>
        <div class="mb-3"><label class="form-label">Password</label><input type="password" name="password" class="form-control" required></div>
        <button type="submit" class="btn btn-primary">Login</button>
        <a href="{{ route('register') }}" class="ms-2">Belum punya akun? Register</a>
    </form>
</div></div></div></div>
@endsection