@extends('layouts/app')
 @section('title')
  Offers - {{ $settings["general"]->site_title }} 
@endsection
 
@section('content')
      <div id="offers-page">
        

       
        <div class="content-box">
          <div class="row">
            <div class="col-md-10 offset-md-1">
          <h1>Sign Up To Notifications For Deals</h1>
          <form method="POST" action="/offers">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
              <label for="inputfname">First Name</label>
              <input id="inputfname" type="text" class="form-control form-control-lg @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus placeholder="John">

                @error('fname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
              <label for="inputlname">Last Name</label>
              <input id="inputlname" type="text" class="form-control form-control-lg @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus placeholder="Doe">

                @error('lname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
              <label for="inputemail">Email address</label>
              <input id="inputemail" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="john@gmail.com">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
              <label for="inputphone">Phone Number</label>
              <input id="inputphone" type="tel" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus placeholder="234-567-890">

                @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
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