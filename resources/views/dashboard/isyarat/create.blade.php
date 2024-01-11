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
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Tambah Data Isyarat</h3>
                      </div>
                      <form method="post" action="/dashboard/isyarat" class="mb-5" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukan deskripsi isyarat">
                          </div>
                          <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="gambar" name="gambar" onchange="previewImage()">
                                <label class="custom-file-label" for="gambar">Choose file</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                            <a href="/dashboard/isyarat" class="btn btn-default">Kembali</a>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </form>
                    </div>
                  </div>
            </div>
        </div>
    </section>
</div>
@endsection
