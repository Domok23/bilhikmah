@extends('layouts.main')

@section('container')

<main>
    <div class="container px-0 pt-lg-5">
        <div id="myCarousel" class="carousel slide bg-success" data-bs-ride="carousel">
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
                <div class="carousel-item py-lg-4 {{ $loop->first ? 'active' : '' }}">
                    <div class="text-center justify-content-center d-flex">
                        <a href="/video/{{ $item->id }}" class="stretched-link">
                            <img style="border-radius: 10px; filter: grayscale(100%);"
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
    </div>

    <section class=" text-center container">
        <div class="album p-3 bg-green-light mb-5" style="border-radius: 10px;">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light"><b>Selamat Datang di Bil Hikmah</b></h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container marketing">
        <div class="album p-3 bg-success mb-5" style="border-radius: 10px;">
            <div class="row">
                @foreach ($poster as $item)
                <div class="col-lg-4 mb-0 pt-3">
                    <div class="thumbnail">
                        <a href="{{ asset('storage/gambar/' . $item->gambar) }}" data-lightbox="photos">
                            <img data-src="{{ asset('storage/gambar/' . $item->gambar) }}"
                                class="bd-placeholder-img card-img-top rounded-circle lazyload" alt="{{ $item->judul }}"
                                style="width: 200px; height: 200px;">
                        </a>
                    </div>
                    <p class="text-light">"{{ $item->judul }}"</p>
                </div>
                @endforeach
            </div>
        </div>

        <hr class="featurette-divider">
        @foreach ($artikel as $key => $item)
        @if($key % 2 == 0)
        <div class="row featurette bg-green-light" style="border-radius: 5px;">
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
                // Ambil carousel item
                const carouselItems = document.querySelectorAll('.carousel-item');

                // Loop melalui setiap carousel item
                carouselItems.forEach((item, index) => {
                    // Ambil URL gambar latar belakang dari carousel-item
                    const backgroundUrl = getComputedStyle(document.getElementById('carouselItem' + index)).backgroundImage;

                    // Tetapkan background-image untuk #myCarousel::before
                    document.getElementById('myCarousel').style.backgroundImage = backgroundUrl;
                });
            });
    </script>
</main>
