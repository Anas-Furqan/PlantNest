@extends('layouts.adminlayout')

@section('admin')
<form action="{{URL::TO('/categoryinsert')}}" method="POST">
@csrf
<h3>Add New Category</h3>
<hr>

<select name="myname" class="form-control">

<option value="" disabled selected>Choose Categories</option>
<option value="indoor">Indoor</option>
<option value="Outdoor">Outdoor</option>
<option value="Flowering">Flowering</option>
<option value="Non-Flowering">Non-Flowering</option>
<option value="Succulents">Succulents</option>
<option value="Medicinal">Medicinal</option>

</select>

<button  type="submit" class="btn btn-info mt-3">Add Category </button>
</form>
@endsection