<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Project</title>
	<meta name="description" content="Write an awesome description for your new site here. You can edit this line in _config.yml. It will appear in your document head meta (for Google search resu...">

	<!-- favicon -->

	@include('Format.css_js_file')

<?php
date_default_timezone_set('Asia/Dhaka');
//Generate Unique Transaction ID
function rand_string( $length ) {
     $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";  
$str="";
     $size = strlen( $chars );
     for( $i = 0; $i < $length; $i++ ) {
          $str .= $chars[ rand( 0, $size - 1 ) ];
     }

     return $str;
}
$cur_random_value=rand_string(10);

?>

</head>
<body>

	@include('Format.header')

	
	<br />
	<br />
	<div id="projDiv" class="container inner">
		<div class="row">
			<div class="col-sm-8">

				<div class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-2">
								<div class="avatar-me-wrapper"><span class="avatar-me">A</span></div>
							</div>

							<div class="col-sm-10">
								<h3 style="overflow:hidden;">{{$project[0]->title}}</h3>
								<br />
								<p class="mb-1">{{$sum =(DB::table('backers')->select('money')->where(['project_id'=>$project[0]->id])->get()->sum('money'))/$project[0]->goal*100}}% funded</p>
								<div class="progress">
									<div class="progress-bar" role="progressbar" style="width: {{$sum =(DB::table('backers')->select('money')->where(['project_id'=>$project[0]->id])->get()->sum('money'))/$project[0]->goal*100}}%" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"></div>
								</div>


								<div class="row">
									<div class="col-sm-6">
										<h3>৳{{$sum = DB::table('backers')->select('money')->where(['project_id'=>$project[0]->id])->get()->sum('money')}}</h3>
										<p class="mb-1">backed by {{$count = DB::table('backers')->select('id')->where(['project_id'=>$project[0]->id])->get()->count()}} people</p>
									</div>
									<div class="col-sm-6 text-right">
										<h3>৳{{$project[0]->goal}}</h3>
										<p class="mb-1">Funding goal</p>
									</div>
								</div>
								<br />
								<br />

								<iframe  width="100%" height="350" src="{{$project[0]->video}}" frameborder="0" allowfullscreen></iframe>

							</div>
						</div>

						<br />
						<br />
						<div class="row">
							<div class="col-md-12">
								<ul class="nav nav-tabs">
									<li class="nav-item">
										<a class="nav-link active" href="#">Overview</a>
									</li>

									<li class="nav-item" style="width: 100%">

										<span class="badge badge-pill badge-info float-sm-right" style="margin-left: 5px;margin-top: 5px;">{{$project[0]->subcategory}}</span>
										<span class="badge badge-pill badge-danger float-sm-right" style="margin-left: 0px;margin-top: 5px;">{{$project[0]->category}}</span>

									</li>
								</ul>

							</div>
						</div>
						<br />
						<br />

						<div class="row">
							<div class="col-md-4">
								<a href=""><img class="img-fluid" src="{{$project[0]->image}}" class="img-fluid" /></a>
							</div>
							<div class="col-md-8">
								<p>{{$project[0]->blurb}}</p>
							</div>
						</div>

						<br />
						<br />
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" active" href="#home" role="tab">STORY</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#updates" role="tab">UPDATES</a>
							</li>
							<li class="nav-item">
								<a onclick="event.preventDefault(); comments({{$user[0]->id}});" class="nav-link" data-toggle="tab" href="#comments" role="tab">COMMENTS </a>
							</li>
							<li class="nav-item">
								<a class="nav-link "  data-toggle="tab" href="#backers" role="tab">BACKERS (797)</a>
							</li>
						</ul>
						<br />
						<br />

						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane active" id="home" role="tabpanel">
								<p><strong>{{$project[0]->blurb}}</strong></p>


								@foreach($story as $stor)
								<img src="{{$stor->image}}" style="max-height: 100%; max-width: 100%;">
								
								<p><h6>{{$stor->description}}</h6></p>
								@endforeach


							</div>




							<div class="tab-pane" id="updates" role="tabpanel">
								@foreach($update as $up)
								<div class="card mb-4" id="updates2">
									<div class="card-block">
										<h5 class="card-title">{{$up->title}}</h5>
										<h6 class="card-subtitle mb-2 text-muted">March 16</h6>
										<p class="card-text">{{$up->update}}</p>
										
									</div>
								</div>

			
