<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">

        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <span>
                        <img alt="image" class="img-circle" src="{{asset(Auth::user()->avatar_url)}}" width="50" height="50">

                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                      <span class="clear">
                          <span class="block m-t-xs">
                              <strong class="font-bold" >{{Auth::user()->first_name}} {{Auth::user()->last_name}}</strong>
                          </span>
                          <span class="text-muted text-xs block">{{Auth::user()->email}}<b class="caret"></b></span>
                      </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li>
                            <form id="logout-form" action="{{ url('logout') }}" method="POST" >
                                {{ csrf_field() }}
                            </form>
                            <a href="{{route('logout')}}">خروج</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li id="home" class="active">
                <a href="{{route('panel/dashboard')}} "> <i class="fa fa-th-large"></i> <span class="nav-label">پیشخوان</span></a>
            </li>
            <li id="gallery">
                <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">گالری</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse ">
                    <li id="image">
                        <a href="{{route('panel/image/get')}}"> <span class="nav-label">عکس های شما</span> </a>
                    </li>
                    <li id="newimage">
                        <a href="{{route('panel/image/add/get')}}"> <span class="nav-label">افزودن عکس جدید</span> </a>
                    </li>

                </ul>
            </li>
            <li id="user">
                <a href="{{route('panel/user/show')}}"> <i class="fa fa-user"></i><span class="nav-label"> اطلاعات کاربری</span> </a>
            </li>
        </ul>


        <script>
            $(document).ready(function () {
                $(".metismenu li").removeClass("active");
                $('#home').addClass('active');
            });
        </script>
    </div>
</nav>