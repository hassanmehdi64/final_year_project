
@extends('Dashboard.master-layout')
@section('content')

<div class="user-container">
    <div class="user-content">
        <h1 id="profile-update-Heading">Profile Update</h1>
        <form id="profileForm" action="{{ route('profile-update') }}"  method="POST">
@csrf
            <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="name" required>
            </div>


            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
            </div>


            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>

            <div class="form-group">
                <label for="profileImage">Profile Image:</label>
                <input type="file" id="profileImage" name="profileImage" required>
            </div>

            <button type="submit" id="updateButton">Update Profile</button>
        </form>
    </div>
</div>



@endsection

