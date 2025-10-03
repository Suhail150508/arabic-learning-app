@extends('layouts.app')

@section('content')
@php
    $label = __('messages.harakat.' . $type);
    $audio = $letter->audio[$type] ?? null;
    $example = $letter->examples[$type] ?? null;
@endphp
<div class="row g-4">
    <div class="col-12 col-lg-9">
        <div class="position-relative p-4 bg-white border rounded-4 text-center">
            <div class="big-letter">{{ $letter->char }}</div>
            <button id="playBtn" class="play-btn" aria-label="{{ __('messages.play') }}"><span class="triangle"></span></button>
        </div>
        <div class="mt-3 p-3 bg-white rounded border">
            <h5 class="mb-2">{{ $label }}</h5>
            <p class="text-muted mb-2">{{ $example['word'] ?? '' }}</p>
        </div>
    </div>
    <div class="col-12 col-lg-3 d-flex flex-column align-items-center gap-3">
        <a class="btn btn-outline-secondary w-100" href="{{ route('letters.show', $letter) }}">← {{ __('messages.home') }}</a>
        <a class="btn btn-soft-primary w-100" href="{{ route('letters.harakat', [$letter,'fatha']) }}">{{ __('messages.harakat.fatha') }}</a>
        <a class="btn btn-soft-primary w-100" href="{{ route('letters.harakat', [$letter,'kasra']) }}">{{ __('messages.harakat.kasra') }}</a>
        <a class="btn btn-soft-primary w-100" href="{{ route('letters.harakat', [$letter,'damma']) }}">{{ __('messages.harakat.damma') }}</a>
    </div>
</div>

<audio id="audioPlayer"></audio>
@endsection

@push('scripts')
<script>
(function(){
    const player=document.getElementById('audioPlayer');
    const src=@json($audio);
    const playBtn=document.getElementById('playBtn');
    function play(){ if(!src) return; player.src=src; player.play().catch(()=>{}); }
    playBtn.addEventListener('click', play);
})();
</script>
@endpush


