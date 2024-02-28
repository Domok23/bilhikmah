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
                            <h3 class="card-title">Manajemen Data Admin</h3>
                        </div>
                        <div class="card-body">
                            @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Berhasil!</h5>
                                {{ session('success') }}
                            </div>
                            @elseif (session()->has('error'))
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-ban"></i> Gagal!</h5>
                                {{ session('error') }}
                            </div>
                            <br>
                            @endif
                            <a href="/dashboard/user/create" class="btn btn-success mb-3"><i class="fas fa-plus"></i>
                                Tambah</a>
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $item)
                                        @if ($item->id !== auth()->user()->id) {{-- Memeriksa apakah pengguna saat ini
                                        adalah pengguna yang sedang dilihat --}}
                                        <tr>
                                            <td class="text-center">{{ $item->nama }}</td>
                                            <td class="text-center">{{ $item->email }}</td>
                                            <td class="text-center">
                                                <a href="/dashboard/user/{{ $item->id }}/edit"
                                                    class="btn btn-sm btn-warning mb-1">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <form action="/dashboard/user/{{ $item->id }}" method="post"
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
                                        @endif
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
