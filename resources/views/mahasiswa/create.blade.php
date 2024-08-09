@extends('Layouts.layout')

@section('content')
<!-- template -->

<div class="page-wrapper cardhead">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Tambah Data Mahasiswa</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('mahasiswa.index') }}">Data Akun</a></li>
                        <li class="breadcrumb-item active">Create Data Mahasiswa</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('mahasiswa.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>NIM</label>
                                <input type="textbox" name="nim" value="{{ old('nim') }}" class="form-control @error('nama_kategori') is-invalid @enderror" placeholder="Masukkan Nama Barang">
                                @error('nim')
                                <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Nama Mahasiswa</label>
                                <input type="textbox" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Deskripsi Barang">
                                @error('nama')
                                <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Prodi</label>
                                <input type="text" name="prodi" value="{{ old('prodi') }}" class="form-control @error('prodi') is-invalid @enderror" placeholder="Masukkan prodi Barang">
                                @error('prodi')
                                <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('mahasiswa.index') }}">
                                    <button type="button" class="btn btn-danger"> <i class="fa fa-undo"></i> Back</button>
                                </a>
                                <button type="submit" class="btn btn-primary"> <i class="fa fa-save"></i> Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
