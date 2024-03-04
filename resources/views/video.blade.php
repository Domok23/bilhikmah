@extends('layouts.main')

@section('container')

<main>
    <section class="pt-5 text-center container">
        <div class="row py-lg-4 mb-3">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h2 class="fw-normal text-success"><i class="fa-duotone fa-film me-1"></i><b> Video Islami</b></h2>
            </div>
        </div>
    </section>
    <div class="container marketing">
        <div class="col-12">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="/video" method="get">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="search" class="form-control me-2 rounded" placeholder="Cari video..."
                                name="cari" value="{{ request('cari') }}">
                            <button class="btn btn-success rounded" type="submit" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="Cari Video">Cari <i
                                    class="fa-duotone fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="album py-4 bg-light mb-4" style="border-radius: 10px;">
            <div class="container">
                <form action="/video" method="get">
                    @csrf
                    <div class="row g-3 mb-2">
                        <div class="col-md-3">
                            <select class="form-select" id="id" name="id" data-bs-toggle="tooltip"
                                data-bs-placement="right" title="Pilih Kategori">
                                <option selected disabled value="">Pilih Kategori</option>
                                <option value="" @if (request('id')===null) selected @endif>Semua Kategori</option>
                                @foreach ($kategori as $item)
                                <option value="{{ $item->id }}" @if (request('id')==$item->id) selected @endif>{{
                                    $item->judul }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
                @if ($video->count())
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                    @foreach ($video as $item)
                    <div class="col-sm-4">
                        <div class="card shadow-sm">
                            <div class="position-relative">
                                <a href="/video/{{ $item->id }}" class="stretched-link">
                                    <img data-src="https://img.youtube.com/vi/{{ $item->link }}/maxresdefault.jpg"
                                        class="card-img-top rounded lazyload" alt="{{ $item->judul }}">
                                    <div class="play-icon" style="font-size: 3em;">
                                        <i class="fa-duotone fa-circle-play"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="/video/{{ $item->id }}"
                                        class="text-decoration-none text-dark">{{
                                        $item->judul }}</a></h5>
                                <small>
                                    <a class="badge bg-success text-decoration-none link-light mb-1" href="#!">{{
                                        $item->judul_kat }}</a>
                                </small>
                                <p class="card-text text-muted mb-4">{{
                                    \Carbon\Carbon::parse($item->created_at)->diffForHumans() }} &bull; <a href="#!"
                                        class="text-decoration-none text-success"> Admin</a></p>
                                <a href="/video/{{ $item->id }}"
                                    class=" btn btn-outline-success stretched-link" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    title="Lihat Detail">Detail</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <p class="text-center fs-4">Data tidak ditemukan</p>
                @endif
            </div>
        </div>
        {!! $video->links('pagination::bootstrap-5') !!}
        <hr class="featurette-divider m-0 p-0">
    </div>
</main>

<script>
    document.getElementById('id').addEventListener('change', function() {
        this.form.submit();
    });
</script>
