<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barang;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function htmlspecialchars;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        if(auth()->user()->is_admin){
            return view('dashboard.barang.index',[
                'barangku'=>Barang::all()
            ]);
        }
            return view('dashboard.barang.index',[
            'barangku'=>Barang::where('user_id',auth()->user()->id)->get()
            ]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //


        return view('dashboard.barang.create',[
            'categories'=>Category::all(),
            'user'=>User::where('is_penjual', 1)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     *
     *
     */
    public function store(Request $request)
    {
        //


        $validatedData = $request ->validate([
            'nama'=>'required|max:255',
            'stok'=>'required',
            'slug'=>'required|unique:barangs',
            'harga'=>'required',
            'category_id'=>'required',
            'image'=>'image|file|max:10024',
            'body'=>'required',
            'selected_user_id' => 'required|exists:users,id',
        ]);

        if($request->file('image')){
            $validatedData['image']=$request->file('image')->store('post-images');
        }


        $validatedData['user_id'] = $request->input('selected_user_id'); // Mengambil user_id dari input tersembunyi
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 70);


        Barang::create($validatedData);

        return redirect('/dashboard/barang')->with('success','New post has been added');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {


        return view('dashboard.barang.edit',[
            'barang'=>$barang,
            'categories'=>Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        //
        $rules = [
            'nama'=>'required|max:255',
            'harga'=>'required',
            'category_id'=>'required',
            'image'=>'image|file|max:10024',
            'body'=>'required'
        ];

        if($request->slug != $barang->slug){
            $rules['slug']='required|unique:barangs';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            // kalo gambar lama ada maka dihapus
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image']=$request->file('image')->store('post-images');
        }

        $validatedData['user_id']=auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 10);

        Barang::where('id', $barang->id)
                    ->update($validatedData);

        return redirect('/dashboard/barang')->with('success','New post has been updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        //


        Barang::destroy($barang->id);

        return redirect('/dashboard/barang')->with('success','New post has been deleted');
    }

}
