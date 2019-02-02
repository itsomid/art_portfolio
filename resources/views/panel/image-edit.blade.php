@extends('panel.layouts.main')
@section('title')
    ویرایش عکس
@endsection
@section('breadtitle')
    ویرایش عکس
@endsection
@section('breadmenu')
    <li><a href="{{route('panel/dashboard')}}">ویرایش</a></li>
@endsection
@section('content')


    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>ویرایش عکس</h5>
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
                          action="{{ route('panel/image/edit/save',['id'=>$image->id]) }}" method="post">
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
                                       value="{{$image->name}}" required>

                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">تصویر(حداکثر حجم عکس ۱ مگابایت)</label>
                            <div class="col-sm-4">
                                <input name="image" type="file" class="form-control" >
                                @isset($image)
                                    <img src="{{asset($image->image_url)}}" width="100px">
                                @endisset
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">توضیحات عکس</label>
                            <div class="col-sm-4">
                                <textarea name="details" type="text" placeholder="توضیحات عکس"
                                       class="form-control"
                                          value="" >{{$image->details}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">آیا عکس به صورت شخصی ذخیره شود ؟ (عکس های شخصی در
                                دسترس عموم برای بازدید نیست)</label>
                            <div class="col-sm-4">
                               <select name="private">
                                   <option {{$image->private? "selected":""}} value="1">بله</option>
                                   <option {{!$image->private? "selected":""}} value="0">خیر</option>
                               </select>
                            </div>
                        </div>


                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">

                                <button class="btn btn-lg btn-primary" type="submit">ذخیره عکس</button>
                                <a href="{{route('panel/image/delete',['id'=>$image->id])}}" class="btn btn-lg btn-danger" type="submit">حذف عکس</a>
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
