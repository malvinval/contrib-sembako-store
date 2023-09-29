<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        if (!Auth::user()) {
            abort(403);
        }
        $orders = Order::where('user_id',auth()->user()->id)
        ->select('id', 'transaction_status', 'total') // Menambahkan kolom total
        ->get();

        if (!$orders) {
            // Lakukan penanganan jika Order tidak ditemukan
            return abort(404);
        }

        $orders = Order::where('user_id', auth()->user()->id)->select('id', 'transaction_status', 'total')->get();

        if ($orders->isEmpty()) {
            return view('pembeli.order', [
                'title' => 'Pesanan Saya',
                'order' => 0, // Atur total ke 0 jika tidak ada pesanan
                'orderItems' => [],
            ]);
        }

        // Mengambil semua OrderItem yang memiliki order_id sama dengan ID Order
        $orderItems = OrderItem::whereIn('order_id', $orders->pluck('id'))->get();

        $total = $orders->sum('total');

        return view('pembeli.order', [
            'title' => 'Pesanan Saya',
            'order' => $total,
            'orderItems' => $orderItems,
        ]);
    }

    // where('order_id',auth()->user()->id)->get()
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {



        // // Membuat pesanan baru
        // $order = new Order();
        // $order->user_id = auth()->user()->id;
        // $order->transaction_status ='Dalam Proses';
        // $order->total = $request->total_price;

        // $order->save();

        // // Menyimpan detail item pesanan
        // $carts = Cart::where('user_id', auth()->user()->id)->get();
        // foreach ($carts as $cart) {
        //     $orderItem = new OrderItem();
        //     $orderItem->order_id = $order->id;
        //     $orderItem->barang_id = $cart->barang_id;
        //     $orderItem->jumlah = $cart->jumlah;
        //     // Hitung total harga untuk item pesanan ini jika diperlukan
        //     // $orderItem->total_harga = $cart->barang->harga * $cart->jumlah;
        //     $orderItem->save();
        // }

        // // Hapus item dari keranjang setelah berhasil membuat pesanan
        // Cart::where('user_id', auth()->user()->id)->delete();

        // return redirect()->route('pembeli.order.index')->with('success', 'Pesanan Anda telah berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderItem $orderItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderItem $orderItem)
    {
        //


        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrderItem $orderItem)
    {
        //
    }

    public function logout(Request $request){
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/home');

       }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderItem $orderItem)
    {
        //
    }
}
