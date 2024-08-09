@extends('Layouts.layout')

@section('content')
<!-- template -->

<div class="page-wrapper cardhead">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Tambah Data matakuliah</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('matakuliah.index') }}">Data matakuliah</a></li>
                        <li class="breadcrumb-item active">edit Data matakuliah</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label>matakuliah</label>
                                <input type="textbox" name="matakuliah" value="{{ old('matakuliah', $matakuliah->matakuliah) }}" class="form-control @error('nama_matakuliah') is-invalid @enderror" placeholder="Masukkan Nama matakuliah">
                                @error('matakuliah')
                                <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>jumlah sks</label>
                                <input type="number" name="sks" value="{{ old('sks', $matakuliah->sks) }}" class="form-control @error('sks') is-invalid @enderror" placeholder="Masukkan jumlah sks">
                                @error('sks')
                                <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>bobot</label>
                                <input type="number" name="bobot" value="{{ old('bobot', $matakuliah->bobot) }}" class="form-control @error('bobot') is-invalid @enderror" placeholder="Masukkan jumlah bobot">
                                @error('bobot')
                                <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('matakuliah.index') }}">
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