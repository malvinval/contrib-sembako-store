@extends('layout.main')

@section('container')
    <div class="w-1200 h-auto flex-shrink-0 border border-gray-300 rounded-r-md">

        {{-- BAGIAN FOTO --}}
        <div class="p-5">

            <div class="flex">
                <div class="w-1/3">

                    <img src="{{ asset('storage/' . $barang->image) }}" alt="gambar"
                        class="rounded-xl object-cover w-250 h-auto">
                    {{-- <img src="/images/bagas.png" alt="" class="w-250 h-auto"> --}}
                    {{-- <div class="flex pt-2">
                        <img src="https://source.unsplash.com/500x400?{{ $barang->kategori }}" alt="gambar"
                            class="rounded-xl object-cover w-20 h-auto">
                        <img src="https://source.unsplash.com/500x400?{{ $barang->kategori }}" alt="gambar"
                            class="rounded-xl object-cover w-20 h-auto px-2">
                        <img src="https://source.unsplash.com/500x400?{{ $barang->kategori }}" alt="gambar"
                            class="rounded-xl object-cover w-20 h-auto">
                    </div> --}}
                </div>
                <form action="{{ url('/belanjas/' . $barang->slug) }}" method="POST">
                    @csrf
                    <div class="w-2/3">
                        <h1 class="text-24 font-bold">{{ $barang->nama }}</h1>
                        <h1 class="text-18 pt-5 text-green_button font-bold">Rp. {{ $barang->harga }}</h1>


                        <div class="flex gap-3 mt-5">

                            <div class="mt-1 font-bold">
                                <h1>KUANTITAS</h1>
                            </div>
                            <div class="flex items-center space-x-2">
                                <a href="javascript:void(0)"
                                    class="decrement bg-blue-500 text-white px-3 py-1 rounded-full focus:outline-none focus:ring focus:border-blue-300">-</a>
                                <input type="text" name="jumlah"
                                    class="item-quantity border border-gray-300 w-12 text-center focus:outline-none focus:ring focus:border-blue-300 px-5"
                                    value="1" min="1">

                                <a href="javascript:void(0)"
                                    class="increment bg-blue-500 text-white px-3 py-1 rounded-full focus:outline-none focus:ring focus:border-blue-300">+</a>
                            </div>

                            <a href=""><i class="bi bi-cart-plus text-30"></i></a>

                            @if (!Auth::check())
                                <a  href="/login" class="bg-green_button text-white px-10 py-2 rounded-md">Pesan Sekarang</a>
                            @else
                                <button type="submit" class="bg-green_button text-white px-10 py-2 rounded-md">Pesan Sekarang</button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>


            {{-- BAGIAN JENIS PRODUK --}}

            <div class="mt-7">
                <h1 class="text-green_button text-24 font-bold">SPESIFIKASI PRODUK</h1>
                <hr class="border-t border-black">

                <div class="py-3">
                    <h1 class=""><strong>Jenis Produk : </strong>{{ $barang->category->nama }}</h1>
                    <h1 class="pt-2"><strong>Stok :</strong>{{ $barang->stok }}</h1>
                </div>
            </div>

            {{-- BAGIAN DESKRIPSI PRODUK --}}

            <div>
                <h1 class="text-green_button text-24 font-bold">DESKRIPSI PRODUK</h1>
                <hr class="border-t border-black">

                <div class="py-3">
                    <h1>{!! $barang->body !!}</h1>
                </div>
            </div>
        </div>

    </div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const incrementButtons = document.querySelectorAll('.increment');
        const decrementButtons = document.querySelectorAll('.decrement');
        const quantityElements = document.querySelectorAll('.item-quantity');

        incrementButtons.forEach((button, index) => {
            button.addEventListener('click', function() {
                // Mengambil nilai saat ini dari input
                let quantity = parseInt(quantityElements[index].value);

                // Menambahkan 1 ke nilai
                quantity++;

                // Memperbarui nilai di input
                quantityElements[index].value = quantity;
            });
        });

        decrementButtons.forEach((button, index) => {
            button.addEventListener('click', function() {
                // Mengambil nilai saat ini dari input
                let quantity = parseInt(quantityElements[index].value);

                // Memastikan nilai tidak kurang dari 1
                if (quantity > 1) {
                    // Mengurangkan 1 dari nilai
                    quantity--;

                    // Memperbarui nilai di input
                    quantityElements[index].value = quantity;
                }
            });
        });
    });
</script>
