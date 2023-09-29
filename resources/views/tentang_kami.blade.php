@extends("layout.main")

@section("container")

<div class="w-full px-5">
    <div>
        {{-- Deskripsi sembako store --}}
        <h1 class="text-center text-3xl font-bold my-5">Sembako Store</h1>
        <p class="text-justify leading-7">
            Sembako Store adalah solusi inovatif yang menghubungkan para petani dengan konsumen yang cerdas. Kami mengubah cara Anda berbelanja sembako dengan memberdayakan petani lokal. Dengan platform kami, petani dapat dengan mudah menjual hasil panen mereka, dan konsumen bisa mendapatkan sembako berkualitas tanpa perantara yang mahal.
        </p>

        {{-- Misi sembako store --}}
        <h1 class="text-center text-3xl font-bold my-5">Misi Kami</h1>

        <div class="misi-cards-container flex flex-col lg:flex-row justify-between">
            @for ($i=1; $i<=3; $i++)
                <div class="card card-compact bg-base-100 shadow-xl mt-5 lg:mt-0">
                    <figure>
                        <div class="bg-slate-400 w-200 h-200 my-3">
                    </figure>
                    <div class="card-body">
                    <h2 class="card-title">Misi {{ $i }}</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>

@endsection
