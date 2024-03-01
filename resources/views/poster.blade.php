@extends('layouts.main')

@section('container')

<main>
    <section class="pt-4 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light"><b>Poster Islami</b></h1>
            </div>
        </div>
    </section>
    <div class="container marketing">
        <div class="col-12">
            <div class="row justify-content-center">
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
        <div class="album py-4 bg-light mb-4" style="border-radius: 10px;">
            <div class="container">
                <form action="/poster" method="get">
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
                @if ($poster->count())
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-3">
                    @foreach ($poster as $item)
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="thumbnail">
                                <a href="{{ asset('storage/gambar/' . $item->gambar) }}" data-lightbox="roadtrip"
                                    data-title="{{ $item->judul }}">
                                    <div class="image-container">
                                        <img data-src="{{ asset('storage/gambar/' . $item->gambar) }}"
                                            class="img-fluid rounded-3 lazyload" alt="{{ $item->judul }}">
                                        <div class="overlay rounded-3">
                                            <p class="text">{{ $item->judul }}</p>
                                        </div>
                                    </div>
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
<script>
    document.getElementById('id').addEventListener('change', function() {
        this.form.submit();
    });
</script>
