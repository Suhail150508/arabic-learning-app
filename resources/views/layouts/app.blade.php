<!doctype html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ __('messages.title') }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
        <style>
            body{background:linear-gradient(135deg,#f8fafc,#f3e8ff)}
            .bg-cover{background-position:center;background-size:cover;background-repeat:no-repeat}
            .home-hero{min-height:100vh}
            .card-glass{backdrop-filter:blur(8px);background:rgba(255,255,255,.7)}
            .btn-soft-primary{background:#f1e7ff;border-color:#e5d6ff;color:#6f42c1}
            .btn-soft-primary:hover{background:#e9dbff;color:#5a32a3}
            .btn-cta{background:linear-gradient(90deg,#ff7a18,#af002d 70%);color:#fff;border:none;border-radius:9999px;padding:10px 18px;box-shadow:0 10px 24px rgba(175,0,45,.25)}
            .btn-cta:hover{filter:brightness(1.05)}
            .letter-card{background:#fff;border:1px solid #eee;border-radius:20px;padding:26px 14px;text-align:center;box-shadow:0 10px 24px rgba(0,0,0,.08);transition:transform .15s ease,box-shadow .15s}
            .letter-card:hover{transform:translateY(-4px);box-shadow:0 14px 30px rgba(0,0,0,.12)}
            .letter-char{font-size:72px;color:#ff5d00;font-weight:800;line-height:1}
            .big-letter{font-size:240px;line-height:1.1;color:#6f42c1;text-shadow:0 8px 0 rgba(0,0,0,.04)}
            .play-btn{position:absolute;right:16px;top:16px;width:68px;height:68px;border-radius:50%;background:#22c55e;border:none;box-shadow:0 10px 24px rgba(34,197,94,.35);cursor:pointer}
            .play-btn .triangle{position:absolute;left:26px;top:21px;width:0;height:0;border-left:18px solid #fff;border-top:12px solid transparent;border-bottom:12px solid transparent}
            .circle-btn{width:72px;height:72px;border-radius:50%;display:flex;align-items:center;justify-content:center;border:none;position:relative;box-shadow:0 10px 24px rgba(0,0,0,.15);cursor:pointer}
            .circle-btn .pulse{position:absolute;inset:0;border-radius:inherit;box-shadow:0 0 0 0 rgba(99,102,241,.45);animation:pulse 1.8s ease-out infinite}
            .circle-btn.sound{background:#60a5fa}
            .circle-btn.text{background:#f59e0b}
            .circle-btn.image{background:#34d399}
            .circle-btn svg{fill:#fff}

            @keyframes pulse{0%{box-shadow:0 0 0 0 rgba(99,102,241,.45)}70%{box-shadow:0 0 0 14px rgba(99,102,241,0)}100%{box-shadow:0 0 0 0 rgba(99,102,241,0)}}
            .hidden{display:none}
            /* Modal zoom animation */
            .modal.modal-zoom .modal-dialog{transform:scale(.9);transition:transform .2s ease, opacity .2s ease}
            .modal.modal-zoom.show .modal-dialog{transform:scale(1)}
            .modal-header{background:linear-gradient(90deg,#a78bfa,#60a5fa);color:#fff}
            .modal-content{border:0;border-radius:16px;box-shadow:0 20px 40px rgba(0,0,0,.15)}
            .btn-label{display:block;margin-top:6px;font-weight:700;color:#1f2937}
            @media (max-width: 991.98px){
            }
            @media (max-width: 575.98px){
                .big-letter{font-size:120px}
            }
        </style>
    </head>
    <body class="bg-light">
        <nav class="navbar bg-white border-bottom">
            <div class="container">
                <a class="navbar-brand fw-bold" href="{{ route('letters.index') }}">{{ __('messages.title') }}</a>
                <div class="ms-auto d-flex align-items-center gap-2">
                    <a href="?lang=bn" class="btn btn-sm btn-soft-primary">বাংলা</a>
                    <a href="?lang=en" class="btn btn-sm btn-outline-secondary">EN</a>
                </div>
            </div>
        </nav>
        <main class="container py-4">
            @yield('content')
        </main>
        <script src="https://cdn.jsdelivr.net/npm/axios@1.7.2/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        @stack('scripts')
    </body>
</html>


