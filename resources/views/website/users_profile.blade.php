@extends('website.layouts.main')
@section('title')
    هنرمندی
@endsection
@section('content')
    <section id="collection">
        <div class="head-row">
            <div class="side-line side-line-top"></div>
            <div class="side-line side-line-bot"></div>
            <h1>
                <i class="popular-eye-icn icn icn-right1"></i>
                <i class="popular-eye-icn icn icn-right2"></i>
                <i class="popular-eye-icn icn icn-right3"></i>
                هنرمندان
                <i class="popular-eye-icn icn icn-left1"></i>
                <i class="popular-eye-icn icn icn-left2"></i>
                <i class="popular-eye-icn icn icn-left3"></i>
            </h1>
        </div>

        <article class="flex-row" style="justify-content: flex-end !important;">
            @foreach($users as $user)
                <div class="img-itm" style="margin: 40px 0 !important;">
                    <a href="{{route('profile/single',['id'=>$user->id])}}">
                        <img class="img-responsive img-circle" style="width: 200px" src="{{$user->avatar_url}}">
                        <h3>{{$user->first_name}} {{$user->last_name}}</h3>
                    </a>
                </div>
            @endforeach
        </article>
    </section>


@endsection
