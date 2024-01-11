<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Bilhikmah</title>
    <link rel="icon" href="/img/logo.png">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/css/adminlte.min.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/icheck-bootstrap.min.css">
    <script nonce="ef6b1e0d-f0c1-48e5-961a-105819ce2f2a">(function(w,d){!function(L,M,N,O){L[N]=L[N]||{};L[N].executed=[];L.zaraz={deferred:[],listeners:[]};L.zaraz.q=[];L.zaraz._f=function(P){return async function(){var Q=Array.prototype.slice.call(arguments);L.zaraz.q.push({m:P,a:Q})}};for(const R of["track","set","debug"])L.zaraz[R]=L.zaraz._f(R);L.zaraz.init=()=>{var S=M.getElementsByTagName(O)[0],T=M.createElement(O),U=M.getElementsByTagName("title")[0];U&&(L[N].t=M.getElementsByTagName("title")[0].text);L[N].x=Math.random();L[N].w=L.screen.width;L[N].h=L.screen.height;L[N].j=L.innerHeight;L[N].e=L.innerWidth;L[N].l=L.location.href;L[N].r=M.referrer;L[N].k=L.screen.colorDepth;L[N].n=M.characterSet;L[N].o=(new Date).getTimezoneOffset();if(L.dataLayer)for(const Y of Object.entries(Object.entries(dataLayer).reduce(((Z,$)=>({...Z[1],...$[1]})),{})))zaraz.set(Y[0],Y[1],{scope:"page"});L[N].q=[];for(;L.zaraz.q.length;){const ba=L.zaraz.q.shift();L[N].q.push(ba)}T.defer=!0;for(const bb of[localStorage,sessionStorage])Object.keys(bb||{}).filter((bd=>bd.startsWith("_zaraz_"))).forEach((bc=>{try{L[N]["z_"+bc.slice(7)]=JSON.parse(bb.getItem(bc))}catch{L[N]["z_"+bc.slice(7)]=bb.getItem(bc)}}));T.referrerPolicy="origin";T.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(L[N])));S.parentNode.insertBefore(T,S)};["complete","interactive"].includes(M.readyState)?zaraz.init():L.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-success">
            <div class="card-header text-center">
                <a href="/" class="h1">
                    <img src="/img/logo-login.png" alt="logo-login" width="200px" height="150px">
                </a>
            </div>
            <div class="card-body">
                <p class="text-center">
                    <b>Selamat datang, silahkan login</b>
                </p>
                <form action="/login" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"  autofocus required value="{{ old ('email') }}" placeholder="Masukan email">
                        <div class="input-group-append">
                            @error('email')
                            <div class="invalid feedback">
                              {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Masukan password">
                        <div class="input-group-append">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-success btn-block">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- AdminLTE App -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/public/js/bootstrap.bundle.min.js"></script>
</body>

</html>
