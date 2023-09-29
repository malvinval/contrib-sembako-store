@extends('layout.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-5 font-bold text-2xl text-center">{!! $berita->title !!}</h1>
            <div>
                <img src="{{ asset('storage/'.$berita->image) }}" alt="gambar">
            </div>

            {{-- @if ($post->image)
                    <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid ">
            @else
                <img src="https://source.unsplash.com/500x400?{{ $post->category->nama }}" class="card-img-top" alt="{{ $post->category->nama }}">
            @endif --}}
            <article class="my-3 fs-6 text-justify">
                <p>{!! $berita->body !!}</p>
            </article>


            <a href="/berita" class="bg-green_button rounded-lg px-10 py-1 text-white  hover:bg-green-500 hover:text-white p-2  transition duration-300 ease-in-out">kembali</a>
        </div>
    </div>
</div>

@endsection
