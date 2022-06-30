<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Icon;
use App\Models\Sosmed;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SosmedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $icons=Icon::orderBy('id','asc')->get();
        
        // dd( $icons);
        return view ('admin.home.sosmed.create',  compact('icons'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'icon' => 'required|max:50',
            'link' => 'required|max:50',
        ]);

        Sosmed::create([
            'icon_id' => $request -> icon,
            'link' =>  $request -> link
        ]);
        Alert::success('Suuccess', 'Data berhasil ditambah');
        return redirect('/admin/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Sosmed::find($id)->delete();
        // Undangan::find($id)->delete();
        Alert::success('Suuccess', 'Data berhasil dihapus');
        return redirect('admin/home');
    }
}
