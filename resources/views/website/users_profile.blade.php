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
                        <h4 style="padding-top: 10px">
                            @if($user->art_category == 'cinema')
                              سینما
                            @elseif($user->art_category == 'architecture')
                              معماری
                            @elseif($user->art_category == 'music')
                                موسیقی
                            @elseif($user->art_category == 'visual')
                              هنر تجسمی
                            @elseif($user->art_category == 'painting')
                                 هنر ترسیمی
                            @elseif($user->art_category == 'performing')
                                 حرکات نمایشی
                            @else
                                 ادبیات
                            @endif
                        </h4>
                    </a>
                </div>
            @endforeach
        </article>
    </section>


@endsection
