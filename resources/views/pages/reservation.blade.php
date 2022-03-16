@extends('layouts/app')
 
 
@section('content')
      <div id="reservation-page">
        

       
        <div class="content-box">
          <div class="row">
            <div class="col-md-6">
          <h1>Get On The List</h1>
          <form>
            <div class="form-group">
              <label for="firstnameinput">First Name</label>
              <input type="text" name="fname" class="form-control" id="firstnameinput" placeholder="Billy">
            </div>
            <div class="form-group">
              <label for="lastnameinput">Last Name</label>
              <input type="text" name="lname" class="form-control" id="lastnameinput" placeholder="Rodriguez">
            </div>
            <div class="form-group">
              <label for="emailinput">Email address</label>
              <input type="email" class="form-control" name="email" id="emailinput" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="phoneinput">Phone Number</label>
              <input type="text" name="phone" class="form-control" id="phoneinput" placeholder="781-298-5788">
            </div>
            <div class="form-group">
              <label for="guestinput">How Many Guests</label>
              <select name="guests" class="form-control" id="guestinput">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            <div class="form-group">
              <label for="timeinput">What Time?</label>
              <select name="time" class="form-control" id="timeinput">
                <option value="6">6:00 PM</option>
                <option value="7">7:00 PM</option>
                <option value="8">7:00 PM</option>
                <option value="9">8:00 PM</option>
                <option value="10">10:00 PM</option>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary mb-2">Confirm</button>
            </div>
          </div>
           <div class="col-md-6">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, eveniet.</p>
        </div>
        </div>
       
      </div>
      
    
@endsection