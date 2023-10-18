<?php

namespace App\Http\Controllers;

use App\Models\AddGallary;
use App\Models\addHostel;
use Illuminate\Http\Request;

class HostelController extends Controller
{


    function edithostel(){

  $hostel = addHostel::find(request('id'));

  return view('Dashboard.update-hostel' , compact('hostel'));
    }


    function updatedhostel(Request $request) {

        addHostel::where('id' , $request->id)->update([
       "name" => $request['name'],
       "location" => $request['location'],
       "hostel_manager_name" => $request['hostel_manager_name'],
       "phone" => $request['phone'],
       "mobile_number"	 => $request['mobile_number'],
       "email" => $request['email'],
       "gender" => $request['gender'],
       "hostel_rent" => $request['hostel_rent'],
       "hostel_image" => 'hostel_image',
        ]);



        return redirect(route('hostels-list'))->with('message' , 'Updated Successfuy');

    }



    function deletehostel(){
        addHostel::destroy(request('id'));
        return back()->with('deletemessage' , 'Hostel Deleted Successfully');
    }





}
