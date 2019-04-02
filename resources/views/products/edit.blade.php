<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
@extends('layouts.app')

@section('content')

<div class="col-md-9 col-lg-9 pull-left">
<h1 style="text-align: center; color: indigo;">Edit Details</h1>

<!-- Example row of columns -->
<div class="row col-sm-12 col-md-12 col-lg-12" >

    <form method="post" action="{{route('products.update', [$product->id]) }}" enctype="multipart/data">
  
   {{ csrf_field() }}

   <input type="hidden" name="_method" value="put">

    <div class="form-group">
    <label for="product-name">Location<span class="required">*</span></label>

    <input placeholder="{{$product->location}}"
            id="location"
            required
            name="location"
            spellcheck="false"
            class="form-control"
            
            />

    </div>

    <div class="form-group">
    <label for="product-name">Price<span class="required">*</span></label>

    <input placeholder="{{$product->price}}"
            id="price"
            required
            name="price"
            spellcheck="false"
            class="form-control"
            
            />

    </div>

    <div class="form-group">
            <label for="product-content">Description</label>
            <textarea placeholder="{{$product->description}}"
                style="resize:vertical"
                id="product-content"
                name="description"
                rows="5"
                spellcheck="false"
                class="form-control autosize-target text-left">
  
                </textarea>
    </div>


   <!--  <div class="form-group">
    <label for="product-name">Upload a Picture<span class="required">*</span></label>

    <input type="file" 
            id="image"
            name="image"
            required 
            
            />

    </div>
    -->
    
    
        <input type="submit" class="btn btn-primary" value="submit"/> 
 
    </form>

</div>
</div>
@endsection 