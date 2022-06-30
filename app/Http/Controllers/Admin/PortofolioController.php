<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portofolio;
use App\Models\Project;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Portofolio::orderBy('id')->first();
        $projects = Project::orderBy('id')->get();
        return view('admin.portofolio.index', compact('data', 'projects'));
    }

    public function edit()
    {
        //
        $data = Portofolio::orderBy('id')->first();
        return view('admin.portofolio.edit', compact('data'));
    }

    public function update(Request $request)
    {
        //
        $request->validate([
            'judulportofolio' => 'required|max:25',
            'deskripsi' => 'required|max:500',
        ]);


        Portofolio::find(1)->update([
            'judul_portofolio' => $request->judulportofolio,
            'deskripsi' =>  $request->deskripsi,

        ]);
        Alert::success('Suuccess', 'Data berhasil diubah');
        return redirect('/admin/portofolio');
    }

    /////////////////////////////////////////
    public function createportofolio()
    {
        return view('admin.portofolio.create-portofolio');
    }


    public function store(Request $request)
    {
        //
        $request->validate([
            'namaproject' => 'required|max:50',
            'category' => 'required|max:20',
            'client' => 'required|max:25',
            'projectdate' => 'required',
            'deskripsi' => 'required|max:500',
            'gambar1' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'gambar2' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'gambar3' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);

        $imgName1 = $request->gambar1->getClientOriginalName() . '-' . time() . '.' . $request->gambar1->extension();
        $request->gambar1->move(public_path('image/upload'), $imgName1);

        $imgName2 = $request->gambar2->getClientOriginalName() . '-' . time() . '.' . $request->gambar2->extension();
        $request->gambar2->move(public_path('image/upload'), $imgName2);

        $imgName3 = $request->gambar3->getClientOriginalName() . '-' . time() . '.' . $request->gambar3->extension();
        $request->gambar3->move(public_path('image/upload'), $imgName3);


        Project::create([
            'nama_project' => $request->namaproject,
            'category' =>  $request->category,
            'client' =>  $request->client,
            'project_date' =>  $request->projectdate,
            'deskripsi' =>  $request->deskripsi,
            'gambar1' =>  $imgName1,
            'gambar2' =>  $imgName2,
            'gambar3' =>  $imgName3,

        ]);
        Alert::success('Suuccess', 'Data berhasil ditambah');
        return redirect('/admin/portofolio');
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
    public function editprojects($id)
    {
        //
        $project = Project::find($id);
        return view('admin.portofolio.edit-project', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateprojects(Request $request, $id)
    {
        //
        //
        $request->validate([
            'namaproject' => 'required|max:50',
            'category' => 'required|max:20',
            'client' => 'required|max:25',
            'projectdate' => 'required',
            'deskripsi' => 'required|max:500',
            'gambar1' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'gambar2' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'gambar3' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);
        if (!$request->gambar1) {
            $imgName1=Project::find($id)->value('gambar1');
        } else {
            $imgName1 = $request->gambar1->getClientOriginalName() . '-' . time() . '.' . $request->gambar1->extension();
            $request->gambar1->move(public_path('image/upload'), $imgName1);
        }

        if (!$request->gambar2) {
            $imgName2=Project::find($id)->value('gambar2');
        } else {
            $imgName2 = $request->gambar2->getClientOriginalName() . '-' . time() . '.' . $request->gambar2->extension();
            $request->gambar2->move(public_path('image/upload'), $imgName2);
        }

        if (!$request->gambar3) {
            $imgName3=Project::find($id)->value('gambar3');
        } else {
            $imgName3 = $request->gambar3->getClientOriginalName() . '-' . time() . '.' . $request->gambar3->extension();
            $request->gambar3->move(public_path('image/upload'), $imgName3);
        }

        Project::find($id)->update([
            'nama_project' => $request->namaproject,
            'category' =>  $request->category,
            'client' =>  $request->client,
            'project_date' =>  $request->projectdate,
            'deskripsi' =>  $request->deskripsi,
            'gambar1' =>  $imgName1,
            'gambar2' =>  $imgName2,
            'gambar3' =>  $imgName3,

        ]);
        Alert::success('Suuccess', 'Data berhasil diubah');
        return redirect('/admin/portofolio');
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
        Project::find($id)->delete();
        Alert::success('Suuccess', 'Data berhasil dihapus');
        return redirect('/admin/portofolio');
    }
}
