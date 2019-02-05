@extends('website.layouts.main')
@section('title')
    جزئیات تصویر
@endsection
@section('content')
    <main id="product-page">
        <section class="pro-top container-fluid">
            <section class="row">
                <aside class="col-md-4 pro-desc-parent">
                    <article class="pro-desc-wrapper" style="position: relative" id="side-product">

                        @if(Auth::user() && $image->user_id == Auth::user()->id)
                        <a href="{{route('panel/image/edit/get',['id'=>$image->id])}}" style="position: absolute;left: 25px;top: 40px;text-align: center">
                            <i class="edit-document-icn icn" style="font-size: 20px"></i>
                            <p>ویرایش</p>
                        </a>
                        @endif
                        <div class="pro-caption">
                            <h1>
                                <a href="{{route('profile/single',['id'=>$image->user->id])}}" class="shooter-pack">
                                    <span class="camera-icn icn"></span>
                                    <img src="{{asset($image->user->avatar_url)}}" class="shooter-img img-circle">
                                    <span class="shooter-name">{{$image->user->first_name}} {{$image->user->last_name}}</span>
                                </a>
                            </h1>
                            <h4 class="pro-story">{{$image->name}} </h4>
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
                    <div id="photographer-slider" class="pro-swiper swiper-container">
                        <div class="swiper-wrapper">
                            @foreach($images as $key=>$img)
                                <figure class="swiper-slide swiper-item item-wrapper" data-background="{{asset($img->image_url)}}"
                                        style="background-image: url({{asset($img->image_url)}}); width: 845px !important; margin-left: 10px">
                                    <div class="item-elements">
                                        <img class="shooter-img img-responsive img-circle" src="{{asset($img->user->avatar_url)}}">
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
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </section>
            </section>
        </section>
    </main>

@endsection

