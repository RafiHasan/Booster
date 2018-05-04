<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-4">
    <header class="w3-container w3-teal"> 
      <div class="table-cell full-width px3 border-box">
        <h1 class="f2 normal mb2">
          <a id="hidden_profile_name" name="profile_name" class="red" href="/profile/1158786437">
            DARPON ISLAM
          </a>
        </h1>
        <p id="hidden_profile_location" class="f5 bold mb0">SUST, Sylhet</p>
      </div>
      <span onclick="document.getElementById('id01').style.display='none'" 
      class="w3-button w3-display-topright">&times;</span>
    </header>

    <div class="w3-container" style="padding: 20px:">
      <div class="container-flex pb3 pb7-sm px3">
        <section class="toggle_box_content current" id="bio">
          <div class="row" style="padding: 30px;margin-top: 20px;">
            <div class="col col-7 " >
              <div id="hidden_profile_biography" class="readability" style="word-wrap: break-word;">
                <p>We are a team of engineers and designers motivated to making life more convenient. We believe that hassle-free, effective monitoring of your home shouldn’t be a luxury and, more importantly, should be a service you trust. That’s why eufy EverCam was incubated with Anker Innovations to offer unrivaled battery life, topped with other key features from existing security cameras and cutting-edge functions that enhance the usage experience. We’ve lined up the best suppliers and manufactures we...</p>
              </div>

              <div class="Websites">
                <h4 >Websites</h4>
                <ul class="links list f5 bold">
                  <li>
                    <a id="hidden_profile_website"  href="http://www.eufylife.com">eufylife.com</a>
                  </li>
                </ul>
              </div>


              <div id="hidden_project_div" class="project">

                <h4 >Projects</h4>
                

                <!-- <div id="developer_project" class="row " style="padding-top:10px;">
                <div class="col-sm-3" style="padding-bottom:5px;">

                  
                  <a href="" id="project_img" class="thumbnaidl"><img id="profile_project_img" class="img-fluid" src="https://unsplash.it/310/210?image=1064"></a>

                </div>              
                <div class="col-sm-9">


                  <h4 id="project_detail" class="display-8" ><a id="profile_project_detail" href="/project.html">I'm making a Potato salad</a></h4>
                  

                  <br>
                  
                  
                </div>
              </div> -->
                
              </div>

              


              <div id="hidden_collaborator_div" class="pt3 pt7-sm mobile-hide row" style="padding-top:10px;">
                <h4 class="col col-12">Collaborators on this project</h4>
                <!-- <div class="flag col col-4 mb3">
                  <div class="Collaborators" >
                    <div class="flag-img">
                      <img id="collab_img" alt="Missing avatar" class="avatar circle" src="https://ksr-ugc.imgix.net/missing_user_avatar.png?w=40&amp;h=40&amp;fit=crop&amp;v=&amp;auto=format&amp;q=92&amp;s=8c0db61c92692000c2678b375fc31714">
                    </div>
                    <div class="flag-body">
                      <a id="collab_name" href="/profile/1448513328/about">Kickbooster</a>
                      <div class="type-sm--sans">Collaborator</div>

                    </div>
                  </div>
                  


                </div> -->
              </div>








              
            </div>
            <div class="col col-4 ">
              <img id="hidden_profile_img" class="img-fluid rounded-circle" src="https://scontent.fdac6-1.fna.fbcdn.net/v/t1.0-9/18838835_1359536117473852_3797026120332315532_n.jpg?_nc_cat=0&oh=2b8cebc8dd8ccd342efb11608b2030e7&oe=5B71A097" style=" background-size: cover; ">

              <div  class="info" style="padding-top: 30px;text-align: center; vertical-align: middle;">
                <h6 id="hidden_profile_uni" style="border-bottom-width:.25px;border-bottom-color:#373a3c;border-bottom-style: groove;">University : SUST</h6>

              <h6 id="hidden_profile_dep" style="border-bottom-width:.25px;border-bottom-color:#373a3c;border-bottom-style:groove;">Department : CSE</h6>

              <h6 id="hidden_profile_created" style="border-bottom-width:.25px;border-bottom-color:#373a3c;border-bottom-style: groove;">Account created at April 3 2018</h6>
              <h6 id="profile_project_no" style="border-bottom-width:.25px;border-bottom-color:#373a3c;border-bottom-style: groove;">project created: 1</h6>
              <h6 id="profile_project_backed" style="border-bottom-width:.25px;border-bottom-color:#373a3c;border-bottom-style: groove;">project backed: 0</h6>

              </div>


              


              

            </div>
          </div>
        </section>


      </div>
    </div>
    <footer class="w3-container w3-teal" style="padding: 20px;">
     <ul class="social-network social-circle">
      <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook fa-fw"></i></a></li>
      <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter fa-fw"></i></a></li>
      <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin fa-fw"></i></a></li>
      <li><a href="#" class="icoGithub" title="Github"><i class="fa fa-github fa-fw"></i></a></li>
    </ul> 
  </footer>
