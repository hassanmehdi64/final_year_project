<?php

namespace App\Http\Controllers;
use App\Models\AddGallary;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public $filename;

   function index(){
    return view('Dashboard.gallery');
   }







   function store(Request $request)
   {
       $request->validate([
           'hostelName' => 'required',
           'location' => 'required',
           'imageFiles.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate each uploaded image.
       ]);

       $storeimages = [
           'hostelName' => $request->input('hostelName'),
           'location' => $request->input('location'),
       ];

       // Handle multiple image uploads
       if ($request->hasFile('imageFiles')) {
        $imageFiles = $request->file('imageFiles');
        $imagePaths = [];

        foreach ($imageFiles as $image) {
            $filename = $image->getClientOriginalName();
            $path = '/Gallaries';
            $image->move(public_path($path), $filename);
            $imagePaths[] = $filename;
        }

        $storeimages['imageFiles'] = json_encode($imagePaths);

           // Create a new gallery record.
           AddGallary::create($storeimages);
       }

       return redirect()->route('view-galleries')->with('messageupdate', 'Gallery Added Successfully');
   }



    function viewgallaris(){
     $gallaries =  AddGallary::all();
        return view('Dashboard.gallaries-list',compact('gallaries'));
    }




    function editgallary() {

        $gallaries = AddGallary::find(request('id'));

              return view('Dashboard.update-gallary' , compact('gallaries'));

          }



     public function updategallary($id, Request $request)
    {
        $request->validate([
            'hostelName' => 'required',
            'location' => 'required',
            'imageFiles.*' => 'nullable|image', // Use 'imageFiles.*' to validate each uploaded image.
        ]);

        $gallery = AddGallary::find($id);

        if (!$gallery) {
            return redirect()->back()->with('error', 'Gallery not found.');
        }

        $updateData = [
            'hostelName' => $request->input('hostelName'),
            'location' => $request->input('location'),
        ];

        // Handle multiple image uploads
        if ($request->hasFile('imageFiles')) {
            $imageFiles = $request->file('imageFiles');
            $imagePaths = [];

            foreach ($imageFiles as $image) {
                $filename = $image->getClientOriginalName();
                $path = '/Gallaries';
                $image->move(public_path($path), $filename);
                $imagePaths[] = $filename;
            }

            $updateData['imageFiles'] = json_encode($imagePaths);
        }

        // Update the gallery record.
        $gallery->update($updateData);

        return redirect()->route('view-galleries')->with('messageupdate', 'Gallery Updated Successfully');
    }





            function deletegallary(){

                AddGallary::destroy(request('id'));

                return back()->with('deletemessage' , 'Gallary Deleted Sucessfully');


            }
}
