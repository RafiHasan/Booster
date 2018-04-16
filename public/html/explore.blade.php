<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Explore </title>
  <meta name="description" content="Write an awesome description for your new site here. You can edit this line in _config.yml. It will appear in your document head meta (for Google search resu...">

  <!-- favicon -->

  <link rel="icon" 
      type="image/png" 
      href="https://scontent.fdac6-1.fna.fbcdn.net/v/t35.0-12/23698614_1340578692737598_1074966544_o.png?_nc_cat=0&oh=aeba2a938682be4c93c51c2189d7506f&oe=5ACC7135" />
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="canonical" href="/explore.html">
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
      <li class="nav-item ">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="explore.html">Explore </a>
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
				
					
						<a class="dropdown-item" href="#art">Android Apps</a>
					
						<a class="dropdown-item" href="#comics">Website</a>
					
						<a class="dropdown-item" href="#crafts">Research</a>
					
						<a class="dropdown-item" href="#dance">Robotics</a>
					
						<a class="dropdown-item" href="#design">Web Apps</a>
					
						<a class="dropdown-item" href="#fashion">Games</a>
					
						<a class="dropdown-item" href="#film-video">Design & Tech</a>
					
						<a class="dropdown-item" href="#food">Services</a>
					
						<a class="dropdown-item" href="#games">Business Idea</a>
					
						<a class="dropdown-item" href="#journalism">Electorics</a>
					
						<a class="dropdown-item" href="#music">Networking</a>
					
						<a class="dropdown-item" href="#photography">Desktop Softwares</a>
					
						
					
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
			
				
				<div class="col-sm-3 mb-4">
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
				
				<div class="col-sm-3 mb-4">
					<div class="card box">
	<a href="project.html" >
		<img src="http://i.expresspixel.com/unsplash.it/310/210?image=21" class="img-fluid hidden-xs-down"/>
		<img src="http://i.expresspixel.com/unsplash.it/610/210?image=21" class="img-fluid hidden-sm-up"/>
	</a>
	<div class="card-block" class="pb-1" style="position: relative; padding-bottom: 60px; min-height: 250px;">

				<h6><a href="project.html">iterate plug-and-play metrics</a></h6>
				<p class="text-muted">By <strong><a href="project.html" class="text-muted">Chris Adams</a></strong></p>
				<p class="desc">This kit teaches how to print, correct an ugly grasp, and how to make sure your child's fine motor skills are kindergarten ready!</p>

				<div style="position: absolute; bottom: 10px; width: 86%; ">
				<div class="progress">
  					<div class="progress-bar" role="progressbar" style="width: 61%" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<p class="mb-1">61% funded</p>
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
						<h6 class="mt-0 mb-0"><strong>42</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Pledged</p>
						<h6 class="mt-0 mb-0"><strong>&dollar;50,000</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Days&nbsp;Left</p>
						<h6 class="mt-0 mb-0"><strong>19</strong></h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
				</div>
				
				<div class="col-sm-3 mb-4">
					<div class="card box">
	<a href="project.html" >
		<img src="http://i.expresspixel.com/unsplash.it/310/210?image=31" class="img-fluid hidden-xs-down"/>
		<img src="http://i.expresspixel.com/unsplash.it/610/210?image=31" class="img-fluid hidden-sm-up"/>
	</a>
	<div class="card-block" class="pb-1" style="position: relative; padding-bottom: 60px; min-height: 250px;">

				<h6><a href="project.html">architect best-of-breed niches</a></h6>
				<p class="text-muted">By <strong><a href="project.html" class="text-muted">Ronald Spencer</a></strong></p>
				<p class="desc">Establishing a free, world-class, public library which will be a center  for curating and disseminating knowledge in Nigeria.</p>

				<div style="position: absolute; bottom: 10px; width: 86%; ">
				<div class="progress">
  					<div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<p class="mb-1">40% funded</p>
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
						<h6 class="mt-0 mb-0"><strong>137</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Pledged</p>
						<h6 class="mt-0 mb-0"><strong>&dollar;50,000</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Days&nbsp;Left</p>
						<h6 class="mt-0 mb-0"><strong>7</strong></h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
				</div>
				
				<div class="col-sm-3 mb-4">
					<div class="card box">
	<a href="project.html" >
		<img src="http://i.expresspixel.com/unsplash.it/310/210?image=41" class="img-fluid hidden-xs-down"/>
		<img src="http://i.expresspixel.com/unsplash.it/610/210?image=41" class="img-fluid hidden-sm-up"/>
	</a>
	<div class="card-block" class="pb-1" style="position: relative; padding-bottom: 60px; min-height: 250px;">

				<h6><a href="project.html">iterate impactful interfaces</a></h6>
				<p class="text-muted">By <strong><a href="project.html" class="text-muted">Ruth Diaz</a></strong></p>
				<p class="desc">Goal: Introducing a new word into the English language/dictionary.\nReason: The beauty of the English language is the freedom to create.</p>

				<div style="position: absolute; bottom: 10px; width: 86%; ">
				<div class="progress">
  					<div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<p class="mb-1">70% funded</p>
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
						<h6 class="mt-0 mb-0"><strong>112</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Pledged</p>
						<h6 class="mt-0 mb-0"><strong>&dollar;50,000</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Days&nbsp;Left</p>
						<h6 class="mt-0 mb-0"><strong>1</strong></h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
				</div>
				
				<div class="col-sm-3 mb-4">
					<div class="card box">
	<a href="project.html" >
		<img src="http://i.expresspixel.com/unsplash.it/310/210?image=51" class="img-fluid hidden-xs-down"/>
		<img src="http://i.expresspixel.com/unsplash.it/610/210?image=51" class="img-fluid hidden-sm-up"/>
	</a>
	<div class="card-block" class="pb-1" style="position: relative; padding-bottom: 60px; min-height: 250px;">

				<h6><a href="project.html">envisioneer viral functionalities</a></h6>
				<p class="text-muted">By <strong><a href="project.html" class="text-muted">Alice Long</a></strong></p>
				<p class="desc">Zu den Artikeln der DSGVO sind die korrespondierenden Erwägungsgründe und die vergleichbaren Regelungen aus dem BDSG gegenüber gestellt</p>

				<div style="position: absolute; bottom: 10px; width: 86%; ">
				<div class="progress">
  					<div class="progress-bar" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<p class="mb-1">78% funded</p>
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
						<h6 class="mt-0 mb-0"><strong>30</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Pledged</p>
						<h6 class="mt-0 mb-0"><strong>&dollar;50,000</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Days&nbsp;Left</p>
						<h6 class="mt-0 mb-0"><strong>4</strong></h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
				</div>
				
				<div class="col-sm-3 mb-4">
					<div class="card box">
	<a href="project.html" >
		<img src="http://i.expresspixel.com/unsplash.it/310/210?image=61" class="img-fluid hidden-xs-down"/>
		<img src="http://i.expresspixel.com/unsplash.it/610/210?image=61" class="img-fluid hidden-sm-up"/>
	</a>
	<div class="card-block" class="pb-1" style="position: relative; padding-bottom: 60px; min-height: 250px;">

				<h6><a href="project.html">incubate next-generation platforms</a></h6>
				<p class="text-muted">By <strong><a href="project.html" class="text-muted">Jane Simmons</a></strong></p>
				<p class="desc">Shadow School Board will provide parents & taxpayers a "how-to manual" to restore accountability to your school district's real board.</p>

				<div style="position: absolute; bottom: 10px; width: 86%; ">
				<div class="progress">
  					<div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<p class="mb-1">40% funded</p>
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
						<h6 class="mt-0 mb-0"><strong>100</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Pledged</p>
						<h6 class="mt-0 mb-0"><strong>&dollar;50,000</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Days&nbsp;Left</p>
						<h6 class="mt-0 mb-0"><strong>20</strong></h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
				</div>
				
				<div class="col-sm-3 mb-4">
					<div class="card box">
	<a href="project.html" >
		<img src="http://i.expresspixel.com/unsplash.it/310/210?image=71" class="img-fluid hidden-xs-down"/>
		<img src="http://i.expresspixel.com/unsplash.it/610/210?image=71" class="img-fluid hidden-sm-up"/>
	</a>
	<div class="card-block" class="pb-1" style="position: relative; padding-bottom: 60px; min-height: 250px;">

				<h6><a href="project.html">grow strategic schemas</a></h6>
				<p class="text-muted">By <strong><a href="project.html" class="text-muted">Nicole Green</a></strong></p>
				<p class="desc">I want to create an organization that is composed of selfless people who are dedicated to prevent HIV related deaths and transmission.</p>

				<div style="position: absolute; bottom: 10px; width: 86%; ">
				<div class="progress">
  					<div class="progress-bar" role="progressbar" style="width: 17%" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<p class="mb-1">17% funded</p>
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
						<h6 class="mt-0 mb-0"><strong>83</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Pledged</p>
						<h6 class="mt-0 mb-0"><strong>&dollar;50,000</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Days&nbsp;Left</p>
						<h6 class="mt-0 mb-0"><strong>29</strong></h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
				</div>
				
				<div class="col-sm-3 mb-4">
					<div class="card box">
	<a href="project.html" >
		<img src="http://i.expresspixel.com/unsplash.it/310/210?image=81" class="img-fluid hidden-xs-down"/>
		<img src="http://i.expresspixel.com/unsplash.it/610/210?image=81" class="img-fluid hidden-sm-up"/>
	</a>
	<div class="card-block" class="pb-1" style="position: relative; padding-bottom: 60px; min-height: 250px;">

				<h6><a href="project.html">incubate plug-and-play vortals</a></h6>
				<p class="text-muted">By <strong><a href="project.html" class="text-muted">Annie Stevens</a></strong></p>
				<p class="desc">Group of passionate and eager students gaining experience in the Stock market through research, collaboration and hard work.</p>

				<div style="position: absolute; bottom: 10px; width: 86%; ">
				<div class="progress">
  					<div class="progress-bar" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<p class="mb-1">48% funded</p>
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
						<h6 class="mt-0 mb-0"><strong>142</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Pledged</p>
						<h6 class="mt-0 mb-0"><strong>&dollar;50,000</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Days&nbsp;Left</p>
						<h6 class="mt-0 mb-0"><strong>5</strong></h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
				</div>
				
				<div class="col-sm-3 mb-4">
					<div class="card box">
	<a href="project.html" >
		<img src="http://i.expresspixel.com/unsplash.it/310/210?image=91" class="img-fluid hidden-xs-down"/>
		<img src="http://i.expresspixel.com/unsplash.it/610/210?image=91" class="img-fluid hidden-sm-up"/>
	</a>
	<div class="card-block" class="pb-1" style="position: relative; padding-bottom: 60px; min-height: 250px;">

				<h6><a href="project.html">recontextualize 24/7 portals</a></h6>
				<p class="text-muted">By <strong><a href="project.html" class="text-muted">Roy Jackson</a></strong></p>
				<p class="desc">V.I.P.-Architecture shows the most iconic, the most famous and most important buildings of our planet in one book.</p>

				<div style="position: absolute; bottom: 10px; width: 86%; ">
				<div class="progress">
  					<div class="progress-bar" role="progressbar" style="width: 51%" aria-valuenow="51" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<p class="mb-1">51% funded</p>
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
						<h6 class="mt-0 mb-0"><strong>143</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Pledged</p>
						<h6 class="mt-0 mb-0"><strong>&dollar;50,000</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Days&nbsp;Left</p>
						<h6 class="mt-0 mb-0"><strong>15</strong></h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
				</div>
				
				<div class="col-sm-3 mb-4">
					<div class="card box">
	<a href="project.html" >
		<img src="http://i.expresspixel.com/unsplash.it/310/210?image=101" class="img-fluid hidden-xs-down"/>
		<img src="http://i.expresspixel.com/unsplash.it/610/210?image=101" class="img-fluid hidden-sm-up"/>
	</a>
	<div class="card-block" class="pb-1" style="position: relative; padding-bottom: 60px; min-height: 250px;">

				<h6><a href="project.html">e-enable mission-critical communities</a></h6>
				<p class="text-muted">By <strong><a href="project.html" class="text-muted">Jeffrey Rose</a></strong></p>
				<p class="desc">A collection of plays, screenplays, and photographs from the productions written by Ross Wells, Texas playwright, director, and actor.</p>

				<div style="position: absolute; bottom: 10px; width: 86%; ">
				<div class="progress">
  					<div class="progress-bar" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<p class="mb-1">1% funded</p>
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
						<h6 class="mt-0 mb-0"><strong>1</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Pledged</p>
						<h6 class="mt-0 mb-0"><strong>&dollar;50,000</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Days&nbsp;Left</p>
						<h6 class="mt-0 mb-0"><strong>12</strong></h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
				</div>
				
				<div class="col-sm-3 mb-4">
					<div class="card box">
	<a href="project.html" >
		<img src="http://i.expresspixel.com/unsplash.it/310/210?image=111" class="img-fluid hidden-xs-down"/>
		<img src="http://i.expresspixel.com/unsplash.it/610/210?image=111" class="img-fluid hidden-sm-up"/>
	</a>
	<div class="card-block" class="pb-1" style="position: relative; padding-bottom: 60px; min-height: 250px;">

				<h6><a href="project.html">reinvent back-end architectures</a></h6>
				<p class="text-muted">By <strong><a href="project.html" class="text-muted">Shirley Tucker</a></strong></p>
				<p class="desc">a book that talks about and demonstrates a hackintosh build, the pros/cons and legal status and an analysis compared to the mac pro</p>

				<div style="position: absolute; bottom: 10px; width: 86%; ">
				<div class="progress">
  					<div class="progress-bar" role="progressbar" style="width: 11%" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<p class="mb-1">11% funded</p>
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
						<h6 class="mt-0 mb-0"><strong>110</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Pledged</p>
						<h6 class="mt-0 mb-0"><strong>&dollar;50,000</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Days&nbsp;Left</p>
						<h6 class="mt-0 mb-0"><strong>16</strong></h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
				</div>
				
				<div class="col-sm-3 mb-4">
					<div class="card box">
	<a href="project.html" >
		<img src="http://i.expresspixel.com/unsplash.it/310/210?image=121" class="img-fluid hidden-xs-down"/>
		<img src="http://i.expresspixel.com/unsplash.it/610/210?image=121" class="img-fluid hidden-sm-up"/>
	</a>
	<div class="card-block" class="pb-1" style="position: relative; padding-bottom: 60px; min-height: 250px;">

				<h6><a href="project.html">embrace B2B infrastructures</a></h6>
				<p class="text-muted">By <strong><a href="project.html" class="text-muted">Catherine Griffin</a></strong></p>
				<p class="desc">This magazine is purposed to allow high school students the opportunity to explore their future and determine "What's Next".</p>

				<div style="position: absolute; bottom: 10px; width: 86%; ">
				<div class="progress">
  					<div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<p class="mb-1">60% funded</p>
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
						<h6 class="mt-0 mb-0"><strong>18</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Pledged</p>
						<h6 class="mt-0 mb-0"><strong>&dollar;50,000</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Days&nbsp;Left</p>
						<h6 class="mt-0 mb-0"><strong>15</strong></h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
				</div>
				
				<div class="col-sm-3 mb-4">
					<div class="card box">
	<a href="project.html" >
		<img src="http://i.expresspixel.com/unsplash.it/310/210?image=131" class="img-fluid hidden-xs-down"/>
		<img src="http://i.expresspixel.com/unsplash.it/610/210?image=131" class="img-fluid hidden-sm-up"/>
	</a>
	<div class="card-block" class="pb-1" style="position: relative; padding-bottom: 60px; min-height: 250px;">

				<h6><a href="project.html">empower ubiquitous relationships</a></h6>
				<p class="text-muted">By <strong><a href="project.html" class="text-muted">Karen Jordan</a></strong></p>
				<p class="desc">E-Learning Plattform Fachbereich Mathematik. Bildung für jeden soll keine Idee sein. Mathe, das Haterfach Nr.1, das muss nicht sein.</p>

				<div style="position: absolute; bottom: 10px; width: 86%; ">
				<div class="progress">
  					<div class="progress-bar" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<p class="mb-1">31% funded</p>
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
						<h6 class="mt-0 mb-0"><strong>36</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Pledged</p>
						<h6 class="mt-0 mb-0"><strong>&dollar;50,000</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Days&nbsp;Left</p>
						<h6 class="mt-0 mb-0"><strong>19</strong></h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
				</div>
				
				<div class="col-sm-3 mb-4">
					<div class="card box">
	<a href="project.html" >
		<img src="http://i.expresspixel.com/unsplash.it/310/210?image=141" class="img-fluid hidden-xs-down"/>
		<img src="http://i.expresspixel.com/unsplash.it/610/210?image=141" class="img-fluid hidden-sm-up"/>
	</a>
	<div class="card-block" class="pb-1" style="position: relative; padding-bottom: 60px; min-height: 250px;">

				<h6><a href="project.html">extend robust applications</a></h6>
				<p class="text-muted">By <strong><a href="project.html" class="text-muted">Bonnie Perkins</a></strong></p>
				<p class="desc">IWTLE is a textbook designed to teach English to adult learners new to the language starting with the fundamentals rooted in phonics.</p>

				<div style="position: absolute; bottom: 10px; width: 86%; ">
				<div class="progress">
  					<div class="progress-bar" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<p class="mb-1">82% funded</p>
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
						<h6 class="mt-0 mb-0"><strong>213</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Pledged</p>
						<h6 class="mt-0 mb-0"><strong>&dollar;50,000</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Days&nbsp;Left</p>
						<h6 class="mt-0 mb-0"><strong>20</strong></h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
				</div>
				
				<div class="col-sm-3 mb-4">
					<div class="card box">
	<a href="project.html" >
		<img src="http://i.expresspixel.com/unsplash.it/310/210?image=151" class="img-fluid hidden-xs-down"/>
		<img src="http://i.expresspixel.com/unsplash.it/610/210?image=151" class="img-fluid hidden-sm-up"/>
	</a>
	<div class="card-block" class="pb-1" style="position: relative; padding-bottom: 60px; min-height: 250px;">

				<h6><a href="project.html">productize open-source networks</a></h6>
				<p class="text-muted">By <strong><a href="project.html" class="text-muted">Steven West</a></strong></p>
				<p class="desc">I am building video classes in Economics that are intuitive, visually pleasing and theoretically sound.</p>

				<div style="position: absolute; bottom: 10px; width: 86%; ">
				<div class="progress">
  					<div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<p class="mb-1">35% funded</p>
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
						<h6 class="mt-0 mb-0"><strong>49</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Pledged</p>
						<h6 class="mt-0 mb-0"><strong>&dollar;50,000</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Days&nbsp;Left</p>
						<h6 class="mt-0 mb-0"><strong>9</strong></h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
				</div>
				
				<div class="col-sm-3 mb-4">
					<div class="card box">
	<a href="project.html" >
		<img src="http://i.expresspixel.com/unsplash.it/310/210?image=161" class="img-fluid hidden-xs-down"/>
		<img src="http://i.expresspixel.com/unsplash.it/610/210?image=161" class="img-fluid hidden-sm-up"/>
	</a>
	<div class="card-block" class="pb-1" style="position: relative; padding-bottom: 60px; min-height: 250px;">

				<h6><a href="project.html">strategize transparent metrics</a></h6>
				<p class="text-muted">By <strong><a href="project.html" class="text-muted">Susan Myers</a></strong></p>
				<p class="desc">The Law of True Life, Greatness, Power and Happiness</p>

				<div style="position: absolute; bottom: 10px; width: 86%; ">
				<div class="progress">
  					<div class="progress-bar" role="progressbar" style="width: 93%" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<p class="mb-1">93% funded</p>
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
						<h6 class="mt-0 mb-0"><strong>24</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Pledged</p>
						<h6 class="mt-0 mb-0"><strong>&dollar;50,000</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Days&nbsp;Left</p>
						<h6 class="mt-0 mb-0"><strong>15</strong></h6>
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
            <a href="start.html" class="btn btn-primary btn-lg">Start your project <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
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