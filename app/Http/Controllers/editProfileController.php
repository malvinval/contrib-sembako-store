<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class editProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $edit_profile)
    {
        //

        return view('pembeli.edit_profile',[
            'title'=> 'Edit Profile',
            'user'=>$edit_profile
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $edit_profile)
    {
        //

        $rules = [
            'name'=> 'required|max:255',
            'username'=>['required','min:3','max:255','unique:users'],
            //bisa pakai array
            'email'=>'required|email:dns|unique:users',
            'no_telp'=>'required|max:255'
        ];

        if($request->username != $edit_profile->username){
            $rules['username'] = 'required|unique:users';
        }

        if($request->email != $edit_profile->email){
            $rules['email'] = 'required|unique:users';
        }

        $validatedData = $request->validate($rules);

        $validatedData['id']=auth()->user()->id;

        User::where('id', $edit_profile->id)
                    ->update($validatedData);

                    return redirect('/home')->with('success','New post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}



