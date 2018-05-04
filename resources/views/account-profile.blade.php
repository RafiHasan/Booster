<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Settings</title>
  <meta name="description" content="Write an awesome description for your new site here. You can edit this line in _config.yml. It will appear in your document head meta (for Google search resu...">


  <!-- favicon -->

  @include('Format.css_js_file')



</head>
  <body>

    @include('Format.header')

    <br />
<br />
<br />
<div class="container-fluid">
    <div class="row">

        <div class="col-sm-12">
<h1>Settings</h1><br /><br />
    <ul class="nav nav-tabs hidden-sm-down">

    
      
      
<li class="nav-item ">
        <a class="nav-link " href="{{url('/account-dashboard')}}">Account</a>
      </li>
    
      
      

      <li class="nav-item active">
        <a class="nav-link active" href="{{url('/account-profile')}}">My profile</a>
      </li>
    
    
      
      

      <li class="nav-item ">
        <a class="nav-link " href="{{url('/account-payment')}}">Payment methods</a>
      </li>
    
<!--
    <li class="nav-item">
        <a class="nav-link active" href="account-dashboard.html">Account</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="account-profile.html">My profile</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="account-notifications.html">My account</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="account-payment.html">Payment methods</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="account_ad_create.html">Create new ad</a>
    </li>-->
</ul>

<div class="btn-group  btn-block  btn-group-justified hidden-md-up" role="group" aria-label="Button group with nested dropdown">
  <div class="btn-group   btn-block" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        
        
        
        
        
        
        
        My profile
        
        
        
        
        
        
        
        
        
        
        
        
        
    </button>
    <div class="dropdown-menu"  style="width: 100%" aria-labelledby="btnGroupDrop1">
        
        
        

        <li class="nav-item ">
            <a class="nav-link " href="account-dashboard.html">Account</a>
        </li>
        
        
        

        <li class="nav-item active">
            <a class="nav-link active" href="account-profile.html">My profile</a>
        </li>
        
        
        

        <li class="nav-item ">
            <a class="nav-link " href="account-notifications.html">Notifications</a>
        </li>
        
        
        

        <li class="nav-item ">
            <a class="nav-link " href="account-payment.html">Payment methods</a>
        </li>
        
        
        

        <li class="nav-item ">
            <a class="nav-link " href="start.html">Create new ad</a>
        </li>
        
    </div>
  </div>
</div>

<br />
<br />
<br />

<form>
  <fieldset >

                    <div class="row">
                        <div class="col-sm-5 ">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-3 col-md-2 col-form-label">Name</label>
                                <div class="col-9 col-md-10">
                                    <input class="form-control" type="text" name="name" placeholder="{{Auth::user()->first_name.' '.Auth::user()->last_name}}" id="example-text-input">
                                    <p class="form-text text-muted">
                                        Your name is displayed on your profile.
                                    </p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-email-input" class="col-3 col-md-2 col-form-label">Picture</label>
                                <div class="col-9 col-md-10">
                                    <p class="form-control-static">
                                        <div style="border: 1px dashed #000; width: 100%; display: block; height: 100px; line-height: 100px" class="text-center">
                                            Choose an image from your computer    
                                        </div>
                                    </p>
                                    <p class="form-text text-muted">
                                        JPEG, PNG, GIF, or BMP • 50MB file limit
                                    </p>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="example-email-input" class="col-3 col-md-2 col-form-label">Biography</label>
                                <div class="col-9 col-md-10">
                                    <textarea class="form-control" id="exampleTextarea" name="biography" rows="3" placeholder="{{Auth::user()->biography}}"></textarea>
                                    <p class="form-text text-muted" >
                                        We suggest a short bio. If it's 300 characters or less it'll look great on your profile.
                                    </p>
                                </div>
                            </div>



                        </div>
                        
                        <div class="col-sm-5 offset-sm-1 float-md-right">
                            <div class="form-group row">
                                <label for="example-search-input" class="col-3 col-md-2 col-form-label">Location</label>
                                <div class="col-9 col-md-10">
                                    <input class="form-control" type="search" name="location" placeholder="{{Auth::user()->location}}" id="example-search-input">
                                    <p class="form-text text-muted">
                                        Please enter the city and country you live in only
                                    </p>
                                </div>
                            </div>
                            

                            

                            <div class="form-group row">
                                <label for="example-tel-input" class="col-3 col-md-2 col-form-label">Website</label>
                                <div class="col-9 col-md-10">
                                    <input class="form-control" type="text" placeholder="{{Auth::user()->website}}" placeholder="http://example.com">
                                </div>
                            </div>


