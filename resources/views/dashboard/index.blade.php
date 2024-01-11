@extends('dashboard.layouts.main')

@section('container')
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $title }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{ $title }}</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ count($isyarat) }}</h3>
                             <p>Data Bahasa Isyarat</p>
                        </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-hand-paper"></i>
                            </div>
                        <a href="/dashboard/isyarat" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ count($artikel) }}</h3>
                             <p>Data Artikel</p>
                        </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-book"></i>
                            </div>
                        <a href="/dashboard/artikel" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ count($poster) }}</h3>
                             <p>Data Poster</p>
                        </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-columns"></i>
                            </div>
                        <a href="/dashboard/poster" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ count($video) }}</h3>
                            <p>Data Video</p>
                        </div>
                            <div class="icon">
                                <i class="nav-icon far fa-image"></i>
                            </div>
                        <a href="/dashboard/video" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
