@extends('layouts.app')

@section('title')
Contact Us - {{$settings["general"]->site_title}} 
@endsection




@section('content')
    <div id="contact-page">
      
      <div class="content-box">
        <div class="row">
          <div class="col-md-6">
            <h1>Contact Us</h1>
            <h3>Address</h3>
            <p>{{ $settings["general"]->address_1 }} {{ $settings["general"]->address_2 }}<br>
          {{ $settings["general"]->city }},  {{ $settings["general"]->zipcode }}</p>
            <h3>Phone Number</h3>
            <p>{{ $settings["general"]->phone_number }}</p>
          </div>
          <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d57484.2583944921!2d-80.32445740955438!3d25.77828659958588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x88d9b9c51c3acb3b%3A0x89b217f0062a218d!2sMiami%20Burger%20King!3m2!1d25.778216699999998!2d-80.2893781!4m0!5e0!3m2!1sen!2sde!4v1648804556689!5m2!1sen!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
@endsection