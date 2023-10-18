@extends('Dashboard.master-layout')
@section('content')

{{-- New Users --}}

<h4 id="add-users">New Users</h4>

<div class="user-table">
  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <td>{{ $loop->index + 1 }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->role == 1 ? 'Admin' : 'Hostel Manager' }}</td>
        <td>{{ $user->status == 1 ? 'Active' : 'Not Active' }}</td>
        <td>
          <form action="/user-manage/{{$user->id}}" method="POST">
            @csrf
            <select name="status">
              <option value="">Choose Status</option>
              <option value="1">Activate</option>
              <option value="0">De-Activate</option>
            </select>
            <button>Update</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
