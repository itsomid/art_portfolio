@extends('panel.layouts.main')
@section('title')
    گالری عکس
@endsection
@section('breadtitle')
    گالری عکس ها
@endsection
@section('breadmenu')
    <li><a href="{{route('panel/dashboard')}}">خانه</a></li>
    <li><a href="">گالری</a></li>
    <li><a href=""><strong>عکس ها</strong></a></li>
@endsection
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>گالری عکس های شما</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    @if( !is_null(session('image-delete')) )
                        <div class="alert alert-success">
                            <strong>{{ session('image-delete') }}</strong>
                        </div>
                    @endif
                    <div class="lightBoxGallery " style="display: flex;flex-flow: wrap;">
                        @foreach($images as $image)
                            <div style="position: relative">
                                <a  href="{{asset($image->image_url)}}" title="{{$image->name}}" data-gallery="">
                                    <img src="{{asset($image->image_url)}}" width="150px" height="150px">

                                </a>
                                {{--<a href="" class="btn btn-sm btn-white" style="position: absolute;right: 0px;top: 0px;"> <i class="fa fa-pencil"></i> </a>--}}

                                <a href="{{route('panel/image/edit/get',['id'=>$image->id])}}" class="btn btn-warning btn-circle" style="position: absolute;right: 0px;top: 0px;"><i class="fa fa-pencil"></i>
                                </a>
                            </div>

                    @endforeach

                    <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
                        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
                            <div class="slides"></div>
                            <h3 class="title"></h3>
                            <a class="prev">‹</a>
                            <a class="next">›</a>
                            <a class="close">×</a>
                            <a class="play-pause"></a>
                            <ol class="indicator"></ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function () {

            $('.file-box').each(function() {
                animationHover(this, 'pulse');
            });
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
            $(".metismenu li").removeClass("active");

            $('#gallery').addClass('active');
            $('#image').addClass('active');

        });
    </script>
@endsection
