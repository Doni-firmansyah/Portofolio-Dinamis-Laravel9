<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $about=About::find(1);
        return view ('admin.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit()
    {
        //
        $data=About::find(1);
        return view ('admin.about.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
         $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'jawaban1'=>'required',
            'pertanyaan1'=>'required',
            'jawaban2'=>'required',
            'pertanyaan2'=>'required',
            'jawaban3'=>'required',
            'pertanyaan3'=>'required',
   
           ]);

           if (!$request->image) {
            $imgName=About::find(1)->value('gambar');
           } else {
            # code...
            $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('image/upload'),$imgName);
           }
           
           

        About::find(1)->update([
            'judul' => $request -> judul,
            'deskrispsi_judul' => $request -> deskrispsi_judul,
            'sub_judul' => $request -> sub_judul,
            'deskripsi_sub_judul' => $request -> deskripsi_sub_judul,
            'pertanyaan1' => $request -> pertanyaan1,
            'jawaban1' => $request -> jawaban1,
            'pertanyaan2' => $request -> pertanyaan2,
            'jawaban2' => $request -> jawaban2,
            'pertanyaan3' => $request -> pertanyaan3,
            'jawaban3' => $request -> jawaban3,
            'pertanyaan4' => $request -> pertanyaan4,
            'jawaban4' => $request -> jawaban4,
            'pertanyaan5' => $request -> pertanyaan5,
            'jawaban5' => $request -> jawaban5,
            'pertanyaan6' => $request -> pertanyaan6,
            'jawaban6' => $request -> jawaban6,
            'datapenunjang' => $request -> datapenunjang,
            'gambar' => $imgName,
            'judul_skilL' => $request -> judulskill,
            'deskripsi_judul_skill' => $request -> deskripsijudulskill,
            'skill1' => $request -> skill1,
            'proses_skill1' => $request -> prosesskill1,
            'skill2' => $request -> skill2,
            'proses_skill2' => $request -> prosesskill2,
            'skill3' => $request -> skill3,
            'proses_skill3' => $request -> prosesskill3,
            'skill4' => $request -> skill4,
            'proses_skill4' => $request -> prosesskill4,
            'skill5' => $request -> skill5,
            'proses_skill5' => $request -> prosesskill5,
            'skill6' => $request -> skill6,
            'proses_skill6' => $request -> prosesskill6,
        ]);
        return redirect('/admin/about');
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
    }
}
