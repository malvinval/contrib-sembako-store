@extends('layout.main')

@section('container')

<div>
    <h1 class="text-green_button text-24 text-bold">BERITA TERBARU</h1>

    <hr class="border-t border-black">


    <div class="mb-60">
        @include('konten.berita')
    </div>
</div>





@endsection