<br/>
<br/>
     @endforeach
	@if(Auth::check())							
    @if(Auth::user()->id==$user[0]->id)
      <form id="ContactForm2" onsubmit="return submitForm2();">


        <div class="form-group">

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Update title :</label>
            <div class="col-9">
            	<input type="hidden" name="project_id" value="{{$project[0]->id}}">
                                <input class="form-control"  placeholder="New Update" id="updateTitle" name="updateTitle" maxlength="100" required>
            </div>
          </div>
        </div>

        <div class="form-group">

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Detail description :</label>
            <div class="col-9">
                                <textarea id="updateDesc" name="updateDesc" class="form-control form-control-lg" rows="3" maxlength="2000" ></textarea required>
                               
            </div>
          </div>
        </div>

        <div class="form-group row">
                                <div class="col-9 col-md-10">
                                        <input type="submit" class="btn btn-primary" style="float: right;" value="Add update">
                                </div>
                            </div>

        

         </form> 

         @endif
         @endif
		</div>








							<div class="tab-pane" id="comments" role="tabpanel">
								<ul id="comment_list" class="comment-section mt-0">

@foreach($comment as $comm)

@if(Auth::check()&&Auth::user()->id==$comm->user_id)

									<li id="normal_user_comment" class="comment user-comment">

										<div class="info">
											<a href="#">{{DB::table('users')->select('first_name')->where(['id'=>$comm->user_id])->pluck('first_name')[0]}}</a>
											<span>4 hours ago</span>
										</div>

										<a class="avatar" href="#">
											<img src="{{DB::table('users')->select('picture')->where(['id'=>$comm->user_id])->pluck('picture')[0]}}" width="35" alt="Profile Avatar" title="Anie Silverston" />
										</a>

										<p>{{$comm->comment}}</p>

									</li>
@else
									<li id="admin_comment" class="comment author-comment">

										<div class="info">
											<a href="#">{{DB::table('users')->select('first_name')->where(['id'=>$comm->user_id])->pluck('first_name')[0]}}</a>
											<span>3 hours ago</span>
										</div>

										<a class="avatar" href="#">
											<img src="{{DB::table('users')->select('picture')->where(['id'=>$comm->user_id])->pluck('picture')[0]}}" width="35" alt="Profile Avatar" title="Jack Smith" />
										</a>

										<p>{{$comm->comment}}</p>

									</li>
@endif
@endforeach
@if(Auth::check())
									<li class="write-new">
										
										<form id="ContactForm" onsubmit="return submitForm({{Auth::user()->id}});">
											
                                            <input type="hidden" name="project_id" value="{{$project[0]->id}}">
                                            
											<textarea id="addComment" name="addComment" placeholder="Write your comment here" name="comment" maxlength="1000" required></textarea>

											<div>
												<img src="{{Auth::user()->picture}}" width="35" alt="Profile of Bradley Jones" title="Bradley Jones" />
												<button type="submit" id="commentsubmit" class="btn btn-primary">Submit</button>
											</div>

										</form>

									</li>
