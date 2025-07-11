@extends('layouts.adminlayout')

@section('admin')

<div class="card">
    <div class="card-header">
        <h3>Accessories Category Page</h3>
        <hr>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tr>
                <th>Name</th>
              
                <th>Action</th>
            </tr>
            @foreach($category as $items)
            <tr>
                <td>{{ $items-> Name }}</td>
               
                <td> 
                <a class="btn btn-danger" href="/deleteacc/{{$items->id}}">Delete</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection