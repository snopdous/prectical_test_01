<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectModel;
use Illuminate\Support\Facades\Storage;
class ProjectController extends Controller
{
    public function index()
    {
        $data['projects'] = ProjectModel::get();
        return view('home',$data);
    }
    public function add(Request $request)
    {
        if ($request->isMethod('post'))
        {
           
            $res = $request->validate([
                'project_type'=>'required',
                'project_date'=>'required',
                'cunsultant'=>'required',
                'note'=>'required|max:1000',
                'address'=>'required|max:200',
                'installation_date'=>'required',
                'docs'=>'required',
            ]);
            $file_name = $request->file('docs')->store('public/project_docs');
            $res['docs'] =  str_replace("public/","",$file_name);
            $response = ProjectModel::add($res);
            if($response)
            {
                return redirect('project')->with(['msg'=>'Project created']);
            }
            else
            {
                return redirect('project/add')->with(['msg'=>'Project Creation Failed']);
            }
        }
        else
        {
            return view('add_project');
        }
    }
}
