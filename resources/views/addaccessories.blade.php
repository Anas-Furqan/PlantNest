@extends('layouts.adminlayout')

@section('admin')

<form action="{{URL::TO('/insertedAccessories')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h3>Add New Accessories</h3>
    <hr>
    <input type="text" placeholder="Accessories Name" class="form-control" name="pname"> 
    <input type="number" placeholder="Accessories Price" class="form-control mt-3" name="pprice"> 
    <input type="file" placeholder="Accessories Image" class="border" class="form-control  mt-3" name="pimage"> 
    <input type="text" placeholder="Accessories Details" class="form-control  mt-3" name="pdetails"> 

    <select class="form-control mt-3" name="procate" id="">
        <option value="" disabled selected>Choose Category For Accessories</option>

    @foreach($sub as $c)
<option value="{{$c->Name}}">{{$c->Name}}</option>
    @endforeach
    </select>

<button type="submit" class="btn btn-info mt-3">Add Accessories</button>


</form>

@endsection