@extends('Dashboard.master-layout')
@section('content')
@if(session('message'))
<div style="background: blue">

{{session('message')}}
</div>
@endif

    <div class="dashboard">

        <a href="{{ route('add-hostel') }}">
            <div class="card card-add">
                <div class="icon">
                    <i class="ri-home-7-fill"></i>
                </div>
                <div class="name">Add Hostel</div>
            </div>
        </a>

        <a href="">
            <div class="card card-edit">
                <div class="icon">
                    <i class="ri-edit-box-fill"></i>
                </div>
                <div class="name">Edit Hostel</div>
            </div>
        </a>

        @if(auth()->user()->role  == 1)
        <a href="">
            <div class="card card-blog">
                <div class="icon">
                    <i class="ri-file-edit-fill"></i> <!-- Remix Icon for "Manage Blog" -->
                </div>
                <div class="name">Manage Blog</div>
            </div>
        </a>

        <a href="">
            <div class="card card-gallery">
                <div class="icon">
                    <i class="ri-image-fill"></i> <!-- Remix Icon for "Manage Gallery" -->
                </div>
                <div class="name">Manage Gallery</div>
            </div>
        </a>

        @endif

        <a href="{{ route('profile-setting') }}">
            <div class="card card-settings">
                <div class="icon">
                    <i class="ri-settings-2-fill"></i> <!-- Remix Icon for "Settings" -->
                </div>
                <div class="name">Settings</div>
            </div>
        </a>


@if(auth()->user()->role != 0)
        <a href="{{ route('users-manage') }}">
            <div class="card card-users">
                <div class="icon">
                    <i class="ri-shield-user-line"></i> <!-- Remix Icon for "Settings" -->
                </div>
                <div class="name">Manage Users</div>
            </div>
        </a>

@endif


        <a href="{{ route('profile-setting') }}">
            <div class="card card-profile">
                <div class="icon">
                    <i class="ri-user-follow-fill"></i>
                </div>
                <div class="name">Profile</div>
            </div>
        </a>


        <a href="">
            <div class="card card-messages">
                <div class="icon">
                    <i class="ri-message-2-fill"></i> <!-- Remix Icon for "Messages" -->
                </div>
                <div class="name">Messages</div>
            </div>
        </a>


        <a href="{{ route('logout') }}">
            <div class="card card-logout">
                <div class="icon">
                    <i class="ri-logout-box-line"></i>
                </div>
                <div class="name">Logout</div>
            </div>
        </a>
    </div>
@endsection