@endif
								</ul>
							</div>



							<script >
								$.ajaxSetup({
							        headers: {
							            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							        }
							    });


								var url = "{{ url('/') }}";

								function submitForm(uid) { 
    $.ajax({type:'POST', url: '/addComments', data:$('#ContactForm').serialize(), success: function(data) {
       var mainDiv = document.getElementById("comment_list");
           mainDiv.innerHTML="";

    
var i;
          for(i=0;i<data['comment'].length;i++){

          	var user_id=data['comment'][i].user_id;
          	var comment=data['comment'][i].comment;
          	var name=data['pro'][i].name;
          	var img=data['pro'][i].img;
            

       if(uid==user_id)
       {
      	var use='<li id="normal_user_comment" class="comment user-comment"><div class="info"><a href="#">'+name+'</a><span>4 hours ago</span></div><a class="avatar" href="#"><img src="'+img+'" width="35" alt="Profile Avatar" title="Anie Silverston" /></a><p>'+comment+'</p></li>';
      var newDiv = document.createElement("li");
          newDiv.innerHTML = use;
      mainDiv.appendChild(newDiv);}
       
      else
      {
       var use2='<li id="admin_comment" class="comment author-comment"><div class="info"><a href="#">'+name+'</a><span>3 hours ago</span></div><a class="avatar" href="#"><img src="'+img+'" width="35" alt="Profile Avatar" title="Jack Smith" /></a><p>'+comment+'</p></li>';
     var newDiv = document.createElement("li");
          newDiv.innerHTML = use2;
      mainDiv.appendChild(newDiv); }


   }

       var use3='<li class="write-new"><form id="ContactForm" onsubmit="return submitForm();"><input type="hidden" name="project_id" value="{{$project[0]->id}}"><textarea id="addComment" name="addComment" placeholder="Write your comment here" name="comment" required></textarea><div><button type="submit" id="commentsubmit" class="btn btn-primary">Submit</button></div></form></li>';
       var newDiv = document.createElement("li");
          newDiv.innerHTML = use3;
      mainDiv.appendChild(newDiv);

    }});

    return false;
}



								function submitForm2() { 
    $.ajax({type:'POST', url: '/addupdates', data:$('#ContactForm2').serialize(), success: function(data) {
       var mainDiv = document.getElementById("updates");
           mainDiv.innerHTML="";

    
var i;
          for(i=0;i<data['update'].length;i++){

          	var title=data['update'][i].title;
          	var update=data['update'][i].update;

 var use='<div class="card mb-4" id="updates2"><div class="card-block"><h5 class="card-title">'+title+'</h5><h6 class="card-subtitle mb-2 text-muted">March 16</h6><p class="card-text">'+update+'</p><a href="#" class="card-link">Read more</a></div></div><br/><br/>';
      var newDiv = document.createElement("div");
          newDiv.innerHTML = use;
      mainDiv.appendChild(newDiv); 
      

   }
       var use3='<form id="ContactForm2" onsubmit="return submitForm2();"><div class="form-group"><div class="form-group row"><label for="example-text-input" class="col-3 col-form-label">Update title :</label><div class="col-9"><input type="hidden" name="project_id" value="{{$project[0]->id}}"><input class="form-control"  placeholder="New Update" id="updateTitle" name="updateTitle" required></div></div></div><div class="form-group"><div class="form-group row"><label for="example-text-input" class="col-3 col-form-label">Detail description :</label><div class="col-9"><textarea id="updateDesc" name="updateDesc" class="form-control form-control-lg" rows="3" required></textarea></div></div></div><div class="form-group row"><div class="col-9 col-md-10"><input type="submit" class="btn btn-primary" style="float: right;" value="Add update"></div></div></form> ';
       var newDiv = document.createElement("div");
          newDiv.innerHTML = use3;
      mainDiv.appendChild(newDiv);

    }});

    return false;
}


								

							</script>



							<!--darpon start-->

							<div class="tab-pane" id="backers" role="tabpanel" >













								<div class="row" >

								@foreach($backer as $back)	
									<div class="col-sm-3"><div class="card" style="width:150px;">
										<img class="card-img-top" src="{{DB::table('users')->select('picture')->where(['id'=>$back->user_id])->pluck('picture')[0]}}" alt="Card image" style="width:100%">
										<div class="card-body" style="padding: 10px">
											<h5 class="card-title" style="text-align: center;">{{DB::table('users')->select('first_name')->where(['id'=>$back->user_id])->pluck('first_name')[0]}}</h5>
											<p class="card-text" style="text-align: center;"   >Backed 5 projects</p>
											
										</div>
									</div></div>
									
									@endforeach
								</div>

















<!--
<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
}
</style>    -->

<!--


</head>
<body>

<h2>Card</h2>

<div class="card" style="width: 100px;">
  <img src="https://scontent.fdac6-1.fna.fbcdn.net/v/t1.0-9/12540606_968536586528116_379126017994150594_n.jpg?_nc_cat=0&oh=3e5cc96e16a2615daf2bb31df47b67f7&oe=5B751973" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>John Doe</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>


<div class="card" style="width: 100px;">
  <img src="https://scontent.fdac6-1.fna.fbcdn.net/v/t1.0-9/12540606_968536586528116_379126017994150594_n.jpg?_nc_cat=0&oh=3e5cc96e16a2615daf2bb31df47b67f7&oe=5B751973" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>John Doe</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>

-->



</div>



<!--darpon ends-->






<div class="tab-pane" id="settings" role="tabpanel">...</div>
</div>




</div>
</div>
</div>
<div class="col-sm-4" style="position: fixed;right: 0;margin-right: 105px; width: 380px" >
	<div class="row" >
		<div class="col-sm-11 offset-sm-1"  >
			<div class="card "  >
				<div class="card-block" class="pb-1" >
					<div class="row " >
						<div class="col-sm-12" >

							<h4>Project by:</h4>

							<div class="row " >
								<div class="col-sm-5">
									<a onclick="event.preventDefault(); document.getElementById('id01').style.display='block';document.getElementById('id01').style.overflow='auto';showProfile({{$user[0]->id}});"  class="nav-link" href="">
										@if($user[0]->picture==null)
										<img src="{{url('/').'/default/profiledefault.png'}}" class="img-fluid rounded-circle" />
										@else
										<img src="{{$user[0]->picture}}" class="img-fluid rounded-circle" />
										@endif
									</a>
									
								</div>
								<div class="col-sm-7">
									<h3 class="mb-0" style="overflow:hidden;" ><strong >{{$user[0]->first_name}}</strong></h3>
									<p class="mt-0 mb-0" style="overflow:hidden;">{{$user[0]->location}}</p>
									<p class="mt-0 mb-0">{{$count = DB::table('projects')->select('id','user_id')->where(['user_id'=>$user[0]->id])->get()->count()}} Project</p>
									
								</div>


							</div>

							<!--collaborator-->

							<div class="row " ">
								@foreach($colaborator as $cola)
								<div class="col-sm-4">
									<a onclick="event.preventDefault(); document.getElementById('id01').style.display='block';document.getElementById('id01').style.overflow='auto';showProfile({{$cola->collab_id}});"  class="nav-link" href="">
										@if(DB::table('users')->select('id','first_name','location','picture')->where(['id'=>$cola->collab_id])->get()[0]==null)
										<img src="{{url('/').'/default/profiledefault.png'}}" class="img-fluid rounded-circle" />
										@else
										<img src="{{DB::table('users')->select('picture')->where(['id'=>$cola->collab_id])->pluck('picture')[0]}}" class="img-fluid rounded-circle" />
										@endif
									</a>
									
								</div>	
								@endforeach
							</div>
							<form action="https://secure.aamarpay.com/index.php" method="post" name="form1">
								{{ csrf_field() }}

                    <input type="hidden" name="store_id" value="boosterbd">
                    <input type="hidden" name="signature_key" value="ff56077f4742e9521e509dfe58eb51a7">
                   
                    <input type="hidden" name="tran_id" value="WEP-<?php echo "$cur_random_value"; ?>">
                    
                    <input type="hidden" name="currency" value="BDT">
                    
                    <input type="hidden" name="cus_name" value="{{Auth::user()->first_name}}">
                    <input type="hidden" name="cus_email" value="{{Auth::user()->email}}">
                    
                    <input type="hidden" name="cus_phone" value="010000000">
                      
                    
                    <input type="hidden" name="desc" value="{{$project[0]->id}}">
                    <input type="hidden" name="success_url" value="http://www.boosterbd.xyz">
                    <input type="hidden" name="fail_url" value = "https://www.google.com">
                    <input type="hidden" name="cancel_url" value = "http://www.boosterbd.xyz">


								<div>
								<input type="number" name="amount" class="form-control form-control-lg" required>
							</div>
							<div>
								<input type="submit"  class="btn btn-lg btn-primary btn-block" value="Back this project"></div>
							<!-- <a href="/pay" class="btn btn-lg btn-primary btn-block">Back this project</a><br /> -->
						</form>
						</div>

					</div>
				</div>
			</div>

			<br />
			<br />
			



		</div>
	</div>
</div>
</div>
</div>

<script>
	$('.nav-tabs a').click(function (e) {
		e.preventDefault()
		$(this).tab('show')
	})
</script>


<footer class="footer text-white mt-5" style=" bottom: 0; left: 0; bottom: 0;">
  <div class="container" >
   <div class="row mt-5">

    <div class="col-12">
      <div class="row">

        <div class="col-4 col-md-3">
         <h5 class="mt-4 mb-4">About </h5>
         <ul class="list-unstyled">


          <li><a href="about.html">About Us</a></li>
          <li><a href="account-payment.html">Payment Method</a></li>



        </ul>
      </div>

      <div class="col-4 col-md-3">
       <h5 class="mt-4 mb-4">Help</h5>
       <ul class="list-unstyled">
         <li><a class="transition-all navy-400 hover-navy-500" href="typography.html">FAQ</a></li>
         <li><a class="transition-all navy-400 hover-navy-500" href="typography.html">Our Rules</a></li>
         <li><a class="transition-all navy-400 hover-navy-500" href="contact.html">Contact Us</a></li>

       </ul>
     </div>

     <div class="col-4 col-md-3">
       <h5 class="mt-4 mb-4">Contact</h5>
       <p>
        BOOSTER by SUST_Wanderer<br />
        Department of CSE<br />
        IICT Building, SUST, Sylhet-3114
      </p>
    </div>

    <div class="col-12 col-md-3">
     <h5 class="mt-4 mb-4">Join us</h5>
     <ul class="social-network social-circle">
      <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook fa-fw"></i></a></li>
      <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter fa-fw"></i></a></li>
      <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin fa-fw"></i></a></li>
    </ul>		
  </div>


</div>
</div>


</div>
<br />			
<br />			

</div>
</footer>
    <!-- Bootstrap core JavaScript
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
    	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->


    	<script>
		var eventTime = moment().add(8, 'hours'); // Timestamp - Sun, 21 Apr 2013 13:00:00 GMT
		var currentTime = 1366547400; // Timestamp - Sun, 21 Apr 2013 12:30:00 GMT
		var diffTime = eventTime - currentTime;
		var duration = moment.duration(diffTime*1000, 'milliseconds');
		var interval = 1000;

		setInterval(function(){
			duration = moment.duration(duration - interval, 'milliseconds');
			$('#current_time').text(moment().format('MMMM Do YYYY, h:mma'));
		}, interval);
	</script>
</body>
</html>

<!--
<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <span class="text-muted">&copy; CrowdFundr - by ExpressPixel</span>
      </div>
      
      <div class="col-md-4">
        <ul class="social-media-list">
          
          <li>
            <a href="https://github.com/jekyll"><span class="icon icon--github"><svg viewBox="0 0 16 16" width="16px" height="16px"><path fill="#828282" d="M7.999,0.431c-4.285,0-7.76,3.474-7.76,7.761 c0,3.428,2.223,6.337,5.307,7.363c0.388,0.071,0.53-0.168,0.53-0.374c0-0.184-0.007-0.672-0.01-1.32 c-2.159,0.469-2.614-1.04-2.614-1.04c-0.353-0.896-0.862-1.135-0.862-1.135c-0.705-0.481,0.053-0.472,0.053-0.472 c0.779,0.055,1.189,0.8,1.189,0.8c0.692,1.186,1.816,0.843,2.258,0.645c0.071-0.502,0.271-0.843,0.493-1.037 C4.86,11.425,3.049,10.76,3.049,7.786c0-0.847,0.302-1.54,0.799-2.082C3.768,5.507,3.501,4.718,3.924,3.65 c0,0,0.652-0.209,2.134,0.796C6.677,4.273,7.34,4.187,8,4.184c0.659,0.003,1.323,0.089,1.943,0.261 c1.482-1.004,2.132-0.796,2.132-0.796c0.423,1.068,0.157,1.857,0.077,2.054c0.497,0.542,0.798,1.235,0.798,2.082 c0,2.981-1.814,3.637-3.543,3.829c0.279,0.24,0.527,0.713,0.527,1.437c0,1.037-0.01,1.874-0.01,2.129 c0,0.208,0.14,0.449,0.534,0.373c3.081-1.028,5.302-3.935,5.302-7.362C15.76,3.906,12.285,0.431,7.999,0.431z"/></svg>
</span><span class="username">jekyll</span></a>

          </li>
          

          
          <li>
            <a href="https://twitter.com/jekyllrb"><span class="icon icon--twitter"><svg viewBox="0 0 16 16" width="16px" height="16px"><path fill="#828282" d="M15.969,3.058c-0.586,0.26-1.217,0.436-1.878,0.515c0.675-0.405,1.194-1.045,1.438-1.809c-0.632,0.375-1.332,0.647-2.076,0.793c-0.596-0.636-1.446-1.033-2.387-1.033c-1.806,0-3.27,1.464-3.27,3.27 c0,0.256,0.029,0.506,0.085,0.745C5.163,5.404,2.753,4.102,1.14,2.124C0.859,2.607,0.698,3.168,0.698,3.767 c0,1.134,0.577,2.135,1.455,2.722C1.616,6.472,1.112,6.325,0.671,6.08c0,0.014,0,0.027,0,0.041c0,1.584,1.127,2.906,2.623,3.206 C3.02,9.402,2.731,9.442,2.433,9.442c-0.211,0-0.416-0.021-0.615-0.059c0.416,1.299,1.624,2.245,3.055,2.271 c-1.119,0.877-2.529,1.4-4.061,1.4c-0.264,0-0.524-0.015-0.78-0.046c1.447,0.928,3.166,1.469,5.013,1.469 c6.015,0,9.304-4.983,9.304-9.304c0-0.142-0.003-0.283-0.009-0.423C14.976,4.29,15.531,3.714,15.969,3.058z"/></svg>
