<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\frontend\HostelsViewController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HostelController;
use App\Http\Controllers\HostelManager;
use App\Http\Controllers\usersController;
use App\Http\Controllers\UsersmanageController;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HostelsViewController::class, 'index']);
Route::get('/about', [HostelsViewController::class, 'about']);
Route::get('/gallery', [HostelsViewController::class, 'gallery']);
Route::get('/blog', [HostelsViewController::class, 'blog']);
Route::get('/contact', [HostelsViewController::class, 'contact']);


// auth system
Route::middleware('guest')->group(function (){
    Route::get('register' , [AuthController::class , 'registerform']);
    Route::post('register' , [AuthController::class , 'register'])->name('register');
    Route::get('login' , [AuthController::class , 'loginform']);
    Route::post('login' , [AuthController::class , 'dologin'])->name('login');
});

// auth system end


Route::middleware('auth')->group(function () {

//    manage user table
    Route::get('/users' , function(){
        return view('Dashboard.users' , ['users' => User::all()]);
    })->name('users-manage');


    // manage user post methoid
    Route::post('user-manage/{id}' , function ($id){

         User::where('id' , $id)->update([
            'status' => request('status')
        ]);

         return back()->with('message' , 'User Updated Successfully');

    });


    // user update hostel
    Route::get('user-manage-hostel' , function () {

$user   =   User::find(Auth::user()->id);

$hostel =   $user->addhostel()->get();

return view('Dashboard.user-update-hostel' , ['hostele' => $hostel]);


    });




    Route::get('my-dashboard' ,[DashboardController::class , 'dashboard'])->name('dashboard');
    Route::get('dashoard-home' ,[DashboardController::class , 'dashboard_home'])->name('dashboard_home');
    Route::get('add-hostel' , [DashboardController::class , 'index'])->name('add-hostel');
    Route::post('add-hostel' , [DashboardController::class , 'store'])->name('add-hostel');
    Route::get('hostels-list' , [DashboardController::class , 'hostels'])->name('hostels-list');

    Route::get('delete-hostel' , [HostelController::class , 'deletehostel'])->name('delete-hostel');
    Route::get('edit-hostel' , [HostelController::class , 'edithostel'])->name('edit-hostel');
    Route::post('updated-hostel' , [HostelController::class , 'updatedhostel'])->name('updated-hostel');


   //ADD Blogs
    Route::get('add-blog' , [BlogController::class , 'add_blog']);
    Route::post('add-blog' , [BlogController::class , 'store'])->name('add_blog');
    Route::get('view-blog' , [BlogController::class , 'view_blog'])->name('view_blog');

    Route::get('delete-blog' , [BlogController::class , 'deleteblog'])->name('delete-blog');
    Route::get('edit-blog' , [BlogController::class , 'editblog'])->name('edit-blog');
    Route::post('updated-blog/{id}' , [BlogController::class , 'updateblog'])->name('updated-blog');

   //ADD Gallery
    Route::get('add-gallery' , [GalleryController::class , 'index'])->name('add_gallery');
    Route::get('view-galleries' , [GalleryController::class , 'viewgallaris'])->name('view-galleries');
    Route::post('add-gallery' , [GalleryController::class , 'store']);

    Route::get('gallaries/edit/{id}' , [GalleryController::class , 'editgallary'])->name('editgallary');
    Route::get('delete-gallery', [GalleryController::class , 'deletegallary'])->name('deletegallary');
    Route::put('update-gallery/{id}' , [GalleryController::class , 'updategallary'])->name('update-gallery');


    // hostel routs
    Route::get('hostel' , [HostelController::class , 'hostels']);




// Profile
    Route::get('user-profile' , [usersController::class, 'index'])->name('profile-setting');
    Route::post('user-profile' , [usersController::class, 'store'])->name('profile-update');


 // Hostels manger routes
    Route::get('hostel/manager/profile' , [HostelManager::class, 'profile']);
    Route::get('hostel/manager/hostel-view' , [HostelManager::class, 'showhostel'])->name('showhostel');
    Route::get('hostel/manager/hostel-update/{id}' , [HostelManager::class, 'edit']);
    Route::get('hostel/manager/hostel-create' , [HostelManager::class, 'create']);
    Route::get('hostel/manager/settings' , [HostelManager::class, 'settings']);
    Route::get('logout' , [AuthController::class , 'logout'])->name('logout');
});




