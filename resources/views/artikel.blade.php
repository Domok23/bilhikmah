@extends('layouts.main')

@section('container')

<main>
    <section class="pt-5 text-center container">
        <div class="row py-lg-4 mb-3">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h2 class="fw-normal text-success"><i class="fa-duotone fa-newspaper me-1"></i><b> Artikel Islami</b></h2>
            </div>
        </div>
    </section>
    <div class="container marketing">
        <div class="col-12">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="/artikel" method="get">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="search" class="form-control me-2 rounded" placeholder="Cari artikel..." name="cari"
                                value="{{ request('cari') }}">
                            <button class="btn btn-success rounded" type="submit">Cari <i class="fa-duotone fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="album py-4 bg-light mb-4" style="border-radius: 10px;">
            <div class="container">
                <form action="/artikel" method="get">
                    @csrf
                    <div class="row g-3 mb-2">
                        <div class="col-md-3">
                            <select class="form-select" id="id" name="id">
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
                @if ($artikel->count())
                <div class="row g-3">
                    @foreach ($artikel as $item)
                    <div class="col-sm-4 d-flex align-items-stretch">
                        <div class="card shadow-sm">
                            <a href="/artikel/{{ $item->id }}" class="text-decoration-none text-dark">
                                <img data-src="{{ asset('storage/gambar/' . $item->gambar) }}"
                                    class="bd-placeholder-img card-img-top lazyload" alt="{{ $item->judul }}">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="/artikel/{{ $item->id }}"
                                        class="text-decoration-none text-dark">{{
                                        $item->judul }}</a></h5>
                                <p class="mb-1">
                                    <small>
                                        Oleh <a href="#!" class="text-decoration-none text-success"> Admin</a>
                                        &bull; {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                    </small>
                                </p>
                                <small>
                                    <a class="badge bg-success text-decoration-none link-light mb-2" href="#!">{{
                                        $item->judul_kat }}</a>
                                </small>
                                <p class="card-text">{{ $item->kutipan }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="/artikel/{{ $item->id }}"
                                            class="btn btn-outline-success mt-auto align-self-start">
                                            Detail
                                        </a>
                                    </div>
                                </div>
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
        {!! $artikel->links('pagination::bootstrap-5') !!}
        <hr class="featurette-divider m-0 p-0">
    </div>
</main>

<script>
    document.getElementById('id').addEventListener('change', function() {
        this.form.submit();
    });
</script>
