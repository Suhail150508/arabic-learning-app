@extends('layouts.app')

@section('head')
<!-- AOS Animation Library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection

@section('content')
<div class="bg-cover home-hero rounded-4 p-3 p-md-4" style="background: linear-gradient(rgba(29, 53, 87, 0.85), rgba(29, 53, 87, 0.95)), url('assets/images/arabic-alphabet-bg.svg'); background-size: cover; background-position: center; color: white;">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h2 class="section-title text-white m-0">{{ __('messages.choose_letter') }}</h2>
        <div class="d-none d-md-block"><!-- old top buttons hidden on large hero -->
            <button id="prevBtn" class="btn btn-cta me-2">⟵ {{ __('messages.prev') }}</button>
            <button id="nextBtn" class="btn btn-cta">{{ __('messages.next') }} ⟶</button>
        </div>
    </div>

    <div id="lettersGrid" class="row g-4 justify-content-center"></div>
    <div class="text-center mt-5">
        <small id="pageInfo" class="text-white opacity-75 fs-6"></small>
        <div class="mt-4 d-md-none">
            <button id="prevBtn" class="btn btn-cta me-3">⟵ {{ __('messages.prev') }}</button>
            <button id="nextBtn" class="btn btn-cta">{{ __('messages.next') }} ⟶</button>
        </div>
    </div>
</div>
@endsection

<style>
    :root {
        --primary-color: #1d3557;
        --primary-color-rgb: 29, 53, 87;
        --secondary-color: #457b9d;
        --accent-color: #e63946;
        --light-color: #f1faee;
        --dark-color: #1d3557;
    }
    
    /* Alphabet card styling */
    .letter-card {
        background: url('assets/images/alphabet-card-bg.svg');
        background-size: cover;
        background-position: center;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        margin-bottom: 30px;
        border-top: 4px solid var(--primary-color);
        position: relative;
        padding: 30px;
        text-align: center;
    }
    
    .letter-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        border-top-color: var(--accent-color);
    }
    
    .letter-char {
        font-family: 'Scheherazade New', serif;
        font-size: 5rem;
        font-weight: 700;
        color: var(--primary-color);
        text-align: center;
        margin-bottom: 20px;
        line-height: 1;
    }
    
    /* Enhanced section titles */
    .section-title {
        position: relative;
        margin-bottom: 60px;
        font-weight: 700;
        color: var(--primary-color);
    }
    
    .section-title::after {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        bottom: -15px;
        height: 2px;
        width: 80px;
        margin: 0 auto;
        background-color: var(--accent-color);
    }
    
    .section-title::before {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        bottom: -25px;
        height: 2px;
        width: 40px;
        margin: 0 auto;
        background-color: var(--accent-color);
    }
    
    /* Enhanced buttons */
    .btn-cta {
        background-color: var(--accent-color);
        border-color: var(--accent-color);
        color: white;
        padding: 10px 24px;
        font-weight: 600;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        z-index: 1;
    }
    
    .btn-cta:hover {
        background-color: #d62b39;
        border-color: #d62b39;
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(230, 57, 70, 0.3);
    }
</style>

@push('scripts')
<!-- AOS Animation Library -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // Initialize AOS
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    });
</script>

<script>
(function(){
    const grid=document.getElementById('lettersGrid');
    const pageInfo=document.getElementById('pageInfo');
    const prev=document.getElementById('prevBtn');
    const next=document.getElementById('nextBtn');
    let page=1, per=6, total=0;

    async function load(){
        const res = await axios.get(`/api/letters-two?page=${page}&per_page=${per}`);
        const {data,total:t,per_page:p}=res.data; total=t; per=p;
        grid.innerHTML='';
        data.forEach((item, index)=>{
            const col=document.createElement('div'); 
            col.className='col-6 col-md-4';
            col.setAttribute('data-aos', 'fade-up');
            col.setAttribute('data-aos-delay', (index * 100).toString());
            col.innerHTML=`<a class="text-decoration-none" href="/letters-two/${item.id}">
                <div class="letter-card">
                    <div class="letter-char">${item.char}</div>
                    <div class="text-dark fw-semibold mt-3">${item.name??''}</div>
                </div>
            </a>`; grid.appendChild(col);
        });
        const pages=Math.max(1,Math.ceil(total/per));
        prev.disabled=page<=1; next.disabled=page>=pages;
        pageInfo.innerHTML = `${page} / ${pages} <span class="ms-2">(${total} letters)</span>`;
    }
    prev.addEventListener('click',()=>{ if(page>1){ page--; load(); } });
    next.addEventListener('click',()=>{ page++; load(); });
    load();
})();
</script>
@endpush


