@extends('master')

@section('content')
<div class="container" >
<div class="row">
    <div class="col-sm-6">
        <img class="detail-img" src="{{$product["gallery"]}}">
    </div>
    <div class="col-sm-6">
        <a href="/">Back</a>
        <h2>Product name : {{$product["name"]}}</h2>
        <h3>Category : {{$product["category"]}}</h3>
        <h3>Price : {{$product["category"]}}</h3>
        <h3>Description : {{$product["description"]}}</h3>

        <br><br>
        <button class="btn btn-primary" >Add to carte</button>
        <br><br>   
        <button class="btn btn-success" >Buy now</button>
        <br><br>    
    </div>

</div>
</div>
@endsection

