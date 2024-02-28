@extends('dashboard.layouts.main')

@section('container')
<style>
    .code-wrapper {
        white-space: pre-wrap;
    }
</style>
<div class="content-wrapper px-4 py-2" style="min-height: 758.4px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1>{{ $title }}</h1>
            </div>
        </div>
    </div>
    <div class="content px-2">
        <p>API yang tersedia adalah untuk frontend untuk mengambil seluruh konten situs web untuk semua halaman dan
            bagian. Mudah dan Fleksibel</p>
        <h2 id="quick-start">Indeks</h2>
        <ul class="list-group list-group-flush col-md-6 mb-5">
            <li class="list-group-item">{ GET } /bilhikmah.biz.id/api/artikel</li>
            <li class="list-group-item">{ GET } /bilhikmah.biz.id/api/artikel/{id}</li>
            <li class="list-group-item">{ GET } /bilhikmah.biz.id/api/video</li>
            <li class="list-group-item">{ GET } /bilhikmah.biz.id/api/video/{id}</li>
            <li class="list-group-item">{ GET } /bilhikmah.biz.id/api/poster</li>
            <li class="list-group-item">{ GET } /bilhikmah.biz.id/api/poster/{id}</li>
            <li class="list-group-item">{ GET } /bilhikmah.biz.id/api/isyarat</li>
            <li class="list-group-item">{ GET } /bilhikmah.biz.id/api/isyarat/{id}</li>
            <li class="list-group-item">{ GET } /bilhikmah.biz.id/api/kategori</li>
            <li class="list-group-item">{ GET } /bilhikmah.biz.id/api/kategori/{id}</li>
        </ul>

        <h2 class="mb-3" id="quick-start">Penggunaan API</h2>
        <div class="table-responsive">
            <h4 id="artikel">bilhikmah.biz.id/api/artikel</h4>
            <p> <em>Mengambil <strong>semua</strong> data Artikel </em></p>
            <table class="table table-bordered mb-5">
                <tbody>
                    <tr>
                        <th>Method</th>
                        <td>GET</td>
                        <td>Request type</td>
                    </tr>
                    <tr>
                        <th>URL</th>
                        <td>http://bilhikmah.biz.id/api/artikel</td>
                        <td>URL structure</td>
                    </tr>
                    <tr>
                        <th>URL Params</th>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>Success Response</th>
                        <td>
                            <div class="code-wrapper">
                                <code><span class="nt">
{
    "artikel": [
            {
                "id": "bigint(20)",
                "id_kategori": "bigint(20)",
                "judul": "varchar(255)",
                "deskripsi": "text",
                "gambar": "varchar(255).jpg",
                "kutipan": "text",
                "created_at": "timestamp",
                "updated_at": "timestamp",
                "judul_kat": "varchar(255)"
            },
            {
                "id": "bigint(20)",
                "id_kategori": "bigint(20)",
                "judul": "varchar(255)",
                "deskripsi": "text",
                "gambar": "varchar(255).jpg",
                "kutipan": "text",
                "created_at": "timestamp",
                "updated_at": "timestamp",
                "judul_kat": "varchar(255)"
            },
            {
                "id": "bigint(20)",
                "id_kategori": "bigint(20)",
                "judul": "varchar(255)",
                "deskripsi": "text",
                "gambar": "varchar(255).jpg",
                "kutipan": "text",
                "created_at": "timestamp",
                "updated_at": "timestamp",
                "judul_kat": "varchar(255)"
            }
    ]
}
                                </span></code>
                            </div>
                        </td>
                        <td>Response Status Code : 200</td>
                    </tr>
                    <tr>
                        <th>Error Response</th>
                        <td>-</td>
                        <td>Response Status Code : 500</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <h4 id="artikel">bilhikmah.biz.id/api/artikel/{id}</h4>
            <p> <em>Mengambil <strong>per id</strong> data Artikel </em></p>
            <table class="table table-bordered mb-5">
                <tbody>
                    <tr>
                        <th>Method</th>
                        <td>GET</td>
                        <td>Request type</td>
                    </tr>
                    <tr>
                        <th>URL</th>
                        <td>http://bilhikmah.biz.id/api/artikel/{id}</td>
                        <td>URL structure</td>
                    </tr>
                    <tr>
                        <th>URL Params</th>
                        <td>{id} : Integer ID number. Contoh bilhikmah.biz.id/api/artikel/11</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>Success Response</th>
                        <td>
                            <div class="code-wrapper">
                                <code><span class="nt">
{
    "artikel": {
        "id": "bigint(20)",
        "id_kategori": "bigint(20)",
        "judul": "varchar(255)",
        "deskripsi": "text",
        "gambar": "varchar(255).jpg",
        "kutipan": "text",
        "created_at": "timestamp",
        "updated_at": "timestamp",
        "judul_kat": "varchar(255)"
    }
}
                                </span></code>
                            </div>
                        </td>
                        <td>Response Status Code : 200</td>
                    </tr>
                    <tr>
                        <th>Error Response</th>
                        <td>-</td>
                        <td>Response Status Code : 500</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <h4 id="video">bilhikmah.biz.id/api/video</h4>
            <p> <em>Mengambil <strong>semua</strong> data Video </em></p>
            <table class="table table-bordered mb-5">
                <tbody>
                    <tr>
                        <th>Method</th>
                        <td>GET</td>
                        <td>Request type</td>
                    </tr>
                    <tr>
                        <th>URL</th>
                        <td>http://bilhikmah.biz.id/api/video</td>
                        <td>URL structure</td>
                    </tr>
                    <tr>
                        <th>URL Params</th>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>Success Response</th>
                        <td>
                            <div class="code-wrapper">
                                <code><span class="nt">
{
    "video": [
            {
                "id": "bigint(20)",
                "id_kategori": "bigint(20)",
                "judul": "varchar(255)",
                "deskripsi": "text",
                "video": "varchar(255).mp4",
                "created_at": "timestamp",
                "updated_at": "timestamp",
                "judul_kat": "varchar(255)"
            },
            {
                "id": "bigint(20)",
                "id_kategori": "bigint(20)",
                "judul": "varchar(255)",
                "deskripsi": "text",
                "video": "varchar(255).mp4",
                "created_at": "timestamp",
                "updated_at": "timestamp",
                "judul_kat": "varchar(255)"
            },
            {
                "id": "bigint(20)",
                "id_kategori": "bigint(20)",
                "judul": "varchar(255)",
                "deskripsi": "text",
                "video": "varchar(255).mp4",
                "created_at": "timestamp",
                "updated_at": "timestamp",
                "judul_kat": "varchar(255)"
            }
    ]
}
                                </span></code>
                            </div>
                        </td>
                        <td>Response Status Code : 200</td>
                    </tr>
                    <tr>
                        <th>Error Response</th>
                        <td>-</td>
                        <td>Response Status Code : 500</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <h4 id="video">bilhikmah.biz.id/api/video/{id}</h4>
            <p> <em>Mengambil <strong>per id</strong> data Video </em></p>
            <table class="table table-bordered mb-5">
                <tbody>
                    <tr>
                        <th>Method</th>
                        <td>GET</td>
                        <td>Request type</td>
                    </tr>
                    <tr>
                        <th>URL</th>
                        <td>http://bilhikmah.biz.id/api/video/{id}</td>
                        <td>URL structure</td>
                    </tr>
                    <tr>
                        <th>URL Params</th>
                        <td>{id} : Integer ID number. Contoh bilhikmah.biz.id/api/video/11</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>Success Response</th>
                        <td>
                            <div class="code-wrapper">
                                <code><span class="nt">
{
    "video": {
        "id": "bigint(20)",
        "id_kategori": "bigint(20)",
        "judul": "varchar(255)",
        "deskripsi": "text",
        "video": "varchar(255).mp4",
        "created_at": "timestamp",
        "updated_at": "timestamp",
        "judul_kat": "varchar(255)"
    }
}
                                </span></code>
                            </div>
                        </td>
                        <td>Response Status Code : 200</td>
                    </tr>
                    <tr>
                        <th>Error Response</th>
                        <td>-</td>
                        <td>Response Status Code : 500</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <h4 id="poster">bilhikmah.biz.id/api/poster</h4>
            <p> <em>Mengambil <strong>semua</strong> data Poster </em></p>
            <table class="table table-bordered mb-5">
                <tbody>
                    <tr>
                        <th>Method</th>
                        <td>GET</td>
                        <td>Request type</td>
                    </tr>
                    <tr>
                        <th>URL</th>
                        <td>http://bilhikmah.biz.id/api/poster</td>
                        <td>URL structure</td>
                    </tr>
                    <tr>
                        <th>URL Params</th>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>Success Response</th>
                        <td>
                            <div class="code-wrapper">
                                <code><span class="nt">
{
    "poster": [
            {
                "id": "bigint(20)",
                "judul": "varchar(255)",
                "gambar": "varchar(255).jpg",
                "created_at": "timestamp",
                "updated_at": "timestamp"
            },
            {
                "id": "bigint(20)",
                "judul": "varchar(255)",
                "gambar": "varchar(255).jpg",
                "created_at": "timestamp",
                "updated_at": "timestamp"
            },
            {
                "id": "bigint(20)",
                "judul": "varchar(255)",
                "gambar": "varchar(255).jpg",
                "created_at": "timestamp",
                "updated_at": "timestamp"
            }
    ]
}
                                    </span></code>
                            </div>
                        </td>
                        <td>Response Status Code : 200</td>
                    </tr>
                    <tr>
                        <th>Error Response</th>
                        <td>-</td>
                        <td>Response Status Code : 500</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <h4 id="poster">bilhikmah.biz.id/api/poster/{id}</h4>
            <p> <em>Mengambil <strong>per id</strong> data Poster </em></p>
            <table class="table table-bordered mb-5">
                <tbody>
                    <tr>
                        <th>Method</th>
                        <td>GET</td>
                        <td>Request type</td>
                    </tr>
                    <tr>
                        <th>URL</th>
                        <td>http://bilhikmah.biz.id/api/poster/{id}</td>
                        <td>URL structure</td>
                    </tr>
                    <tr>
                        <th>URL Params</th>
                        <td>{id} : Integer ID number. Contoh bilhikmah.biz.id/api/poster/11</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>Success Response</th>
                        <td>
                            <div class="code-wrapper">
                                <code><span class="nt">
{
    "poster": {
        "id": "bigint(20)",
        "judul": "varchar(255)",
        "gambar": "varchar(255).jpg",
        "created_at": "timestamp",
        "updated_at": "timestamp"
    }
}
                                    </span></code>
                            </div>
                        </td>
                        <td>Response Status Code : 200</td>
                    </tr>
                    <tr>
                        <th>Error Response</th>
                        <td>-</td>
                        <td>Response Status Code : 500</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <h4 id="isyarat">bilhikmah.biz.id/api/isyarat</h4>
            <p> <em>Mengambil <strong>semua</strong> data Isyarat </em></p>
            <table class="table table-bordered mb-5">
                <tbody>
                    <tr>
                        <th>Method</th>
                        <td>GET</td>
                        <td>Request type</td>
                    </tr>
                    <tr>
                        <th>URL</th>
                        <td>http://bilhikmah.biz.id/api/isyarat</td>
                        <td>URL structure</td>
                    </tr>
                    <tr>
                        <th>URL Params</th>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>Success Response</th>
                        <td>
                            <div class="code-wrapper">
                                <code><span class="nt">
{
    "isyarat": [
            {
                "id": "bigint(20)",
                "judul": "varchar(255)",
                "gambar": "varchar(255).jpg",
                "video": "varchar(255).mp4",
                "created_at": "timestamp",
                "updated_at": "timestamp"
            },
            {
                "id": "bigint(20)",
                "judul": "varchar(255)",
                "gambar": "varchar(255).jpg",
                "video": "varchar(255).mp4",
                "created_at": "timestamp",
                "updated_at": "timestamp"
            },
            {
                "id": "bigint(20)",
                "judul": "varchar(255)",
                "gambar": "varchar(255).jpg",
                "video": "varchar(255).mp4",
                "created_at": "timestamp",
                "updated_at": "timestamp"
            }
    ]
}
                            </span></code>
                            </div>
                        </td>
                        <td>Response Status Code : 200</td>
                    </tr>
                    <tr>
                        <th>Error Response</th>
                        <td>-</td>
                        <td>Response Status Code : 500</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <h4 id="isyarat">bilhikmah.biz.id/api/isyarat/{id}</h4>
            <p> <em>Mengambil <strong>per id</strong> data Isyarat </em></p>
            <table class="table table-bordered mb-5">
                <tbody>
                    <tr>
                        <th>Method</th>
                        <td>GET</td>
                        <td>Request type</td>
                    </tr>
                    <tr>
                        <th>URL</th>
                        <td>http://bilhikmah.biz.id/api/isyarat/{id}</td>
                        <td>URL structure</td>
                    </tr>
                    <tr>
                        <th>URL Params</th>
                        <td>{id} : Integer ID number. Contoh bilhikmah.biz.id/api/isyarat/11</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>Success Response</th>
                        <td>
                            <div class="code-wrapper">
                                <code><span class="nt">
{
    "isyarat": {
        "id": "bigint(20)",
        "judul": "varchar(255)",
        "gambar": "varchar(255).jpg",
        "video": "varchar(255).mp4",
        "created_at": "timestamp",
        "updated_at": "timestamp"
    }
}
                                </span></code>
                            </div>
                        </td>
                        <td>Response Status Code : 200</td>
                    </tr>
                    <tr>
                        <th>Error Response</th>
                        <td>-</td>
                        <td>Response Status Code : 500</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <h4 id="kategori">bilhikmah.biz.id/api/kategori</h4>
            <p> <em>Mengambil <strong>semua</strong> data Kategori </em></p>
            <table class="table table-bordered mb-5">
                <tbody>
                    <tr>
                        <th>Method</th>
                        <td>GET</td>
                        <td>Request type</td>
                    </tr>
                    <tr>
                        <th>URL</th>
                        <td>http://bilhikmah.biz.id/api/kategori</td>
                        <td>URL structure</td>
                    </tr>
                    <tr>
                        <th>URL Params</th>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>Success Response</th>
                        <td>
                            <div class="code-wrapper">
                                <code><span class="nt">
{
    "kategori": [
        {
            "id": "bigint(20)",
            "judul": "varchar(255)",
            "created_at": "timestamp",
            "updated_at": "timestamp"
        },
        {
            "id": "bigint(20)",
            "judul": "varchar(255)",
            "created_at": "timestamp",
            "updated_at": "timestamp"
        },
        {
            "id": "bigint(20)",
            "judul": "varchar(255)",
            "created_at": "timestamp",
            "updated_at": "timestamp"
        }
    ]
}
                                </span></code>
                            </div>
                        </td>
                        <td>Response Status Code : 200</td>
                    </tr>
                    <tr>
                        <th>Error Response</th>
                        <td>-</td>
                        <td>Response Status Code : 500</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <h4 id="kategori">bilhikmah.biz.id/api/kategori/{id}</h4>
            <p> <em>Mengambil <strong>per id</strong> data Kategori </em></p>
            <table class="table table-bordered mb-5">
                <tbody>
                    <tr>
                        <th>Method</th>
                        <td>GET</td>
                        <td>Request type</td>
                    </tr>
                    <tr>
                        <th>URL</th>
                        <td>http://bilhikmah.biz.id/api/kategori/{id}</td>
                        <td>URL structure</td>
                    </tr>
                    <tr>
                        <th>URL Params</th>
                        <td>{id} : Integer ID number. Contoh bilhikmah.biz.id/api/kategori/11</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>Success Response</th>
                        <td>
                            <div class="code-wrapper">
                                <code><span class="nt">
{
    "kategori": {
        "id": "bigint(20)",
        "nama": "varchar(255)",
        "created_at": "timestamp",
        "updated_at": "timestamp"
    }
}
                                </span></code>
                            </div>
                        </td>
                        <td>Response Status Code : 200</td>
                    </tr>
                    <tr>
                        <th>Error Response</th>
                        <td>-</td>
                        <td>Response Status Code : 500</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @endsection