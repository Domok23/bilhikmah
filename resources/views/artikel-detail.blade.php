@extends('layouts.main')

@section('container')

<main class="container">
    <section class="pt-5 text-center container">
        <div class="row py-lg-4 mb-3">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h3 class="fw-normal text-success"><i class="fa-duotone fa-newspaper me-1"></i><b> Artikel Islami</b>
                </h3>
            </div>
        </div>
    </section>
    <div class="col-12">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12 mb-md-3">
                <!-- Penyesuaian -->
                <form class="mb-0" action="/artikel" method="get">
                    @csrf
                    <div class="input-group mb-2">
                        <input type="search" class="form-control me-2 rounded" placeholder="Cari artikel..." name="cari"
                            value="{{ request('cari') }}">
                        <button class="btn btn-success rounded" type="submit">Cari <i class="fa-duotone fa-magnifying-glass"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row gy-5">
        <div class="col-md-8 col-12">
            <!-- Penyesuaian -->
            <thumnail>
                <a href="{{ asset('storage/gambar/' . $artikel->gambar) }}">
                    <img data-src="{{ asset('storage/gambar/' . $artikel->gambar) }}"
                        class="bd-placeholder-img card-img mb-3 lazyload" style="border-radius: 10px;"
                        alt="{{ $artikel->judul }}">
                </a>
            </thumnail>
            <br>
            <article class="blog-post">
                <h2 class="blog-post-title">{{ $artikel->judul }}</h2>
                <p class="blog-post-meta fw-bold">
                    <span class="fw-normal">Oleh</span> <a href="#!" class="text-decoration-none text-success">Admin</a>
                    &bull;
                    <span class="fw-normal">{{ \Carbon\Carbon::parse($artikel->created_at)->isoFormat('dddd, Do MMM
                        YYYY')
                        }}</span>
                    <br>
                    <a class="text-decoration-none link-success fw-normal"
                        href="{{ Request::url() }}#disqus_thread"></a>
                </p>
                <a class="badge bg-success text-decoration-none link-light" href="#!">{{
                    $artikel->judul_kat }}</a>
                <p class="my-4 fs-5">
                    {!! $artikel->deskripsi !!}
                </p>
            </article>
            <div class="mt-5" id="disqus_thread"></div>
        </div>

        <div class="col-md-4 col-12">
            <!-- Penyesuaian -->
            <div class="album p-3 bg-light" style="border-radius: 10px;">
                <div class="position-sticky">
                    @foreach ($getAllArtikel as $item)
                    @if ($item->id !== $artikel->id)
                    <div class="card shadow-sm mb-3">
                        <a href="/artikel/{{ $item->id }}" class="text-decoration-none text-dark">
                            <img data-src="{{ asset('storage/gambar/' . $item->gambar) }}"
                                class="bd-placeholder-img card-img-top lazyload" alt="{{ $item->judul }}">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="/artikel/{{ $item->id }}"
                                    class="text-decoration-none text-dark">{{
                                    $item->judul }}</a></h5>
                            <p class="mb-1">
                                <small>
                                    oleh <a href="#!" class="text-decoration-none text-success">Admin</a>
                                    &bull; {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                </small>
                            </p>
                            <small>
                                <a class="badge bg-success text-decoration-none link-light mb-2" href="#!">{{
                                    $item->judul_kat }}</a>
                            </small>
                            <p class="card-text">{{ $item->kutipan }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="/artikel/{{ $item->id }}" class="btn btn-outline-success">
                                        Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <hr class="featurette-divider">
    </div>
</main>

<script>
    /**
                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */

                var disqus_config = function () {
                this.page.url = '{{ Request::url() }}';  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = {{ $artikel->id }}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };

                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://bil-hikmah.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
</script>
<script id="dsq-count-scr" src="//bil-hikmah.disqus.com/count.js" async></script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered
        by
        Disqus.</a></noscript>
