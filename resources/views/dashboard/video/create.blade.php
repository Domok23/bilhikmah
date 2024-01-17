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
                        <li class="breadcrumb-item"><a href="/dashboard/video">{{ $title }}</a></li>
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
                    <div class="card card-success">
                      <div class="card-header">
                        <h3 class="card-title">Tambah Data Video</h3>
                      </div>
                      <form method="post" action="/dashboard/video" class="mb-5" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label for="id_kategori">Kategori</label>
                            <select class="form-control" id="id_kategori" name="id_kategori">
                                    <option selected disabled><b>Kategori</b></option>
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->id }}">{{ $item->judul }}</option>
                                @endforeach
                            </select>
                            </div>
                          <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan judul video">
                          </div>
                          <div class="form-group">
                            <label for="link">Link Embed Youtube</label>
                            <input type="text" class="form-control" id="link" name="link" placeholder="Masukan link embed dari video Youtube">
                          </div>
                        </div>
                        <div class="card-footer">
                            <a href="/dashboard/video" class="btn btn-default">Kembali</a>
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
