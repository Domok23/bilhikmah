@extends('layouts.main')

@section('container')

<main class="container">
    <section class="py-2 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light"><b>Artikel Islami</b></h1>
            </div>
        </div>
    </section>

    <div class="row g-5">
        <div class="col-md-8">
            <img src="{{ asset('storage/gambar/' . $artikel->gambar) }}" class="bd-placeholder-img card-img mb-3"
                alt="{{ $artikel->judul }}">
            <br>
            <article class="blog-post">
                <h2 class="blog-post-title">{{ $artikel->judul }}</h2>
                <p class="blog-post-meta">{{ $artikel->created_at }}<a href="#"
                        class="text-decoration-none text-success"> Admin</a></p>
                <p>{!! $artikel->deskripsi !!}</p>
            </article>
            <div id="disqus_thread"></div>
        </div>

        <div class="col-md-4">
            <div class="album p-3 bg-light">
                <div class="position-sticky" style="top: 2rem;">
                    @foreach ($getAllArtikel as $item)
                    <div class="card shadow-sm">
                        <img src="{{ asset('storage/gambar/' . $item->gambar) }}"
                            class="bd-placeholder-img card-img-top" alt="{{ $item->judul }}" width="100px"
                            height="180px">
                        <div class="card-body">
                            <p class="card-text">{!! Str::limit(strip_tags($item->deskripsi), 50) !!}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="/artikel/{{ $item->id }}" class="btn btn-outline-success">
                                        Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
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
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered
        by
        Disqus.</a></noscript>
