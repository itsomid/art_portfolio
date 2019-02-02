<?php

namespace App\Http\Controllers\panel;

use App\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $images = Image::whereUserId(\Auth::user()->id)->get();
        return view('panel.gallery',['images'=>$images]);
    }

    public function add(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'image'=>'mimes:jpeg,jpg,png,gif|required|max:2000',
        ]);
        if ($validator->passes()){
            $image = new Image();
            $image->user_id = $request->user()->id;
            $image->name = $request->image_name;
            if ($request->has('private')){
                $image->private = 1;
            }
            $image->details = $request->details;
            if ($request->has('image')) {

                $image->image_url = asset('storage/' . $request->file('image')->store('images/gallery', 'public'));
            }
            $image->save();
            return back()->with('message', 'عکس با موفقیت ذخیره شد.');
        }
        else {
            return back()->withInput()->with(['error' => implode(',', $validator->errors()->all()), 'new_user' => true]);
        }
    }

    public function edit(Request $request,$id)
    {
        if ($request->isMethod('get')){

             $image = Image::find($id);

            return view('panel.image-edit',['image'=>$image]);
        }
        else{
            $validator = Validator::make($request->all(),[
                'image'=>'mimes:jpeg,jpg,png,gif|max:2000',
            ]);
            if ($validator->passes()){
                $image = Image::find($id);
                $image->name = $request->image_name;
                if ($request->private == "1")
                    $image->private = 1;
                else
                    $image->private = 0;


                $image->details = $request->details;
                if ($request->has('image')) {

                    $image->image_url = asset('storage/' . $request->file('image')->store('images/gallery', 'public'));
                }
                $image->save();
                return back()->with('message', 'عکس با موفقیت ویرایش شد.');
            }
            else {
                return back()->withInput()->with(['error' => implode(',', $validator->errors()->all()), 'new_user' => true]);
            }
        }


    }

    public function delete(Request $request,$id)
    {
        $image = Image::find($id);
//        $image->delete();
        return redirect()->route('panel/image/get')->with('image-delete', 'عکس با موفقیت حذف شد.');
        
    }
}
