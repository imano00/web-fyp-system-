<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

USE App\Models\Project;

use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    function register(Request $x)
    {
        $project = new Project;

        // variable di atas -> nama attribute dalam table = nama variable dekat controller -> nama input field kat view
        $project->id = $x->id;
        $project->title = $x->title;
        $project->start_date = $x->start_date;
        $project->end_date = $x->end_date;
        $project->duration = $x->duration;
        $project->progress = $x->progress;
        $project->status = $x->status;
        $project->assigned_to = $x->assigned_to;
        $project->supervised_by = $x->supervised_by;
        $project->examined_by1 = $x->examined_by1;
        $project->examined_by2 = $x->examined_by2;

        // function untuk save data dalam table. letak last sekali
        $project->save();
        return redirect('/list');
    }
    
    function add()
    {
        return view('add-project');
    }

    // can only be seen by coordinator and lecturer
    function projectList()
    {
        // $value=Project::all();
        $value=Project::paginate(10);
    
        return view('project-list', ['data' =>$value]);
    }

    // can only be done by coordinator
    function deleteProject($id)
    {
        // $value=Student::find($id);

        // $value->delete();

        DB::delete('delete from projects where id=?',[$id]);
        return redirect('/list');
    }

    // can only be seen by coordinator and lecturer
    function updateProject(Request $req)
    {
        $data=Project::find($req->id);

       $data->title=$req->title;        
       $data->start_date=$req->start_date;        
       $data->end_date=$req->end_date;        
       $data->duration=$req->duration;        
       $data->progress=$req->progress;        
       $data->status=$req->status;        
       $data->assigned_to=$req->assigned_to;        
       $data->supervised_by=$req->supervised_by;        
       $data->examined_by1=$req->examined_by1;        
       $data->examined_by2=$req->examined_by2;               


        $data->save();

        // DB::update('update from students where id=?',[$id]);
        return redirect('/list');
    }

    function findProject($id)   
    {
        $value=Project::find($id);

        return view('edit-project',['findProject'=>$value]);
        // return redirect('/list');

    }
}
