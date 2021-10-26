@extends('layouts.app')
@section('section')
<div class="container mt-5">
    <h1>Jadwal Bimbingan Mahasiswa dan Dosen</h1>
    <hr>
    <div class="row mt-4">
        <div class="col-md-12">

            <!-- Notifikasi menggunakan flash session data -->
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if (session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
            @endif

            @include('partials.jadwal')
            @include('partials.mahasiswa')
            @include('partials.dosen')

        </div>
    </div>
</div>
@endsection