</span><span class="username">jekyllrb</span></a>

          </li>
          
        </ul>
      </div>
    </div>
  </div>
</footer>-->


<div class="modal fade login-modal-lg" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content" style="background: transparent; border: none;">

            <div class="modal-body">

            <div class="row">

                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12  pull-right">
                            <h4  style="color: #fff; font-weight: 100;">Login</h4>
                            <a href="#" data-dismiss="modal" style="position: absolute; top: 0; right: 0;"><i class="icon-close icons" aria-hidden="true" style="color: #fff; font-size: 26px"></i></a>
                            <div class="card mt-3" style="background: #fff; padding: 10px">
                              <h6 style="color: #000;font-weight: 100;">Already have an account</h6>
                                <p>Please login to continue.</p><br />
                                <form method="POST" action="{{ route('login') }}">
                                	{{ csrf_field() }}
                                    <div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                      <div class="col-sm-12">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                <!-- @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif -->
                                      </div>
                                    </div>
                                    <div class="row form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                      <div class="col-sm-12">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                <!-- @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif -->
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2s"></label>
                                      <div class="col-sm-10">
                                        <div class="form-check">
                                          <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" {{ old('remember') ? 'checked' : '' }}> Remember me
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    <br /><br />
                                    <div class="form-group row">
                                      <div class="offset-sm-3 col-sm-6 text-center">
                                      	
                                        <button type="submit" class="btn btn-primary btn-block">Sign in
                                        </button>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <div class="offset-sm-2 col-sm-8 text-center">
                                        <a href="{{ route('password.request') }}" class="mt-2">Forgotten your password</a>
                                      </div>
                                    </div>
                                  </form> 
                              </div>	 		
                        </div>	 		
                    </div>	 		
                </div>	 		

            </div>
            </div>
    </div>
  </div>
</div>




<div class="modal fade signup-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content" style="background: transparent; border: none;">

			<div class="modal-body">

				<div class="row">

					<div class="col-sm-12">
						<div class="row">
							<div class="col-md-11 col-sm-12">
								<h4  style="color: #fff; font-weight: 100;">Register</h4>
								<a href="#" data-dismiss="modal" style="position: absolute; top: 0; right: 0;"><i class="icon-close icons" aria-hidden="true" style="color: #fff; font-size: 26px"></i></a>

								<div class="card  mt-3" style="background: #fff; padding: 10px">
									<h6 style="color: #000">New to CrowdFunding?</h6>
									<p>A crowdfunding account is required to continue.</p>

									<form role="form">
										<div class="form-group">
											<input type="email" class="form-control " placeholder="Enter email">
										</div>
										<div class="row">
											<div class="col-6">
												<div class="form-group">
													<input type="text" class="form-control"placeholder="First name">
												</div>
											</div>

											<div class="col-6">
												<div class="form-group">
													<input type="text" class="form-control"placeholder="Last name">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6">
												<div class="form-group">
													<input type="password" class="form-control"placeholder="Password">
												</div>
											</div>

											<div class="col-6">
												<div class="form-group">
													<input type="password" class="form-control"placeholder="Confirm password">
												</div>
											</div>
										</div>

										<div class="text-center">
											<br /><br />
											<p>By signing up you agree to our terms and conditions and privacy policy</p>                          
											<a href="account-dashboard.html" class="btn btn-primary">Create account</a><br /><br />
										</div>
									</form>

								</div>
							</div>
						</div>
					</div>



				</div>
			</div>
		</div>
	</div>
</div>
<script>


	var app = new Vue({
		el: '#navbar',
		data: {
			search: false
		},
		methods: {
			showSearchBar: function () {
				this.search = true;
			},
			hideSearchBar: function () {
				this.search = false;
			}
		}
	})

</script>
</body>
</html>