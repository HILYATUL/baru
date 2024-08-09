@extends('layouts.layout')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="page-title">
                <h3>Detail MataKuliah</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('matakuliah.index') }}">Data matakuliah</a></li>
                    <li class="breadcrumb-item active">Detail</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Informasi Detail Matakuliah</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>matakuliah:</strong> {{ $matakuliah->matakuliah }}</p>
                                <p><strong>sks:</strong> {{ $matakuliah->sks }}</p>
                                <p><strong>bobot:</strong> {{ $matakuliah->bobot }}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection