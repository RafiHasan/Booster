<li>

<li><a class="dropdown-item" href="{{url('/account-dashboard')}}">Settings</a></li>

<li><a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('id01').style.display='block';document.getElementById('id01').style.overflow='auto';showProfile({{Auth::user()->id}});" href="">My Account</a></li>


<li><a class="dropdown-item" href="{{url('/myProjects')}}">My Projects</a></li>

<li><a class="dropdown-item" href="{{ route('logout') }}"
    onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
    Logout
</a></li>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
</li>













