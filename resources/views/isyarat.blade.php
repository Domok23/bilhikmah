@extends('layouts.main')

@section('container')

<main>
    <section class="pt-4 text-center container">
        <div class="row py-4">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light"><b>Belajar Bahasa Isyarat</b></h1>
            </div>
        </div>
    </section>
    <div class="container marketing">
        <div class="col-12">
            <div class="row justify-content-center mb-lg-2">
                <div class="col-md-6">
                    <form action="/isyarat" method="get">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="search" class="form-control" placeholder="Cari bahasa isyarat" name="cari"
                                value="{{ request('cari') }}">
                            <button class="btn btn-success" type="submit">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="album py-4 bg-light" style="border-radius: 10px;">
            <div class="container">
                @if ($isyarat->count())
                <div class="row row-cols-3 row-cols-sm-2 row-cols-md-4 g-3">
                    @foreach ($isyarat as $item)
                    <div class="col d-grid align-items-stretch">
                        <div class="card shadow-sm">
                            <div class="thumbnail">
                                <a href="{{ asset('storage/gambar/' . $item->gambar) }}" data-lightbox="roadtrip"
                                    data-title="{{ $item->deskripsi }}">
                                    <img data-src="{{ asset('storage/gambar/' . $item->gambar) }}"
                                        class="bd-placeholder-img card-img-top lazyload" alt="{{ $item->deskripsi }}">
                                </a>
                            </div>
                            <div class="card-body d-flex">
                                <h2 class="card-text fw-bold mt-auto">{{ $item->deskripsi }}</h2>
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
        <hr class="featurette-divider">
    </div>
</main>
