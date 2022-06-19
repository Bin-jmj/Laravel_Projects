@extends('layout')

@section('content')
    <h1>Add new Restaurant</h1>
    <div class="col-sm-6">
        <form method="post" action="">
          @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name"  placeholder="Enter Name">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Address</label>
                <input type="text" class="form-control" name="address"  placeholder="Enter Adress">
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
   
@endsection