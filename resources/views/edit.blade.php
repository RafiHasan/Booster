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
          <li><a style="font-weight: bold " href={{url('/start-project')}}>Basics</a></li>
          <li><a href="" >Story</a></li>
          <!--  <li><a href="edit-perks">Perks</a></li> -->
          
          <li><a href="{{url('/edit-about')}}">About you</a></li>
          

        </ul>

      </div>


      <div class="col-sm-8">
        <h1>Let’s get started.</h1>
        <p>Make a great first impression with your project’s title and image, and set your funding goal, campaign duration, and project category.</p>

        <form role="form" method="POST" action="{{ route('edit') }}" enctype="multipart/form-data">
                                  {{ csrf_field() }}
          <div class="form-group light-blue" >
            <label for="exampleInputEmail1">Project image</label>
            <p class="form-text text-muted">
              This is the first thing that people will see when they come across your project. Choose an image that’s crisp and text-free. Here are some tips.
            </p>
            <p class="form-control-static">
              <div style="border: 1px dashed #000; background: #fff; width: 100%; display: block; padding: 10px;" class="text-center">

                <img id="blah" src="#" alt="your image" />
                <p id="dhur1" style="margin-top:  15px;">This is the main image associated with your project. Make it count!</p>    
                <p id="dhur2">At least <strong>1024x576 pixels</strong> • 16:9 aspect ratio</p>   
                
                  <input type="file" class="btn btn-primary" name="fileupload"  id="fileupload" style="color: #fff;" required>
                
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

            </p>
            <p class="form-text text-muted">
              JPEG, PNG, GIF, or BMP • 50MB file limit
            </p>

          </div>
          <div class="form-group light-blue">
            <label for="exampleInputEmail1">Project title</label>
            <input name="project_title" type="text" class="form-control form-control-lg" aria-describedby="emailHelp" placeholder="Title of the Project." maxlength="100" required >
            <p class="form-text text-muted">
              Our search looks through words from your project title and blurb, so make them clear and descriptive of what you’re making. Your profile name will be searchable, too.<br />

              These words will help people find your project, so choose them wisely! Your name will be searchable too.
            </p>  
          </div>
          <div class="form-group light-blue">
            <label for="exampleInputEmail1">Short blurb</label>
            <textarea name="project_blurb" class="form-control form-control-lg" rows="3" maxlength="500"></textarea>
            <p id="passwordHelpBlock" class="form-text text-muted">
              Give people a sense of what you’re doing. Skip “Help me” and focus on what you’re making.


            </p>  
          </div>
          <div class="form-group light-blue">
            <label for="exampleInputEmail1">Category</label>
            <div class="row">
              <div class="col-6">
                <select name="softtype" class="form-control custom-select">

                  <option value="1">Android Apps</option>

                  <option value="2">Website</option>

                  <option value="3">Research</option>

                  <option value="4">Robotics</option>

                  <option value="5">Web Apps</option>

                  <option value="6">Games</option>

                  <option value="7">Design & Tech</option>

                  <option value="8">Services</option>

                  <option value="9">Business Idea</option>

                  <option value="10">Electorics</option>

                  <option value="11">Networking</option>

                  <option value="12">Desktop Softwares</option>



                </select>
              </div>
              <div class="col-6">
                <input name="project_category" style="margin-bottom: 15px;" type="text" class="form-control form-control-lg"  aria-describedby="emailHelp" placeholder="Sub-category" maxlength="100" required>
              </div>
              <div class="col-6">
              </div>
            </div>
            <div class="form-group light-blue">
              <label for="exampleInputEmail1">Project location</label>
              <div class="input-group  input-group-lg">
                <span class="input-group-btn">

                </span>
                <input name="project_location" type="text" class="form-control" placeholder="Project location..." maxlength="100" required>
              </div>
            </div>
            <div class="form-group light-blue">
              <label for="exampleInputEmail1">Funding duration</label>
              <div class="input-group">
                <input name="funding_duration"  type="number" class="form-control form-control-lg" placeholder="" aria-describedby="basic-addon2" maxlength="100" required>
                <span class="input-group-addon" id="basic-addon2">number of days</span>
              </div>
              <p id="passwordHelpBlock" class="form-text text-muted">
                Up to 60 days, but we recommend 30 or fewer
              </p>  
            </div>
            <div class="form-group light-blue">
              <label for="exampleInputEmail1">Funding goal</label>
              <div class="input-group  col-4 pl-0">
                <input name="funding_goal" type="number" class="form-control form-control-lg" placeholder=""  aria-describedby="basic-addon2" maxlength="100" required>
                <span class="input-group-addon" id="basic-addon2" style="font-size: x-large"><strong>৳</strong></span>
              </div>
              <p id="passwordHelpBlock" class="form-text text-muted">
                If your project is successfully funded, the following fees will be collected from your funding total:  5% fee and payment processing fees (between 3% and 5%). Please note we do not withhold VAT. If funding isn’t successful, there are no fees.
              </p>  
            </div>
            <div id="collabDiv" class="form-group light-blue">
    <label for="exampleInputEmail1">Project collaborators</label>





    <div class="row mb-2">
      <div class="col-6">
        <input type="email" class="form-control form-control-lg" id="collabEmail" name="collabEmail[]" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div id="addCollabDiv1" class="col-6">
        <p  class="form-control-static pt-3"><a href="#" onclick="event.preventDefault(); addCollab()"><i class="fa fa-plus" aria-hidden="true"></i> Add collaborator</a></p>
      </div>
    </div>

    </div>

    <script>
      var count = 1;
      function addCollab(){

        var demo = document.getElementById('collabDiv');
        console.log(demo.innerHTML);
        document.getElementById('addCollabDiv'+count).innerHTML = "";

        count++;

        var addDiv = '<div id="addCollabDiv'+count+'" class="col-6"><p  class="form-control-static pt-3"><a href="#" onclick="event.preventDefault(); addCollab()"><i class="fa fa-plus" aria-hidden="true"></i> Add collaborator</a></p></div>';

        var collabEmail = '<div class="col-6"><input type="email" class="form-control form-control-lg"  id="collabEmail'+count+'" name="collabEmail[]'+count+'" aria-describedby="emailHelp" placeholder="Enter email"></div>';

        var newDiv = document.createElement('div');
        newDiv.className = 'row mb-2';
        newDiv.innerHTML = collabEmail + addDiv;
        console.log(newDiv);

        demo.appendChild(newDiv);
      }
    </script>

          </fieldset>
        
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
             <a href="project" >
              <img src="http://i.expresspixel.com/unsplash.it/310/210?image=11" class="img-fluid hidden-xs-down"/>
              <img src="http://i.expresspixel.com/unsplash.it/610/210?image=11" class="img-fluid hidden-sm-up"/>
            </a>
            <div class="card-block" class="pb-1" style="position: relative; padding-bottom: 60px; min-height: 250px;">

              <h6><a href="project">architect frictionless supply-chains</a></h6>
              <p class="text-muted">By <strong><a href="project" class="text-muted">Jonathan Howell</a></strong></p>
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
    <a href="edit" class="btn btn-link btn-lg float-right">Discard changes</a>

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
                        <a href="account-dashboard" class="btn btn-primary btn-block">Sign in</a>
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
                      <a href="account-dashboard" class="btn btn-primary">Create account</a><br /><br />
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