@extends('layouts.app')
@section('section')
<div class="container mt-5">
    <a href="/" class="btn btn-secondary">Back</a>

    <div class="card mt-4">
        <div class="card-header">
            Detail Data Dosen dengan ID {{ $dosen->id }}
        </div>
        <div class="card-body">
            <p><strong>Nama : </strong>{{ $dosen->nama }}</p>
            <p><strong>NIDN : </strong>{{ $dosen->nidn }}</p>
            <p><strong>Alamat : </strong>{{ $dosen->alamat }}</p>
            <p><strong>Kontak : </strong>{{ $dosen->kontak }}</p>
        </div>
      </div>
</div>
@endsection