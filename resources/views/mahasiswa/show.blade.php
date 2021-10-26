@extends('layouts.app')
@section('section')
<div class="container mt-5">
    <a href="/" class="btn btn-secondary">Back</a>

    <div class="card mt-4">
        <div class="card-header">
            Detail Data Mahasiswa ID ke {{ $mahasiswa->id }}
        </div>
        <div class="card-body">
            <p><strong>Nama : </strong>{{ $mahasiswa->nama }}</p>
            <p><strong>NIM : </strong>{{ $mahasiswa->nim }}</p>
            <p><strong>Tanggal Lahir : </strong>{{ $mahasiswa->tanggal_lahir }}</p>
            <p><strong>Alamat : </strong>{{ $mahasiswa->alamat }}</p>
            <p><strong>Tahun Masuk : </strong>{{ $mahasiswa->tahun_masuk }}</p>
        </div>
      </div>
</div>
@endsection