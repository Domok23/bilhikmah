@extends('layouts.main')

@section('container')

<main>
    <section class="pt-5 text-center container">
        <div class="row py-lg-4 mb-3">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h2 class="fw-normal text-success"><i class="fa-duotone fa-hands-holding-heart me-1"></i><b> Belajar
                        Bahasa Isyarat</b></h2>
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
                            <input type="search" class="form-control me-2 rounded" placeholder="Cari bahasa isyarat..."
                                name="cari" value="{{ request('cari') }}">
                            <button class="btn btn-success rounded" type="submit">Cari <i
                                    class="fa-duotone fa-magnifying-glass"></i></button>
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
    </div>
</main>