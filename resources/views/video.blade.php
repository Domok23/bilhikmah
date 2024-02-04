@extends('layouts.main')

@section('container')

<main>
    <section class="py-2 text-center container">
        <div class="row py-lg-4">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light"><b>Video Islami</b></h1>
            </div>
        </div>
    </section>
    <div class="container marketing">
        <div class="col-12">
            <div class="row justify-content-center mb-4">
                <div class="col-md-6">
                    <form action="/video" method="get">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="search" class="form-control" placeholder="Cari video" name="cari"
                                value="{{ request('cari') }}">
                            <button class="btn btn-success" type="submit">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="album py-4 bg-light mb-4">
            <div class="container">
                <form action="/video" method="get">
                    @csrf
                    <div class="row g-3 mb-2">
                        <div class="col-md-3">
                            <select class="form-control" id="id" name="id">
                                <option value="">--Filter kategori video--</option>
                                @foreach ($kategori as $item)
                                <option value="{{ $item->id }}">{{ $item->judul }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-1">
                            <!-- Adjust the column width as needed -->
                            <button type="submit" class="btn btn-success mb-3">Filter</button>
                        </div>
                    </div>
                </form>
                @if ($video->count())
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                    @foreach ($video as $item)
                    <div class="col-sm-4">
                        <div class="card shadow-sm">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{ $item->link }}"></iframe>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="/video/{{ $item->id }}"
                                        class="text-decoration-none text-dark">{{
                                        $item->judul }}</a></h5>
                                <p class="card-text text-muted mb-1">{{
                                    \Carbon\Carbon::parse($item->created_at)->diffForHumans() }} - <a href="#!"
                                        class="text-decoration-none text-success"> Admin</a></p>
                                <small>
                                    <a class="badge bg-success text-decoration-none link-light mb-2" href="#!">{{
                                        $item->judul_kat }}</a>
                                </small>
                                <br>
                                <a href="/video/{{ $item->id }}"
                                    class=" btn btn-outline-success stretched-link">Detail</a>
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
        <hr class="featurette-divider">
    </div>
</main>
