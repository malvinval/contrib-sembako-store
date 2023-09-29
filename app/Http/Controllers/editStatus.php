<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class editStatus extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view('dashboard.pembeli.index',[
            'order' => Order::all()
        ]);
    }

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $pembeli)
    {
        //dashboard/edit_status/1/edit

        return view('dashboard.pembeli.edit_status',[
            'order' => $pembeli

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $pembeli)
    {
    $validatedData = $request->validate([
        'transaction_status' => 'required|max:255'
    ]);

    $pembeli->update($validatedData);

    return redirect('/dashboard/pembeli')->with('success', 'Status transaksi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