</div>
</div>



  <script type="text/javascript">


    


    function showProfile(uid){
      console.log(uid);
      $.ajax({
        type: "POST",
        url: url + "/showProfile",
        data: {
          uid:uid
        },
        success: function(data){
          $('#hidden_profile_name').html(data['user'].first_name + " " + data['user'].last_name);
          $('#hidden_profile_location').html(data['user'].location);
          $('#hidden_profile_biography').html(data['user'].biography);
          $('#hidden_profile_website').html(data['user'].website);

          $('#hidden_profile_dep').html('Department : '+data['user'].depertment);
          $('#hidden_profile_created').html('Account created at '+data['user'].created_at);
          $('#profile_project_no').html('project created: '+data['projects'].length);
          $('#profile_project_backed').html('');


          $("#hidden_profile_website").attr("href", data['user'].website);
          $("#hidden_profile_img").attr("src", data['user'].picture);
          console.log("here");

         var mainDiv = document.getElementById("hidden_project_div");
         mainDiv.innerHTML='<h4 >Projects</h4>';
          var i;
          for(i=0;i<data['projects'].length;i++){
            var project_id = data['projects'][i].id;
            var imgsrc = data['projects'][i].image;
            var title=data['projects'][i].title;


            

            var imgDiv = '<div class="col-sm-3" style="padding-bottom:5px;"><a href="/project/'+project_id+'" id="project_img' + project_id + '" class="thumbnaidl"><img id="profile_project_img' + project_id + '" class="img-fluid" src="' + imgsrc + '"></a></div> ';

            var detail = '<div class="col-sm-9"><h4 id="project_detail' + project_id + '" class="display-8" ><a id="profile_project_detail' + project_id + '" href="' + url + '/project/' + project_id + '">'+title+'</a></h4><br/></div>';

            var newDiv = document.createElement("div");

            newDiv.id = "developer_project" + i;
            newDiv.className = "row";
            newDiv.style = "padding-top:10px;";
            newDiv.innerHTML = imgDiv + detail;

            mainDiv.appendChild(newDiv);       

          }

var mainDiv = document.getElementById("hidden_collaborator_div");;
mainDiv.innerHTML='<h4 class="col col-12">Collaborators on this project</h4>';


         for(i=0;i<data['collaborator'].length;i++){
            var user_id = data['collaborator'][i].id;
            var imgsrc = data['collaborator'][i].picture;
            var Name=data['collaborator'][i].first_name+" "+data['collaborator'][i].last_name;


            var mainDiv = document.getElementById("hidden_collaborator_div");

           

            var detail = '<div class="flag col col-4 mb3" ><div class="Collaborators" ><div class="flag-img" ><img id="collab_img" alt="Missing avatar" style="height:50px;" class="avatar circle" src="' + imgsrc + '"></div><div class="flag-body"><a id="collab_name" href="/profile/1448513328/about">'+Name+'</a><div class="type-sm--sans">Collaborator</div></div></div></div>';

            var newDiv = document.createElement("div");

            newDiv.id = "developer_project" + i;
            newDiv.className = "row";
            newDiv.style = "padding-top:10px;";
            newDiv.innerHTML = detail;

            mainDiv.appendChild(newDiv);                            
                

          }




//////////////                       REMAINING                     /////////////////////////////////////


          // $("#hidden_profile_dep").html();
          // $("#hidden_profile_uni").html();
          // $("#hidden_profile_").html();
          // $("#profile_project_backed").html();
          // $("#profile_project_no").html();
          
          // $("#collab_name").html();
          // $("#collab_img").html();

          console.log("success: "+data['user'].first_name + " " + data['user'].last_name);
          // alert(JSON.stringify(data));
        },
        error:function(data){
          console.log("Error: "+data);
        }

      });
    }
  </script>