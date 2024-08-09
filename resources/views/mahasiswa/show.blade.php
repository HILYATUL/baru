@extends('layouts.layout')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="page-title">
                <h3>Detail Mahasiswa</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('mahasiswa.index') }}">Data Mahasiswa</a></li>
                    <li class="breadcrumb-item active">Detail</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Informasi Detail Mahasiswa</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
                                <p><strong>Nama:</strong> {{ $mahasiswa->nama }}</p>
                                <p><strong>Program Studi:</strong> {{ $mahasiswa->prodi }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
