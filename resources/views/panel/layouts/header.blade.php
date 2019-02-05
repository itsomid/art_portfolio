<div class="row border-bottom">
    <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">

        <ul class="nav navbar-top-links navbar-right">


            <li>
                <form id="logout-form" action="" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <a href="{{ route('logout') }}" >
                    خروج<i class="fa fa-sign-out"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>   @yield('breadtitle')
        </h2>
        <ol class="breadcrumb">
            @yield('breadmenu')
        </ol>
    </div>
</div>