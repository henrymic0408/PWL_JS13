@extends('master')

<!-- Isi Title -->
@section('title', 'Tambah Data')

<!-- Isi Bagian Judul Halaman -->
@section('judul_halaman', 'Tambah Data Mahasiswa')

<!-- Isi Bagian Konten -->
@section('konten')
<a href="/mahasiswa" class="btn btn-danger">Kembali</a>
<br>
<br>
<!-- menampilkan error validasi -->
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<!-- form validasi -->
<form action="/mahasiswa/simpan" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nama">Nama</label>
        <input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
    </div>
    <div class="form-group">
        <label for="nim">NIM</label>
        <input type="number" class="form-control" name="nim" value="{{ old('nim') }}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
    </div>
    <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <input type="text" class="form-control" name="jurusan" value="{{ old('jurusan') }}">
    </div>
    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
</form>
@endsection