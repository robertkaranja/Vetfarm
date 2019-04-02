
@extends('layouts.app')

@section('content')

<div class="jumbotron">
<h4 style="text-align: center"><strong>Availlable Products</strong></h4>

<div class="row">
    <a href="/products/create" class="pull-right btn btn-success">Post a Product </a> 
</div>

<h4>Robert Karanja</h4>
<img class="img-rounded" style="width: 200px; float: left; margin-right: 10px;" src="images/vet1.jpg" />

<p>Freshian Kshs 57,000/=</p>
 
<p style="color: blue;">Location: Othaya</p>

<p>
    <button class="btn btn-default" id="button">View More Details</button>
</p>

<div style=" float: center">

</div>
  <p class="lead"></p>
 <!-- <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>-->
</div>

<!-- Example row of columns
<div class="row">
<a href="#" class="pull-right btn btn-success"> Add project </a> 

</div> -->
</div>

<div class="bg-modal">
    <div class="modal-content">
    <div class="close" style="font-size: 42px;">+</div>
    
      
      <h4>Robert Karanja</h4>
      <img class="img-rounded" src="/images/an1.jpg" style="width: 150px; length: 150px;"></br>

      <p><strong>Mobile: 0728 564 211 </strong></p>

      <h4 style="color: green"><u>Description</u></h4>

      <p><strong>This is a brief description of the animal.</strong></P>
    </div>
</div>


<!-- Javascript starts here-->
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
@endsection 