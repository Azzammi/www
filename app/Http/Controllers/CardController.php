<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Card;
class CardController extends Controller
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
    public function store(Request $request)
    {
        $card                = new Card;
        $card->title         = $request->title;
        $card->description   = $request->description;
        $card->state         = $request->state;
        $card->project_id    = $request->project_id;

        if($card->save()){
            $validator = ['Success add card'];
        }else{
            $validator = ['Failed add card'];
        }

        return redirect()->back()->withErrors($validator)->withInput();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function move(Request $request)
    {
        Card::where('id',$request->task_id)->update(['state'=>$request->action]);
        $validator = ['Success update card'];
        return redirect()->back()->withErrors($validator)->withInput();
    }

}
