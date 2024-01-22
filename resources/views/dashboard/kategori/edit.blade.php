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
                        <li class="breadcrumb-item"><a href="/dashboard/kategori">{{ $title }}</a></li>
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
                        <h3 class="card-title">Edit Data Kategori</h3>
                      </div>
                      <form method="post" action="/dashboard/kategori/{{ $kategori->id }}" class="mb-5" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label for="judul">Judul Kategori</label>
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan judul kategori" value="{{ $kategori->judul }}" required>
                          </div>
                        </div>
                        <div class="card-footer">
                            <a href="/dashboard/kategori" class="btn btn-default">Kembali</a>
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
