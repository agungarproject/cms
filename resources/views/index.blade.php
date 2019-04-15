<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.head')
</head>

<body>
  <header id="header">
  @include('layouts.header')
  </header>
  <!--/header-->
  <div class="slider">
    <div id="about-slider">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
          <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-slider" data-slide-to="1"></li>
          <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <img src="{{url('/assets/img/7.jpg')}}" class="img-responsive" alt="">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                <h2><span>Clean & Fully Modern Design</span></h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                <form class="form-inline">
                  <div class="form-group">
                    <button type="livedemo" name="Live Demo" class="btn btn-primary btn-lg" required="required">Live Demo</button>
                  </div>
                  <div class="form-group">
                    <button type="getnow" name="Get Now" class="btn btn-primary btn-lg" required="required">Get Now</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="item">
            <img src="{{url('/assets/img/6.jpg')}}" class="img-responsive" alt="">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
                <h2>Fully Responsive</h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.3s">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">
                <form class="form-inline">
                  <div class="form-group">
                    <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Live Demo</button>
                  </div>
                  <div class="form-group">
                    <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">Get Now</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{url('/assets/img/1.jpg')}}" class="img-responsive" alt="">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                <h2>Modern Design</h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                <form class="form-inline">
                  <div class="form-group">
                    <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Live Demo</button>
                  </div>
                  <div class="form-group">
                    <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">Get Now</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>

        <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
      </div>
      <!--/#carousel-slider-->
    </div>
    <!--/#about-slider-->
  </div>
  <!--/#slider-->

  <div id="feature">
    <div class="container">
      <div class="row">
        <div class="text-center">
          <h3>Features</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit<br>amet consectetur adipisicing elit</p>
        </div>
        <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="text-center">
            <div class="hi-icon-wrap hi-icon-effect">
              <i class="fa fa-laptop"></i>
              <h2>Fully Responsive</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="text-center">
            <div class="hi-icon-wrap hi-icon-effect">
              <i class="fa fa-heart-o"></i>
              <h2>Retina Ready</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="text-center">
            <div class="hi-icon-wrap hi-icon-effect">
              <i class="fa fa-cloud"></i>
              <h2>Easily Customize</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="text-center">
            <div class="hi-icon-wrap hi-icon-effect">
              <i class="fa fa-camera"></i>
              <h2>Quality Code</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="gallery">
    <div class="container">
      <div class="text-center">
        <h3>Gallery</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit<br>amet consectetur adipisicing elit</p>
      </div>
      <div class="row">
        <figure class="effect-chico">
          <div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
            <a href="{{url('/assets/img/work/1.jpg')}}" class="flipLightBox">
                        <img src="{{url('/assets/img/work/1.jpg')}}" class="img-responsive" alt="">
                        </a>
          </div>
        </figure>
        <figure class="effect-chico">
          <div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
            <a href="{{url('/assets/img/work/2.jpg')}}" class="flipLightBox">
                        <img src="{{url('/assets/img/work/2.jpg')}}" class="img-responsive" alt="">
                        </a>
          </div>
        </figure>
        <figure class="effect-chico">
          <div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
            <a href="{{url('/assets/img/work/3.jpg')}}" class="flipLightBox">
                        <img src="{{url('/assets/img/work/3.jpg')}}" class="img-responsive" alt="">
                        </a>
          </div>
        </figure>
        <figure class="effect-chico">
          <div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
            <a href="{{url('/assets/img/work/4.jpg')}}" class="flipLightBox">
                        <img src="{{url('/assets/img/work/4.jpg')}}" class="img-responsive" alt="">
                        </a>
          </div>
        </figure>
      </div>
    </div>
    <div class="gallery">
      <div class="container">
        <div class="row">
          <figure class="effect-chico">
            <div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
              <a href="{{url('/assets/img/work/5.jpg')}}" class="flipLightBox">
                            <img src="{{url('/assets/img/work/5.jpg')}}" class="img-responsive" alt="">
                            </a>
            </div>
          </figure>
          <figure class="effect-chico">
            <div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
              <a href="img/work/6.jpg" class="flipLightBox">
                            <img src="img/work/6.jpg" class="img-responsive" alt="">
                            </a>
            </div>
          </figure>
          <figure class="effect-chico">
            <div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
              <a href="img/work/7.jpg" class="flipLightBox">
                            <img src="img/work/7.jpg" class="img-responsive" alt="">
                            </a>
            </div>
          </figure>
          <figure class="effect-chico">
            <div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
              <a href="img/work/8.jpg" class="flipLightBox">
                            <img src="img/work/8.jpg" class="img-responsive" alt="">
                            </a>
            </div>
          </figure>
        </div>
      </div>
    </div>
  </div>
  <!--/#gallery-->

  <div class="parallax-window">
    <div class="col-md-6 col-md-offset-3">
      <div class="text-center">
        <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.2s">
          <h2>Parallax Landing Page</h2>
        </div>
        <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.6s">
          <p>In a elit in lorem congue varius Sed nec arcu<br> ullamcorp-er tellus ut dignissim nisi risus non tortor.
          </p>
        </div>
      </div>
    </div>
    <div class="sub-parallax">
      <div class="text-center">
        <div class="col-md-12">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.9s">
            <form class="form-inline">
              <div class="form-group">
                <button type="purchase" name="purchase" class="btn btn-primary btn-lg" required="required">Purchase</button>
              </div>
              <div class="form-group">
                <button type="subscribe" name="subscribe" class="btn btn-primary btn-lg" required="required">Subscribe Now</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/#parallax-window-->
