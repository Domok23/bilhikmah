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
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Cara Ambil Kode Dari Video YouTube</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <p>1. Buka video yang ingin diambil kodenya di YouTube.</p>
                        <p style="margin-bottom: 0;">2. Salin kode video tersebut.
                            <br>
                            <span style="margin-left: 20px;">Nb:</span>
                        <ul style="list-style-type: none; padding-left: 0;">
                            <li style="margin-left: 20px;">- Kode ini biasanya terletak setelah "watch?v="</li>
                            <li style="margin-left: 20px;">- Kode ini biasanya terdiri dari 11 karakter alfanumerik.</li>
                        </ul>
                        </p>
                        <div class="thumbnail">
                            <a href="/img/kode_yt.png" data-lightbox="roadtrip">
                                <img class="img-responsive mb-4" style="margin: 0 auto; max-width: 100%;"
                                    src="/img/kode_yt.png" alt="Salin kode video">
                            </a>
                        </div>
                        <p>Nb: Jika kode terlihat panjang, salin hanya kode yang terletak setelah "watch?v=" dan sebelum
                            "&".</p>
                        <div class="thumbnail">
                            <a href="/img/kode_yt_n.png" data-lightbox="roadtrip">
                                <img class="img-responsive mb-4" style="margin: 0 auto; max-width: 100%;"
                                    src="/img/kode_yt_n.png" alt="Salin kode video antara watch?v= dan &">
                            </a>
                        </div>
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
                                    <label for="deskripsi">Deskripsi</label>
                                    <div class="mb-3">
                                        <input id="x" type="hidden" id="deskripsi" name="deskripsi"
                                            value="{{ $video->deskripsi }}">
                                        <trix-editor input="x" data-trix-accept-content="text/html">{{ $video->deskripsi
                                            }}</trix-editor>
                                    </div>
                                    @error('deskripsi')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="mb-0" for="link">Kode Video Youtube</label>
                                    <br>
                                    <button type="button" class="btn badge bg-success mb-2" data-toggle="modal"
                                        data-target="#staticBackdrop">
                                        Lihat cara mendapatkan kode video
                                    </button>
                                    <input type="text" class="form-control" id="link" name="link"
                                        placeholder="Masukan kode dari video Youtube" value="{{ $video->link }}" required>
                                    @error('link')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="id_kategori">Pilih Kategori</label>
                                    <br>
                                    <select class="form-control custom-select col-lg-6" id="id_kategori" name="id_kategori">
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
