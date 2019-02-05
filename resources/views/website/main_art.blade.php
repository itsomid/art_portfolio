@extends('website.layouts.main')
@section('title')
    هنرمندی
@endsection
@section('content')
    <main id="search-page-wrapper" style="background-image: url('/images/search-background.jpg');">
        <section class="container-fluid" id="search-page">
            <section class="row">
                <aside class="col-xs-12 col-md-3">
                    <div id="side-sort" class="sort-wrapper part-wrapper " data-spy="affix" data-offset-top="50">
                        <h3>نمایش عکس بر اساس</h3>
                        <ul>
                            <li class="{{Request::path() === 'art/literature'? "active":""}}">
                                <a href="{{route('art',['name'=>'literature'])}}">
                                    <span class="sort-option active">ادبیات</span>
                                    <span class="eye-icn icn active"></span>
                                </a>
                            </li>
                            <li class="{{Request::path() === 'art/performing'? "active":""}}">
                                <a href="{{route('art',['name'=>'performing'])}}" >
                                <span class="sort-option">حرکات نمایشی</span>
                                <span class="comment-icn icn"></span>
                                </a>
                            </li>
                            <li class="{{Request::path() === 'art/cinema'? "active":""}}">
                                <a href="{{route('art',['name'=>'cinema'])}}" >
                                <span class="sort-option">سینما</span>
                                <span class="like-icn icn"></span>
                                </a>
                            </li>
                            <li class="{{Request::path() === 'art/architecture'? "active":""}}">
                                <a href="{{route('art',['name'=>'architecture'])}}" >
                                <span class="sort-option">معماری</span>
                                <span class="new-icn icn"></span>
                                </a>
                            </li>
                            <li class="{{Request::path() === 'art/music'? "active":""}}">
                                <a href="{{route('art',['name'=>'music'])}}" >
                                <span class="sort-option">موسیقی</span>
                                <span class="download-icn icn"></span>
                                </a>
                            </li>
                            <li class="{{Request::path() === 'art/visual'? "active":""}}">
                                <a href="{{route('art',['name'=>'visual'])}}" >
                                <span class="sort-option">هنر تجسمی</span>
                                <span class="download-icn icn"></span>
                                </a>
                            </li>
                            <li class="{{Request::path() === 'art/painting'? "active":""}}">
                                <a href="{{route('art',['name'=>'painting'])}}" >
                                <span class="sort-option">هنر ترسیمی</span>
                                <span class="download-icn icn"></span>
                                </a>
                            </li>
                            <li class="{{Request::path() === 'art/all'? "active":""}}">
                                <a href="{{route('art',['name'=>'all'])}}" >
                                    <span class="sort-option">تمام هنرها</span>
                                    <span class="download-icn icn"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>
                <article class="col-xs-12 col-md-9">
                    <div class="part-wrapper container-fluid">
                        <section class="main-top-part row">
                            @if($art_category == 'cinema')
                                <h1 > سینما</h1>
                            @elseif($art_category == 'architecture')
                                <h1 > معماری</h1>
                            @elseif($art_category == 'music')
                                <h1 > موسیقی</h1>
                            @elseif($art_category == 'visual')
                                <h1> هنر تجسمی</h1>
                            @elseif($art_category == 'painting')
                                <h1> هنر ترسیمی</h1>
                            @elseif($art_category == 'performing')
                                <h1> حرکات نمایشی</h1>
                            @else
                                <h1> ادبیات</h1>
                            @endif


                        </section>
                        <section class="main-main-part row">
                            @foreach($users_images as $user)
                                @foreach($user->image as $image)
                            <article class="col-sm-6 col-md-4">
                                <div class="item-box">
                                    <img class="img-responsive main-img" src="{{asset($image->image_url)}}"/>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href class="shooter-pack">
                                                <span class="camera-icn icn"></span>
                                                <img src="{{asset($image->user->avatar_url)}}" class="shooter-img img-circle"/>
                                                <span class="shooter-name">{{$image->user->first_name}} {{$image->user->last_name}}</span>
                                            </a>
                                        </h4>
                                        <div class="item-option">
                                            <span class="eye-icn icn"></span>
                                            <span>124</span>
                                        </div>
                                    </div>
                                    <a href="{{route('image/single',['id'=>$image->id])}}" class="item-box-hover">
                                        <span title="جزئیات تصویر" class="popular-eye-icn icn"></span>
                                    </a>
                                </div>
                            </article>
                                @endforeach
                        @endforeach
                        </section>
                        <section class="row main-bottom">
                            <ul class="pagination">
                                <li><span class="fa fa-angle-double-right"></span></li>
                                <li><span class="fa fa-angle-right"></span></li>
                                <li><a href>۱</a></li>
                                <li class="active"><a href>۲</a></li>
                                <li><span class="fa fa-angle-left"></span></li>
                                <li><span class="fa fa-angle-double-left"></span></li>
                            </ul>


                        </section>

                    </div>
                </article>


            </section>
        </section>
    </main>
@endsection
