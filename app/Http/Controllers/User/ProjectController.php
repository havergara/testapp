<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index(){
        $accountManagers = DB::table('employees')->where('role', 'AM')->orderBy('name')->pluck('name', 'id');
        $projectManagers = DB::table('employees')->where('role', 'PM')->orderBy('name')->pluck('name', 'id');
        $seniorDevelopers = DB::table('employees')->where('role', 'Dev')->orderBy('name')->pluck('name', 'id');

        $projects = DB::table('projects')
            ->join('employees as myAm', 'projects.am', '=', 'myAm.id')
            ->join('employees as myPm', 'projects.pm', '=', 'myPm.id')
            ->join('employees as mySd', 'projects.sd', '=', 'mySd.id')
            ->select('projects.name', 'myAm.name as AM', 'myPm.name as PM', 'mySd.name as SD', 'link1', 'link2', 'link3')
            ->get();

        return view('user.project.index', compact('accountManagers', 'projectManagers', 'seniorDevelopers', 'projects'));
    }

    public function store(CreateProjectRequest $request){
        $project = new Project();
        $project->name = $request->project_name;
        $project->am = $request->account_manager;
        $project->pm = $request->project_manager;
        $project->sd = $request->senior_developer;
        $project->link1 = $request->linkOne;
        $project->link2 = $request->linkTwo;
        $project->link3 = $request->linkThree;
        $project->save();

        return redirect()->back()->with('message', 'Project created successfully!');
    }
}
