@extends('website.layouts.main')
@section('title')
   هنرمندی
@endsection
@section('content')
    <div id="cmnt-new-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">هنرمندی</h4>
                </div>
                <div class="modal-body">

                    <p class="modal-txt">نظر خود را ثبت کنید:</p>

                    <form class="custom-form" >
                        <div class="form-group">
                            <input type="text" class="form-control custom-form-control" id="fullname" name="fullname" placeholder="نام و نام خانوادگی">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control custom-form-control" id="user-email" name="user-email" placeholder="ایمیل">
                        </div>
                        <div class="form-group">
                            <textarea  rows="3" name="user-msg" id="user-msg" class="form-control custom-form-control" placeholder="نظر شما"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default btn-custom-link3 custom-form-control">
                            <span>ثبت</span>
                        </button>
                    </form>
                </div>
                <!--<div class="modal-footer">-->
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>-->
                <!--</div>-->
            </div>

        </div>
    </div>

    <section id="photoCarousel" class="carousel slide" data-ride="carousel" data-interval="1000000" data-pause="false">
        <!-- Indicators -->
        <ol class="carousel-indicators">
        {{--<li ng-repeat="p in photos" data-target="#photoCarousel" data-slide-to="{{}}" ng-class="{'active' : $first}"></li>--}}
            <li data-target="#photoCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#photoCarousel" data-slide-to="1"></li>
            <li data-target="#photoCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active first-time" style="background-image: url('/images/gallery/mountain-guy.jpg')">

                <div class="carousel-caption">
                    <h3>
                        <a href="public-profile.html" class="shooter-pack">
                            <span class="camera-icn icn"></span>
                            <img src="{{$users[0]->avatar_url}}" class="shooter-img img-circle"/>
                            <span class="shooter-name">{{$users[0]->first_name}} {{$users[0]->last_name}}</span>
                        </a>
                    </h3>
                    <p>
                        رضا مرادی با اصالتی آذری در روستای کردکندی، شهرستان کبودرآهنگ متولد شد. پدر وی کشاورز بود و زمانی که وی ۳ ساله بود به تهران مهاجرت کرد. دوران کودکی و نوجوانی را در یک خانه اجاره‌ای کوچک در محله دروازه غار سپری کرد. او در مدرسه صادقیه اسلامی در کوچه گمرک تحصیلات ابتدایی خود را به پایان رساند. پرستویی با پس‌انداز کردن یازده هزار تومان خانه‌ای در حوالی ترمینال جنوب خرید. مدتی به ورزش علاقه نشان داد و دروازه‌بان تیم کارگران بود. پس از این زمان به مرکز رفاه نازی‌آباد رفت و شروع به آموختن تئاتر کرد. پرویز پرستویی در سال ۱۳۶۰ و زمانی که ۲۶ سال سن داشت به عنوان منشی در دادگستری تهران مشغول به کار شد، امّا پس از مدتی به خاطر علاقهٔ وافر به تئاتر رفت و تا پایان در آنجا مشغول به کار شد.
                    </p>
                    <a href="{{route('profile/single',['id'=>1])}}" class="btn btn-default btn-custom-link"> مشاهده بیشتر </a>
                </div>
            </div>
            <div class="item first-time" style="background-image: url('/images/gallery/coffee-black.jpg');">
                <div class="carousel-caption">
                    <h3>
                        <a href="/profile/3" class="shooter-pack">
                            <span class="camera-icn icn"></span>
                            <img src="{{$users[2]->avatar_url}}" class="shooter-img img-circle"/>
                            <span class="shooter-name">{{$users[2]->first_name}} {{$users[2]->last_name}}</span>
                        </a>
                    </h3>
                    <p>
                        مهسا وحدت با اصالتی آذری در روستای کردکندی، شهرستان کبودرآهنگ متولد شد. پدر وی کشاورز بود و زمانی که وی ۳ ساله بود به تهران مهاجرت کرد. دوران کودکی و نوجوانی را در یک خانه اجاره‌ای کوچک در محله دروازه غار سپری کرد. او در مدرسه صادقیه اسلامی در کوچه گمرک تحصیلات ابتدایی خود را به پایان رساند. پرستویی با پس‌انداز کردن یازده هزار تومان خانه‌ای در حوالی ترمینال جنوب خرید. مدتی به ورزش علاقه نشان داد و دروازه‌بان تیم کارگران بود. پس از این زمان به مرکز رفاه نازی‌آباد رفت و شروع به آموختن تئاتر کرد. پرویز پرستویی در سال ۱۳۶۰ و زمانی که ۲۶ سال سن داشت به عنوان منشی در دادگستری تهران مشغول به کار شد، امّا پس از مدتی به خاطر علاقهٔ وافر به تئاتر رفت و تا پایان در آنجا مشغول به کار شد.
                    </p>
                    <a href="/profile/3" class="btn btn-default btn-custom-link"> مشاهده بیشتر </a>
                </div>
            </div>
            <div class="item first-time" style="background-image: url('/images/gallery/sky-beauty.jpg');">
                <div class="carousel-caption">
                    <h3>
                        <a href="/profile/4" class="shooter-pack">
                            <span class="camera-icn icn"></span>
                            <img src="{{$users[3]->avatar_url}}" class="shooter-img img-circle"/>
                            <span class="shooter-name">{{$users[3]->first_name}} {{$users[3]->last_name}}</span>
                        </a>
                    </h3>
                    <p>
                        نگین صحت با اصالتی آذری در روستای کردکندی، شهرستان کبودرآهنگ متولد شد. پدر وی کشاورز بود و زمانی که وی ۳ ساله بود به تهران مهاجرت کرد. دوران کودکی و نوجوانی را در یک خانه اجاره‌ای کوچک در محله دروازه غار سپری کرد. او در مدرسه صادقیه اسلامی در کوچه گمرک تحصیلات ابتدایی خود را به پایان رساند. پرستویی با پس‌انداز کردن یازده هزار تومان خانه‌ای در حوالی ترمینال جنوب خرید. مدتی به ورزش علاقه نشان داد و دروازه‌بان تیم کارگران بود. پس از این زمان به مرکز رفاه نازی‌آباد رفت و شروع به آموختن تئاتر کرد. پرویز پرستویی در سال ۱۳۶۰ و زمانی که ۲۶ سال سن داشت به عنوان منشی در دادگستری تهران مشغول به کار شد، امّا پس از مدتی به خاطر علاقهٔ وافر به تئاتر رفت و تا پایان در آنجا مشغول به کار شد.
                    </p>
                    <a href="/profile/4" class="btn btn-default btn-custom-link"> مشاهده بیشتر </a>
                </div>
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" data-target="#photoCarousel" data-slide="prev">
            <i class="fa fa-chevron-circle-left dir-icn dir-icn-left"></i>
            <span class="sr-only">قبلی</span>
        </a>
        <a class="right carousel-control" data-target="#photoCarousel" data-slide="next">
            <i class="fa fa-chevron-circle-right dir-icn dir-icn-right"></i>
            <span class="sr-only">بعدی</span>
        </a>
    </section>
    <main id="down-page-bg" >
        <section id="popular-items" style="margin: 30px 0 80px 0">
            <div class="head-row">
                <!--<div class="side-line side-line-top"></div>-->
                <!--<div class="side-line side-line-bot"></div>-->
                <h1>
                    <i class="popular-eye-icn icn icn-right1"></i>
                    <i class="popular-eye-icn icn icn-right2"></i>
                    <i class="popular-eye-icn icn icn-right3"></i>
                    دسته بندی ها
                    <i class="popular-eye-icn icn icn-left1"></i>
                    <i class="popular-eye-icn icn icn-left2"></i>
                    <i class="popular-eye-icn icn icn-left3"></i>
                </h1>
            </div>

            <section class="flex-row" style="justify-content: space-around !important;">
                <article class="cat-item-wrapper">
                    <a href="{{route('art',['name'=>'painting'])}}" class="cat-item">

                        <i class="fa fa-paint-brush" style="font-size: 20px"></i>
                        <h4>
                            هنر ترسیمی
                        </h4>
                    </a>
                </article>
                <article class="cat-item-wrapper">
                    <a href="{{route('art',['name'=>'visual'])}}" class="cat-item">
                        <i class="inspire-icn icn"></i>
                        <h4>
                            هنر تجسمی
                        </h4>
                    </a>
                </article>
                <article class="cat-item-wrapper">
                    <a href="{{route('art',['name'=>'music'])}}" class="cat-item">
                        <i class="music-icn icn"></i>
                        <h4>
                            موسیقی
                        </h4>
                    </a>
                </article>
                <article class="cat-item-wrapper">
                    <a href="{{route('art',['name'=>'architecture'])}}" class="cat-item">
                        <i class="seasons-icn icn"></i>
                        <h4>
                            معماری
                        </h4>
                    </a>
                </article>
                <article class="cat-item-wrapper">
                    <a href="{{route('art',['name'=>'cinema'])}}" class="cat-item">

                        <i class="fa fa-film" style="font-size: 20px"></i>
                        <h4>
                            سینما
                        </h4>
                    </a>
                </article>
                <article class="cat-item-wrapper">
                    <a href="{{route('art',['name'=>'performing'])}}" class="cat-item">
                        <i class="masks-icn icn"></i>
                        <h4>
                            حرکات نمايشي
                        </h4>
                    </a>
                </article>
                <article class="cat-item-wrapper">
                    <a href="{{route('art',['name'=>'literature'])}}" class="cat-item">
                        <i class="fa fa-book" style="font-size: 20px"></i>
                        <h4>
                            ادبیات
                        </h4>
                    </a>
                </article>
            </section>
        </section>
    </main>
    <section id="popular-items" style="margin: 30px 0 100px 0" >
        <div class="head-row">
            <div class="side-line side-line-top"></div>
            <div class="side-line side-line-bot"></div>
            <h1>
                <i class="popular-eye-icn icn icn-right1"></i>
                <i class="popular-eye-icn icn icn-right2"></i>
                <i class="popular-eye-icn icn icn-right3"></i>
                محبوب ترین تصاویر
                <i class="popular-eye-icn icn icn-left1"></i>
                <i class="popular-eye-icn icn icn-left2"></i>
                <i class="popular-eye-icn icn icn-left3"></i>
            </h1>
        </div>

        <article class="flex-row">
            @foreach($images as $image)
                <div class="img-item">
                    <div class="img-hover">
                        <h4>
                            <a href="{{route('profile/single',['id'=>$image->user->id])}}" class="shooter-pack">
                                <span class="camera-icn icn"></span>
                                <img src="{{$image->user->avatar_url}}" class="shooter-img img-circle"/>
                                <span class="shooter-name">{{$image->user->first_name}} {{$image->user->last_name}}</span>
                            </a>
                        </h4>
                        <img src="{{$image->image_url}}"/>
                    </div>
                    <div class="hover-links-wrapper">
                        <div class="hover-links">
                            <div class="effect-wrapper">
                                <a href class="btn btn-default icn-btn"> <i class="like-icn icn"></i> </a>
                                <a href data-toggle="modal" data-target="#cmnt-new-modal" class="btn btn-default icn-btn"> <i class="comment-icn icn"></i> </a>
                                <a href="{{route('image/single',['id'=>$image->id])}}" class="btn btn-default icn-btn"> <i class="eye-icn icn"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
        </article>

        <div id="popular-items-ending">
            <a href="{{route('art',['name'=>'all'])}}" class="btn btn-default btn-custom-link2">مشاهده موارد بیشتر </a>
        </div>

    </section>



    <section id="photographer" class="home-bot">
        <div class="head-row">
            <div class="side-line side-line-top"></div>
            <div class="side-line side-line-bot"></div>
            <h1>
                <i class="popular-eye-icn icn icn-right1"></i>
                <i class="popular-eye-icn icn icn-right2"></i>
                <i class="popular-eye-icn icn icn-right3"></i>
                هنرمندان برگزیده
                <i class="popular-eye-icn icn icn-left1"></i>
                <i class="popular-eye-icn icn icn-left2"></i>
                <i class="popular-eye-icn icn icn-left3"></i>
            </h1>
        </div>

        <!-- Swiper -->
        <div id="photographer-slider" class="swiper-container photographer-swiper">
            <div class="swiper-wrapper">
                @foreach($users as $user)
                    <figure class="swiper-slide swiper-item" data-background="/images/photographer/mahsa-vahdat.jpg"
                            style="background-image: url('{{$user->avatar_url}}');">
                        <h4>
                           {{$user->first_name}} {{$user->last_name}}
                        </h4>
                        <a href="{{route('profile/single',['id'=>$user->id])}}">
                            مشاهده رزومه و گالری
                            <span class="contact-icn icn"></span>
                        </a>
                    </figure>
                @endforeach

            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </section>
@endsection
