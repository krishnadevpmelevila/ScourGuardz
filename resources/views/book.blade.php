@extends('layouts.mainLayout')
@section('main')
<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <form method="post" enctype="multipart/form-data" style="color: black; font-size: 15px;">
    @csrf
    <h2>Book Now</h2>
    <div  class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="first">Name</label>
          <input name="name" type="text" class="form-control" placeholder="" id="first">
        </div>
      </div>
      




      <div class="col-md-6">
        <div class="form-group">
          <label for="last">Address</label>
          <input name="address" type="text" class="form-control" placeholder="" id="last">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>


    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="company">Landmark</label>
          <input name="landmark" type="text" class="form-control" placeholder="" id="company">
        </div>


      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">

        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input name="phone" type="tel" class="form-control" id="phone" placeholder="phone">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->


    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="email">Email address</label>
          <input name="email" type="email" class="form-control" id="email" placeholder="email">
        </div>
      </div>
      <div class="col-md-6">

        <div class="form-group">
        <label for="birthday">Date to clean:</label>
        <input type="date" value="20" id="date" name="finalDate">
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
	  <div class="form-group">
          <label for="company">Approx. Area of property (in Sq.feet)</label>
          <input name="area" type="text" class="form-control" placeholder="" id="company">
        </div>
        

      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->


    <label for="contact-preference">When is the best time of day to reach you?</label>
    <div class="radio">
      <label>
        <input  type="radio" name="contactPreference" id="contact-preference" value="Morning" checked>Morning
      </label>
    
    
      <label>
        <input  type="radio" name="contactPreference" id="contact-preference" value="Noon" >Afternoon
      </label>
    
	
      <label>
        <input type="radio" name="contactPreference" id="contact-preference" value="Evening" >Evening
      </label>
    </div>
	<label>
	  Enter your requirement
	  </label>
	  <div class="pb-3">
      
        <textarea name="requirement" rows="4" cols="20"  id="contact-preference" value="pm" checked></textarea>
      
    </div>
    
    


    <button type="submit" class="mb-3 btn btn-primary">Submit</button>
  </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="/js/book.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>


@endsection