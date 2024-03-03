@extends('layouts.main')

@section('container')

<main>
    <section class="pt-5 text-center container">
        <div class="row py-lg-4 mb-3">
            <div class="col-lg-6 col-md-8 mx-auto">
                {{-- @foreach ($data as $item)
                <h1 class="fw-light"><b>{{ $item['nama'] }}</b></h1>
                @endforeach --}}
                <h2 class="fw-normal text-success"><i class="fa-duotone fa-book-quran me-1"></i><b> Al-Quran</b></h2>
            </div>
        </div>
    </section>
    <div class="container marketing">
        <div class="album p-3 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-1 g-3">
                    @foreach ($data as $item)
                    <li class="list-group-item d-flex flex-column lh-sm card shadow-sm">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="my-0">
                                <span class="badge bg-success rounded-pill fs-5">{{ $item['nomor'] }}</span>
                            </h6>
                            <div class="fs-5 text-end">{{-- text-end class untuk Bootstrap 5, kalau masih menggunakan
                                Bootstrap 4 gunakan class float-end --}}
                                <div style="direction: rtl; text-align: right;">{{ $item['ar'] }}</div>
                            </div>
                        </div>
                        <br>
                        <div class="mt-2">
                            <span class="text-muted fs-7" style="color: #A16D35;">{!! $item['tr'] !!}</span>
                        </div>
                        <div class="mt-2">
                            <small class="text-muted fs-6">{{ $item['id'] }}</small>
                        </div>
                    </li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>