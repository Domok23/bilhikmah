@extends('layouts.main')

@section('container')

<main>
    <section class="pt-5 text-center container">
        <div class="row py-lg-4 mb-3">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h2 class="fw-normal text-success"><i class="fa-duotone fa-book-quran me-1"></i><b> Al-Quran</b></h2>
            </div>
        </div>
    </section>
    <div class="container marketing">
        <div class="album py-4 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($data as $item)
                    <a href="/alquran/{{ $item['nomor'] }}" style="text-decoration: none;">
                        <div class="card shadow-sm">
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">
                                        <span class="badge bg-success rounded-pill">{{ $item['nomor'] }}</span>
                                        {{ $item['nama'] }} ({{ $item['arti'] }})
                                    </h6>
                                    <small class="text-muted">{{ $item['type'] }} . {{ $item['ayat'] }} ayat</small>
                                </div>
                                <span class="text-muted">{{ $item['asma'] }}</span>
                            </li>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>