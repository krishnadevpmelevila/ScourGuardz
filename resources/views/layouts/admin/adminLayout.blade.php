
@section('script')

<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/jquery.datetimepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:400,500,700%7CNoto+Sans:400,700">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  @show
  @section('head')
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="page-loader">
      <div>
        <div class="page-loader-body">
          <div class="preloader-container">
            <svg class="item1" x="0px" y="0px" width="60px" height="60px" viewbox="0 0 60 60">
              <path d="M6.541,35.989c0.524,1.795,1.25,3.526,2.169,5.15l-2.618,3.302c-0.855,1.079-0.759,2.618,0.203,3.59l4.509,4.509 c0.972,0.972,2.511,1.058,3.59,0.203l3.28-2.597c1.688,0.972,3.484,1.731,5.353,2.265l0.492,4.221 c0.16,1.368,1.314,2.394,2.682,2.394h6.379c1.368,0,2.522-1.026,2.682-2.394l0.47-4.071c2.009-0.524,3.932-1.304,5.738-2.319 l3.174,2.511c1.079,0.855,2.618,0.759,3.59-0.203l4.509-4.509c0.972-0.972,1.058-2.511,0.203-3.59l-2.468-3.131 c1.026-1.774,1.827-3.665,2.362-5.642l3.804-0.438c1.368-0.16,2.394-1.314,2.394-2.682V26.18c0-1.368-1.026-2.522-2.394-2.682 l-3.751-0.438c-0.513-1.955-1.282-3.825-2.265-5.578l2.308-2.917c0.855-1.079,0.759-2.618-0.203-3.59l-4.499-4.499 c-0.972-0.972-2.511-1.058-3.59-0.203l-2.832,2.244c-1.838-1.079-3.804-1.902-5.866-2.458L35.52,2.394 C35.36,1.026,34.206,0,32.838,0h-6.379c-1.368,0-2.522,1.026-2.682,2.394l-0.427,3.665c-2.116,0.566-4.135,1.421-6.016,2.543 l-2.939-2.329c-1.079-0.855-2.618-0.759-3.59,0.203l-4.509,4.509c-0.972,0.972-1.058,2.511-0.203,3.59l2.458,3.11 c-0.983,1.774-1.731,3.665-2.223,5.631l-3.932,0.449c-1.368,0.16-2.394,1.314-2.394,2.682v6.379c0,1.368,1.026,2.522,2.394,2.682 L6.541,35.989z M29.653,18.732c5.813,0,10.547,4.734,10.547,10.547s-4.734,10.547-10.547,10.547 c-5.813,0-10.547-4.734-10.547-10.547S23.84,18.732,29.653,18.732z"></path>
            </svg>
            <svg class="item2" x="0px" y="0px" width="48px" height="48px" viewbox="0 0 48 48">
              <path d="M41.095,7.317l-3.366-2.842c-1.036-0.876-2.565-0.833-3.548,0.096l-1.859,1.742c-1.571-0.759-3.238-1.293-4.958-1.603 L26.84,2.146c-0.267-1.325-1.496-2.244-2.843-2.137l-4.392,0.374C18.26,0.5,17.202,1.601,17.159,2.958l-0.085,2.607 c-1.688,0.609-3.281,1.443-4.734,2.49L10.117,6.58C8.985,5.832,7.478,6.046,6.602,7.082L3.759,10.47 c-0.876,1.037-0.834,2.565,0.096,3.548L5.8,16.09c-0.673,1.517-1.154,3.11-1.432,4.744L1.59,21.401 c-1.325,0.267-2.244,1.496-2.137,2.842l0.374,4.392c0.118,1.346,1.218,2.404,2.575,2.447l3.003,0.096 c0.545,1.432,1.261,2.789,2.126,4.061l-1.678,2.532c-0.748,1.133-0.534,2.639,0.502,3.516l3.366,2.842 c1.037,0.876,2.565,0.833,3.548-0.096l2.201-2.062c1.443,0.673,2.96,1.175,4.52,1.475l0.609,3.013 c0.267,1.325,1.496,2.244,2.842,2.137l4.392-0.374c1.346-0.118,2.404-1.218,2.447-2.575l0.096-2.949 c1.603-0.566,3.12-1.336,4.52-2.287l2.426,1.603c1.133,0.748,2.639,0.534,3.516-0.502l2.842-3.366 c0.876-1.037,0.833-2.565-0.096-3.548l-1.956-2.073c0.716-1.517,1.24-3.12,1.539-4.766l2.671-0.545 c1.325-0.267,2.244-1.496,2.137-2.842l-0.374-4.392c-0.118-1.346-1.218-2.404-2.575-2.447l-2.682-0.085 c-0.556-1.56-1.304-3.035-2.233-4.402l1.464-2.201C42.345,9.711,42.131,8.194,41.095,7.317z M24.543,32.706 c-4.744,0.406-8.933-3.131-9.329-7.875c-0.406-4.744,3.131-8.933,7.875-9.329c4.744-0.406,8.933,3.131,9.329,7.875 C32.824,28.122,29.287,32.311,24.543,32.706z"></path>
            </svg>
            <svg class="item3" x="0px" y="0px" width="40px" height="40px" viewbox="0 0 40 40">
              <path d="M2.427,15.569c-1.346,0.139-2.383,1.271-2.394,2.629l-0.032,2.703c-0.021,1.357,0.983,2.511,2.329,2.682l1.988,0.256 c0.331,1.208,0.801,2.362,1.41,3.452l-1.282,1.581c-0.855,1.058-0.791,2.575,0.16,3.548l1.891,1.934 c0.951,0.972,2.468,1.079,3.548,0.246l1.592-1.229c1.122,0.663,2.308,1.186,3.548,1.549l0.214,2.052 c0.139,1.346,1.272,2.383,2.629,2.394l2.704,0.032c1.357,0.021,2.511-0.983,2.682-2.329l0.246-1.945 c1.346-0.331,2.629-0.833,3.847-1.496l1.496,1.207c1.058,0.855,2.575,0.791,3.548-0.16l1.934-1.891 c0.972-0.951,1.079-2.468,0.246-3.548l-1.144-1.485c0.705-1.175,1.25-2.426,1.624-3.74l1.774-0.182 c1.346-0.139,2.383-1.272,2.394-2.629l0.032-2.704c0.021-1.357-0.983-2.511-2.329-2.682l-1.731-0.224 c-0.331-1.304-0.823-2.565-1.464-3.74l1.079-1.325c0.855-1.058,0.791-2.575-0.16-3.548l-1.891-1.934 c-0.951-0.972-2.469-1.079-3.548-0.246l-1.293,0.994c-1.218-0.737-2.522-1.304-3.889-1.688l-0.171-1.678 c-0.139-1.346-1.271-2.383-2.629-2.394L18.68,0c-1.357-0.021-2.511,0.983-2.682,2.329l-0.214,1.667 c-1.41,0.363-2.767,0.919-4.028,1.645l-1.336-1.09c-1.058-0.855-2.575-0.791-3.548,0.16L4.927,6.615 c-0.972,0.951-1.079,2.468-0.246,3.548l1.143,1.475c-0.663,1.175-1.186,2.426-1.528,3.74L2.427,15.569z M19.877,12.513 c3.879,0.043,6.988,3.238,6.946,7.117c-0.043,3.879-3.238,6.988-7.117,6.946c-3.879-0.043-6.988-3.238-6.946-7.117 C12.803,15.58,15.998,12.471,19.877,12.513z"></path>
            </svg>
          </div>
        </div>
      </div>
    </div>
    <div class="page text-center text-md-left">
      <!-- Page Header-->
      <header class="page-head">
        <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-secondary" data-stick-up-clone="true" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-lg-stick-up-offset="252px">
            
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <button class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></button>
                <div class="rd-navbar-brand"><a class="brand-name" href="index.html"><h3><b> Scour <img style="width: 50px; height: 50px;" src="/images/Electronic_Devices_(105).jpg" alt="" srcset=""><br><h3 style="margin-top: -10px;"><b >&nbsp;&nbsp;  Gaurdz</b></h3></b></h3></div>
              </div>
              <div class="rd-navbar-collapse animated">
                <div class="rd-navbar-collapse-items">
                  <ul class="list-inline">
                    <li>
                      <div class="unit flex-row unit-spacing-xs">
                        <div class="unit-left"><span class="icon icon-primary fa-phone"></span></div>
                        <div class="unit-body">
                          <div class="title"><span class="small">CUSTOMER SUPPORT & SALES</span></div>
                          <h6><a href="tel:+919961234873">+91-9961234873</a></h6>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="unit flex-row unit-spacing-xs">
                        <div class="unit-left"><span class="icon icon-primary fa-map-marker"></span></div>
                        <div class="unit-body">
                          <div class="title"><span class="small">Address Info</span></div>
                          <h6><a href="#">Near NIMS Hospital, Nellikuzhy PO Kothamangalam</a></h6>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="unit flex-row unit-spacing-xs">
                        <div class="unit-left"><span class="icon icon-primary fa-clock-o"></span></div>
                        <div class="unit-body">
                          <div class="title"><span class="small">Opening hours </span></div>
                          <h6>24X7 Hours</h6>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="rd-navbar-collapse-items">
                <ul class="rd-navbar-nav">
                  <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
                  <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="about">About Us</a></li>
                  <li class="{{ Request::is('contacts') ? 'active' : '' }}"><a href="contacts">Contacts</a></li>
                  
                  <li class="{{ Request::is('book') ? 'active' : '' }}"><a href="book">Book Service</a></li>
                </ul>
                </div>
              </div>
            </div>
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle toggle-original" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <button class="rd-navbar-collapse-toggle toggle-original" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></button>
                <div class="rd-navbar-brand"></div>
              </div>
              <div class="rd-navbar-collapse animated toggle-original-elements">
                <div class="rd-navbar-collapse-items">
                  <ul class="list-inline">
                    <li>
                      <div class="unit flex-row unit-spacing-xs">
                        <div class="unit-left"></div>
                        <div class="unit-body">
                          
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="unit flex-row unit-spacing-xs">
                        <div class="unit-left"></div>
                        <div class="unit-body">
                          
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="unit flex-row unit-spacing-xs">
                        <div class="unit-left"></div>
                        <div class="unit-body">
                         
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="rd-navbar-collapse-items">
                  <ul class="list-inline list-inline-lg offset-top-0">
                    <li><a class="ioon icon-sm icon-silver-chalice fa-facebook" href="#"></a></li>
                    <li><a class="ioon icon-sm icon-silver-chalice fa-twitter" href="#"></a></li>
                    <li><a class="ioon icon-sm icon-silver-chalice fa-instagram" href="#"></a></li>
                    <li><a class="ioon icon-sm icon-silver-chalice fa-google-plus" href="#"></a></li>
                    <li><a class="ioon icon-sm icon-silver-chalice fa-pinterest-p" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="rd-navbar-inner">
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
                  <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="about">About Us</a></li>
                  <li class="{{ Request::is('contacts') ? 'active' : '' }}"><a href="contacts">Contacts</a></li>
                  
                  <li class="{{ Request::is('book') ? 'active' : '' }}"><a href="book">Book Service</a></li>
                  @auth
                  <li class="{{ Request::is('order') ? 'active' : '' }}"><a href="order">See Orders</a></li>
                  <li class="{{ Request::is('review') ? 'active' : '' }}"><a href="review">See Reviews</a></li>
                  @endauth
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
      @show
      @section('order')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    @yield('order')
</body>
</html>
@show
      @section('footer')
<!-- Page Footer-->
<footer class="page-footer page-footer-classic">
        <section class="section-75 section-sm-80 section-md-100 section-xl-150">
          <div class="container">
            <div class="row text-md-left row-55">
              <div class="col-md-6 col-xl-3 col-xxl-4"><h3 style="color: white;">Scour Gaurdz</h3>
                <p class="offset-top-20 offset-md-top-35 inset-xxl-right-30">We remain true to the same principles on which our company was founded over a hundred years ago: providing superior services to our clients, putting safety first, creating opportunities for our people.</p>
              </div>
              <div class="col-sm-6 col-md-3 col-xl-2 col-lg-3">
                
              </div>
              <div class="col-sm-6 col-md-3 col-xl-2 col-lg-3">
              <div class="inset-xl-right-30"><span class="small text-spacing-340 text-white text-uppercase font-weight-bold page-footer-classic-title">Contact us</span>
                  <ul class="list offset-top-30 text-left offset-md-top-40">
                    <li>
                      <div class="unit flex-row unit-spacing-xs">
                        <div class="unit-left"><span class="icon icon--school-bus-yellow fa-map-marker"></span></div>
                        <div class="unit-body"><a class="text-school-bus-yellow-white" href="#">Near NIMS Hospital, Nellikuzhy PO Kothamangalam<br class="d-none d-md-block"></a></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit flex-row unit-spacing-xs">
                        <div class="unit-left"><span class="icon icon--school-bus-yellow fa-phone"></span></div>
                        <div class="unit-body"><a class="text-school-bus-yellow-white" href="tel:#">646-325-0357</a></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit flex-row unit-spacing-xs">
                        <div class="unit-left"><span class="icon icon--school-bus-yellow fa-envelope"></span></div>
                        <div class="unit-body"><a class="text-school-bus-yellow-white" href="mailto:#">mail@demolink.org</a></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-xl-2 col-lg-5">
                
              </div>
              <div class="col-md-6 col-xl-3 col-xxl-2 col-lg-5">
                <div class="inset-xl-right-30"><span class="small text-spacing-340 text-white text-uppercase font-weight-bold page-footer-classic-title">Follow us</span>
                  <ul class="list-inline list-inline-lg offset-top-30 offset-md-top-40">
                    <li><a class="ioon icon-sm icon--school-bus-yellow-white fa-facebook" href="#"></a></li>
                    <li><a class="ioon icon-sm icon--school-bus-yellow-white fa-twitter" href="#"></a></li>
                    <li><a class="ioon icon-sm icon--school-bus-yellow-white fa-instagram" href="#"></a></li>
                    <li><a class="ioon icon-sm icon--school-bus-yellow-white fa-google-plus" href="#"></a></li>
                    <li><a class="ioon icon-sm icon--school-bus-yellow-white fa-pinterest-p" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section-25 bg-black-2">
          <div class="container">
            <div class="text-center">
              <div >
                <p class="small-xs"> ©  	<span class="copyright-year"></span> All rights reserved Scour Gaurdz |	Developed by <a href="https://roughbook.net">Rough Book Tech.</a>	.	
                </p>
              </div>
              
            </div>
          </div>
        </section>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="/js/core.min.js"></script>
    <script src="/js/script.js"></script>
  </body>
</html>
@show