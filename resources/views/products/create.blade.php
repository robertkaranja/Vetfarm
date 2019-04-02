@extends('layouts.app')

@section('content')
<!-- The justified navigation menu is meant for single line per list item.
     Multiple lines will require custom code not provided by Bootstrap. -->

<!-- Jumbotron
<div class="form-group">
    <label for="product-name">Name<span class="required">*</span></label>

    <input placeholder="Enter Name"
            id="product-name"
            required
            name="name"
            spellcheck="false"
            class="form-control"
            
            />

    </div>
 -->
<div class="col-md-9 col-lg-9 pull-left">
<h1 style="text-align: center; color: indigo;">Post New Product</h1>

<!-- Example row of columns -->
<div class="row col-sm-12 col-md-12 col-lg-12" >

    <form method="post" action="{{route('products.store') }}" enctype="multipart/data">
    {{ csrf_field() }}

    

    

    <div class="form-group">
    <label for="product-name">Location<span class="required">*</span></label>

    <input placeholder="Enter Name"
            id="location"
            required
            name="location"
            spellcheck="false"
            class="form-control"
            
            />

    </div>

    <div class="form-group">
    <label for="product-name">Price<span class="required">*</span></label>

    <input placeholder="Enter Name"
            id="price"
            required
            name="price"
            spellcheck="false"
            class="form-control"
            
            />

    </div>

    <div class="form-group">
            <label for="product-content">Description</label>
            <textarea placeholder="Enter Description"
                style="resize:vertical"
                id="product-content"
                name="description"
                rows="5"
                spellcheck="false"
                class="form-control autosize-target text-left">
  
                </textarea>
    </div>


     <div class="form-group">
    <label for="product-name">Upload a Picture<span class="required">*</span></label>

    <input type="file" 
            id="image"
            name="image"
            required 
            
            />

    </div>
    
    
    
        <input type="submit" class="btn btn-primary" value="submit"/> 
 
    </form>

</div>
</div>
<!--
<div class="col-sm-3 col-md-3 col-lg-3 pull-right">

   <div classs="sidebar-module">
    <h3> Actions </h3>
    <ol class="list-unstyled">
    <li> <a href="/companies"> My Companies </a> </li>
    </ol>
   </div>
    
</div>
-->
@endsection 