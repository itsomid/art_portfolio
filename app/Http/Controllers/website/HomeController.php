<?php

namespace App\Http\Controllers\website;

use App\Image;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function getGallery()
    {
        $users =  User::with('image')->get();
        return view('website.gallery',['users'=>$users]);
    }


    public function index()
    {

        $users =  User::all();
        $images = Image::with('user')->paginate(9);
        return view('website.home',['users'=>$users,'images'=>$images]);
    }



    public function getProfile(Request $request,$id)
    {
        $user = User::find($id);
        $images = Image::whereUserId($id)->get();
//        $images = Image::all();
        return view('website.single_user_profile',['user'=>$user,'images'=>$images]);
    }

    public function allProfile()
    {

        return view('website.users_profile',['users'=> User::all()]);
    }
    public function getImage($id)
    {
        $image = Image::with('user')->find($id);
         $images = Image::orderByRaw("RAND()")->get();
        return view('website.single-image',['image'=>$image,'images'=>$images]);

    }

    public function getArt($name)
    {

        if ($name == "all")
            $users_images = User::with('image')->get();
        else
         $users_images = User::with('image')->where('art_category',$name)->get();
//        return $users_images[0]->image;
       return view('website.main_art',['users_images'=>$users_images,'art_category'=>$name]);

    }


}
