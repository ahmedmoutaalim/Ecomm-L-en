@extends('master')

@section('content')
<div class="container custom-Login" >
    <div class="row ">  
        <div class="col-sm-4 col-sm-offset-4" >
            <form action="register" method="POST">
                @csrf
                <div class="form-group">
                <label for="exampleInputEmail1">User name</label>
                <input type="text" name="name" class="form-control"  placeholder="user name">
               
              </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
           
                <button type="submit" class="btn btn-primary">Register</button>
              </form>
        </div>
    </div>
</div>
@endsection

