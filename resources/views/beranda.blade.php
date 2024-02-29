@extends('layouts.main')

@section('container')

<main>
    <div id="myCarousel" class="carousel slide bg-success mx-1" style="border-radius: 30px" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php $active = 'active'; ?>
            @foreach($video as $item)
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $loop->index }}"
                class="{{ $active }}" aria-current="{{ $loop->first ? 'true' : 'false' }}"
                aria-label="Slide {{ $loop->index + 1 }}"></button>
            <?php $active = ''; ?>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach($video as $item)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <div class="d-flex justify-content-center">
                    <a href="/video/{{ $item->id }}" class="stretched-link">
                        <img style="border-radius: 15px; filter: grayscale(100%);" width="1080px" height="512px"
                            src="https://img.youtube.com/vi/{{ $item->link }}/maxresdefault.jpg"></img>
                        <div class="play-icon">
                            <i class="fa-duotone fa-circle-play"></i>
                        </div>
                    </a>
                </div>
                <div class="carousel-caption d-sm-block p-0">
                    <a href="/video/{{ $item->id }}"
                        class="shadow-lg badge bg-success text-decoration-none link-light fw-normal fs-5 stretched-link"
                        style="text-align: center; white-space: normal;">
                        {!! $item->judul !!}
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class=" text-center container">
        <div class="row mb-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light"><b>Selamat Datang di Bil Hikmah</b></h1>
            </div>
        </div>
    </section>

    <div class="container marketing">
        <div class="row">
            @foreach ($poster as $item)
            <div class="col-lg-4">
                <div class="thumbnail">
                    <a href="{{ asset('storage/gambar/' . $item->gambar) }}" data-lightbox="photos">
                        <img data-src="{{ asset('storage/gambar/' . $item->gambar) }}"
                            class="bd-placeholder-img card-img-top rounded-circle mb-3 lazyload"
                            alt="{{ $item->judul }}" style="width: 200px; height: 200px;">
                    </a>
                </div>
                <p>"{{ $item->judul }}"</p>
            </div>
            @endforeach
        </div>

        <hr class="featurette-divider">
        @foreach ($artikel as $key => $item)
        @if($key % 2 == 0)
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading mt-2">{{ $item->judul }}</h2>
                <p class="lead">{{ $item->kutipan }}</p>
                <a class="btn btn-success mb-4" href="/artikel/{{ $item->id }}">Lebih lanjut →</a>
            </div>
            <div class="col-md-5">
                <div class="thumbnail">
                    <a href="{{ asset('storage/gambar/' . $item->gambar) }}">
                        <img data-src="{{ asset('storage/gambar/' . $item->gambar) }}"
                            class="bd-placeholder-img card-img-top lazyload" alt="{{ $item->judul }}"
                            style="width: 100%; height: auto;">
                    </a>
                </div>
            </div>
        </div>
        @else
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading mt-2">{{ $item->judul }}</h2>
                <p class="lead">{{ $item->kutipan }}</p>
                <a class="btn btn-success mb-4" href="/artikel/{{ $item->id }}">Lebih lanjut →</a>
            </div>
            <div class="col-md-5">
                <div class="thumbnail">
                    <a href="{{ asset('storage/gambar/' . $item->gambar) }}">
                        <img data-src="{{ asset('storage/gambar/' . $item->gambar) }}"
                            class="bd-placeholder-img card-img-top lazyload" alt="{{ $item->judul }}"
                            style="width: 100%; height: auto;">
                    </a>
                </div>
            </div>
        </div>
        @endif
        <hr class="featurette-divider">
        @endforeach
    </div>
</main>
