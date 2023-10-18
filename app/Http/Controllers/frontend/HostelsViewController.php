<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\AddGallary;
use Illuminate\Http\Request;

class HostelsViewController extends Controller
{
    public function index(){
        return view('frontend.index');
    }


    public function gallery(){

        $gallaries =  AddGallary::all();
        return view('frontend.gallery' , ['gallaries' => $gallaries]);
    }



    public function contact(){
        return view('frontend.contact');
    }



    function blog(){
        return view('frontend.blog');
    }


    public function about(){
        return view('frontend.about');
            }


}
