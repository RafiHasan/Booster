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

    <br />
<br />
<br />
<div class="container-fluid">
  <div class="row">


    <div class="col-sm-12">
      <ul class="breadcrumb">
  <li><a href={{url('/start-project')}}>Basics</a></li>
  <li><a href="{{url('/edit-story')}}">Story</a></li>
<!--  <li><a href="edit-perks.html">Perks</a></li> -->
  <li><a style="font-weight: bold" href="{{url('/edit-about')}}">About you</a></li>
          

      </ul>


    </div>


    <div class="col-sm-8">
      <h1>Tell us more about yourself</h1>
      <p>Add a bio and links to your website and social media profiles. Think of it as your creative resume.</p>

     <form role="form" method="POST" action="{{ route('edit-about') }}" enctype="multipart/form-data">
        {{ csrf_field() }}


        <div class="form-group light-blue">

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Profile photo</label>
            <div class="col-9">
<div style="border: 1px dashed #000; background: #fff; width: 100%; display: block; padding: 10px;" class="text-center">

                <img id="blah" src="#" alt="your image" />
                <p id="dhur1" style="margin-top:  15px;">This is the main image associated with your project. Make it count!</p>    
                <p id="dhur2">At least <strong>1024x576 pixels</strong> • 16:9 aspect ratio</p>   
                
                  <input type="file" class="btn btn-primary" name="fileupload2"  id="fileupload" style="color: #fff;" required>
                
              </div>

<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
            $('#blah').attr('style','width:100%; height:80%;');
            document.getElementById('dhur1').innerHTML = "";
            document.getElementById('dhur2').innerHTML = "";

        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#fileupload").change(function(){
    readURL(this);
});
</script>
              <br />
              <p>Have fun – add a video! Projects with a video have a much higher chance of success. For a dose of inspiration,
                check out the Creator Handbook. Need some help? Visit our Creator FAQ.</p>
            </div>
          </div>
        </div>





        <div class="form-group light-blue">

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Facebook Connect</label>
            <div class="col-9">
              <p class="mt-1">Build trust with potential backers by showing there's a real person behind the project. Your name and number of friends will be displayed.</p>
              <a href="" class="btn btn-success">Login with facebook</a><br />
            </div>
          </div>
        </div>

        <div class="form-group light-blue">

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Biography</label>
            <div class="col-9">
                  <textarea class="form-control" name="biography" rows="6" type="text" value="" id="example-email-input"></textarea>

              <p class="mt-4">Build trust with potential backers by showing there's a real person behind the project. Your name and number of friends will be displayed.</p>
              
            </div>
          </div>
        </div>

        <div class="form-group light-blue">

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Your location</label>
            <div class="col-9">
              <div class="input-group  input-group-lg">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button"><i class="fa fa-location-arrow" aria-hidden="true"></i></button>
                </span>
                <input type="text" name="location" class="form-control" placeholder="Search for...">
              </div>              
            </div>
          </div>
        </div>

        <div class="form-group light-blue">

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Websites</label>
            <div class="col-9">
                <input class="form-control" name="websites" type="url" value="" id="example-tel-input" />
                <p>Some suggestions: Link to your blog, portfolio, Twitter, Instagram, etc.</p>              
            </div>
          </div>
        </div>
<!--
        <div class="form-group light-blue">

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Google Analytics</label>
            <div class="col-9">
                <input class="form-control" placeholder="UA-XXXXXXXX-X" type="text" class="text">    
                <p>Enter your tracking ID to enable Google Analytics for your project.</p>             
         
            </div>
          </div>
        </div>        -->

        <div class="form-group light-blue">

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Contact details</label>
            <div class="col-9">
                                <input class="form-control" name="contact" type="email" value="test@example.com" id="example-search-input">
            </div>
          </div>
        </div>


        <div class="form-group light-blue">

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Payment Source<br /></label>
            <div class="col-9">
                                        

      <div class="row">
      <div class="col-sm-4">
        <!-- Large button groups (default and split) -->
        <div  class="btn-group  btn-block">
        <button  class="btn btn-secondary btn-lg  btn-block dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span id="selected" name="accountname" class="caret">Account Type</span></button>
        <div class="dropdown-menu"  style="width: 100%">
        
          
            <a class="dropdown-item" onclick="event.preventDefault()" href="{{url('/explore/Android')}}">Android Apps</a>
          
            <a class="dropdown-item" onclick="event.preventDefault()" href="{{url('/explore/Website')}}">Website</a>
          
            <a class="dropdown-item" onclick="event.preventDefault()" href="{{url('/explore/Research')}}">Research</a>
          
            
          
        </div>
        </div>
      </div>
      <div class="col-sm-8">
    
      <input class="form-control" type="text" placeholder="Account number" type="email" value="" name="accountnumber" id="account">
    
  </div>
</div>

            </div>
          </div>
        </div>

        <script>
           $('.dropdown-menu a').click(function(){
            $('#selected').text($(this).text());
          });
        </script>



        
<br />
<br />
<br />

    </div>

    


  <div class="col-sm-4">
    <div class="row">
      <div class="col-sm-10 offset-sm-2">


        
        <strong>Preview</strong>
        <hr />
        
        				        
					          <div class="card box">
	<a href="project.html" >
		<img src="http://i.expresspixel.com/unsplash.it/310/210?image=11" class="img-fluid hidden-xs-down"/>
		<img src="http://i.expresspixel.com/unsplash.it/610/210?image=11" class="img-fluid hidden-sm-up"/>
	</a>
	<div class="card-block" class="pb-1" style="position: relative; padding-bottom: 60px; min-height: 250px;">

				<h6><a href="project.html">architect frictionless supply-chains</a></h6>
				<p class="text-muted">By <strong><a href="project.html" class="text-muted">Jonathan Howell</a></strong></p>
				<p class="desc">MTS ASL Curriculum Workbook is a reproducible study book to build Early Literacy and Academic skills for primary school age children.</p>

				<div style="position: absolute; bottom: 10px; width: 86%; ">
				<div class="progress">
  					<div class="progress-bar" role="progressbar" style="width: 76%" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<p class="mb-1">76% funded</p>
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
						<h6 class="mt-0 mb-0"><strong>117</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Pledged</p>
						<h6 class="mt-0 mb-0"><strong>&dollar;50,000</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Days&nbsp;Left</p>
						<h6 class="mt-0 mb-0"><strong>14</strong></h6>
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
<br />
<br />
<br />
</div>

<nav class="navbar fixed-bottom navbar-light bg-faded" style="background: #fff; border-top: 1px solid #eee">
  <div class="container">

    <input type="submit"  class="btn btn-primary btn-lg float-right" value="Save">
    <a href="edit.html" class="btn btn-link btn-lg float-right">Discard changes</a>

  </div>
</nav>

</form>
    




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