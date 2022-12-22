<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Project;


class homeControl extends Controller
{
    public function redirectFunct(){
        $typeuser=Auth::user()->usertype;

        if($typeuser=='1')
        {
            return view('admin.adminlanding');        
        }    
        else
        {
            return view('staff.stafflanding');
        }
    }

    public function addProject(){
        return view("admin.adminaddproject"); 

    }

    public function editProject(){
        return view("staff.staffedit"); 

    }

    public function editProject2($id)
    {
        $student = DB::table('projects')->where('id','=',$id)->first();
        return view('staff.staffedit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Project::find($id);
        $student->id = $request->input('id');
        $student->studentname = $request->input('studentname');
        $student->projecttitle = $request->input('projecttitle');
        $student->startdate = $request->input('startdate');
        $student->update();
        return redirect('/viewstaffproj')->with('status','Student Updated Successfully');
    }

    public function admineditProject(){
        return view("admin.adminedit"); 

    }

    public function admineditProject2($id)
    {
        $student = DB::table('projects')->where('id','=',$id)->first();
        return view('admin.adminedit', compact('student'));
    }

    public function adminupdate(Request $request, $id)
    {
        $student = Project::find($id);
        $student->id = $request->input('id');
        $student->studentname = $request->input('studentname');
        $student->projecttitle = $request->input('projecttitle');
        $student->startdate = $request->input('startdate');
        $student->startdate = $request->input('enddate');
        $student->startdate = $request->input('progress');
        $student->startdate = $request->input('status');
        $student->update();
        return redirect()->back()->with('status','Student Added Successfully');
    }
    
    public function getStaff()
    {
    $items = DB::table('users')->where('usertype','=',0)->get();
    return view('admin.adminaddproject', compact (('items')));
    }

    public function viewProjectSV()
    {
    $items = DB::table('projects')->where('supervisor','=', Auth::user()->name)->get();
    return view('staff.staffviewall', compact (('items')));
    }

    public function viewProjectExaminer()
    {
    $items = DB::table('projects')->where('examiner1','=', Auth::user()->name)
    ->orWhere('examiner2','=', Auth::user()->name)->get();
    return view('staff.staffviewexaminer', compact (('items')));
    }

    public function viewallProjects()
    {
    $items = DB::table('projects')->get();
    return view('admin.adminviewall', compact (('items')));
    }

    public function store(Request $request)
    {
        $project = new Project;
        $project->id = $request->input('id');
        $project->studentname = $request->input('studentname');
        $project->projecttitle = $request->input('projecttitle');
        $project->supervisor = $request->input('supervisor');
        $project->examiner1 = $request->input('examiner1');
        $project->examiner2 = $request->input('examiner2');
        $project->save();
        return redirect()->back()->with('status','Student Added Successfully');
    }
}
