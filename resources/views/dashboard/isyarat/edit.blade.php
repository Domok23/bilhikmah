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
                        <li class="breadcrumb-item"><a href="/dashboard/isyarat">{{ $title }}</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data Bahasa Isyarat</h3>
                        </div>
                        <form method="post" action="/dashboard/isyarat/{{ $isyarat->id }}" class="mb-5"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="gambar">Gambar</label>
                                    @if ($isyarat->gambar)
                                    <img src="{{ asset('storage/gambar/' . $isyarat->gambar) }}"
                                        class="img-preview img-fluid mb-2 col-sm-4 d-block">
                                    @else
                                    <img class="img-preview img-fluid mb-2 col-sm-4">
                                    @endif
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input @error('gambar') is-invalid  @enderror"
                                                id="gambar" name="gambar" accept="gambar/*" onchange="previewImage()">
                                            <label class="custom-file-label col-lg-6" for="gambar">Pilih file</label>
                                        </div>
                                    </div>
                                    @error('gambar')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                        placeholder="Masukan deskripsi bahasa isyarat" value="{{ $isyarat->deskripsi }}"
                                        required>
                                    @error('deskripsi')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="/dashboard/isyarat" class="btn btn-default">Kembali</a>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection