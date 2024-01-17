@extends('layouts.main')

@section('container')

<main>
    <section class="py-2 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light"><b>Video Islami</b></h1>
            </div>
        </div>
    </section>
    <div class="container marketing">
        <div class="col-10">
            <form action="/video" method="get">
                @csrf
                <div class="row g-3">
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
        </div>
        <div class="album py-4 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                    @foreach ($video as $item)
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{ $item->link }}" allowfullscreen style="width: 100%; height: 80%;"></iframe>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ Str::limit($item->judul, 50) }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="/video/{{ $item->id }}" class="btn btn-outline-success">
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
