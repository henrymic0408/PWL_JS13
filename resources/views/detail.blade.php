@extends('master')

<!-- Isi Title -->
@section('title', 'Detail Mahasiswa')

<!-- Isi Bagian Judul Halaman -->
@section('judul_halaman', 'Detail Data Mahasiswa')

<!-- Isi Bagian Konten -->
@section('konten')
<a href="/" class="btn btn-danger">Kembali</a>
<br>
<br>

@foreach($mahasiswa as $mhs)
<h5 class="card-title">{{ $mhs -> nama }}</h5>
<p class="card-text">
    <label for=""><b>NIM : </b></label>
    {{ $mhs -> nim}}
</p>
<p class="card-text">
    <label for=""><b>E-Mail : </b></label>
    {{ $mhs -> email}}
</p>
<p class="card-text">
    <label for=""><b>Jurusan : </b></label>
    {{ $mhs -> jurusan}}
</p>
@endforeach
@endsection