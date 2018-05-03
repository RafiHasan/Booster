    <nav class="navbar navbar-toggleable-sm navbar-light bg-primary fixed-top"  id="navbar" v-cloak >
  <div class="container top-nav" v-if="!search">

  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
  <a href="{{url('/')}}">
    <img src="images/Logo/booster_logo.png" class="rounded-circle mb-4" style="position: relative;width:30px;height:30px;top: 15px;">
  </a>
  <a class="navbar-brand" href="{{url('/')}}">BOOSTER
    <span class="fa-stack fa-lg" style="font-size: 12px;" onclick="event.preventDefault(); document.getElementById('notiDiv').style.display='block';document.getElementById('notiDiv').style.overflow='auto'">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-inverse fa-stack-1x">1</i>
    </span>
  </a>
    
  </a>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/explore')}}">Explore </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/start-project')}}">Start a project</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/about-us')}}">About us</a>
      </li>
    </ul>
    <ul class="navbar-nav" >
      <li class="nav-item hidden-sm-down">
        <a class="nav-link" href="#" v-on:click.prevent="showSearchBar"><i class="fa fa-search" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item hidden-sm-up">
        <a class="nav-link" href="#" v-on:click.prevent="showSearchBar">Search</a>
      </li>
      @if (Auth::guest())
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target=".login-modal-lg">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target=".signup-modal-lg">Sign up</a>
      </li>
      
      @else
                            
                             <!--  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <img src="https://scontent.fdac6-1.fna.fbcdn.net/v/t1.0-9/12540606_968536586528116_379126017994150594_n.jpg?_nc_cat=0&oh=3e5cc96e16a2615daf2bb31df47b67f7&oe=5B751973" class="rounded-circle mb-4" style="width:30px;height:30px;">
                              </a> -->


        <li class="dropdown">
                                <a href="#"  data-toggle="dropdown" role="button" aria-expanded="false">
                                <img src="https://scontent.fdac6-1.fna.fbcdn.net/v/t1.0-9/12540606_968536586528116_379126017994150594_n.jpg?_nc_cat=0&oh=3e5cc96e16a2615daf2bb31df47b67f7&oe=5B751973" class="rounded-circle mb-4" style="width:30px;height:30px;">
                              </a>




                                <ul class="dropdown-menu" role="menu">

                                  @include('Format.profile_bar')
                                </ul>
                            </li>
      @endif
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
@include('Format.notifications')