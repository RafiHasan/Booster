<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use \Input as Input;
class DatauploadControler extends Controller {

   public function insertform(){
      return view('/about');
   }



public function basic(Request $request)
{


 $user_id=Auth::user()->id;
 $fileupload = $request->file('fileupload');

if(!substr($fileupload->getMimeType(), 0, 5) == 'image') {
    return redirect('/start-project');
}


    $input = time();

    $destinationPath = public_path('/upload');



    $fileupload->move($destinationPath, $user_id.$input.'.'.$fileupload->getClientOriginalExtension());



$collabEmail=$request->input('collabEmail');

$collab_id=null;
$j=0;

for($i=0;$i<sizeof($collabEmail);$i++)
{


if($collabEmail[$i]!=null)
 { $vr=DB::table('users')->select('id','email')->where(['email'=>$collabEmail[$i]])->pluck('id');
if(sizeof($vr)>0)
{$collab_id[$j]=$vr[0];
$j++;}
}

}




$project_title=$request->input('project_title');
$project_category=$request->input('project_category');
$project_location=$request->input('project_location');
$funding_duration=$request->input('funding_duration');

$funding_goal=$request->input('funding_goal');
$project_collaborators1=$request->input('project_collaborators1');
$project_collaborators2=$request->input('project_collaborators2');
$project_blurb=$request->input('project_blurb');
$project_subcategory=$request->input('softtype');
$project_subcategory2;

if($project_subcategory==1)
  $project_subcategory2='Android Apps';
elseif($project_subcategory==2)
  $project_subcategory2='Website';
elseif($project_subcategory==3)
  $project_subcategory2='Research';
elseif($project_subcategory==4)
  $project_subcategory2='Robotics';
elseif($project_subcategory==5)
  $project_subcategory2='Web Apps';
elseif($project_subcategory==6)
  $project_subcategory2='Games';
elseif($project_subcategory==7)
  $project_subcategory2='Design & Tech';
elseif($project_subcategory==8)
  $project_subcategory2='Services';
elseif($project_subcategory==9)
  $project_subcategory2='Business Idea';
elseif($project_subcategory==10)
  $project_subcategory2='Electorics';
elseif($project_subcategory==11)
  $project_subcategory2='Networking';
elseif($project_subcategory==12)
  $project_subcategory2='Desktop Softwares';



$request->session()->get('dataid');

 $id=DB::table('projects')->insertGetId(
        array('user_id'=>$user_id,'subcategory'=>$project_category,'title'=>$project_title,'blurb'=>$project_blurb,'category'=>$project_subcategory2,'location'=>$project_location,'duration'=>$funding_duration,'goal'=>$funding_goal,'image'=>'upload'.'/'.$user_id.$input.'.'.$fileupload->getClientOriginalExtension())
    );

if($collab_id!=null)
 for($i=0;$i<sizeof($collab_id);$i++)
{

DB::table('colaborators')->insertGetId(
        array('user_id'=>$user_id,'project_id'=>$id,'collab_id'=>$collab_id[$i]));
}

$request->session()->put('dataid', $id);
  return redirect('/edit-story');

}






public function story(Request $request)
{
$id=$request->session()->get('dataid');
$user_id=Auth::user()->id;
$fileupload = $request->file('fileupload');
$description = $request->input('description');

$video=$request->input('video');
$risks=$request->input('risks');
DB::table('projects')->where('id', $id)->update(['video'=>$video,'risks'=>$risks]);


foreach ($fileupload as $file) {
   if(!substr($file->getMimeType(), 0, 5) == 'image') {
   // return 'bal';
    // return redirect('/edit-story');
     }

}
for($i=0;$i<sizeof($fileupload);$i++)
{
     $input = time();

    $destinationPath = public_path('/upload');



    $fileupload[$i]->move($destinationPath, $user_id.$i.$input.'.'.$fileupload[$i]->getClientOriginalExtension());


  DB::table('description')->insertGetId(['project_id'=>$id,'description'=>$description[$i],'image'=>'upload'.'/'.$user_id.$i.$input.'.'.$fileupload[$i]->getClientOriginalExtension()]);
}

if(Auth::user()->biography==null)
  return redirect('/edit-about');

return redirect('/');
}





public function addComments(Request $request)
{
$user_id=Auth::user()->id;
$comment = $request->input('addComment');
$project_id = $request->input('project_id');



  DB::table('comments')->insertGetId(['project_id'=>$project_id,'comment'=>$comment,'user_id'=>$user_id]);


$comments=DB::table('comments')->select('id','project_id','comment','user_id')->where(['project_id'=>$project_id])->orderBy('id', 'asc')->get();

$pro;
 $k=0;
 foreach ($comments as $comm) {
  
  $pro[$k]['id']=$comm->user_id;
  $pro[$k]['img']=DB::table('users')->select('picture')->where(['id'=>$comm->user_id])->pluck('picture')[0];
  $pro[$k]['name']=DB::table('users')->select('first_name')->where(['id'=>$comm->user_id])->pluck('first_name')[0];
  $pro[$k]['comment']=$comm->comment;

  $k++;
}


return response()->json(['comment'=>$comments,'pro'=>$pro]);

}



public function addupdates(Request $request)
{
$update_title = $request->input('updateTitle');
$update_desc = $request->input('updateDesc');
$project_id = $request->input('project_id');



  DB::table('updates')->insertGetId(['project_id'=>$project_id,'title'=>$update_title,'update'=>$update_desc]);


$updates=DB::table('updates')->select('id','project_id','title','update')->where(['project_id'=>$project_id])->orderBy('id', 'asc')->get();

return response()->json(['update'=>$updates]);

}














public function about(Request $request)
{
  $user_id=Auth::user()->id;
  

  $picture=$request->file('fileupload2');
  $biography=$request->input('biography');
  $website=$request->input('websites');
  $location=$request->input('location');
  $contact=$request->input('contact');
  $accounttype=$request->input('accountname');
  $accountnumber=$request->input('accountnumber');

    $input = time();

    $destinationPath = public_path('/upload');



    $picture->move($destinationPath, $user_id.$input.'.'.$picture->getClientOriginalExtension());


$val='upload/'.$user_id.$input.'.'.$picture->getClientOriginalExtension();


DB::table('users')->where('id', $user_id)->update(['picture'=>$val,'biography'=>$biography,'website'=>$website,'location'=>$location,'contact'=>$contact,'accounttype'=>$accounttype,'accountnumber'=>$accountnumber]);

return redirect('/');

}




public function update()
{

}

public function comment()
{

}

// public function showdetail(Request $request,$id = null){

// $amount=$request->input('cash');

// DB::table('basic')->where([['id',$id]])->increment('fundraised', $amount);


// $user[0] = DB::table('profile')->select('FirstName','LastName','Picture','id')->get();
// $user[1] = DB::table('basic')->select('projecttitle','shortblurb','fundingduration','fundinggoal','profileid','fundraised','id','projectdescription','projectvideo')->where([['id',$id]])->get();
//     //->where([['Email',$email],['Password',$password]])
//     session()->put('projectview', $user);
//   return redirect('/project');
//    }



// public function edit(Request $request){


//     $profileid= Auth::user()->id;

//     $projectimage = $request->file('projectimage');

//     $input = time();

//     $destinationPath = public_path('/upload');

//     $projectimage->move($destinationPath, $input);



// $projectimage = $request->input('projectimage');
// $projecttitle=$request->input('projecttitle');
// $shortblurb=$request->input('shortblurb');
// $projectlocation = $request->input('projectlocation');
// $fundingduration = $request->input('fundingduration');
// $fundinggoal = $request->input('fundinggoal');


// $id = DB::table('basic')->insertGetId(
//         array('projectimage'=> '/upload/'.$input,'projecttitle' => $projecttitle,'shortblurb'=>$shortblurb,'projectlocation'=>$projectlocation,'fundingduration'=>$fundingduration,'fundinggoal'=>$fundinggoal,'profileid'=>$profileid)
//     );



// //DB::insertGetId('insert into basic (projecttitle,shortblurb,projectlocation,fundingduration,fundinggoal) values(?,?,?,?,?)',[$projecttitle,$shortblurb,$projectlocation,$fundingduration,$fundinggoal]);

// $request->session()->put('dataid', $id);

// return redirect('/edit-story');
// }

// public function editstory(Request $request){


// $projectvideo = $request->input('projectvideo');
// $projectdescription=$request->input('projectdescription');
// $risksandchallenges=$request->input('risksandchallenges');



// $id=$request->session()->get('dataid');

// DB::table('basic')->where('id', $id)->update(['projectdescription'=>$projectdescription,'risksandchallenges'=>$risksandchallenges,'projectvideo'=>$projectvideo]);

//   return redirect('/edit-perks');
// }

// public function editperks(Request $request){


//   $title = $request->input('title');
// $pledgeamount=$request->input('pledgeamount');
// $description=$request->input('description');
// $estimateddelivery=$request->input('estimateddelivery');
// $shippingdetails=$request->input('shippingdetails');



// $id=$request->session()->get('dataid');

//  DB::table('perks')->insertGetId(
//         array('title'=>$title,'pledgeamount'=>$pledgeamount,'description'=>$description,'estimated delivery'=>$estimateddelivery,'shippingdetails'=>$shippingdetails,'basicid'=>$id)
//     );


//   return redirect('/index');
// }

// public function editdiscard(Request $request){

//   return redirect('/index');
// }


	
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