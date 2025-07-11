@extends('layouts.adminlayout')

@section('admin')
<form action="{{URL::TO('/insertedsub')}}" method="POST">
@csrf
<h3>Add New Category</h3>
<hr>

<select name="catname" class="form-control">

<option value="" disabled selected>Choose Categories</option>
<option value="soil">Soil</option>
<option value="Pesticides">Pesticides</option>
<option value="Spades">Spades</option>
<option value="Fertilizers">Fertilizers</option>

</select>

<button  type="submit" class="btn btn-info mt-3">Add Category </button>
</form>
@endsection