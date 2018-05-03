<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/try', function () {

$data = DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal')->orderBy('id', 'asc')->limit()->get();

    return view('home');
});


Route::get('/verify/{token}', 'VerifyController@verify')->name('verify');




Route::get('/project1', function () {

    return view('project1');
});

Route::get('/pay', function () {

    return view('pay/simple_form-submit');
});






Route::get('/', 'DatadownloadControler@homedisplay');

// Route::get('/{id}', function ($id) {
//     return view($id);
// });

Route::get('/account-payment', function () {

    $data = DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal')->orderBy('id', 'asc')->get();

    return view('account-payment')->with( 'data', $data );
});


Route::get('/account-notifications', function () {

    $data = DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal')->orderBy('id', 'asc')->get();

    return view('account-notifications')->with( 'data', $data );
});



Route::get('/account-profile', function () {

    $data = DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal')->orderBy('id', 'asc')->get();

    return view('account-profile')->with( 'data', $data );
});



Route::get('/account-dashboard', function () {

    $data = DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal')->orderBy('id', 'asc')->get();

    return view('account-dashboard')->with( 'data', $data );
});




Route::get('/explore', function () {

    $data = DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal')->whereNotNull('video')->orderBy('id', 'asc')->get();

    return view('explore')->with( 'data', $data );
});



Route::get('/explore/{id}', function ($id=null) {

if($id=='All Category')
{
    return redirect('explore');
}
    $data = DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal')->where(['category'=>$id])->orderBy('id', 'asc')->get();

    return view('explore')->with( 'data', $data );
});


Route::get('/start-project', function () {
    return view('edit');
});





Route::get('/myaccount', function () {

$data = DB::table('projects')->select('id','user_id','image','title','blurb','category','duration','goal')->where(['user_id'=>Auth::user()->id])->orderBy('id', 'asc')->get();

$user = DB::table('users')->select('id','first_name','last_name','picture','biography','location','website','contact')->where(['id'=>Auth::user()->id])->get();


    return view('myaccount')->with( ['data'=>$data,'user'=>$user] );
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





Route::get('/project', 'DatadownloadControler@showproject');


Route::get('/project/{id}','DatadownloadControler@passproject' );





Route::get('/edit-story', function () {
    return view('edit-story');
});
Route::get('/edit-about', function () {
    return view('edit-about');
});
Route::get('/edit-account', function () {
    return view('edit-accounts');
});
Route::get('/edit-update',function(){
	return view('edit-updates');
});


Route::post('/edit', ['as'=>'edit','uses'=>'DatauploadControler@basic']);

Route::post('/addComments', ['as'=>'addComments','uses'=>'DatauploadControler@addComments']);

Route::post('/addupdates', ['as'=>'addupdates','uses'=>'DatauploadControler@addupdates']);


Route::post('/edit_story', ['as'=>'edit_story','uses'=>'DatauploadControler@story']);

Route::post('/edit-about', ['as'=>'edit-about','uses'=>'DatauploadControler@about']);



Route::post('ajax-upload-image', ['as'=>'ajax.upload-image','uses'=>'HomeController@ajaxUploadImage']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/showProfile', ['as'=>'showProfile','uses'=>'HomeController@showProfile']);


Route::post('/addCard','HomeController@addCard');

Route::get('/about-us', function () {

    return view('about');
});