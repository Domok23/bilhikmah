@extends('layouts.main')

@section('container')

<main class="container">
    <section class="py-2 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light"><b>Video Islami</b></h1>
            </div>
        </div>
    </section>

    <div class="row g-5">
        <div class="col-md-8">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{ $video->link }}" allowfullscreen></iframe>
            </div>
            <br>
            <article class="blog-post">
                <h2 class="blog-post-title">{{ $video->judul }}</h2>
                <p class="blog-post-meta">{{ $video->created_at }}<a href="#" class="text-decoration-none text-success">
                        Admin</a></p>
                <p>{{$video->judul}}</p>
            </article>
            <div id="disqus_thread"></div>
        </div>

        <div class="col-md-4">
            <div class="album p-3 bg-light">
                <div class="position-sticky" style="top: 2rem;">
                    @foreach ($getAllVideo as $item)
                    <div class="card shadow-sm">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{ $item->link }}" allowfullscreen></iframe>
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
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered
        by
        Disqus.</a></noscript>
