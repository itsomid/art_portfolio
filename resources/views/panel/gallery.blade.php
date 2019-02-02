@extends('panel.layouts.main')
@section('title')
    گالری عکس
@endsection
@section('breadtitle')
    گالری
@endsection
@section('breadmenu')
    <li><a href="{{route('panel/dashboard')}}">گالری</a></li>
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
                                    <img src="{{asset($image->image_url)}}" width="100px" height="100px">

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
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>افزودن عکس به گالری</h5>
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
                    <form role="form" class="form-horizontal" enctype="multipart/form-data"
                          action="{{ route('panel/image/add') }}" method="post">
                        @if( !is_null(session('error')) )
                            <div class="alert alert-danger">
                                <strong>{{ session('error') }}</strong>
                            </div>
                        @endif
                        @if( !is_null(session('message')) )
                            <div class="alert alert-success">
                                <strong>{{ session('message') }}</strong>
                            </div>
                        @endif
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="col-sm-2 control-label">نام عکس</label>
                            <div class="col-sm-4">
                                <input name="image_name" type="text" placeholder="نام عکس"
                                       class="form-control "
                                       value="" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">تصویر(حداکثر حجم عکس ۱ مگابایت)</label>
                            <div class="col-sm-4">
                                <input name="image" type="file" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">توضیحات عکس</label>
                            <div class="col-sm-4">
                                <textarea name="details" type="text" placeholder="توضیحات عکس"
                                       class="form-control"
                                          value="" ></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">آیا عکس به صورت شخصی ذخیره شود ؟ (عکس های شخصی در
                                دسترس عموم برای بازدید نیست)</label>
                            <div class="col-sm-4">
                                <div class="i-checks"><label class="">
                                        <div class="icheckbox_square-green" style="position: relative;">
                                            <input
                                                    type="checkbox" name="private" value=""
                                                    style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper"
                                                 style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                        <i></i> عکس خصوصی</label>
                                </div>
                            </div>
                        </div>


                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">

                                <button class="btn btn-lg btn-primary" type="submit">ذخیره عکس</button>
                            </div>
                        </div>

                    </form>
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

        });
    </script>
@endsection
