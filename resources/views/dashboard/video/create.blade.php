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
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Cara Embed Video YouTube</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <p>1. Buka video yang ingin di embed di YouTube</p>
                        <p>2. Klik tombol "Bagikan" di bawah video</p>
                        <img class="img-responsive mb-4" style="margin:0 auto; max-width: 100%;" src="/img/bagikan.png"
                            alt="klik tombol bagikan">
                        <p>3. Klik tombol "Embed"</p>
                        <img class="img-responsive mb-4" style="margin:0 auto; max-width: 100%;" src="/img/sematkan.png"
                            alt="klik tombol sematkan">
                        <p>4. Salin link yang ada di dalam kotak</p>
                        <img class="img-responsive" style="margin:0 auto; max-width: 100%;" src="/img/copy_link.png"
                            alt="klik tombol sematkan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Mengerti</button>
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
                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul"
                                        placeholder="Masukan judul video" value="{{ old('judul') }}" required>
                                    @error('judul')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <div class="mb-3">
                                        <input id="x" type="hidden" id="deskripsi" name="deskripsi" required
                                            value="{{ old('deskripsi') }}">
                                        <trix-editor input="x"></trix-editor>
                                        @error('deskripsi')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="mb-0" for="link">Link Embed Youtube</label>
                                    <br>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn badge bg-success mb-2" data-toggle="modal"
                                        data-target="#staticBackdrop">
                                        Lihat cara embed
                                    </button>
                                    <input type="text" class="form-control" id="link" name="link"
                                        placeholder="Masukan link embed dari video Youtube" required
                                        value="{{ old('link') }}">
                                    @error('link')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="id_kategori">Kategori</label>
                                    <select class="form-control col-lg-6" name="id_kategori">
                                        @foreach ($kategori as $item)
                                        @if (old('id_kategori') == $item->id)
                                        <option value="{{ $item->id }}">{{ $item->judul }}
                                        </option>
                                        @else
                                        <option value="{{ $item->id }}">{{ $item->judul }}</option>
                                        @endif
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