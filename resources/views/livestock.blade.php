@extends('layouts.app')

@section('content')
<div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
                <div class="panel panel-primary">
                <div class="panel-heading">Companies <a style="margin-left: 300px" class=" btn btn-success" href="/companies/create"> Create Company </a> </div>
                <div class="panel-body">

                <ul class="list-unstyled">
                @foreach($products as $product)
                <li class="list-group-item"><a href="/companies/{{ $company->id}}"> {{ $product->price}}</a><li>
                @endforeach
                </ul>

                <div>
                </div>
</div>
@endsection 