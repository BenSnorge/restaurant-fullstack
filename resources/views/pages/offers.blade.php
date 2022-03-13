@extends('layouts/app')
 
 
@section('content')
      <div id="offers-page">
        

       
        <div class="content-box">
          <div class="row">
            <div class="col-md-10 offset-md-1">
          <h1>Sign Up To Notifications For Deals</h1>
          <form>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
              <label for="firstnameinput">First Name</label>
              <input type="text" class="form-control" name="fname" id="firstnameinput" placeholder="John">
              </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
              <label for="lastnameinput">Last Name</label>
              <input type="text" name="lname" class="form-control" id="lastnameinput" placeholder="Doe">
            </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
              <label for="emailinput">Email address</label>
              <input type="email" class="form-control" name="email" id="emailinput" placeholder="name@example.com">
              </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
              <label for="phoneinput">Phone Number</label>
              <input type="text" name="phone" class="form-control" id="phoneinput" placeholder="781-298-5788">
            </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, corporis.</p>
            </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
              <button type="submit" class="btn btn-primary mb-2">Confirm</button>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    
@endsection