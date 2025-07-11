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
                <th>Quantity</th>
                <th>Image</th>
                <th>Category</th>
                <th>Details</th>
                <th>Action</th>
            </tr>
            @foreach($product as $items)
            <tr>
                <td>{{ $items-> Name }}</td>
                <td>{{ $items-> Price }}</td>
                <td>{{ $items-> Quantity }}</td>

                <td>
<img src="  {{ '../'.$items-> Image }}" width="80px" class="rounded-circle" height="70px" alt="">

                   
                </td>
                <td>{{ $items-> Cat_Name }}</td>
                <td>{{ $items-> Details }}</td>
                <td><a href="/productupdate/{{$items->id}}" class="btn btn-info">Update</a> 
                <a class="btn btn-danger" href="/productdelete/{{$items->id}}">Delete</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection