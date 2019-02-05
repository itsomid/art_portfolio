@extends('panel.layouts.main')
@section('title')
    داشبورد
@endsection
@section('breadtitle')
    داشبورد
@endsection
@section('breadmenu')
    <li><a href="{{route('panel/dashboard')}}">خانه</a></li>
@endsection
@section('content')

    <div class="row">
        <div class="col-lg-4">
            <div class="widget-head-color-box navy-bg p-lg text-center">
                <div class="m-b-md">
                    <h2 class="font-bold no-margins " style="margin-bottom: 10px!important;">
                      {{Auth::user()->first_name}} {{Auth::user()->last_name}}
                    </h2>
                    <small >{{Auth::user()->job}}</small>
                </div>
                <img src="{{Auth::user()->avatar_url}}" class="img-circle circle-border m-b-md" alt="profile" width="128" height="128">

            </div>
            <div class="widget-text-box">
                <h4 class="media-heading m-b">بیوگرافی</h4>
                <p>{{Auth::user()->details}}</p>

            </div>
        </div>

        <div class="col-lg-4">
            <div class="widget lazur-bg p-xl">

                <h2>
                    {{Auth::user()->first_name}} {{Auth::user()->last_name}}
                </h2>
                <ul class="list-unstyled m-t-md">
                    <li>
                        <span class="fa fa-envelope m-r-xs"></span>
                        <label>ایمیل:</label>
                      {{Auth::user()->email}}
                    </li>
                    <li>
                        <span class="fa fa-home m-r-xs"></span>
                        <label>آدرس:</label>
                        {{Auth::user()->address}}
                    </li>
                    <li>
                        <span class="fa fa-phone m-r-xs"></span>
                        <label>تلفن:</label>
                        {{Auth::user()->phone}}
                    </li>
                </ul>

            </div>
            <a href="{{route('panel/image/get')}}">
            <div class="widget yellow-bg p-lg text-center">
                <div class="m-b-md">
                    <i class="fa fa fa-file-image-o fa-4x"></i>
                    <h1 class="m-xs">{{count(Auth::user()->image)}}</h1>
                    <h3 class="font-bold no-margins">عکس
                    </h3>
                    <small>تعداد</small>
                </div>
            </div>
            </a>
        </div>
        <div class="col-lg-2">


        </div>
    </div>



@endsection
