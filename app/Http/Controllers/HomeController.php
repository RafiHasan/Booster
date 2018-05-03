<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;


use Auth;

class HomeController extends Controller
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
        return view('index');
    }





    /////////////              Ajax Requests              //////////////////////

    public function showProfile(Request $request){
        $id = $request['uid'];

        $user = User::where('id',$id)->first();

        $projects=DB::table('projects')->select('id','user_id','image','title')->where(['user_id'=>$id])->orderBy('id', 'asc')->get();

        $colla=DB::table('colaborators')->where(['user_id'=>$id])->distinct()->get(['collab_id']);



        

        $collaborator=null;
        $k=0;
        foreach ($colla as $col) {
            $collaborator[$k]=User::where('id',$col->collab_id)->first();
            if(sizeof($collaborator[$k])>0)
            $k++;
        }

        return response()->json(['success'=>'success' , 'user'=>$user ,'projects'=>$projects,'collaborator'=>$collaborator]);
    }

    public function addCard(Request $request){
        $this->validate($request, [
            'date' => 'required',
            'number'=>'required'
        ]);
        $type = $request['type'];
        $number = $request['number'];
        $id = Auth::user()->id;

        User::where('id', $id)
          ->update(['accounttype' => $type, 'accountnumber' => $number]);

        $data = User::where('id',$id)->first();
        return response()->json(['success'=>'success' , 'data'=>$data]);

    }


}
