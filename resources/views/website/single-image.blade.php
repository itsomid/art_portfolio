@extends('website.layouts.main')
@section('title')
    جزئیات تصویر
@endsection
@section('content')
    <main id="product-page">
        <section class="pro-top container-fluid">
            <section class="row">
                <aside class="col-md-4 pro-desc-parent">
                    <article class="pro-desc-wrapper" id="side-product">

                        <div class="pro-caption">
                            <h1>
                                <a href="public-profile.html" class="shooter-pack">
                                    <span class="camera-icn icn"></span>
                                    <img src="{{asset($image->user->avatar_url)}}" class="shooter-img img-circle">
                                    <span class="shooter-name">{{$image->user->first_name}} {{$image->user->last_name}}</span>
                                </a>
                            </h1>

                            <h4 class="pro-story">داستان تصویر </h4>
                            <p>
                                {{$image->details}}
                            </p>
                        </div>
                    </article><!--pro-desc-wrapper-->
                </aside>

                <article class="col-md-8 pro-img-parent">
                    <figure href="{{asset($image->image_url)}}" id="pro-img">
                        <img src="{{asset($image->image_url)}}" class="img-responsive">
                    </figure>

                </article>
            </section>
        </section>

        <section class="pro-bot container-fluid">
            <section class="row">
                <section id="photographer">
                    <div class="head-row">
                        <div class="side-line side-line-top"></div>
                        <div class="side-line side-line-bot"></div>
                        <h1>
                            <i class="popular-eye-icn icn icn-right1"></i>
                            <i class="popular-eye-icn icn icn-right2"></i>
                            <i class="popular-eye-icn icn icn-right3"></i>
                            تصاویر مشابه
                            <i class="popular-eye-icn icn icn-left1"></i>
                            <i class="popular-eye-icn icn icn-left2"></i>
                            <i class="popular-eye-icn icn icn-left3"></i>
                        </h1>
                    </div>

                    <!-- Swiper -->
                    <div id="photographer-slider"
                         class="pro-swiper swiper-container swiper-container-horizontal swiper-container-rtl"
                         style="cursor: grab;">
                        <div class="swiper-wrapper"
                             style="width: 6416.67px; transition-duration: 0ms; transform: translate3d(1925px, 0px, 0px);">
                            @foreach($images as $img)
                                <figure class="swiper-slide swiper-item item-wrapper swiper-slide-duplicate swiper-slide-duplicate-next"
                                        data-background="{{asset($img->image_url)}}"
                                        style="background-image: url({{asset($img->image_url)}}); width: 631.667px; margin-left: 10px;"
                                        data-swiper-slide-index="1">
                                    <div class="item-elements">
                                        <img class="shooter-img img-responsive img-circle"
                                             src="{{asset($img->user->avatar_url)}}">
                                        <h4>
                                          {{$img->user->first_name}}  {{$img->user->last_name}}
                                        </h4>
                                    </div>

                                    <a href="{{route('image/single',['id'=>$img->id])}}">
                                        جزئیات بیشتر
                                        <span class="eye-icn icn"></span>
                                    </a>
                                </figure>


                            @endforeach
                        </div>
                        <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

                </section>
            </section>
        </section>
    </main>

@endsection

