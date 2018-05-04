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

$slide[0]=DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal','video')->where(['category'=>'Android Apps'])->whereNotNull('video')->limit(1)->get();
   $slide[1]=DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal','video')->where(['category'=>'Website'])->whereNotNull('video')->limit(1)->get();
   $slide[2]=DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal','video')->where(['category'=>'Research'])->whereNotNull('video')->limit(1)->get();
   $slide[3]=DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal','video')->where(['category'=>'Robotics'])->whereNotNull('video')->limit(1)->get();
   $slide[4]=DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal','video')->where(['category'=>'Web Apps'])->whereNotNull('video')->limit(1)->get();
   $slide[5]=DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal','video')->where(['category'=>'Games'])->whereNotNull('video')->limit(1)->get();
   $slide[6]=DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal','video')->where(['category'=>'Design & Tech'])->whereNotNull('video')->limit(1)->get();
   $slide[7]=DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal','video')->where(['category'=>'Services'])->whereNotNull('video')->limit(1)->get();
   $slide[8]=DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal','video')->where(['category'=>'Business Idea'])->whereNotNull('video')->limit(1)->get();
   $slide[9]=DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal','video')->where(['category'=>'Electorics'])->whereNotNull('video')->limit(1)->get();
   $slide[10]=DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal','video')->where(['category'=>'Networking'])->whereNotNull('video')->limit(1)->get();
   $slide[11]=DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal','video')->where(['category'=>'Desktop Softwares'])->whereNotNull('video')->limit(1)->get();



$data1 = DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal','video')->orderBy('id', 'asc')->whereNotNull('video')->limit(4)->get();

$data2 = DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal','video')->orderBy('id', 'desc')->whereNotNull('video')->limit(4)->get();

    return view('index')->with( ['data1'=>$data1,'data2'=>$data2,'slide'=>$slide] );


}


public function passproject(Request $request,$id = null){

$request->session()->put('dataid', $id);

return redirect('project');
   }



public function showproject(Request $request){

$var=$request->session()->get('dataid');
$data = DB::table('projects')->select('id','user_id','image','title','blurb','category','subcategory','duration','goal','video')->where(['id'=>$var])->get();


if($data[0]->video==null)
  {$request->session()->put('dataid', $var);
return redirect('/edit-story');}



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