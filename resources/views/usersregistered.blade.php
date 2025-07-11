@extends('layouts.adminlayout')

@section('admin')

<div class="card">
    <div class="card-header">
        <h3>Users Registered</h3>
        <hr>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tr>
                <th>User Name</th>
                <th>Contact Number</th>
                <th>Email ID</th>
                <th>Password</th>
                <th>Confirm Password</th>
                <th>Action</th>
            </tr>
            @foreach($users as $u)
            <tr>
                <td>{{ $u-> UserName }}</td>
                <td>{{ $u-> ContactNumber }}</td>
                <td>{{ $u-> Email }}</td>
                <td>{{ $u-> Pass }}</td>
                <td>{{ $u-> ConfirmPass }}</td>
                <td><a class="btn btn-danger" href="/deleteuser/{{$u->id}}">Delete</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection