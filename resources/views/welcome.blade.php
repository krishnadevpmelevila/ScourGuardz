@extends('layouts.mainLayout')
@section('main')

<div class="swiper-container swiper-slider swiper-secondary" data-autoplay="3500" data-height="100vh" data-min-height="300px">
  <div class="swiper-wrapper text-center">
    <div class="swiper-slide" data-slide-bg="/images/kai.jpeg">
      <div class="swiper-slide-caption">
        <div class="container">
          <div class="row section-100-vh align-items-sm-center justify-content-sm-center">
            <div class="col-xxl-8 col-md-9" data-caption-animate="fadeInDown" data-caption-delay="200">
              <h1 class="text-black">Life's Busy We Can Help!</h1>
              <p class="h6 offset-top-30"> Forget about cleaning, We are here for you!</p>
              <div class="group"><a class="btn btn-primary btn-form" href="#">Our services</a><a class="btn btn-dark btn-form" href="/book">Get in touch</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-slide" data-slide-bg="/images/slide4.jpg">
      <div class="swiper-slide-caption">
        <div class="container">
          <div class="row section-100-vh align-items-sm-center justify-content-sm-center">
            <div class="col-xxl-8 col-md-9" data-caption-animate="fadeInDown" data-caption-delay="200">
              <h1 class="text-black">Clean Home. Professional Service. Fair Price.</h1>
              <p class="h6 offset-top-30">Our qualified team strives for ensuring your satisfaction, while offering the highest levels of professional service at affordable and competitive rates.</p>
              <div class="group"><a class="btn btn-primary btn-form" href="/about">Our services</a><a class="btn btn-dark btn-form" href="#">Get in touch</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-slide" data-slide-bg="/images/slide3.jpg">
      <div class="swiper-slide-caption">
        <div class="container">
          <div class="row section-100-vh align-items-sm-center justify-content-sm-center">
            <div class="col-xxl-8 col-md-9" data-caption-animate="fadeInDown" data-caption-delay="200">
              <h1 class="text-white">Wipe away your cleaning troubles</h1>
              <p class="h6 offset-top-30"> it is important that everything in the house is kept clean. If the house is not regularly cleaned then rubbish and dirt will build up.So we are here to help you</p>
              <div class="group"><a class="btn btn-primary btn-form" href="#">Our services</a><a class="btn btn-dark btn-form" href="#">Get in touch</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="swiper-button-prev"><span>Prev</span></div>
  <div class="swiper-button-next"><span>Next</span></div>
  <div class="custom-way-point custom-way-point-swiper animated" data-custom-scroll-to="custom-way-point">Scroll down</div>
</div>
<section class="section-75 section-md-120 section-lg-120 section-xl-150" id="custom-way-point">
  <div class="container text-left">
    <div class="row row-15 justify-content-sm-center">
      <div class="col-md-9 col-lg-6">
        <div class="box-info-custom" style="background-image: url(images/cdc-VRpjDw3WqqI-unsplash.jpg );">
          <div class="box-info-custom-inner">
            <h5 class="box-info-custom-title"><a href="#">Hi-Tech Home Cleaning</a></h5>
            <p>Our expert workers make your home clean and tidy</p>
          </div>
        </div>
      </div>
      <div class="col-md-9 col-lg-6">
        <div class="box-info-custom" style="background-image: url(images/gard.jpg );">
          <div class="box-info-custom-inner">
            <h5 class="box-info-custom-title"><a href="#">Landscape Setting</a></h5>
            <p>We are here to help you with top landscape setting services </p>
          </div>
        </div>
      </div>
      <div class="col-md-9 col-lg-6">
        <div class="box-info-custom" style="background-image: url(images/gp.jpg );">
          <div class="box-info-custom-inner">
            <h5 class="box-info-custom-title"><a href="#">Garden Planing</a></h5>
            <p>Our garden planning experts makes your garden a heaven</p>
          </div>
        </div>
      </div>
      <div class="col-md-9 col-lg-6">
        <div class="box-info-custom" style="background-image: url(images/dh.jpg );">
          <div class="box-info-custom-inner">
            <h5 class="box-info-custom-title"><a href="#">Domestic Help</a></h5>
            <p>Our honest workers helps you well in your all domestic needs </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-sm-center offset-top-60 offset-md-top-125 offset-lg-top-150">
      <div class="col-xl-12 col-md-8 col-lg-9">
        <div class="row row-30 align-items-xl-center justify-content-xl-between">
          <div class="col-xl-6"><img class="img-responsive" src="images/clean.jpg" alt="" width="735" height="460" />
          </div>
          <div class="col-xl-5">
            <h2>Let Our Professionals Work for Your Comfort!</h2>

            <p>We care Cleaning Services provides a competitive and cost-effective domestic cleaning service. Our satisfied customers can testify to this! We deliver a professional and comprehensive range of domestic cleaning services in an efficient and careful manner - always with the customer in mind.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-image-filter bg-image bg-image-fixed section-xxl" style="background-image: url(&quot;images/banner.jpg&quot;);">
  <div class="container filter-inner-wrap">
    <div class="row justify-content-sm-center text-center">
      <div class="col-sm-10 col-md-8 col-lg-6">
        <h2 class="text-white"><span class="small text-white">affordable repair solutions</span>High-Quality and Friendly<br class="d-none d-lg-block"> Services at Fair Prices
        </h2><a class="btn btn-default btn-form btn-default-white" href="/book">Contact us</a>
      </div>
    </div>
  </div>
</section>
<!--slider-->
<!--Slider-->
<section>

<h3 class="text-center">Give Your Feedbacks!</h3>

<div class="container">
    <div id="carouselContent" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
        
             @foreach($name as $feed)
            <div class="carousel-item {{ $loop->first ?  'active' : '' }} text-center p-4">
           
                <h5>{{$feed->name}}</h5>
                <h6>"{{$feed->feedback}}"</h6>  
            
            </div>
           
            @endforeach
            

        </div>
        <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

</section>

<!--Rating-->
<section class="container" id="review">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <form method="post">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Name</label>
      <input name="name" type="text" class="form-control" id="exampleFormControlInput1">
    </div>


    <div class="form-group">
      <label for="exampleFormControlTextarea1">Your Feedback</label>
      <textarea name="feedback" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group">
    <button class="btn btn-success" type="submit">Submit</button>
    </div>
  </form>




</section>


@endsection