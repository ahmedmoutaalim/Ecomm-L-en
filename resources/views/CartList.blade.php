@extends('master')

@section('content')
<div class=" custom-product" >

<div class="col-sm-10">
<div class="trending-wrapper">
    <h2>result for Products </h2>
    @foreach ($products as $item)
    <div class="row searched-item cart-list"> 
    <div class="col-sm-3">
        <a href="detail/{{$item->id}}">
            <img class="trending-image" src="{{$item->gallery}}" >
        
          </a>
    </div>
    <div class="col-sm-4">
       
          
           <div class="">
             <h3>{{$item->name}}</h3>
             <p>{{$item->description}}</p>
           </div>
        
    </div>
    <div class="col-sm-3">
     <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">remove from cart</a>
    </div>

   </div>
    @endforeach
</div>
</div>
</div>
@endsection

