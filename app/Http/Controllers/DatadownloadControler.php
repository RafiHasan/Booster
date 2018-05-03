<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class DatadownloadControler extends Controller {

   public function insertform(){
      return view('/about');
   }


   public function homedisplay()
{

$slide[0]=DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal')->where(['category'=>'Android Apps'])->limit(1)->get();
   $slide[1]=DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal')->where(['category'=>'Website'])->limit(1)->get();
   $slide[2]=DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal')->where(['category'=>'Research'])->limit(1)->get();
   $slide[3]=DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal')->where(['category'=>'Robotics'])->limit(1)->get();
   $slide[4]=DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal')->where(['category'=>'Web Apps'])->limit(1)->get();
   $slide[5]=DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal')->where(['category'=>'Games'])->limit(1)->get();
   $slide[6]=DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal')->where(['category'=>'Design & Tech'])->limit(1)->get();
   $slide[7]=DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal')->where(['category'=>'Services'])->limit(1)->get();
   $slide[8]=DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal')->where(['category'=>'Business Idea'])->limit(1)->get();
   $slide[9]=DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal')->where(['category'=>'Electorics'])->limit(1)->get();
   $slide[10]=DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal')->where(['category'=>'Networking'])->limit(1)->get();
   $slide[11]=DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal')->where(['category'=>'Desktop Softwares'])->limit(1)->get();



$data1 = DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal')->orderBy('id', 'asc')->limit(4)->get();

$data2 = DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal')->orderBy('id', 'desc')->limit(4)->get();

    return view('index')->with( ['data1'=>$data1,'data2'=>$data2,'slide'=>$slide] );


}


public function passproject(Request $request,$id = null){

$request->session()->put('dataid', $id);

return redirect('project');
   }



public function showproject(Request $request){

$var=$request->session()->get('dataid');
$data = DB::table('projects')->select('id','user_id','image','title','blurb','category','subcategory','duration','goal','video')->where(['id'=>$var])->get();

$data2 = DB::table('users')->select('id','first_name','location','picture')->where(['id'=>$data[0]->user_id])->get();

$data3 = DB::table('description')->select('description','image')->where(['project_id'=>$var])->get();


$data4 = DB::table('updates')->select('title','update')->where(['project_id'=>$var])->get();


$data5 = DB::table('comments')->select('user_id','comment')->where(['project_id'=>$var])->get();


$data6 = DB::table('backers')->select('user_id','money')->where(['project_id'=>$var])->get();

$data7 = DB::table('colaborators')->select('user_id','project_id','collab_id')->where(['project_id'=>$var])->get();



    return view('project')->with( ['project'=>$data,'user'=>$data2,'story'=>$data3,'update'=>$data4,'comment'=>$data5,'backer'=>$data6,'colaborator'=>$data7]);;

}

public function editstory(Request $request){

$projectvideo = $request->input('projectvideo');
$projectdescription=$request->input('projectdescription');
$risksandchallenges=$request->input('risksandchallenges');



$id=$request->session()->get('dataid');

DB::table('basic')->where('id', $id)->update(['projectdescription'=>$projectdescription,'risksandchallenges'=>$risksandchallenges]);

  return redirect('/edit-perks');
}

public function editperks(Request $request){


  $title = $request->input('title');
$pledgeamount=$request->input('pledgeamount');
$description=$request->input('description');
$estimateddelivery=$request->input('estimateddelivery');
$shippingdetails=$request->input('shippingdetails');



$id=$request->session()->get('dataid');

 DB::table('perks')->insertGetId(
        array('title'=>$title,'pledgeamount'=>$pledgeamount,'description'=>$description,'estimated delivery'=>$estimateddelivery,'shippingdetails'=>$shippingdetails,'basicid'=>$id)
    );


  return redirect('/index');
}

public function editdiscard(Request $request){

  return redirect('/index');
}


	
   public function insert(Request $request){
$email = $request->input('Email');
$firstname=$request->input('FirstName');
$lastname=$request->input('LastName');
$password = $request->input('Password');
$confirmpassword=$request->input('ConfirmPassword');
	
     // DB::insert('insert into student (name) values(?)',[$name]);
echo $confirmpassword;
if(strcmp($password,$confirmpassword)==0)
{
	DB::insert('insert into profile (FirstName,LastName,Email,Password) values(?,?,?,?)',[$firstname,$lastname,$email,$password]);

	DB::insert('insert into users (name,Email,Password) values(?,?,?)',[$firstname,$email,$password]);

	return redirect('/about');
}
   }

}