<!--  
  <div id="pricing">
    <div class="container">
      <div class="text-center">
        <h3>Pricing Table</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
      </div>

      <div class="pricing-area text-center">
        <div class="row">
          <div class="col-sm-4 plan price-one wow fadeInDown" data-wow-offset="0" data-wow-delay="0.2s">
            <ul>
              <li class="heading-one">
                <h2>Start Up</h2>
                <span>$6/Month</span>
              </li>
              <li>5 Gb Disk Space</li>
              <li>1GB Dadicated Ram</li>
              <li>10 Addon Domain</li>
              <li>10 Email Account</li>
              <li>24/7 Support</li>
              <li class="plan-action">
                <a href="" class="btn btn-primary">Sign up</a>
              </li>
            </ul>
          </div>

          <div class="col-sm-4 plan price-two wow fadeInDown" data-wow-offset="0" data-wow-delay="0.6s">
            <ul>
              <li class="heading-two">
                <h2>Standard</h2>
                <span>$12/Month</span>
              </li>
              <li>10 Gb Disk Space</li>
              <li>2GB Dadicated Ram</li>
              <li>20 Addon Domain</li>
              <li>20 Email Account</li>
              <li>24/7 Support</li>
              <li class="plan-action">
                <a href="" class="btn btn-primary">Sign up</a>
              </li>
            </ul>
          </div>

          <div class="col-sm-4 plan price-three wow fadeInDown" data-wow-offset="0" data-wow-delay="0.9s">
            <img src="img/ri.png">
            <ul>
              <li class="heading-three">
                <h2>Premium</h2>
                <span>$24/Month</span>
              </li>
              <li>50 Gb Disk Space</li>
              <li>8GB Dadicated Ram</li>
              <li>Unlimited Addon Domain</li>
              <li>Unlimited Email Account</li>
              <li>24/7 Support</li>
              <li class="plan-action">
                <a href="" class="btn btn-primary">Sign up</a>
              </li>
            </ul>
          </div>

          <div class="col-sm-6 col-md-3 plan price-four wow fadeInLeft">
            <ul>
              <li class="heading-four">
                <h2>Basic</h2>
                <span>$3/Month</span>
              </li>
              <li>5 Gb Disk Space</li>
              <li>1GB Dadicated Ram</li>
              <li>10 Addon Domain</li>
              <li>10 Email Account</li>
              <li>24/7 Support</li>
              <li class="plan-action">
                <a href="" class="btn btn-primary">Sign up</a>
              </li>
            </ul>
          </div>

          <div class="col-sm-6 col-md-3 plan price-five wow fadeInLeft">
            <ul>
              <li class="heading-five">
                <h2>Standard</h2>
                <span>$6/Month</span>
              </li>
              <li>5 Gb Disk Space</li>
              <li>1GB Dadicated Ram</li>
              <li>10 Addon Domain</li>
              <li>10 Email Account</li>
              <li>24/7 Support</li>
              <li class="plan-action">
                <a href="" class="btn btn-primary">Sign up</a>
              </li>
            </ul>
          </div>

          <div class="col-sm-6 col-md-3 plan price-six wow fadeInRight">
            <img src="img/rib.png">
            <ul>
              <li class="heading-six">
                <h2>Premium</h2>
                <span>$12/Month</span>
              </li>
              <li>5 Gb Disk Space</li>
              <li>1GB Dadicated Ram</li>
              <li>10 Addon Domain</li>
              <li>10 Email Account</li>
              <li>24/7 Support</li>
              <li class="plan-action">
                <a href="" class="btn btn-primary">Sign up</a>
              </li>
            </ul>
          </div>

          <div class="col-sm-6 col-md-3 plan price-seven wow fadeInRight">
            <ul>
              <li class="heading-seven">
                <h2>Developer</h2>
                <span>$19/Month</span>
              </li>
              <li>5 Gb Disk Space</li>
              <li>1GB Dadicated Ram</li>
              <li>10 Addon Domain</li>
              <li>10 Email Account</li>
              <li>24/7 Support</li>
              <li class="plan-action">
                <a href="" class="btn btn-primary">Sign up</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--/pricing-area
  </div>
  <!--/#pricing-->
  

  <div id="our-team">
    <div class="container">
      <div class="text-center">
        <h3>Our Team</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit<br>amet consectetur adipisicing elit</p>
      </div>
      <div class="row">
        <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="text-center">
            <img src="img/team/1.png" alt="">
            <h2>John Doe</h2>
            <h4>Founder & CEO</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Fusce fermen tum neque a rutrum varius</p>
          </div>
        </div>
        <div class="col-md-4 wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="text-center">
            <img src="img/team/2.png" alt="">
            <h2>John Doe</h2>
            <h4>Creative Director</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Fusce fermen tum neque a rutrum varius</p>
          </div>
        </div>
        <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="text-center">
            <img src="img/team/3.png" alt="">
            <h2>John Smith</h2>
            <h4>Creative Director</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Fusce fermen tum neque a rutrum varius</p>
          </div>
        </div>
      </div>
    </div>
    <div class="team">
      <div class="container">
        <div class="row">
          <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
            <div class="text-center">
              <img src="img/team/team1.jpg" class="img-responsive" alt="">
              <h2>John Doe</h2>
              <h4>Founder & CEO</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Fusce fermen tum neque a rutrum varius</p>
            </div>
          </div>
          <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
            <div class="text-center">
              <img src="img/team/team2.jpg" class="img-responsive" alt="">
              <h2>John Doe</h2>
              <h4>Creative Director</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Fusce fermen tum neque a rutrum varius</p>
            </div>
          </div>
          <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
            <div class="text-center">
              <img src="img/team/team3.jpg" class="img-responsive" alt="">
              <h2>John Smith</h2>
              <h4>Creative Director</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Fusce fermen tum neque a rutrum varius</p>
            </div>
          </div>
          <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
            <div class="text-center">
              <img src="img/team/team4.jpg" class="img-responsive" alt="">
              <h2>John Smith</h2>
              <h4>Creative Director</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Fusce fermen tum neque a rutrum varius</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    @include('layouts.footer')
  </footer>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="{{asset('/assets/js/jquery-2.1.1.min.js')}}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/assets/js/parallax.min.js')}}"></script>
  <script src="{{asset('/assets/js/wow.min.js')}}"></script>
  <script src="{{asset('/assets/js/jquery.easing.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('/assets/js/fliplightbox.min.js')}}"></script>
  <script src="{{asset('/assets/js/functions.js')}}"></script>
 <script src="{{asset('/assets/contactform/contactform.js')}}')}}"></script>
</body>

</html>