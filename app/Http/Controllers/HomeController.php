<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Profesi;
use App\Models\Project;
use App\Models\Resume;
use App\Models\Sosmed;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        //
        $about=About::find(1);
        $sosmeds=Sosmed::orderBy('id')->get();
        $resume=Resume::find(1);
        $profesis=Profesi::orderBy('id')->get();
        $educations=Education::orderBy('id')->get();
        $experiences=Experience::orderBy('id')->get();
        $projects=Project::orderBy('id')->get();
        return view ('user.main', compact('about','sosmeds','profesis','resume','educations','experiences','projects'));
    }

    public function detail($id)
    {
        //
        $about=About::find(1);
        $project = Project::find($id);
        $sosmeds=Sosmed::orderBy('id')->get();
        return view ('user.pages', compact('project','about','sosmeds'));
    }
}
