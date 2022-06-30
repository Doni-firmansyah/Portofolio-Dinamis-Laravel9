<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Resume;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Resume::find(1)->first();
        $educations=Education::orderBy('id')->get();
        $experience=Experience::orderby('id')->get();
        return view ('admin.resume.index',  compact('data','educations','experience'));

    }

    public function edit()
    {
        //
        $data=Resume::find(1);
        return view ('admin.resume.edit', compact('data') );
    }
    
    public function updateresume(Request $request)
    {
        //
        $request->validate([
            'judulresume' => 'required|max:20',
            'deskripsi' => 'required|max:500',
            'juduleducation' => 'required|max:20',
            'judulexperience' => 'required|max:20',
            
        ]);
 

        Resume::find(1)->update([
            'judul_resume' => $request -> judulresume,
            'judul_education' =>  $request -> juduleducation,
            'judul_experience' =>  $request -> judulexperience,
            'deskripsi' =>  $request -> deskripsi,

        ]);
        Alert::success('Suuccess', 'Data berhasil diubah');
        return redirect('/admin/resume');
    }

    public function createeducation()
    {
        //
        return view ('admin.resume.create-education', );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeeducation(Request $request)
    {
        //
        $request->validate([
            'namasekolah' => 'required|max:50',
            'tahun' => 'required|max:20',
            'jurusan' => 'required|max:25',
            'deskripsi' => 'required|max:500',
        ]);
 

        Education::create([
            'nama_sekolah' => $request -> namasekolah,
            'tahun' =>  $request -> tahun,
            'jurusan' =>  $request -> jurusan,
            'deskripsi' =>  $request -> deskripsi,

        ]);
        Alert::success('Suuccess', 'Data berhasil ditambah');
        return redirect('/admin/resume');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showeducation($id)
    {
        //
        $data=Education::find($id);
        return view ('admin.resume.detail-education', compact('data') );

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editeducation($id)
    {
        //
        $data=Education::find($id);
        return view ('admin.resume.edit-education', compact('data') );
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
        $request->validate([
            'namasekolah' => 'required|max:50',
            'tahun' => 'required|max:20',
            'jurusan' => 'required|max:25',
            'deskripsi' => 'required|max:500',
        ]);
 

        Education::find($id)->update([
            'nama_sekolah' => $request -> namasekolah,
            'tahun' =>  $request -> tahun,
            'jurusan' =>  $request -> jurusan,
            'deskripsi' =>  $request -> deskripsi,

        ]);
        Alert::success('Suuccess', 'Data berhasil diubah');
        return redirect('/admin/resume');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyducation($id)
    {
        //
        $data=Education::find($id)->delete();
        Alert::success('Suuccess', 'Data berhasil dihapus');
        return redirect('/admin/resume');

    }

    ///////////////////////////////////////////////////////////////////////////////////////////////
    /** experience
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createexperience()
    {
        //
        return view ('admin.resume.create-experience', );
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeexperience(Request $request)
    {
        //
        $request->validate([
            'namaperusahaan' => 'required|max:50',
            'tahun' => 'required|max:20',
            'devisi' => 'required|max:25',
            'deskripsi' => 'required|max:500',
        ]);
 

        Experience::create([
            'nama_perusahaan' => $request -> namaperusahaan,
            'tahun' =>  $request -> tahun,
            'devisi' =>  $request -> devisi,
            'deskripsi' =>  $request -> deskripsi,

        ]);
        Alert::success('Suuccess', 'Data berhasil ditambah');
        return redirect('/admin/resume');
    }
    
    public function showexperience($id)
    {
        //
        $data=Experience::find($id);
        return view ('admin.resume.detail-experience', compact('data') );

    }
    public function destroyexperience($id)
    {
        $data=Experience::find($id)->delete();
        Alert::success('Suuccess', 'Data berhasil dihapus');
        return redirect('/admin/resume');

    }

    public function editexperience($id)
    {
        //
        $data=Experience::find($id);
        return view ('admin.resume.edit-experience', compact('data') );
    }

    public function updateexperience(Request $request, $id)
    {
        //
        $request->validate([
            'namaperusahaan' => 'required|max:50',
            'tahun' => 'required|max:20',
            'devisi' => 'required|max:25',
            'deskripsi' => 'required|max:500',
        ]);

        Experience::find($id)->update([
            'nama_perusahaan' => $request -> namaperusahaan,
            'tahun' =>  $request -> tahun,
            'devisi' =>  $request -> devisi,
            'deskripsi' =>  $request -> deskripsi,

        ]);
        Alert::success('Suuccess', 'Data berhasil diubah');
        return redirect('/admin/resume');
    }
}
