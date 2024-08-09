@extends('layouts.layout')

@section('content')
<!-- template -->

<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="page-title">
                <h3>Data Matakuliah</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item active">Data Matakuliah</li>
                </ul>
            </div>
            <div class="page-btn">
                <a href="/matakuliah/create" class="btn btn-added"><i data-feather="plus"></i><span>Matakuliah</span></a>
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
                                        <th>Matakuliah</th>
                                        <th>sks</th>
                                        <th>bobot</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($matakuliah as $index => $matakuliah)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $matakuliah->matakuliah }}</td>
                                        <td>{{ $matakuliah->sks }}</td>
                                        <td>{{ $matakuliah->bobot }}</td>
                                        <td>
                                            <a href="{{ route('matakuliah.edit', $matakuliah->id) }}" title="Ubah Data">
                                                <span class="badge bg-primary">
                                                    <i class="fa fa-edit">Edit</i>
                                                </span>
                                            </a>
                                            <!-- Delete button -->
                                            <form action="{{ route('matakuliah.destroy', $matakuliah->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="badge bg-danger border-0" onclick="return confirm('hapus data matakuliah?');">
                                                    <i class="fa fa-trash"></i> Hapus
                                                </button>
                                            </form>
                                            <a href="{{ route('matakuliah.show', $matakuliah->id) }}" title="Detail Matakuliah">
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