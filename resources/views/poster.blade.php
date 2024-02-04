@extends('layouts.main')

@section('container')

<main>
    <section class="py-2 text-center container">
        <div class="row py-lg-4">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light"><b>Poster Islami</b></h1>
            </div>
        </div>
    </section>
    <div class="container marketing">
        <div class="col-12">
            <div class="row justify-content-center mb-4">
                <div class="col-md-6">
                    <form action="/poster" method="get">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="search" class="form-control" placeholder="Cari poster" name="cari"
                                value="{{ request('cari') }}">
                            <button class="btn btn-success" type="submit">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="album py-4 bg-light mb-4">
            <div class="container">
                <form action="/poster" method="get">
                    @csrf
                    <div class="row g-3 mb-2">
                        <div class="col-md-3">
                            <select class="form-control" id="id" name="id">
                                <option value="">--Filter kategori poster--</option>
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
                @if ($poster->count())
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-3">
                    @foreach ($poster as $item)
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="thumbnail">
                                <a href="{{ asset('storage/gambar/' . $item->gambar) }}" data-lightbox="photos">
                                    <img src="{{ asset('storage/gambar/' . $item->gambar) }}"
                                        class="bd-placeholder-img img-fluid card-img-top" alt="{{ $item->judul }}">
                                    {{-- <div class="caption">
                                        <p>{{ $item->judul }}</p>
                                    </div> --}}
                                </a>
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
        {!! $poster->links('pagination::bootstrap-5') !!}
        <hr class="featurette-divider">
    </div>
</main>