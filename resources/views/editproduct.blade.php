<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    

<div class="container">


<form action="{{URL::TO('/product/' . $edit->id)}}" method="POST">
    @csrf
    <h3>Update Products</h3>
    <hr>
    <input type="text" placeholder="Product Name" value="{{$edit->Name}}" class="form-control" name="pname"> 
    <input type="number" placeholder="Product Price" value="{{$edit->Price}}" class="form-control mt-3" name="pprice"> 
   <br>
    <h3>Current Image</h3>

   <img src="{{'../'.$edit->Image}}" width="40%" height="200px" style="border:1px solid black"  alt="">
    <input type="number" placeholder="Product Quantity" value="{{$edit->Quantity}}" 
    class="form-control  mt-3" name="pquantity">
    <input type="text" placeholder="Product Details" value="{{$edit->Details}}" class="form-control  mt-3" name="pdetails"> 

    <select class="form-control mt-3" name="procate" id="">
        <option value="" disabled selected>Choose Category For Products</option>

    
@foreach($category as $c)
<option value="{{$c->Category_Name}}">{{$c->Category_Name}}</option>
@endforeach
</select>

<button type="submit" class="btn btn-info mt-3">Update Product</button>


</form>

</div>



</body>
</html>