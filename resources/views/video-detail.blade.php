@extends('layouts.main')

@section('container')

<main class="container">
    <section class="py-2 text-center container">
    </section>
    <div class="col-12">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12 my-md-4">
                <form action="/video" method="get">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="search" class="form-control" placeholder="Cari video" name="cari"
                            value="{{ request('cari') }}">
                        <button class="btn btn-success" type="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row gy-5">
        <div class="col-md-8 col-12">
            <div class="embed-responsive embed-responsive-16by9 shadow-lg">
                <iframe class="embed-responsive-item" style="border-radius: 10px;"
                    src="https://www.youtube.com/embed/{{ $video->link }}" allowfullscreen></iframe>
            </div>
            <br>
            <article class="blog-post">
                <h2 class="blog-post-title">{{ $video->judul }}</h2>
                <p class="blog-post-meta"><a href="#!" class="text-decoration-none text-success">Admin</a></p>
                <p class="blog-post-meta">{{
                    \Carbon\Carbon::parse($video->created_at)->diffForHumans() }}
                    <a class="text-decoration-none link-success" href="#!"> #{{$video->judul_kat }}</a> &bull;
                    <a class="text-decoration-none link-warning" href="{{ Request::url() }}#disqus_thread"></a>
                </p>


                <p class="fs-5">
                    {!! $video->deskripsi !!}
                </p>
            </article>
            <div class="mt-5" id="disqus_thread"></div>
        </div>

        <div class="col-md-4 col-12">
            <div class="album p-3 bg-light">
                <div class="position-sticky">
                    @foreach ($getAllVideo as $item)
                    @if ($item->id !== $video->id)
                    <div class="card shadow-sm mb-3">
                        <div class="position-relative">
                            <a href="/video/{{ $item->id }}" class="stretched-link">
                                <img src="https://img.youtube.com/vi/{{ $item->link }}/maxresdefault.jpg"
                                    class="card-img-top rounded" alt="{{ $item->judul }}">
                                <div class="play-icon" style="font-size: 3em;">
                                    <i class="fa-duotone fa-circle-play"></i>
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="/video/{{ $item->id }}"
                                    class="text-decoration-none text-dark">{{
                                    $item->judul }}</a></h5>
                            <p class="card-text text-muted mb-0">{{
                                \Carbon\Carbon::parse($item->created_at)->diffForHumans() }} &bull; <a href="#!"
                                    class="text-decoration-none text-success"> Admin</a></p>
                            <br>
                            <a href="/video/{{ $item->id }}" class=" btn btn-outline-success stretched-link">Detail</a>
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
    this.page.url = '{{ Request::url() }}'; // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = {{ $video->id }}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };

    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://bil-hikmah-video.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<script id="dsq-count-scr" src="//bil-hikmah-video.disqus.com/count.js" async></script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered
        by
        Disqus.</a></noscript>
