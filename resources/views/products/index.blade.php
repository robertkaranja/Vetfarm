@extends('layouts.app')

@section('content')

<div class="jumbotron">
<h4 style="text-align: center"><strong>Availlable Products</strong></h4>
<div class="row">
    <a href="/products/create" class="pull-right btn btn-success">Post a Product </a> 
</div>

<br>

      @if(count($products) > 0)

              @foreach($products as $product)



<h4 style="margin-left: 70px; color: blue;">{{$product->username}}</h4>
<img class="img-rounded" style="width: 200px; float: left; margin-right: 50px;" src="images/vet1.jpg" />
    
 


<p><strong>Price: {{$product->price}}/=</strong></p>
 
<p style="color: green;"><strong>Location: {{$product->location}}</strong></p>
 
<p>
  <button class="btn btn-default" id="button">View More Details</button>
  @if(Auth::user()->id == $product->user_id)
    

    <a href="/products/{{$product->id}}/edit" class=" btn btn-primary">Edit Details </a> 

    <a href="" class="btn btn-danger"  onclick="
                          var result =confirm('Are you sure you want to delete Company')
                          if(result) {
                              event.preventDefault();
                              document.getElementById('delete-form').submit();

                            }">

                            Remove Product
                            </a>

      <form id="delete-form" action="{{ route('products.destroy', [$product->id]) }}"
                method="POST" style="display: none;">

                <input type="hidden" name="_method" value="delete">
                {{ csrf_field() }}
      </form>
       @endif 
</p>

   

<p> 

</p>
 
 <div class="bg-modal">
    <div class="modal-content">
    <div class="close" style="font-size: 42px;">+</div>
    
      
      <h4>Robert Karanja</h4>
      <img class="img-rounded" src="/images/an1.jpg" style="width: 150px; length: 150px;"></br>

      <p><strong>Mobile: 0728 564 211 </strong></p>

      <h4 style="color: green"><u>Description</u></h4>

      <p><strong>{{$product->description}}</strong></P>
    </div>
</div>


<script  type="text/javascript">

            document.getElementById('button').addEventListener('click',
            function(){
                document.querySelector('.bg-modal').style.display = 'flex'
            });

            document.querySelector('.close').addEventListener('click',
            function(){
                document.querySelector('.bg-modal').style.display = 'none'
            });

</script>

@endforeach

@endif



<!-- Javascript starts here-->


            
@endsection 