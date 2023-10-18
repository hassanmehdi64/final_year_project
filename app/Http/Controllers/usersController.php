<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profileDetails;

class usersController extends Controller
{
   function index(){
    return view('Dashboard.HostelManagerPages.profile-view');
   }


   function store(Request $request)
   {
       // Validate input
       $validatedData = $request->validate([
           'name' => 'required',
           'email' => 'required|email',
           'phone' => 'required',
           'address' => 'required',
           'image' => 'required|file|mimes:png,jpg',
       ]);

       // Handle image upload
       if($request->hasfile('image')){

        $file =  $request->file('image');
        $filename =  $file->getClientOriginalName();

      
        $path = 'images'; 
    $file->move(public_path($path), $filename);

      
        profileDetails::create([
        "name" => request('name'),
        "email" => request('email'),
        "phone" => request('phone'),
        "address" =>  request('address'), 
        "profile_image" =>$filename,
    ]);

    return back()->with('message', 'Profile Updated Successfuly.');

}

    }
}
