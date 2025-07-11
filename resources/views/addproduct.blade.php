@extends('layouts.adminlayout')

@section('admin')

<form action="{{URL::TO('/inserted')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h3>Add New Product</h3>
    <hr>
    <input type="text" placeholder="Product Name" class="form-control" name="pname"> 
    <input type="number" placeholder="Product Price" class="form-control mt-3" name="pprice"> 
    <input type="number" placeholder="Product Quantity" class="form-control  mt-3" name="pquantity">
    <input type="file" placeholder="Product Image" class="border" class="form-control  mt-3" name="pimage"> 
    <input type="text" placeholder="Product Details" class="form-control  mt-3" name="pdetails"> 

    <select class="form-control mt-3" name="procate" id="">
        <option value="" disabled selected>Choose Category For Products</option>

    @foreach($caterecord as $c)
<option value="{{$c->Category_Name}}">{{$c->Category_Name}}</option>
    @endforeach
    </select>

<button type="submit" class="btn btn-info mt-3">Add Product</button>


</form>

@endsection