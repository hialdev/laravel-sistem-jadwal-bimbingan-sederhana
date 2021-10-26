@extends('layouts.app')
@section('section')
<div class="container mt-5 mb-5">
    <div class="row">
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
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-md btn-secondary">back</a>

            <div class="card border-0 shadow rounded mt-3">
                <div class="card-body">
                    <h2>Tambah Mahasiswa</h2>
                    <form action="{{ route('mahasiswa.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                name="nama" value="{{ old('nama') }}" required>

                            <!-- error message untuk content -->
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="number" class="form-control @error('nim') is-invalid @enderror"
                                name="nim" value="{{ old('nim') }}" required>

                            <!-- error message untuk title -->
                            @error('nim')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label><br>
                            <input type="date" id="tanggal_lahir" class="form-control" name="tanggal_lahir" value="{{ old('lahir', date('Y-m-d')) }}"required>

                            <!-- error message untuk content -->
                            @error('tanggal_lahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea
                                name="alamat" id="alamat"
                                class="form-control @error('alamat') is-invalid @enderror"
                                rows="5"
                                required>{{ old('alamat') }}</textarea>

                            <!-- error message untuk content -->
                            @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tahun_masuk">Tahun Masuk</label>
                            <input type="text" class="form-control @error('tahun_masuk') is-invalid @enderror"
                                name="tahun_masuk" value="{{ old('tahun_masuk') }}" required>

                            <!-- error message untuk content -->
                            @error('tahun_masuk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">Save</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection