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
            <a href="{{ route('jadwal.index') }}" class="btn btn-md btn-secondary">back</a>
            
            <div class="card border-0 shadow rounded mt-3">
                <div class="card-body">
                    <h2>Tambah Jadwal</h2>
                    <form action="{{ route('jadwal.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="mahasiswa_id">Mahasiswa ID</label>
                            <input type="number" class="form-control @error('mahasiswa_id') is-invalid @enderror"
                                name="mahasiswa_id" value="{{ old('mahasiswa_id') }}" placaeholder="ID Mahasiswa" required>

                            <!-- error message untuk content -->
                            @error('mahasiswa_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="dosen_id">Dosen ID</label>
                            <input type="number" class="form-control @error('dosen_id') is-invalid @enderror"
                                name="dosen_id" value="{{ old('dosen_id') }}" placaeholder="ID Dosen" required>

                            <!-- error message untuk content -->
                            @error('dosen_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                name="judul" value="{{ old('judul') }}" required>

                            <!-- error message untuk title -->
                            @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea
                                name="deskripsi" id="deskripsi"
                                class="form-control @error('deskripsi') is-invalid @enderror"
                                rows="5"
                                required>{{ old('deskripsi') }}</textarea>

                            <!-- error message untuk content -->
                            @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="awal">Awal</label>
                            <input type="datetime-local" class="form-control @error('awal') is-invalid @enderror"
                                name="awal" value="{{ old('awal') }}" required>

                            <!-- error message untuk content -->
                            @error('awal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="akhir">Akhir</label>
                            <input type="datetime-local" class="form-control @error('akhir') is-invalid @enderror"
                                name="akhir" value="{{ old('akhir') }}" required>

                            <!-- error message untuk content -->
                            @error('akhir')
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