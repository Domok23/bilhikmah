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
                        <li class="breadcrumb-item"><a href="/dashboard/artikel">{{ $title }}</a></li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Artikel</h3>
                        </div>
                        <form method="post" action="/dashboard/artikel" class="mb-5" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group col-md-3">
                                    <label for="id_kategori">Kategori</label>
                                    <select class="form-control" id="id_kategori" name="id_kategori">
                                        <option selected disabled><b>Pilih kategori</b></option>
                                        @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}">{{ $item->judul }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul"
                                        placeholder="Masukan judul artikel" required>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <div class="mb-3">
                                        <input id="x" type="hidden" name="deskripsi" required>
                                        <trix-editor input="x"></trix-editor>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Gambar</label>
                                    <img class="img-preview img-fluid mb-2 col-sm-4">
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
                            </div>
                            <div class="card-footer">
                                <a href="/dashboard/artikel" class="btn btn-default">Kembali</a>
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
