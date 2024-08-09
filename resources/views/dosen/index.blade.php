@extends('layouts.layout')

@section('content')
<!-- template -->

<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="page-title">
                <h3>Data Dosen</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item active">Data Dosen</li>
                </ul>
            </div>
            <div class="page-btn">
                <a href="/dosen/create" class="btn btn-added"><i data-feather="plus"></i><span>Dosen</span></a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table datanew">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nid</th>
                                        <th>hp</th>
                                        <th>alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dosen as $index => $dosen)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $dosen->nama }}</td>
                                            <td>{{ $dosen->nid }}</td>
                                            <td>{{ $dosen->hp }}</td>
                                            <td>{{ $dosen->alamat }}</td>
                                            <td>
                                                <a href="{{ route('dosen.edit', $dosen->id) }}" title="Ubah Data">
                                                    <span class="badge bg-primary">
                                                        <i class="fa fa-edit">Edit</i>
                                                    </span>
                                                </a>
                                                <!-- Delete button -->
                                                <form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Apakah Kamu Yakin Ingin Hapus Produk Ini?');">
                                                        <i class="fa fa-trash"></i> Hapus
                                                    </button>
                                                </form>
                                                <a href="{{ route('dosen.show', $dosen->id) }}" title="Detail Barang">
                                                    <span class="badge bg-success"><i class="fa fa-tags"></i> Detail</span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
