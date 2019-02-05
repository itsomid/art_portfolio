<?php

namespace App\Http\Controllers\panel;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        return view('panel.profile',['user'=>$request->user()]);
    }

    public function save(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'unique:users,email,'.$id ,
            "phone" =>  "digits:11|unique:users,phone,$id",
            "password" => "nullable|min:6",
            "retype_password" => "same:password"
        ]);
        if ($validator->passes()) {
            $user = User::find($id);
            $user->phone = $request->input("phone");
            $user->first_name = $request->input("first_name");
            $user->last_name = $request->input("last_name");
            $user->job = $request->input("job");
            $user->education = $request->input("education");
            $user->city = $request->input("city");
            $user->address = $request->input("address");
            $user->social_in = $request->input("instagram");
            $user->social_fb = $request->input("facebook");
            $user->art_category = $request->input("art_category");
            $user->email = !is_null($request->input("email")) ? $request->input("email") : $user->email;
            $user->details = $request->input("details");
            $password = $request->input('password');
            if (!is_null($password)) {
                $user->password = bcrypt($password);
            }
            if ($request->has('avatar')) {
                $user->avatar_url = asset('storage/' . $request->file('avatar')->store('images', 'public'));
            }
            $user->save();
            return back()->with('message', 'اطلاعات با موفقیت ذخیره شد');
        }else {
            return back()->withInput()->with(['error' => implode(',', $validator->errors()->all()), 'new_user' => true]);
        }

    }
}
