<header >
    <div id="quick-sign-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">هنرمندی</h4>
                </div>
                <div class="modal-body">

                    <p class="modal-txt">ورود کاربران:</p>

                    <form class="custom-form" action="{{route('login')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="email" class="form-control custom-form-control" id="email-user" name="email-user" placeholder="ایمیل" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control custom-form-control" id="pwd-user" name="pwd-user" placeholder="رمز عبور" required>
                        </div>
                        <div class="form-group">
                            <label for="remember-me">
                                مرا به خاطر بسپار:
                            </label>
                            <input type="checkbox" name="remember-me" id="remember-me">
                        </div>
                        <button type="submit" class="btn btn-default btn-custom-link3 custom-form-control">
                            <span>ورود</span>
                        </button>
                    </form>

                    <p class="modal-txt sign-up-txt">ثبت نام:</p>

                    <form class="custom-form">
                        <div class="form-group">
                            <input type="text" class="form-control custom-form-control" id="fname" name="fname" placeholder="نام" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control custom-form-control" id="lname" name="lname" placeholder="نام خانوادگی" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control custom-form-control" id="email" name="email" placeholder="ایمیل" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control custom-form-control" id="pass" name="pass" placeholder="رمز عبور" required>
                        </div>
                        <button type="submit" class="btn btn-default btn-custom-link3 custom-form-control">
                            <span>ثبت نام</span>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <div id="main-nav-wrapper">
        <nav id="main-nav" class="navbar navbar-inverse" data-spy="affix" data-offset-top="50">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('home')}}">هنرمندی</a>
                    <a href data-toggle="modal" data-target="#quick-sign-modal" id="sign-in-res"><i  class="fa fa-sign-in"></i></a>
                    <a id="search-res"><i class="fa fa-search"></i></a>
                    <form id="srch-form-res" action role="form">
                        <input id="search-input-res" type="text" placeholder="تصویر مورد نظر را جستجو کنید..."/>
                        <button type="submit" class="search-option-holder-res">جستجو کن</button>
                    </form>
                </div>
                <div class="collapse navbar-collapse" id="myNav">
                    <ul class="nav navbar-nav ul-lvl1">

                        <li class="dropdown drop-li-lvl1" >
                            <a class="dropdown-toggle" data-toggle="dropdown" href >
                                <i class="fa fa-list fa-custom"></i>
                                دسته بندی ها
                            </a>
                            <i class="fa fa-caret-up up-caret1"></i>
                            <ul class="dropdown-menu drop-ul-lvl2">
                                <li><a href="{{route('art',['name'=>'literature'])}}" ><i class="inspire-icn icn"></i>ادبیات</a></li>
                                <li><a href="{{route('art',['name'=>'performing'])}}" ><i class="seasons-icn icn"></i>حرکات نمایشی</a></li>
                                <li><a href="{{route('art',['name'=>'cinema'])}}" ><i class="masks-icn icn"></i>سینما</a></li>
                                <li><a href="{{route('art',['name'=>'architecture'])}}" ><i class="summer-icn icn"></i>معماری</a></li>
                                <li><a href="{{route('art',['name'=>'music'])}}" ><i class="music-icn icn"></i>موسیقی</a></li>
                                <li><a href="{{route('art',['name'=>'visual'])}}" ><i class="fall-icn icn"></i>هنر تجسمی</a></li>
                                <li><a href="{{route('art',['name'=>'painting'])}}" ><i class="winter-icn icn"></i>هنر ترسیمی</a></li>

                            </ul>
                        </li>

                        <li><a href="{{route('profiles')}}" ><i class="fa fa-user-circle-o fa-custom"></i> هنرمندان </a></li>
                        <li><a href="gallery.html" ><i class="fa fa-photo fa-custom"></i> گالری تصاویر </a></li>
                        <li><a href="search.html" ><i class="fab fa-searchengin fa-custom"></i> صفحه جستجو </a></li>

                    </ul>
                    <form class="lg-search" action role="form">
                        <input id="search-input" type="text" placeholder="تصویر مورد نظر را جستجو کنید..."/>
                        <button type="submit" class="search-option-holder">جستجو کن</button>
                    </form>
                    <ul class="nav navbar-nav navbar-left">
                        <li class="lg-search"><a id="search" ><i class="fa fa-search"></i></a></li>
                        {{--<li class="lg-search"><a  id="quick-sign-in-up" href data-toggle="modal" data-target="#quick-sign-modal">--}}
                                {{--<i  class="fa fa-sign-in"></i></a>--}}
                        {{--</li>--}}
                        @if(!Auth::user())
                        <li class="lg-search"><a  id="quick-sign-in-up" href="/login">
                                <i  class="fa fa-sign-in"></i></a>
                        </li>

                        <li class="lg-search"><a  id="quick-sign-in-up" href="/register">
                                <i  class="fa fa-user-plus "></i></a>
                        </li>
                            @else

                            <li class="lg-search">
                                <a  href="{{route('logout')}}" id="quick-sign-in-up" >
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="lg-search">
                                <a href="{{route('panel/dashboard')}}"  style=" padding: 5px 0 0 0;">
                                    <img src="{{asset(Auth::user()->avatar_url)}}" class=" img-circle" style="width: 40px;height: 40px">
                                </a>
                            </li>


                            @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>