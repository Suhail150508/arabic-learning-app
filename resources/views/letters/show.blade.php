@extends('layouts.app')
<style>

    /* Add these styles to your existing CSS */

    /* Card hover effects */
    .letter-card {
        background: url('assets/images/alphabet-card-bg.svg');
        background-size: cover;
        background-position: center;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        margin-bottom: 30px;
        border-top: 4px solid var(--primary-color, #4a1e6b);
        position: relative;
    }

    .letter-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        border-top-color: var(--accent-color, #764ba2);
    }

    /* Main letter display enhancement */
    .big-letter {
        font-size: clamp(8rem, 20vw, 12rem);
        font-weight: 900;
        color: #4a1e6b;
        text-shadow: 3px 3px 8px rgba(0,0,0,0.2);
        margin-bottom: 1rem;
    }

    /* Play button enhancement */
    .play-btn {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .play-btn:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 20px rgba(0,0,0,0.3);
    }

    .play-btn .triangle {
        width: 0;
        height: 0;
        border-left: 20px solid white;
        border-top: 12px solid transparent;
        border-bottom: 12px solid transparent;
        margin-left: 4px;
    }

    /* Circle buttons enhancement */
    .circle-btn {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        border: 2px solid transparent;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        position: relative;
    }

    .circle-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 18px rgba(0,0,0,0.15);
    }

    .circle-btn.sound:hover {
        border-color: #28a745;
        background: #f8fff9;
    }

    .circle-btn.text:hover {
        border-color: #007bff;
        background: #f0f8ff;
    }

    .circle-btn.image:hover {
        border-color: #dc3545;
        background: #fff5f5;
    }

    /* Button labels */
    .btn-label {
        font-size: 0.85rem;
        color: #6c757d;
        font-weight: 500;
        text-align: center;
        margin-top: -0.5rem;
    }

    /* All letters grid cards */
    #allLettersGrid .letter-card {
        margin-bottom: 1.5rem;
    }

    #allLettersGrid .letter-card > a > div {
        /* border: 1px solid #e9ecef; */
        transition: all 0.3s ease;
        min-height: 180px;
    }

    #allLettersGrid .letter-card:hover > a > div {
        border-color: #667eea;
        box-shadow: 0 4px 12px rgba(102, 126, 234, 0.15);
    }

    /* Image containers */
    #allLettersGrid .ratio-1x1 {
        border-radius: 8px;
        background: #f8f9fa;
    }

    #allLettersGrid img {
        transition: transform 0.3s ease;
        object-fit: cover;
    }

    #allLettersGrid .letter-card:hover img {
        transform: scale(1.05);
    }

    /* Play buttons in cards */
    .play-letter {
        transition: all 0.3s ease;
        border-radius: 6px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 0.8rem;
    }

    .play-letter:not(:disabled):hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(40, 167, 69, 0.3);
    }

    .play-letter:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }

    /* Modal enhancements */
    .modal-zoom .modal-content {
        border: none;
        border-radius: 12px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.2);
    }

    .modal-zoom .modal-header {
        border-bottom: 1px solid #e9ecef;
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        border-radius: 12px 12px 0 0;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .big-letter {
            font-size: clamp(6rem, 25vw, 8rem);
        }
        
        .play-btn {
            width: 60px;
            height: 60px;
        }
        
        .play-btn .triangle {
            border-left: 16px solid white;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
        }
        
        .circle-btn {
            width: 60px;
            height: 60px;
        }
        
        #allLettersGrid .letter-card {
            margin: 0.5rem;
        }
    }

    @media (max-width: 576px) {
        .btn-label {
            font-size: 0.75rem;
        }
        
        #allLettersGrid .col-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }

    /* Loading state for images */
    #allLettersGrid img {
        background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
        background-size: 200% 100%;
        animation: loading 1.5s infinite;
    }

    @keyframes loading {
        0% {
            background-position: 200% 0;
        }
        100% {
            background-position: -200% 0;
        }
    }

    /* Pulse animation enhancement */
    .pulse {
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(102, 126, 234, 0.4);
        }
        70% {
            box-shadow: 0 0 0 10px rgba(102, 126, 234, 0);
        }
        100% {
            box-shadow: 0 0 0 0 rgba(102, 126, 234, 0);
        }
    }

    /* Main container gradient enhancement */
    .position-relative.rounded-4 {
        background: linear-gradient(135deg, #ffe8f3 0%, #f5e1ff 50%, #e2f3ff 100%) !important;
        border: none !important;
        box-shadow: 0 8px 32px rgba(0,0,0,0.1);
    }
</style>

@section('content')

<div class="row g-4">
    <div class="col-12 col-lg-9 pb-5">
        <div class="position-relative p-4 border rounded-4 text-center" style="background:linear-gradient(180deg,#ffe8f3,#f5e1ff)">
            <div class="big-letter">{{ $letter->char }}</div>
            <button id="playAudio" class="play-btn" aria-label="{{ __('messages.play') }}">
                <span class="triangle"></span>
            </button>
        </div>
    </div>
    <div class="col-12 col-lg-3 d-flex flex-column align-items-center gap-4 h-80">
        <button id="btnSound" class="circle-btn sound d-none" title="{{ __('messages.play') }}">
            <span class="pulse"></span>
            <svg width="28" height="28" viewBox="0 0 24 24"><path d="M3 10v4h4l5 5V5L7 10H3zM16 7.82v8.36c1.78-.91 3-2.76 3-4.68s-1.22-3.77-3-4.68z"/></svg>
        </button>

        <button id="btnText" class="circle-btn" title="{{ __('messages.makhraj') }}">
            <span class="pulse"></span>
            <img src="{{ asset('storage/button/image/makhraj-1.png') }}" alt="Play" class="img-fluid">
        </button>
        <span class="btn-label">{{ __('messages.makhraj') }} - {{ __('messages.text') ?? 'Text' }}</span>

        <button id="btnImage" class="circle-btn" title="{{ __('messages.makhraj') }} (Images)">
            <span class="pulse"></span>
            <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                <img src="{{ asset('storage/button/image/makhraj-one.png') }}" alt="Play" class="img-fluid">
            </div>
        </button>
        <span class="btn-label">{{ __('messages.makhraj') }} - {{ __('messages.images') ?? 'Images' }}</span>

        <a class="btn btn-outline-secondary w-100" href="{{ route('letters.index') }}">← {{ __('messages.home') }}</a>
    </div>
</div>

<audio id="audioPlayer"></audio>

<!-- Modal -->
<div class="modal fade modal-zoom" id="makhrajModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="makhrajModalLabel">{{ __('messages.makhraj') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="makhrajModalBody"></div>
        </div>
    </div>
</div>

<div class="mt-5 items">
    <h5 class="mb-3 fw-bold">{{ __('messages.title') }} — {{ __('messages.all') ?? 'All Alphabets' }}</h5>
    <div id="allLettersGrid" class="row g-3"></div>
</div>
@endsection

@push('scripts')
<script>
(function(){
    const letter=@json($letter);
    const player=document.getElementById('audioPlayer');
    const playAudio=document.getElementById('playAudio');

    function absoluteUrl(src){
        if(!src) return null;
        if(/^https?:\/\//i.test(src)) return src;
        return window.location.origin + '/' + src.replace(/^\/?/, '');
    }

    function normalizeArray(value){
        if(!value) return [];
        if(Array.isArray(value)) return value;
        if(typeof value === 'string'){
            try { return JSON.parse(value); } catch { return []; }
        }
        return [];
    }

    function normalizeAudioMap(a){
        if(!a) return null;
        if(typeof a === 'string'){
            try{ a = JSON.parse(a); }catch{ return null; }
        }
        return {
            plain: absoluteUrl(a.plain || ''),
            fatha: absoluteUrl(a.fatha || ''),
            kasra: absoluteUrl(a.kasra || ''),
            damma: absoluteUrl(a.damma || '')
        };
    }

    function anyAudio(a){
        const m = normalizeAudioMap(a);
        return m?.plain || m?.fatha || m?.kasra || m?.damma || null;
    }

    function play(src){
        if(!src) return;
        player.src=src;
        try{ player.currentTime=0; }catch{}
        player.play().catch(()=>{});
    }

    playAudio.addEventListener('click',()=> play(anyAudio(letter.audio)));
    document.getElementById('btnSound').addEventListener('click',()=> play(anyAudio(letter.audio)));

    const modalEl=document.getElementById('makhrajModal');
    const modalBody=document.getElementById('makhrajModalBody');
    const modalLabel=document.getElementById('makhrajModalLabel');
    let bsModal;

    function openModal(title, html){
        modalLabel.textContent=title;
        modalBody.innerHTML=html;
        bsModal = bsModal || new bootstrap.Modal(modalEl);
        bsModal.show();
    }

    document.getElementById('btnText').addEventListener('click',()=> 
        openModal('{{ __('messages.makhraj') }} - {{ __('messages.text') ?? 'Text' }}', `<div class="fs-5">${letter.makhraj_text || ''}</div>`)
    );

    document.getElementById('btnImage').addEventListener('click',()=>{ 
        const images = normalizeArray(letter.makhraj_images);
        const html = images.length 
            ? `<div class="row g-3">${images.map(src=>`<div class="col-12 col-md-6"><img src="${absoluteUrl(src)}" class="img-fluid rounded border" alt="makhraj"></div>`).join('')}</div>` 
            : '<div class="text-muted">No images</div>';
        openModal('{{ __('messages.makhraj') }} - {{ __('messages.images') ?? 'Images' }}', html);
    });

    // Load all letters
    const grid=document.getElementById('allLettersGrid');

    function renderLetters(list){
        grid.innerHTML = list.map(l=>{
            const imgs = normalizeArray(l.makhraj_images);
            const firstImg = imgs.length ? absoluteUrl(imgs[0]) : null;
            const audio = anyAudio(l.audio);
            const media = firstImg 
                ? `<img src="${firstImg}" alt="${l.name}" class="img-fluid rounded-3 border bg-white"/>` 
                : `<div class="display-4 fw-bold text-primary text-center">${l.char}</div>`;
            const disabled = audio ? '' : 'disabled';
            return `
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 letter-card m-2">
               
                <a class="text-decoration-none" href="/letters/${l.id}">
                    <div class="p-2 rounded-3 bg-white h-100 d-flex flex-column align-items-center">
                        <div class="w-100 ratio ratio-1x1 d-flex align-items-center justify-content-center mb-2" style="overflow:hidden">${media}</div>
                        <div class="text-muted small mb-2">${l.name || ''}</div>
                    </div>
                </a>
                <button class="btn btn-sm btn-success w-100 play-letter" data-src="${audio || ''}" ${disabled}>
                {{ __('messages.play') }}
                </button>
            </div>`;
        }).join('');

        grid.querySelectorAll('.play-letter').forEach(btn=>{
            btn.addEventListener('click',()=> play(btn.dataset.src));
        });
    }

    async function loadAll(){
        try{
            const res=await axios.get('{{ route('api.letters') }}', { params: { per_page: 200 } });
            const data=Array.isArray(res.data?.data) ? res.data.data : [];
            renderLetters(data);
        }catch(e){
            grid.innerHTML='<div class="col-12 text-danger">Failed to load letters</div>';
        }
    }

    loadAll(); // ✅ কল করলাম
})();


</script>
@endpush