<!--
                            <div class="col-6">
        <select class="form-control custom-select">
          <option value="1">Subcategory (optional)</option>
          
          <option value="1">Art</option>
          
          <option value="1">Comics</option>
          
          <option value="1">Crafts</option>
          
          <option value="1">Dance</option>
          
          <option value="1">Design</option>
          
          <option value="1">Fashion</option>
          
          <option value="1">Film & Video</option>
          
          <option value="1">Food</option>
          
          <option value="1">Games</option>
          
          <option value="1">Journalism</option>
          
          <option value="1">Music</option>
          
          <option value="1">Photography</option>
          
          <option value="1">Publishing</option>
          
          <option value="1">Technology</option>
          
          <option value="1">Theater</option>
          
        </select>
      </div> -->

                            <div class="form-group row">
                                <label for="example-tel-input" class="col-3 col-md-2 col-form-label">Session</label>
                                <div class="col-9 col-md-10">
                                    <div class="ksr-select ksr-select--wrappable js-ksr-select border-box full-width">
<div class="title"></div>
<select class="form-control custom-select" name="user[time_zone]" id="user_time_zone">
  <option value=""></option>
<option value="8">2008-2009</option>
<option value="9">2009-2010</option>
<option value="10">2010-2011</option>
<option value="11">2011-2012</option>
<option value="12">2012-2013</option>
<option value="13">2013-2014</option>
<option value="14">2014-2015</option>
<option value="15">2015-2016</option>
<option value="16">2016-2017</option>
<option value="17">2017-2018</option>
<option value="18">2018-2019</option>


</select>
<span class="ksr-icon__arrow-down" aria-hidden="true"></span>
</div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-tel-input" class="col-3 col-md-2 col-form-label">Department</label>
                                <div class="col-9 col-md-10">
                                    <div class="ksr-select ksr-select--wrappable js-ksr-select border-box full-width">
<div class="title"></div>
<select class="form-control custom-select" name="user[time_zone]" id="user_time_zone">
  <option value=""></option>
<option value="CSE">Computer Science & Engineering</option>
<option value="EEE">Electrical & Electronic Engineering</option>
<option value="ICT">Information & Communication Technology</option>
<option value="SWE">Software engineering</option>
<option value="IPE">Industrial & production engineering</option>
<option value="ME">Mechanical Engineering</option>



</select>
<span class="ksr-icon__arrow-down" aria-hidden="true"></span>
</div>
                                </div>
                            </div>



                        </div>
                    </div>
<hr />
    <button type="submit" class="btn btn-primary">Save settings</button>
    <button type="submit" class="btn btn-link">View profile</button>
  </fieldset>
</form>

                </div>



            </div>
            <br />
<br />
<br />
            </div>


     
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
                                <form>
                                    <div class="form-group row">
                                      <div class="col-sm-12">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <div class="col-sm-12">
                                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2s"></label>
                                      <div class="col-sm-10">
                                        <div class="form-check">
                                          <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox"> Remember me
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    <br /><br />
                                    <div class="form-group row">
                                      <div class="offset-sm-3 col-sm-6 text-center">
                                        <a href="account-dashboard.html" class="btn btn-primary btn-block">Sign in</a>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <div class="offset-sm-2 col-sm-8 text-center">
                                        <a href="" class="mt-2">Forgotten your password</a>
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