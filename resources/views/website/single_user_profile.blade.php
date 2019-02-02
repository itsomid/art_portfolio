@extends('website.layouts.main')
@section('title')
   هنرمندی
@endsection
@section('content')
    <main id="public-profile" class="container-fluid">
        <section id="public-top-section" class="row">
            <article class="text-center col-sm-6 user-img-name">
                <img src="{{asset($user->avatar_url)}}" class="img-responsive img-circle user-img">
                <h1> {{$user->first_name}} {{$user->last_name}} </h1>
            </article>
            <article class="text-center col-sm-6">
                <div class="row country-row">

                    <span class="country-label"> هنر: </span>
                    @if($user->art_category == 'cinema')
                    <div class="user-country"> سینما</div>
                    @elseif($user->art_category == 'architecture')
                    <div class="user-country"> معماری</div>
                    @elseif($user->art_category == 'music')
                    <div class="user-country"> موسیقی</div>
                    @elseif($user->art_category == 'visual')
                    <div class="user-country"> هنر تجسمی</div>
                    @elseif($user->art_category == 'painting')
                    <div class="user-country"> هنر ترسیمی</div>
                    @elseif($user->art_category == 'performing')
                    <div class="user-country"> حرکات نمایشی</div>
                    @else
                    <div class="user-country"> ادبیات</div>
                        @endif
                </div>
                <div class="row">
                    <span class="rate-label"> محبوبیت: </span>
                    <span class="user-rate">
                    <i class="fa fa-star not-filled"></i>
                    <i class="fa fa-star not-filled"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </span>
                </div>

            </article>
        </section>

        <section id="public-middle-section" class="row">

            <div class="tab-content float-right box-content">


                <div class="tab-pane user-info-wrapper active" role="tabpanel" id="box2">

                    <section class="box2 box-wrapper">
                        <article class="box-item flex-box">
                            <!--<article class="flex-box-inner">-->
                            <div class="flex-item">
                                <div class="user-info-row">
                                    <div class="info-label"> نام:</div>
                                    <div class="info-value"> {{$user->first_name}}</div>
                                </div>
                                <div class="user-info-row">
                                    <div class="info-label"> نام خانوادگی:</div>
                                    <div class="info-value"> {{$user->last_name}}</div>
                                </div>
                                <div class="user-info-row">
                                    <div class="info-label"> ایمیل:</div>
                                    <div class="info-value"> {{$user->email}}</div>
                                </div>
                                <div class="user-info-row">
                                    <div class="info-label"> تلفن همراه:</div>
                                    <div class="info-value"> {{$user->phone}}</div>
                                </div>
                                <div class="user-info-row">
                                    <div class="info-label"> شهر:</div>
                                    <div class="info-value"> {{$user->city}}</div>
                                </div>
                            </div>
                            <!--</article>-->

                            <div class="flex-item">
                                <div class="user-info-row">
                                    <div class="info-label"> شغل:</div>
                                    <div class="info-value"> {{$user->job}}</div>
                                </div>
                                <div class="user-info-row">
                                    <div class="info-label"> هنر اصلی:</div>

                                    @if($user->art_category == 'cinema')
                                        <div class="info-value"> سینما</div>
                                    @elseif($user->art_category == 'architecture')
                                        <div class="info-value"> معماری</div>
                                    @elseif($user->art_category == 'music')
                                        <div class="info-value"> موسیقی</div>
                                    @elseif($user->art_category == 'visual')
                                        <div class="info-value"> هنر تجسمی</div>
                                    @elseif($user->art_category == 'painting')
                                        <div class="info-value"> هنر ترسیمی</div>
                                    @elseif($user->art_category == 'performing')
                                        <div class="info-value"> حرکات نمایشی</div>
                                    @else
                                        <div class="info-value"> ادبیات</div>
                                    @endif
                                </div>
                                <div class="user-info-row">
                                    <div class="info-label"> آدرس اینستاگرام:</div>
                                    <div class="info-value"><a target="_blank" href="https://instagram.com/{{$user->social_in}}">{{$user->social_in}}</a></div>
                                </div>
                                <div class="user-info-row">
                                    <div class="info-label"> آدرس فیسبوک:</div>
                                    <div class="info-value"><a target="_blank" href="https://facebook.com/{{$user->social_fb}}"> {{$user->social_fb}}</a></div>
                                </div>
                            </div>

                        </article>
                    </section>
                    <!--.box-wrapper-->
                </div>

            </div>
        </section>

        <section id="public-bottom-section" class="row">

            <article class="flex-row" style="margin-bottom: 100px;justify-content: space-between !important; flex-flow: row wrap ">
                @foreach($images as $image)
                {{--<div class="item">--}}
                    {{--<img src="{{asset($image->image_url)}}">--}}
                    {{--<div class="icons-pack">--}}
                        {{--<i href="{{asset($image->image_url)}}" data-featherlight="image" class="fa fa-search-plus"></i>--}}
                        {{--<a href="product.html" class="fa fa-eye"></a>--}}
                    {{--</div>--}}
                {{--</div>--}}

                    <div class="img-item" style="margin: 20px 3px !important;width: 30% !important;">
                        <div class="img-hover">
                            <h4>
                                <a href="public-profile.html" class="shooter-pack">
                                    <span class="camera-icn icn"></span>
                                    <img src="{{asset($image->user->avatar_url)}}" class="shooter-img img-circle">
                                    <span class="shooter-name">{{$image->user->first_name}} {{$image->user->last_name}}</span>
                                </a>
                            </h4>
                            <img src="{{asset($image->image_url)}}">
                        </div>
                        <div class="hover-links-wrapper">
                            <div class="hover-links">
                                <div class="effect-wrapper">
                                    <a href="" class="btn btn-default icn-btn"> <i class="like-icn icn"></i> </a>
                                    <a href="" data-toggle="modal" data-target="#cmnt-new-modal" class="btn btn-default icn-btn"> <i class="comment-icn icn"></i> </a>
                                    <a href="{{route('image/single',['id'=>$image->id])}}" class="btn btn-default icn-btn"> <i class="eye-icn icn"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </article>



            <article class="bottom-cloth">

                <div class="pagination-wrapper">
                    <ul class="pagination">
                        <li><span class="fa fa-angle-double-right"></span></li>
                        <li><span class="fa fa-angle-right"></span></li>
                        <li><a href="">۱</a></li>
                        <li class="active"><a href="">۲</a></li>
                        <li><a href="">۳</a></li>
                        <li><a href="">۴</a></li>
                        <li><span class="fa fa-angle-left"></span></li>
                        <li><span class="fa fa-angle-double-left"></span></li>
                    </ul>

                    <p class="item-count">
                        نمایش
                        ۱ تا ۱۲
                        از
                        ۱۴۰
                        تصویر
                    </p>
                </div>

            </article>
        </section>
    </main>
    <script type="text/javascript">

        $('#public-bottom-section .item i.fa-search-plus').featherlightGallery({
            targetAttr: 'href'
        });

    </script>
@endsection
