@extends('website.layouts.main')
@section('title')
    گالری عکس ها
@endsection
@section('content')
    <section  id="photographer" class="gallery-page">
        <div class="head-row">
            <div class="side-line side-line-top"></div>
            <div class="side-line side-line-bot"></div>
            <h1>
                <i class="popular-eye-icn icn icn-right1"></i>
                <i class="popular-eye-icn icn icn-right2"></i>
                <i class="popular-eye-icn icn icn-right3"></i>
                گالری تصاویر
                <i class="popular-eye-icn icn icn-left1"></i>
                <i class="popular-eye-icn icn icn-left2"></i>
                <i class="popular-eye-icn icn icn-left3"></i>
            </h1>
        </div>

        <!-- Swiper -->
        <div id="photographer-slider" class="swiper-container gallery-swiper">
            <div class="swiper-wrapper">
                @foreach($users as $user)
                    <figure  class="swiper-slide swiper-item" data-background="{{asset($user->image[0]->image_url)}}"
                             style="background-image: url({{asset($user->image[0]->image_url)}});">
                        <h4>
                           {{$user->first_name}} {{$user->last_name}}
                        </h4>
                        <a href="{{route('profile/single',['id'=>$user->id])}}">
                            مشاهده عکس ها
                            <span class="camera-icn icn"></span>
                        </a>
                        <span href="{{asset($user->image[0]->image_url)}}"  class="fa fa-search-plus gallery-search-plus"></span>
                    </figure>
                @endforeach
            </div>
            <i class="bar"></i>
            <span class="mouse-wheel-icn icn"></span>
            <span class="keyboard-right-icn icn"></span>
            <span class="keyboard-left-icn icn"></span>
        </div>
    </section>

@endsection
