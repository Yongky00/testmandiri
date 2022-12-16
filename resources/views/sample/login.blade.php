@extends('sample.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">





<form action="{{ route('logins.store') }}" method="POST">
    @csrf
  
     <div class="row">
     <div class="col-xs-6 col-sm-6 col-md-6">
     <h4>Register</h4>
     <hr>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Username:</strong>
                <input type="text" name="username" class="form-control" placeholder="username">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" class="form-control"  name="name" placeholder="name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <input type="text"class="form-control"  name="address" placeholder="address">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="date" name="bod" class="form-control" placeholder="bod">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" class="form-control"  name="email" placeholder="email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
     </div>  
    </div>
   
</form>

        </div>

        <div class="pull-right">

            

        </div>

    </div>

</div>

   



   



@endsection