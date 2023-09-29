@foreach ($nama_barang as $nb)

        <a href="/belanjas/{{ $nb->slug }}">
            <div class="bg-white w-250 h-400 rounded-xl items-center inline-block drop-shadow-md">
                <div class="flex justify-center items-center">

                @if ($nb->image)
                <div style="max-height: 250px; max-width :250px; overflow:hidden">

                    <img src="{{ asset('storage/' . $nb->image) }}" alt="gambar" class="img-fluid rounded-xl w-200px h-200px">
                </div>
                @else
                <img src="https://source.unsplash.com/500x400?{{ $nb->kategori }}" alt="gambar"
                class="rounded-xl max-height: 200px">
                @endif
            </div>

                <div class="text-justify ">

                    <h1 class="font-bold text-lg px-2">{{ $nb->nama }}</h1>

                    <h5 class="text-sm p-2">{!! $nb->excerpt !!}</h5>

                    <h4 class="font-bold text-lg absolute bottom-10 p-2">Rp. {{ $nb->harga }}</h4>
                    <div class="flex justify-center w-full absolute bottom-3">
                        <button class="bg-green_button rounded-full px-10 py-1 text-white">BELI
                            SEKARANG</button>
                    </div>
                </div>

            </div>
        </a>

@endforeach
