<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Card;
class ProjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$projects = Project::paginate(20);
        return view('project.index',['projects'=>$projects]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$project 				= new Project;
    	$project->title 		= $request->title;
    	$project->description 	= $request->description;
    	$project->status 		= 'new';
    	$project->start_at 		= $request->start_y.'-'.$request->start_m.'-'.$request->start_d;
    	$project->end_at 		= $request->end_y.'-'.$request->end_m.'-'.$request->end_d;
    	if($project->save()){
    		$validator = ['success'];
    	}else{
    		$validator = ['failed'];
    	}
    	return redirect()->back()->withErrors($validator)->withInput();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail(Request $request)
    {
    	$project = Project::find($request->id);
        $ideas   = Card::where('project_id',$request->id)->where('state','idea')->get();
        $todos   = Card::where('project_id',$request->id)->where('state','todo')->get();
        $wips    = Card::where('project_id',$request->id)->where('state','wip')->get();
        $dones   = Card::where('project_id',$request->id)->where('state','done')->get();
        return view('project.detail',[
                'project'   =>$project,
                'ideas'     =>$ideas,
                'todos'     =>$todos,
                'wips'      =>$wips,
                'dones'     =>$dones,
                ]);
    }

}
