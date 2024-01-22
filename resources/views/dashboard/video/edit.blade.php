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
                            <h3 class="card-title">Edit Data Video</h3>
                        </div>
                        <form method="post" action="/dashboard/video/{{ $video->id }}" class="mb-5"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul"
                                        placeholder="Masukan judul video" value="{{ $video->judul }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input type="text" class="form-control" id="link" name="link"
                                        placeholder="Masukan link video" value="{{ $video->link }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="id_kategori">Pilih Kategori</label>
                                    <select class="form-control col-lg-6" id="id_kategori" name="id_kategori">
                                        <option selected value="{{ $video->id_kategori }}">{{ $video->judul_kat }}
                                        </option>
                                        @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}">{{ $item->judul }}</option>
                                        @endforeach
                                    </select>
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
