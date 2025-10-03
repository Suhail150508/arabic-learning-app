@extends('layouts.app')

@section('content')
<div class="bg-cover home-hero rounded-4 p-3 p-md-4" style="background-image:url('/assets/images/home-bg.jpg')">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="m-0">{{ __('messages.choose_letter') }}</h2>
        <div class="d-none d-md-block"><!-- old top buttons hidden on large hero -->
            <button id="prevBtn" class="btn btn-cta me-2">⟵ {{ __('messages.prev') }}</button>
            <button id="nextBtn" class="btn btn-cta">{{ __('messages.next') }} ⟶</button>
        </div>
    </div>

    <div id="lettersGrid" class="row g-3"></div>
    <div class="text-center mt-3">
        <small id="pageInfo" class="text-muted"></small>
        <div class="mt-2 d-md-none">
            <button id="prevBtn" class="btn btn-cta me-2">⟵ {{ __('messages.prev') }}</button>
            <button id="nextBtn" class="btn btn-cta">{{ __('messages.next') }} ⟶</button>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
(function(){
    const grid=document.getElementById('lettersGrid');
    const pageInfo=document.getElementById('pageInfo');
    const prev=document.getElementById('prevBtn');
    const next=document.getElementById('nextBtn');
    let page=1, per=6, total=0;

    async function load(){
        const res=await axios.get(`/api/letters?page=${page}&per_page=${per}`);
        const {data,total:t,per_page:p}=res.data; total=t; per=p;
        grid.innerHTML='';
        data.forEach(item=>{
            const col=document.createElement('div'); col.className='col-6 col-md-4';
            col.innerHTML=`<a class="text-decoration-none" href="/letters/${item.id}">
                <div class="letter-card">
                    <div class="letter-char">${item.char}</div>
                    <div class="text-muted mt-2">${item.name??''}</div>
                </div>
            </a>`; grid.appendChild(col);
        });
        const pages=Math.max(1,Math.ceil(total/per));
        prev.disabled=page<=1; next.disabled=page>=pages;
    }
    prev.addEventListener('click',()=>{ if(page>1){ page--; load(); } });
    next.addEventListener('click',()=>{ page++; load(); });
    load();
})();
</script>
@endpush


