@extends('dashboard.layouts.main')
@section('container')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $title }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">{{ $title }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Manajemen Data Bahasa Isyarat</h3>
                        </div>
                        <div class="card-body">
                            @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Berhasil!</h5>
                                {{ session('success') }}
                            </div>
                            @elseif (session()->has('danger'))
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                <h5><i class="icon fa-solid fa-trash-xmark"></i> Dihapus!</h5>
                                {{ session('danger') }}
                            </div>
                            <br>
                            @endif
                            <a href="/dashboard/isyarat/create" class="btn btn-success mb-3"><i class="fas fa-plus"></i>
                                Tambah</a>
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Deskripsi</th>
                                            <th class="text-center">Gambar</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($isyarat as $item)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $item->deskripsi }}</td>
                                            <td>
                                                <div style="max-height: 150px; max-width:150px; overflow: hidden;">
                                                    <img data-src="{{ asset('storage/gambar/' . $item->gambar) }}"
                                                        alt="{{ $item->deskripsi }}" class="img-fluid lazyload">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <a href="/isyarat" class="btn btn-sm btn-primary mb-1"
                                                    target="_blank"><i class="fas fa-eye"></i> Lihat
                                                </a>
                                                <a href="/dashboard/isyarat/{{ $item->id }}/edit"
                                                    class="btn btn-sm btn-warning mb-1">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <form action="/dashboard/isyarat/{{ $item->id }}" method="post"
                                                    class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-sm btn-danger mb-1"
                                                        onclick="return confirm('Apakah yakin mau hapus data?')">
                                                        <i class="fas fa-times-circle"></i> Hapus
                                                    </button>
                                                </form>
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
    </section>
</div>
@endsection
