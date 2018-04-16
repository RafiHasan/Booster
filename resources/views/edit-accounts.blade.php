<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Pricing</title>
  <meta name="description" content="Write an awesome description for your new site here. You can edit this line in _config.yml. It will appear in your document head meta (for Google search resu...">

  <!-- favicon -->

  <link rel="icon" 
      type="image/png" 
      href="https://scontent.fdac6-1.fna.fbcdn.net/v/t35.0-12/23698614_1340578692737598_1074966544_o.png?_nc_cat=0&oh=aeba2a938682be4c93c51c2189d7506f&oe=5ACC7135" />
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="canonical" href="/edit-accounts.html">
  <link rel="alternate" type="application/rss+xml" title="CrowdFundr - by ExpressPixel" href="/feed.xml">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
  <script src="javascripts/scrollPosStyler.js"></script>
  <!-- JavaScript -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.1/vue.min.js" ></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.4/vue.min.js"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">

  <link rel="stylesheet" href="css/main.css">



</head>
  <body>

    <nav class="navbar navbar-toggleable-sm navbar-light bg-primary fixed-top"  id="navbar" v-cloak >
  <div class="container top-nav" v-if="!search">

  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
  <a class="navbar-brand" href="index.html">BOOSTER</a>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="explore.html">Explore</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="edit.html">Start a project</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About us</a>
      </li>
    </ul>
    <ul class="navbar-nav" >
      <li class="nav-item hidden-sm-down">
        <a class="nav-link" href="#" v-on:click.prevent="showSearchBar"><i class="fa fa-search" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item hidden-sm-up">
        <a class="nav-link" href="#" v-on:click.prevent="showSearchBar">Search</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target=".login-modal-lg">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"href="#" data-toggle="modal" data-target=".signup-modal-lg">Sign up</a>
      </li>
    </ul>
    <form class="form-inline" style="display: none">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
    </div>

    <div class="container" v-else>
  <div class="input-group search-bar">
  <span class="input-group-addon"><i class="icon-magnifier icons"></i></span>
  <input type="text" class="form-control form-control-lg" placeholder="Search">
  <span class="input-group-addon" ><a href="" class="text-muted" v-on:click.prevent="hideSearchBar"><i class="icon-close icons"></i></a></span>
</div>
    </div>

</nav>

    <br />
<br />
<br />
<div class="container-fluid">
  <div class="row">


    <div class="col-sm-12">
      <ul class="breadcrumb">
        <li><a href="edit.html">Basics</a></li>
        <li><a href="edit-story.html">Story</a></li>
        <!--  <li><a href="edit-perks.html">Perks</a></li> -->

        <li><a  href="edit-about.html">About you</a></li>
        <li><a style="font-weight: bold " href="edit-accounts.html">Account</a></li>
        <li><a  href="edit-updates.html">Updates</a></li>

      </ul>

    </div>


    <div class="col-sm-8">
      <h1>Tell us more about yourself</h1>
      <p>Add a bio and links to your website and social media profiles. Think of it as your creative resume.</p>

      <form>


        <div class="form-group light-blue">

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Contact details</label>
            <div class="col-9">
                                <input class="form-control" type="email" value="test@example.com" id="example-search-input">
            </div>
          </div>
        </div>

        <div class="form-group light-blue">

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Funds recipient</label>
            <div class="col-9">
              <p class="mt-1">Enter the account you’d like to use to receive funds if your project is successfully funded. The account should belong to the person or legal entity running this project. Once you launch, this information cannot be changed.</p>


              <div class="row">
                <div class="col-12">
                  <div class="input-group">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Your name</button>
                    </span>
                    <input type="text" class="form-control" placeholder="First name">
                    <input type="text" class="form-control" placeholder="Last name">
                  </div>
                </div>
              </div>

              <div class="row mt-3">
                <div class="col-12">
                  <div class="input-group">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Birthday</button>
                    </span>
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Day
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Month
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Year
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                                        <div class="input-group-btn">
                    </div>
                  </div>
                </div>
                </div>

              <div class="row mt-3">
                <div class="col-12">
      <div class="card">
  <div class="card-block p-3">
<div class="row">
                <div class="col-4">
        <p>Home address</p>

                </div>
                <div class="col-8">
      <input type="text" class="form-control" placeholder="House Number and street name">
            <input type="text" class="form-control" placeholder="Town">
      <input type="text" class="form-control" placeholder="Postcode/ZIP code">
      <input type="text" class="form-control" placeholder="United Kingdom">
                </div>
                </div>

  </div>
</div>



    </div>
    </div>
<br />

              <div class="row mt-3">
                <div class="col-12">
                    <a href="edit.html" class="btn btn-primary pull-right">Save</a>

              </div>
              </div>
              

            </div>
          </div>
        </div>

        <div class="form-group light-blue">

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Bank Account<br /><a href="" class="mt-2">+ Add new</a></label>
            <div class="col-9">
                                          <table class="table table-sm mt-2">

                <thead class="thead-default">
    <tr>
      <th>#</th>
      <th>Account number</th>
      <th>Sort code</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
        <label class="custom-control custom-radio">
        <input name="radio" type="radio" class="custom-control-input" checked="">
        <span class="custom-control-indicator"></span>
      </label>
    </th>
      <td>70872490</td>
      <td>40-47-84</td>
    </tr>
    <tr>
      <th scope="row">
        <label class="custom-control custom-radio">
        <input name="radio" type="radio" class="custom-control-input">
        <span class="custom-control-indicator"></span>
      </label>
    </th>
      <td>13537846</td>
      <td>20-51-32</td>
    </tr>
    <tr>
      <th scope="row">
        <label class="custom-control custom-radio">
        <input name="radio" type="radio" class="custom-control-input">
        <span class="custom-control-indicator"></span>
      </label>
    </th>
      <td>23354647</td>
      <td>56-00-03</td>
    </tr>
  </tbody>
</table>

            </div>
          </div>
        </div>



        <div class="form-group light-blue">

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Payment source<br /><a href="" class="mt-2">+ Add new</a></label>
            <div class="col-9">
                                          <table class="table table-sm mt-2">

                <thead class="thead-default">
    <tr>
      <th>#</th>
      <th>Card number</th>
      <th>Expiry</th>
      <th>Type</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
        <label class="custom-control custom-radio">
        <input id="radio2" name="radio2" type="radio" class="custom-control-input" checked="">
        <span class="custom-control-indicator"></span>
      </label>
    </th>
      <td>XXXX-XXXX-XXXX-2315</td>
      <td>08-27</td>
      <td>MasterCard</td>
    </tr>
    <tr>
      <th scope="row">
        <label class="custom-control custom-radio">
        <input name="radio2" type="radio" class="custom-control-input">
        <span class="custom-control-indicator"></span>
      </label>
    </th>
      <td>XXXX-XXXX-XXXX-4587</td>
      <td>07-25</td>
      <td>Visa</td>
    </tr>
    <tr>
      <th scope="row">
        <label class="custom-control custom-radio">
        <input name="radio2" type="radio" class="custom-control-input">
        <span class="custom-control-indicator"></span>
      </label>
    </th>
      <td>example@paypal.com</td>
      <td>N/A</td>
      <td>Paypal</td>
    </tr>
  </tbody>
</table>

            </div>
          </div>
        </div>




</form>
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

    <a href="edit.html" class="btn btn-primary btn-lg float-right">Save campaign</a>
    <a href="edit.html" class="btn btn-link btn-lg float-right">Discard changes</a>

  </div>
</nav>


    




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