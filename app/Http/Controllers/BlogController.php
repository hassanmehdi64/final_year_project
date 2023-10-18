<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddBlog;
use App\Models\addHostel;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

    public $filename;


    //ADD BLOG
function add_blog(){
    return view('Dashboard.add-blog');
}


//View BLOG
function view_blog(){

    $blogs =   AddBlog::all();
    return view('Dashboard.blog-view' , compact('blogs'));
}



    function store(Request $request)
    {



        // Validate input
        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publish_date' => 'required|date',
            'image' => 'required|file|mimes:png,jpg',
            'description' => 'required',
        ]);


        // Handle image upload
        if($request->hasfile('image')){

            $file =  $request->file('image');
            $filename =  $file->getClientOriginalName();

            $path = '/image';
            $file->move(public_path($path), $filename);
          AddBlog::create([
            "title" => request('title'),
            "author" => request('author'),
            "publish_date" => request('publish_date'),
            "image" => $filename,
            "description" => request('description'),
        ]);

        return back()->with('message', 'Blog Added Successfuly.');

    }

        return back()->with('message', 'Blog didnot added.');
    }



    function editblog() {

  $blog = AddBlog::find(request('id'));

        return view('Dashboard.update-blog' , compact('blog'));

    }



    function updateblog($id , Request $request) {

if($request->file('image')){
    $file =  $request->file('image');
    $this->filename =  $file->getClientOriginalName();

    $path = '/image';
    $file->move(public_path($path), $this->filename);
}


        AddBlog::where('id' , $id)->update([
            "title" => request('title'),
            "author" => request('author'),
            "publish_date" => request('publish_date'),
            "image" =>  $this->filename,
            "description" => request('description'),
        ]);

        return back()->with('message' , 'Blog Updated Successfully');


    // return back()->with('message' , 'Their is an error please try again');



        // return  request()->all();

    }



    function deleteblog(){

        AddBlog::destroy(request('id'));

        return back()->with('deletemessage' , 'Blog Deleted Sucessfully');


    }
}
