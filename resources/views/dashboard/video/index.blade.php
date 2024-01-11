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
                        <li class="breadcrumb-item"><a href="#">{{ $title }}</a></li>
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
                            <h3 class="card-title">Data Video</h3>
                        </div>
                        <div class="card-body">
                            @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                                {{ session('success') }}
                            </div>
                            @elseif (session()->has('danger'))
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                                {{ session('danger') }}
                            </div>
                            <br>
                            @endif
                            <a href="/dashboard/video/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i>
                                Tambah</a>
                            <table id="dataTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Kategori video</th>
                                        <th class="text-center">Judul</th>
                                        <th class="text-center">Link</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($video as $item)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $item->judul_kat }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td class="text-center">
                                            <div>
                                                <iframe width="200px" height="100px" class="embed-responsive-item"
                                                    src="{{ $item->link }}" allowfullscreen></iframe>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a href="/dashboard/video/{{ $item->id }}/edit" class="btn btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="/dashboard/video/{{ $item->id }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger"
                                                    onclick="return confirm('Apakah yakin mau hapus data?')">
                                                    <i class="fas fa-times-circle"></i>
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
    </section>
</div>
@endsection