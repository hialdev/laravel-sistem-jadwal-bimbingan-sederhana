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
            <a href="{{ route('dosen.index') }}" class="btn btn-md btn-secondary">back</a>

            <div class="card border-0 shadow rounded mt-3">
                <div class="card-body">
                    <h2>Edit Data Dosen dengan ID {{ $dosen->id }}</h2>
                    <form action="{{ route('dosen.update',$dosen->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                name="nama" value="{{ old('nama',$dosen->nama) }}" required>

                            <!-- error message untuk content -->
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nidn">NIDN</label>
                            <input type="number" class="form-control @error('nidn') is-invalid @enderror"
                                name="nidn" value="{{ old('nidn',$dosen->nidn) }}" required>

                            <!-- error message untuk title -->
                            @error('nidn')
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
                                required>{{ old('alamat',$dosen->alamat) }}</textarea>

                            <!-- error message untuk content -->
                            @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="kontak">Kontak</label>
                            <input type="text" class="form-control @error('kontak') is-invalid @enderror"
                                name="kontak" value="{{ old('kontak',$dosen->kontak) }}" required>

                            <!-- error message untuk content -->
                            @error('kontak')
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