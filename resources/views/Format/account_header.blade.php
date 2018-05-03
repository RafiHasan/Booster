<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Settings</title>
  <meta name="description" content="Write an awesome description for your new site here. You can edit this line in _config.yml. It will appear in your document head meta (for Google search resu...">


  <!-- favicon -->

  <link rel="shortcut icon" href="images/Logo/booster_logo.png" type="image/gif/png"/>

  
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="canonical" href="/account-dashboard.html">
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

    @include('Format.header')

    <br />
<br />
<br />
<div class="container-fluid">
    <div class="row">

        <div class="col-sm-12">
<h1>Settings</h1><br /><br />
    <ul class="nav nav-tabs hidden-sm-down">

    
      
      
<li class="nav-item active">
        <a class="nav-link active" href="{{url('/account-dashboard')}}">Account</a>
      </li>
    
      
      

      <li class="nav-item ">
        <a class="nav-link " href="{{url('/account-profile')}}">My profile</a>
      </li>
    
      
      

      <li class="nav-item">
        <a class="nav-link " href="{{url('/account-notifications')}}">Notifications</a>
      </li>
    
      
      

      <li class="nav-item">
        <a class="nav-link " href="{{url('/account-payment')}}">Payment methods</a>
      </li>
    
      
      

      <li class="nav-item ">
        <a class="nav-link " href="{{url('/start-project')}}">Create new project</a>
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