@extends('layouts.main')

@section('container')

<main>
    <section class="py-2 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light"><b>Bahasa Isyarat</b></h1>
        </div>
      </div>
    </section>
    <div class="container marketing">
        <div class="album py-4 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                    @foreach ($isyarat as $item)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('storage/gambar/' . $item->gambar) }}" class="bd-placeholder-img card-img-top" alt="{{ $item->deskripsi }}" width="100px" height="180px">
                            <div class="card-body">
                                <p class="card-text"><b><h1>{{ $item->deskripsi }}</h1></b></p>
                                <div class="d-flex justify-content-between align-items-center">
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
