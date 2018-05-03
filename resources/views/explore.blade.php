<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title> Booster</title>
  <meta name="description" content="Write an awesome description for your new site here. You can edit this line in _config.yml. It will appear in your document head meta (for Google search resu...">


<!-- favicon -->
@include('Format.css_js_file')
  
  



</head>
  <body>
@include('Format.header')

    <div class="mt-5">
	<div class="container inner">

<br />
		<br />
		<div class="row">
			<div class="col-sm-12 text-center">
				<h3>Fund campaigns you love.</h3>
			</div>
		</div>
		<br />
				<div class="row">
			<div class="col-md-10 offset-md-1 text-center">
		<div class="row">
			<div class="col-sm-4">
				<!-- Large button groups (default and split) -->
				<div class="btn-group  btn-block">
				<button class="btn btn-secondary btn-lg  btn-block dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					All categories
				</button>
				<div class="dropdown-menu" style="width: 100%">
				
					<a class="dropdown-item"   href="{{url('/explore/All Category')}}">All Category</a>
					
					<a class="dropdown-item"   href="{{url('/explore/Android Apps')}}">Android Apps</a>
          
		            <a class="dropdown-item"   href="{{url('/explore/Website')}}">Website</a>
		          
		            <a class="dropdown-item"    href="{{url('/explore/Research')}}">Research</a>
		          
		            <a class="dropdown-item"   href="{{url('/explore/Robotics')}}">Robotics</a>
		          
		            <a class="dropdown-item"   href="{{url('/explore/Web_Apps')}}">Web Apps</a>
		          
		            <a class="dropdown-item"   href="{{url('/explore/Games')}}">Games</a>
		          
		            <a class="dropdown-item"   href="{{url('/explore/Design_Tech')}}">Design & Tech</a>
		          
		            <a class="dropdown-item"   href="{{url('/explore/Services')}}">Services</a>
		          
		            <a class="dropdown-item"   href="{{url('/explore/Business')}}">Business Idea</a>
		          
		            <a class="dropdown-item"   href="{{url('/explore/Electorics')}}">Electorics</a>
		          
		            <a class="dropdown-item"   href="{{url('/explore/Networking')}}">Networking</a>
		          
		            <a class="dropdown-item"   href="{{url('/explore/Desktop_Softwares')}}">Desktop Softwares</a>
					
						
					
				</div>
				</div>
			</div>
			<div class="col-sm-4">
<!-- Large button groups (default and split) -->
				<div class="btn-group  btn-block">
				<button class="btn btn-secondary btn-lg  btn-block dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					All project types
				</button>
				<div class="dropdown-menu" style="width: 100%">
					<a class="dropdown-item" href="#">Almost ending</a>
					<a class="dropdown-item" href="#">Finished</a>
					<a class="dropdown-item" href="#">Low funding</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
				</div>
			</div>
			<div class="col-sm-4">
<!-- Large button groups (default and split) -->
				<div class="btn-group  btn-block">
				<button class="btn btn-secondary btn-lg  btn-block dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Trending
				</button>
				<div class="dropdown-menu" style="width: 100%">
				<a class="dropdown-item" href="#">Most popular</a>
					<a class="dropdown-item" href="#">Recently updated</a>
					<a class="dropdown-item" href="#">Featured</a>
				</div>
				</div>
			</div>
		</div>
		</div>
		</div>
		<br />
		<br />
		<a href="" class="float-right"  data-toggle="collapse" data-target="#filters">Toggle filters</a>
				<br />
<hr />
		<div id="filters" class="collapse in">

		<div class="row">
			<div class="col-sm-3">
				<h6>Percent funded</h6>
				<label class="custom-control custom-radio">
  					<input id="radio1" name="radio" type="radio" class="custom-control-input" checked>
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">All</span>
				</label><br />
				<label class="custom-control custom-radio">
  					<input id="radio1" name="radio" type="radio" class="custom-control-input">
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">0 - 25%</span>
				</label><br />
				<label class="custom-control custom-radio">
  					<input id="radio1" name="radio" type="radio" class="custom-control-input">
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">25 - 75%</span>
				</label><br />
				<label class="custom-control custom-radio">
  					<input id="radio1" name="radio" type="radio" class="custom-control-input">
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">75 - 100+%</span>
				</label>

			</div>
			<div class="col-sm-3">
				<h6>Goal type</h6>
				<label class="custom-control custom-radio">
  					<input id="radio1" name="radio_goal" type="radio" class="custom-control-input" checked>
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">All</span>
				</label><br />
								<label class="custom-control custom-radio">
  					<input id="radio1" name="radio_goal" type="radio" class="custom-control-input">
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">Fixed</span>
				</label><br />
								<label class="custom-control custom-radio">
  					<input id="radio1" name="radio_goal" type="radio" class="custom-control-input">
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">Flexible</span>
				</label><br />
			</div>
			<div class="col-sm-3">
				<h6>Location</h6>
								<label class="custom-control custom-radio">
  					<input id="radio1" name="radio_location" type="radio" class="custom-control-input" checked>
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">Everywhere</span>
				</label><br />
								<label class="custom-control custom-radio">
  					<input id="radio1" name="radio_location" type="radio" class="custom-control-input">
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">Near me</span>
				</label><br />
								<label class="custom-control custom-radio">
  					<input id="radio1" name="radio_location" type="radio" class="custom-control-input">
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">Flexible</span>
				</label><br />
			</div>
			<div class="col-sm-3">
				<h6>Project status</h6>
								<label class="custom-control custom-radio">
  					<input id="radio1" name="radio_project" type="radio" class="custom-control-input" checked>
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">All</span>
				</label><br />
								<label class="custom-control custom-radio">
  					<input id="radio1" name="radio_project" type="radio" class="custom-control-input">
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">Open</span>
				</label><br />
								<label class="custom-control custom-radio">
  					<input id="radio1" name="radio_project" type="radio" class="custom-control-input">
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">Ended</span>
				</label><br />

			</div>
		</div>
		</div>
