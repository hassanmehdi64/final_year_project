<?php

namespace App\Http\Controllers;

use App\Models\addHostel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    function dashboard() {

        return view('Dashboard.master-layout');
    }


    function dashboard_home() {

        return view('Dashboard.dashboard');
    }

    function index() {

        if(Auth::user()->role == 0){

            if(addHostel::where('user_id' , Auth::user()->id)->first()){
                return back()->with('message' , 'Hostel Already Exist! Please Edit It');
            }
        }

        $addhostel = 'add hostel';
        return view('Dashboard.add-hostel' , compact('addhostel'));
    }


    function store(Request $request)
    {

        if(Auth::user()->role == 0){

            addHostel::where('user_id' , Auth::user()->id)->first();
            return redirect('hostel/manager/hostel-view')->with('message' , 'You Have ALready Created Hostel Please Edit It');

        }


        $request->validate([
            "email" => 'required|unique:add_hostels'
        ]);


        if( $request->hasfile('hostel_image')){


  $file = $request->file('hostel_image');

  $filename = $file->getClientOriginalName();

  $path = '/hostels';

  $file->move(public_path($path), $filename);


        $addhostel = new addHostel;
        $addhostel->name = $request['name'];
        $addhostel->location = $request['location'];
        $addhostel->hostel_manager_name = $request['hostel_manager_name'];
        $addhostel->phone = $request['phone'];
        $addhostel->mobile_number = $request['mobile_number'];
        $addhostel->email = $request['email'];
        $addhostel->gender = $request['gender'];
        $addhostel->hostel_rent = $request['hostel_rent'];
        $addhostel-> $filename;


        $addhostel->save();

        return redirect()->back()->with('message', 'New Hostel added successfully');
    }
}





        function hostels(){

            $hostels =   addHostel::all();
            return view('Dashboard.hostels-list' , compact('hostels'));
        }



}
