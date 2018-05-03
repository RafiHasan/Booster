    <nav class="navbar navbar-toggleable-sm navbar-light bg-primary fixed-top" style="margin-bottom: 0px;padding-bottom: 0px;" id="navbar" v-cloak >
      <div class="container top-nav" style="margin-bottom: 0px;padding-bottom: 0px;" v-if="!search">

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="{{url('/')}}" >
          <img src="{{url('/')}}/images/Logo/booster_logo.png" class="rounded-circle mb-4" style="vertical-align: middle;width:30px;height:30px;margin-top: 9px;">
        </a>
        <a href="#"  data-toggle="dropdown" role="button" aria-expanded="false">


<span id="notiCount" class="p1 fa-stack fa-2x has-badge " data-count="4" role="button">


  
          <img src="{{url('/')}}/default/booster.png" class=" mb-4" style="vertical-align: middle;height:30px;"></span>
        </a>
        <ul class="noti dropdown-menu" role="menu">

          @include('Format.notifications')
        </ul>
        <!--           CSS FROM "noti.html"  causes it     -->




        

      

      <div class="collapse navbar-collapse" id="navbarColor01" style="vertical-align: middle; margin-bottom: 0px;padding-bottom: 0px;padding-left: 80px;">
        <ul class="navbar-nav mr-auto" style="vertical-align: middle;">
          <li class="nav-item active" style="vertical-align: middle;">
            <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item" style="vertical-align: middle;">
            <a class="nav-link" href="{{url('/explore')}}">Explore </a>
          </li>
          <li class="nav-item" style="vertical-align: middle;">
            @if (Auth::guest())
            <a class="nav-link" href="#" data-toggle="modal" data-target=".login-modal-lg">Start a project</a>
            @else
            <a class="nav-link" href="{{url('/start-project')}}">Start a project</a>
            @endif
          </li>
          <li class="nav-item" style="vertical-align: middle;">
            <a class="nav-link" href="{{url('/about-us')}}">About us</a>
          </li>
        </ul>
        <ul class="navbar-nav" style="vertical-align: middle;" >
          <li class="nav-item hidden-sm-down" style="vertical-align: middle;">
            <a class="nav-link" href="#" v-on:click.prevent="showSearchBar"><i class="fa fa-search" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item hidden-sm-up" style="vertical-align: middle;">
            <a class="nav-link" href="#" v-on:click.prevent="showSearchBar">Search</a>
          </li>
          @if (Auth::guest())
          <li class="nav-item" style="vertical-align: middle;">
            <a class="nav-link" href="#" data-toggle="modal" data-target=".login-modal-lg">Login</a>
          </li>
          <li class="nav-item" style="vertical-align: middle;">
            <a class="nav-link" href="#" data-toggle="modal" data-target=".signup-modal-lg">Sign up</a>
          </li>

          @else

                             <!--  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <img src="https://scontent.fdac6-1.fna.fbcdn.net/v/t1.0-9/12540606_968536586528116_379126017994150594_n.jpg?_nc_cat=0&oh=3e5cc96e16a2615daf2bb31df47b67f7&oe=5B751973" class="rounded-circle mb-4" style="width:30px;height:30px;">
                              </a> -->


                              <li class="dropdown">
                                <a href="#"  data-toggle="dropdown" role="button" aria-expanded="false">
                                  <img src="{{url('/').'/default/profiledefault.png'}}" class="rounded-circle mb-4" style="width:30px;height:30px;">
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
            <script>
              var url = "{{ url('/') }}";
              $(document).ready(function() {
                getData();
                 
              });
              function getData(){
                // var i = document.getElementById('newNoti').innerHTML;
                // console.log("nice "+i);
                var start = document.getElementById("newNoti");
                start.innerHTML = "";
                    for(i=0;i<5;i++){
                      var mainNotiDiv = document.getElementById('newNoti');
                      var newNoti = document.createElement("li");
                      newNoti.id = "noti"+i;
                      var name = "Darpon";
                      var message = " updated his ";
                      var project = "project";
                      var time = "10:00 pm";
                      var noti = '<i class="ion-arrow-up-a "> </i> <p><strong id="By'+i+'" >'+name+'</strong>'+message+'<strong>'+project+'</strong></p><div class="time" style="margin-left: 200px;margin-top: -30px; font-size:small;">'+time+'</div> ';
                      newNoti.innerHTML = noti;
                      mainNotiDiv.appendChild(newNoti);
                    }
                $.ajax({
                  type:"GET",
                  url:url+"countNoti",
                  success:function(data){
                    for(i=0;i<5;i++){
                      var mainNotiDiv = document.getElementById('newNoti');
                      var newNoti = document.createElement("li");
                      newNoti.id = "noti"+i;
                      var name = "Darpon";
                      var message = "updated on";
                      var project = "project";
                      var time = "10:00 pm";
                      var noti = '<i class="ion-arrow-up-a "> </i> <p><strong id="By'+i+'" >'+name+'</strong>'+message+'<strong>'+project+'</strong></p><div class="time" style="margin-left: 200px;margin-top: -30px; font-size:small;">'+time+'</div> ';
                      newNoti.innerHTML = noti;
                      mainNotiDiv.appendChild(newNoti);

                    }

                    console.log("success: "+data);
                  },
                  error:function(data){
                    console.log("Error: "+data);
                  }
                });

                window.setTimeout(function () { 
                      getData();
                  }, 5000);
              }
            </script>



@include('Format.hidden_profile')

                      