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

      <article class="flex-row">
         <div class="img-itm">
            <a href="gallery.html">
               <img class="img-responsive img-circle" src="assets/images/gallery/action-active-activity.jpg">
               <h3>لورم ایپسوم</h3>
            </a>
         </div>
         <div class="img-itm">
            <a href="gallery.html">
               <img class="img-responsive img-circle" src="assets/images/gallery/man-on-bridge.jpeg">
               <h3>لورم ایپسوم</h3>
            </a>
         </div>
         <div class="img-itm">
            <a href="gallery.html">
               <img class="img-responsive img-circle" src="assets/images/gallery/mountain-guy.jpeg">
               <h3>لورم ایپسوم</h3>
            </a>
         </div>
         <div class="img-itm">
            <a href="gallery.html">
               <img class="img-responsive img-circle" src="assets/images/gallery/piano-blur.jpg">
               <h3>لورم ایپسوم</h3>
            </a>
         </div>
      </article>
   </section>



@endsection
