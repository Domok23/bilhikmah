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
                        <li class="breadcrumb-item active">Edit</li>
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
                            <h3 class="card-title">Edit Data Artikel</h3>
                        </div>
                        <form method="post" action="/dashboard/artikel/{{ $artikel->id }}" class="mb-5"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul"
                                        placeholder="Masukan judul artikel" value="{{ $artikel->judul }}" required>
                                    @error('judul')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <div class="mb-3">
                                        <input id="x" type="hidden" id="deskripsi" name="deskripsi"
                                            value="{{ $artikel->deskripsi }}" required>
                                        <trix-editor input="x" data-trix-accept-content="text/html">{{
                                            $artikel->deskripsi }}</trix-editor>
                                    </div>
                                    @error('deskripsi')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="gambar">Gambar</label>
                                    @if ($artikel->gambar)
                                    <img src="{{ asset('storage/gambar/' . $artikel->gambar) }}"
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
                                    <label for="id_kategori">Pilih Kategori</label>
                                    <select class="form-control col-lg-6" id="id_kategori" name="id_kategori">
                                        <option selected value="{{ $artikel->id_kategori }}">{{ $artikel->judul_kat }}
                                        </option>
                                        @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}">{{ $item->judul }}</option>
                                        @endforeach
                                    </select>
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