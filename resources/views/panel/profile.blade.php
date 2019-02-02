@extends('panel.layouts.main')
@section('title')
    اطلاعات کاربری
@endsection
@section('breadtitle')
    اطلاعات کاربری
@endsection
@section('breadmenu')
    <li><a href="{{route('panel/dashboard')}}">اطلاعات کاربری</a></li>
@endsection
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>ویرایش اطلاعات کاربری</h5>
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
                          action="{{ route('panel/user/edit',['id' => $user->id]) }}"
                          method="post">
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
                            <label class="col-sm-2 control-label">نام</label>
                            <div class="col-sm-4">
                                <input name="first_name" type="text" placeholder="نام"
                                       class="form-control "
                                       value="{{ isset($user) ? $user->first_name : old('first_name') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">نام خانوادگی</label>
                            <div class="col-sm-4">
                                <input name="last_name" type="text" placeholder="نام خانوادگی"
                                       class="form-control m-b"
                                       value="{{isset($user) ? $user->last_name : old('last_name')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">ایمیل</label>
                            <div class="col-sm-4">
                                <input name="email" type="email" placeholder="ایمیل"
                                       class="form-control"
                                       value="{{ isset($user) ? $user->email : old('email') }}">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label ">شماره موبایل</label>
                            <div class="col-sm-4">
                                <input name="phone" type="tel" placeholder="شماره موبایل" class="form-control m-b"
                                       value="{{ $user->phone  }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">رمز عبور</label>
                            <div class="col-sm-4">
                                <input name="password" type="password" placeholder="رمز عبور"
                                       class="form-control" pattern="[A-Za-z0-9]{6,13}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">تکرار رمز عبور</label>
                            <div class="col-sm-4">
                                <input name="retype_password" type="password"
                                       placeholder="تکرار رمز عبور" class="form-control m-b">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">تصویر پروفایل</label>
                            <div class="col-sm-4">
                                <input name="avatar" type="file" class="form-control">
                                @isset($user)
                                    <img src="{{asset($user->avatar_url)}}" width="100px">
                                @endisset
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">شغل</label>
                            <div class="col-sm-4">
                                <input name="job" type="text" placeholder="شغل"
                                       class="form-control "
                                       value="{{$user->job }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">هنر اصلی</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="art_category">

                                    <option value="cinema"  {{$user->art_category == "cinema" ? "selected=\"selected\"" : ""}}>سینما</option>
                                    <option value="architecture" {{$user->art_category == "architecture" ? "selected=\"selected\"" : ""}}>معماری</option>
                                    <option value="music" {{$user->art_category == "music" ? "selected=\"selected\"" : ""}}>موسیقی</option>
                                    <option value="visual" {{$user->art_category == "visual" ? "selected=\"selected\"" : ""}}>هنر تجسمی</option>
                                    <option value="painting" {{$user->art_category == "painting" ? "selected=\"selected\"" : ""}}>هنر ترسیمی</option>
                                    <option value="performing" {{$user->art_category == "performing" ? "selected=\"selected\"" : ""}}>حرکات نمایشی</option>
                                    <option value="literature" {{$user->art_category == "literature" ? "selected=\"selected\"" : ""}}>ادبیات</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">تحصیلات</label>
                            <div class="col-sm-4">
                                <input name="education" type="text" placeholder="تحصیلات"
                                       class="form-control  m-b"
                                       value="{{ $user->education }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">شهر</label>
                            <div class="col-sm-4">
                                <input name="city" type="text" placeholder="شهر"
                                       class="form-control "
                                       value="{{$user->city  }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">آدرس</label>
                            <div class="col-sm-4">
                                <input name="address" type="text" placeholder="آدرس"
                                       class="form-control m-b"
                                       value="{{ $user->address }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">آدرس اینستاگرام (فقط نام کاربری خود در اینستاگرام را وارد کنید)</label>
                            <div class="col-sm-4">
                                <input name="instagram" type="text" placeholder="نام"
                                       class="form-control "
                                       value="{{ $user->social_in }}">
                            </div>
                        </div>
                            <div class="form-group">
                            <label class="col-sm-2 control-label">آدرس فیسبوک (فقط نام کاربری خود در فیسبوک را وارد کنید)</label>
                            <div class="col-sm-4">
                                <input name="facebook" type="text" placeholder="نام"
                                       class="form-control "
                                       value="{{ $user->social_fb  }}">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">

                                <button class="btn btn-lg btn-primary" type="submit">ذخیره</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>


    <script type="text/javascript">
        $(document).ready(function () {
            $(".metismenu li").removeClass("active");

            $('#user').addClass('active');

        });
    </script>
@endsection