<br />
<br />
				<div class="row">
			<div class="col-sm-12">
		<div class="row mt-2">
			
				
				
@foreach($data as $value)
				
				<div class="col-sm-3 mb-4">
					<div class="card box">
	<a href="project/{{$value->id}}" >


		<img src= "{{url('/').'/'.$value->image}}" class="img-fluid hidden-xs-down "  style="height: 150px; width: 100%;"/>
		<img src="{{url('/').'/'.$value->image}}" class="img-fluid hidden-sm-up" style="height: 150px; width: 100%;" />
	</a>
	<div class="card-block" class="pb-1" style="position: relative; padding-bottom: 60px; min-height: 250px;">

				<h6><a href="project">{{$value->title}}</a></h6>
				<p class="text-muted">By <strong><a href="project" class="text-muted">{{DB::table('users')->select('first_name')->where([['id',$value->user_id]])->pluck('first_name')[0]}}</a></strong></p>
				<p class="desc">{{$value->blurb}}</p>

				<div style="position: absolute; bottom: 10px; width: 86%; ">
				<div class="progress">
  					<div class="progress-bar" role="progressbar" style="width: {{$sum =(DB::table('backers')->select('money')->where(['project_id'=>$value->id])->get()->sum('money'))/$value->goal*100}}%" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<p class="mb-1">{{$sum =(DB::table('backers')->select('money')->where(['project_id'=>$value->id])->get()->sum('money'))/$value->goal*100}}% funded</p>
				</div>


</div>
<div class="card-footer text-muted">
	<div class="row ">
			<div class="col-12">
			</div>
			<div class="col-12">
				<div class="row">
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Backers</p>
						<h6 class="mt-0 mb-0"><strong>{{$count = DB::table('backers')->select('id')->where(['project_id'=>$value->id])->get()->count()}}</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Pledged</p>
						<h6 class="mt-0 mb-0"><strong>৳{{$value->goal}}</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Days&nbsp;Left</p>
						<h6 class="mt-0 mb-0"><strong>{{$value->duration}}</strong></h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
				</div>




				@endforeach
				

				


				 
		</div>
	</div>
	</div>

		
				<div class="mt-5 pt-2 pb-2">

	<div class="container">

		<div class="row">

		

			<div class="col-md-10 offset-md-1  col--sm-12">
<div class="card ">
  <div class="card-block">
      <div class="row">
      <div class="col-md-8">
        <h4 class="card-title">We crowdfund amazing inventions</h4>
        <p class="card-text">Build your own crowdfunding or fundraising website. Raise money online or through your Facebook profile. Get started today.</p>
      </div>
        <div class="col-md-4 text-center">
            <br />
            <a href="start-project" class="btn btn-primary btn-lg">Start your project <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        </div>
        </div>
  </div>
</div>
			</div>
		</div>	
		</div>	
		</div>	
		</div>	
		</div>	


     
         @include('Format.footer')
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
                            	<div class="row">
                              <h6 style="color: #000;font-weight: 100; margin-left: 5%;">Do not have an account?</h6>
                              <div style="margin-left: 10%;"><a data-dismiss="modal"  style="text-align: top;" href="#" data-toggle="modal" data-target=".signup-modal-lg"><strong>Sign In</strong></a></div>
                              </div>
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

                                <form role="form" method="POST" action="{{ route('register') }}">
                                	{{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input id="email" type="email" class="form-control" name="email" placeholder="Email" required autofocus>

                                <!-- @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif -->
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                              <input id="first_name" type="text" class="form-control" name="first_name" placeholder="First Name" required>

                                <!-- @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif -->
                                          </div>
                                        </div>
                                        
                                        <div class="col-6">
                                          <div class="form-group">
                                              <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Last Name" required>

                               
                                          </div>
                                        </div>
                                      </div>
                                    <div class="row">
                                        <div class="col-6">
                                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                              <input id="password" type="password" class="form-control" placeholder="password" name="password" required>

                                <!-- @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif -->
                                          </div>
                                        </div>
                                        
                                        <div class="col-6">
                                          <div class="form-group">
                                              <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
                                          </div>
                                        </div>
                                      </div>
                                  
                                  <div class="text-center">
                                    <br /><br />
                                    <p>By signing up you agree to our terms and conditions and privacy policy</p>                          
                                    <button type="submit" class="btn btn-primary">Create account</button><br /><br />
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