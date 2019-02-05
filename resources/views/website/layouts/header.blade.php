<header >


    <div id="main-nav-wrapper">
        <nav id="main-nav" class="navbar navbar-inverse" data-spy="affix" data-offset-top="50">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="{{route('home')}}" style="padding: 0 !important; margin-right: 5px">
                        <img style="width: 60px" src="/images/logo-2.png">
                    </a>
                    <a href data-toggle="modal" data-target="#quick-sign-modal" id="sign-in-res"><i  class="fa fa-sign-in"></i></a>

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
                        <li><a href="{{route('gallery')}}" ><i class="fa fa-photo fa-custom"></i> گالری تصاویر </a></li>

                        <li><a href="/about-us" >    <span class="about-us-icn icn"></span> درباره ما </a></li>
                        <li><a href="/contact-us" ><span class="mail-icn icn"></span> تماس با ما </a></li>

                    </ul>

                    <ul class="nav navbar-nav navbar-left">


                        {{--<li class="lg-search"><a  id="quick-sign-in-up" href data-toggle="modal" data-target="#quick-sign-modal">--}}
                                {{--<i  class="fa fa-sign-in"></i></a>--}}
                        {{--</li>--}}
                        @if(!Auth::user())


                                <li class="lg-search"><a  id="search" href="/register">
                                        <i  class="fa fa-user-plus "></i>
                                    </a>
                                </li>
                            <li class="lg-search">
                                <a  id="" href="/login">
                                    <i  class="fa fa-sign-in"></i>
                                </a>
                            </li>
                            @else
                                <li class="lg-search">
                                    <a  href="{{route('logout')}}" id="search" >
                                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="lg-search">
                                    <a href="{{route('panel/dashboard')}}"  style=" padding: 5px 15px 0 0;">
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