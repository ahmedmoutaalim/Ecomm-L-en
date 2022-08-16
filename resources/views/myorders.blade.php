@extends('master')

@section('content')
<div class=" custom-product" >

<div class="col-sm-10">
<div class="trending-wrapper">
    <h2>My Orders </h2>

    @foreach ($orders as $item)
    <div class="row searched-item cart-list"> 
    <div class="col-sm-3">
        <a href="detail/{{$item->id}}">
            <img class="trending-image" src="{{$item->gallery}}" >
        
          </a>
    </div>
    <div class="col-sm-4">
       
          
           <div class="">
             <h3>Name : {{$item->name}}</h3>
             <p>Description : {{$item->description}}</p>
             <p>Address : {{$item->adress}}</p>
             <p>Status : {{$item->status}}</p>
             {{-- <p>{{$item->payment_status}}</p> --}}
             <p>Payement methode : {{$item->payment_method}}</p>
           </div>
        
    </div>
 

   </div>
    @endforeach
</div>
</div>
</div>
@endsection

