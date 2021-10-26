@extends('layouts.app')
@section('section')
<div class="container mt-5">
    <a href="/" class="btn btn-secondary">Back</a>
    @php
        if($jadwal == null){
            $jadwal == "-";
        }
    @endphp
    <div class="card mt-4">
        <div class="card-header">
            Detail Jadwal dengan ID {{ $jadwal }}
        </div>
        <div class="card-body">
            <p><strong>Mahasiswa : </strong>{{ $jadwal}}</p>
            <p><strong>Dosen : </strong>{{ $jadwal}}</p>
            <p><strong>Judul : </strong>{{ $jadwal}}</p>
            <p><strong>Deskripsi : </strong>{{ $jadwal}}</p>
            <p><strong>Awal : </strong>{{ $jadwal}}</p>
            <p><strong>Akhir : </strong>{{ $jadwal}}</p>
        </div>
      </div>
</div>
@endsection