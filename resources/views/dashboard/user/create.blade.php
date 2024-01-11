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
                        <li class="breadcrumb-item"><a href="/dashboard/user">{{ $title }}</a></li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Tambah Data User</h3>
                      </div>
                      <form method="post" action="/dashboard/user" class="mb-5" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Masukan nama user">
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Masukan email user">
                          </div>
                          <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukan password user">
                          </div>
                        </div>
                        <div class="card-footer">
                            <a href="/dashboard/user" class="btn btn-default">Kembali</a>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </form>
                    </div>
                  </div>
            </div>
        </div>
    </section>
</div>
@endsection
