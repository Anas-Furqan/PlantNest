@extends('layouts.adminlayout')

@section('admin')

<div class="card">
    <div class="card-header">
        <h3>Product Page</h3>
        <hr>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Category</th>
                <th>Purpose</th>
                <th>Action</th>
            </tr>
            @foreach($product as $items)
            <tr>
                <td>{{ $items-> Name }}</td>
                <td>{{ $items-> Price }}</td>

                <td>
<img src="  {{ '../'.$items-> Image }}" width="80px" class="rounded-circle" height="70px" alt="">

                   
                </td>
                <td>{{ $items-> Category }}</td>
                <td>{{ $items-> Purpose }}</td>
                <td><a href="/accessupdate/{{$items->id}}" class="btn btn-info">Update</a>  
                <a class="btn btn-danger" href="/accessdelete/{{$items->id}}">Delete</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection