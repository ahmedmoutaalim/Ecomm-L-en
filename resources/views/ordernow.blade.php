@extends('master')

@section('content')
<div class=" custom-product" >

<div class="col-sm-10">

    <table class="table">
     
        <tbody>
          <tr>
          
            <td>Amount</td>
            <td>$ {{$total}}</td>
         
          </tr>
          <tr>
       
            <td>Tax</td>
            <td>$ 0</td>
        
          </tr>
          <tr>
           
            <td>Delivery</td>
            <td>$ 10</td>
          
          </tr>
          <tr>
           
            <td>Total Amount</td>
            <td>{{$total + 10}}</td>
          
          </tr>
        </tbody>
      </table>
      <div>
        <form>
            <div class="form-group">
              <label class="form-label">tape your adress</label>
              <textarea type="email" class="form-control"  placeholder="enter your email"></textarea>
     
            </div>
            <div class="form-group">
              <label  class="form-label">Payment method</label>  <br><br>
              <input type="radio" name="payment" ><span> Online payment</span> <br><br>
              <input type="radio" name="payment" ><span>EMI payment  </span> <br><br>
              <input type="radio" name="payment" ><span> payment on delivery</span>  <br><br>
             
         
            
            </div>
            <button type="submit" class="btn btn-primary">Order now</button>
          </form>
      </div>
</div>
</div>
@endsection

