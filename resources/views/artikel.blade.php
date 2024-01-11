@extends('layouts.main')

@section('container')

<main>
    <section class="py-2 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light"><b>Artikel</b></h1>
            </div>
        </div>
    </section>
    <div class="container marketing">
        <div class="col-10">
            <form action="/artikel" method="get">
                @csrf
                <div class="row g-3">
                    <div class="col-md-3">
                        <select class="form-control" id="id" name="id">
                            <option value="">--Filter kategori artikel--</option>
                            @foreach ($kategori as $item)
                            <option value="{{ $item->id }}">{{ $item->judul }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-1">
                        <!-- Adjust the column width as needed -->
                        <button type="submit" class="btn btn-primary mb-3">Filter</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                    @foreach ($artikel as $item)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('storage/gambar/' . $item->gambar) }}"
                                class="bd-placeholder-img card-img-top" alt="{{ $item->deskripsi }}" width="100px"
                                height="180px">
                            <div class="card-body">
                                <p class="card-text">{!! Str::limit(strip_tags($item->deskripsi), 50) !!}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="/artikel/{{ $item->id }}" class="btn btn-outline-success">
                                            Detail
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <hr class="featurette-divider">
    </div>
</main>