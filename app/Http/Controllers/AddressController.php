<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddressBook;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $address = AddressBook::where('user_id', Auth::id())->get();

        return view('home', compact('address'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('addressBook.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|alpha',
            'address'=>'required|alpha',
            'house_number' => 'numeric|min:1'
        ]);

        $address = new AddressBook([
            'name' => $request->get('name'),
            'address' => $request->get('address'),
            'house_number' => $request->get('house_number'),
            'user_id' =>  Auth::id()
        ]);

        $address->save();

        return redirect('/index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $address = AddressBook::find($id);
        $address->delete();

        return redirect('/index');
    }
}
