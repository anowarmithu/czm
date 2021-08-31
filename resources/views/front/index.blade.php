@extends('front.layouts.main')

@section('title', 'Center for Zakat Management')
@section('content')

<div class=" container-fluid banner-carousel banner-carousel-1 mb-0">
    <div class="banner-carousel-item" style="background-image:url(images/slider-main/slider1.jpg)">
      <div class="slider-content">
          <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-12 text-center">
                      <a href="#" class="slider btn btn-primary" style="margin-top:80%">Around 2000 deserving students get Genius Scholarship this year</a>
                  </p>
                </div>
            </div>
          </div>
      </div>
    </div>

    <div class="banner-carousel-item" style="background-image:url(images/slider-main/slider2.jpg)">
      <div class="slider-content">
          <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-12 text-center">
                      <a href="#" class="slider btn btn-primary" style="margin-top: 40%">Mr. M A Mannan, MP, Honorable Minister, Ministry of Planning, GoB inaugurated 7th Zakat Fair as Chief Guest</a>
                  </p>
                </div>
            </div>
          </div>
      </div>
      <div></div>
    </div>

    <div class="banner-carousel-item" style="background-image:url(images/slider-main/slider3.jpg)">
      <div class="slider-content">
          <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-12 text-center">
                      <a href="#" class="slider btn btn-primary" style="margin-top: 40%">Around 2000 deserving students get Genius Scholarship this year</a>
                  </p>
                </div>
            </div>
          </div>
      </div>
      <div></div>
    </div>


    {{-- <div class="banner-carousel-item" style="background-image:url(images/slider-main/slider1.jpg)">
      <div class="slider-content">
          <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-12 text-center">
                  <h2 class="slide-title" data-animation-in="slideInLeft">17 Years of excellence in</h2>
                  <h3 class="slide-sub-title" data-animation-in="slideInRight">Construction Industry</h3>
                  <p data-animation-in="slideInLeft" data-duration-in="1.2">
                      <a href="services.html" class="slider btn btn-primary">Our Services</a>
                      <a href="contact.html" class="slider btn btn-primary border">Contact Now</a>
                  </p>
                </div>
            </div>
          </div>
      </div>
    </div>
    
  
    <div class="banner-carousel-item" style="background-image:url(images/slider-main/slider2.jpg)">
      <div class="slider-content text-left">
          <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-12">
                  <h2 class="slide-title-box" data-animation-in="slideInDown">World Class Service</h2>
                  <h3 class="slide-title" data-animation-in="fadeIn">When Service Matters</h3>
                  <h3 class="slide-sub-title" data-animation-in="slideInLeft">Your Choice is Simple</h3>
                  <p data-animation-in="slideInRight">
                      <a href="services.html" class="slider btn btn-primary border">Our Services</a>
                  </p>
                </div>
            </div>
          </div>
      </div>
    </div>
  
    <div class="banner-carousel-item" style="background-image:url(images/slider-main/slider3.jpg)">
      <div class="slider-content text-right">
          <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-12">
                  <h2 class="slide-title" data-animation-in="slideInDown">Meet Our Engineers</h2>
                  <h3 class="slide-sub-title" data-animation-in="fadeIn">We believe sustainability</h3>
                  <p class="slider-description lead" data-animation-in="slideInRight">We will deal with your failure that determines how you achieve success.</p>
                  <div data-animation-in="slideInLeft">
                      <a href="#" class="slider btn btn-primary" aria-label="contact-with-us">Get Free Quote</a>
                      <a href="#" class="slider btn btn-primary border" aria-label="learn-more-about-us">Learn more</a>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </div> --}}
  </div>

  {{-- H.E. Mr. Md. Abdul Hamid, Honorable President of People’s Republic of Bangladesh inaugurated the Engine Boat and Net distribution program among Haor Fisherman. --}}

{{-- <section class="call-to-action no-padding">
  <div class="container">
    <div class="action-style-box">
        <div class="row">
          <div class="col-md-8 text-center text-md-left">
              <div class="call-to-action-text">
                <h3 class="action-title">We understand your needs on construction</h3>
              </div>
          </div><!-- Col end -->
          <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
              <div class="call-to-action-btn">
                <a class="btn btn-primary" href="contact.html">Request Quote</a>
              </div>
          </div><!-- col end -->
        </div><!-- row end -->
    </div><!-- Action style box -->
  </div><!-- Container end -->
</section><!-- Action end --> --}}

<section id="ts-service-area" class="ts-service-area pb-0">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">CZM Zakat Distribution & Utilization Programs</h2>
        </div>
        <br><br>
    </div>
    <!--/ Title row end -->

    <div class="row">
      <div class="row row-cols-1 row-cols-md-3 g-4">       

        <div class="col-md-3">
          <div class="card h-100">
            <img src="{{ asset('images/programs/Insaniat.png') }}"  style="padding-top: 20px; width:70%; display: block;  margin-left: auto; margin-right: auto; width: 50%;" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title" style="margin-top: -20px">INSANIAT</h5>
              <p class="card-text" style="margin-top: -15px" >Emergency Humanitarian Assistance Program</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card h-100">
            <img src="{{ asset('images/programs/Jeebika.png') }}"  style="padding-top: 20px; width:70%; display: block;  margin-left: auto; margin-right: auto; width: 50%;" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title" style="margin-top: -20px">JEEBIKA</h5>
              <p class="card-text" style="margin-top: -15px" >Livelihood & Human Development Program</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card h-100">
            <img src="{{ asset('images/programs/Mudareeb.png') }}"  style="padding-top: 20px; width:70%; display: block;  margin-left: auto; margin-right: auto; width: 50%;" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title" style="margin-top: -20px">MUDAREEB</h5>
              <p class="card-text" style="margin-top: -15px" >Micro-enterprise Development Program</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card h-100">
            <img src="{{ asset('images/programs/NB.png') }}"  style="padding-top: 20px; width:70%; display: block;  margin-left: auto; margin-right: auto; width: 50%;" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title" style="margin-top: -20px">NAIPUNNA BIKASH</h5>
              <p class="card-text" style="margin-top: -15px" >Vocational Training Program for Poor Youth</p>
            </div>
          </div>
        </div>
      </div> 
      <br>

      <div class="row row-cols-1 row-cols-md-3 g-4 mt-10">       
        <div class="col-md-3">
          <div class="card h-100">
            <img src="{{ asset('images/programs/ferdousi.png') }}"  style="padding-top: 20px; width:70%; display: block;  margin-left: auto; margin-right: auto; width: 50%;" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title" style="margin-top: -20px">FERDOUSI</h5>
              <p class="card-text" style="margin-top: -15px" >Healthcare Program for Distressed Women & Children</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card h-100">
            <img src="{{ asset('images/programs/gb.png') }}"  style="padding-top: 20px; width:70%; display: block;  margin-left: auto; margin-right: auto; width: 50%;" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title" style="margin-top: -20px">GULBAGICHA</h5>
              <p class="card-text" style="margin-top: -15px" >Education & Nutrition Program for Underprivileged Children</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card h-100">
            <img src="{{ asset('images/programs/genius.png') }}"  style="padding-top: 20px; width:70%; display: block;  margin-left: auto; margin-right: auto; width: 50%;" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title" style="margin-top: -20px">GENIUS</h5>
              <p class="card-text" style="margin-top: -15px" >Scholarship Program for Undergraduate Students</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card h-100">
            <img src="{{ asset('images/programs/dawah.png') }}"  style="padding-top: 20px; width:70%; display: block;  margin-left: auto; margin-right: auto; width: 50%;" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title" style="margin-top: -20px">DAWAH</h5>
              <p class="card-text" style="margin-top: -15px" >Awareness Building & Motivational Program</p>
            </div>
          </div>
        </div>

    </div><!-- Content row end -->

  </div>
  <!--/ Container end -->
</section><!-- Service end -->

<section>
  <div class="container ">
    <div class="row" style="background-color: #e0ffff !important;">
      <div class="col-md-8">
        <img src="{{ asset('images/other/czm.png') }}" alt="" style="display: block;  margin-left: auto; margin-right: auto;">
      </div>

      <div class="col-md-4">
        <div class="textwidget custom-html-widget padding-top">
            <a href="/sponsor-czm-projects-2/"><button class="side-btns" style="background:#408AC7" > Sponsor CZM Project
            </button></a>
            <br> <br> 
            <a href="/pay_zakat/"><button class="side-btns" style="background:#BE1B55" > Pay Your Zakat
            </button></a>
            <br> <br> 
            <a href="/success-stories/"><button class="side-btns" style="background:#228B22" > Success Stories
            </button></a>
            <br> <br> 
            <a href="https://czm-bd.org/zakat_calculator/"><button class="side-btns" style="background:#6699CE" > Zakat Calculator
            </button></a>
      </div>
        
      
        

      </div>
    </div>
  </div>
</section>

<section>
  <div class="container ">
    <div class="row text-center">
      <div class="col-12">
        <h2 class="section-title">Success Storiesy</h2>
      </div>
      <br><br>
  </div>
    <div class="row">
      <div class="col-md-6">

      </div>

      <div class="col-md-6">

      </div>
    </div>
  </div>
</section>


<section class="project-area solid-bg">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h2 class="section-title">Work of Excellence</h2>
        <h3 class="section-sub-title">Photo Gallery</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">


    </div>
  </div>
</section>



<section>
  <div class="container ">
    <div class="row text-center">
      <div class="col-12">
        <h2 class="section-title">Video Gallery</h2>
      </div>
      <br><br>
  </div>
    <div class="row">
      <div class="col-md-6">

      </div>

      <div class="col-md-6">

      </div>
    </div>
  </div>
</section>

<section class="project-area solid-bg">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h2 class="section-title">Work of Excellence</h2>
        <h3 class="section-sub-title">CZM News</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">


    </div>
  </div>
</section>


<section>
  <div class="container ">
    <div class="row text-center">
      <div class="col-12">
        <h2 class="section-title">Contact us</h2>
      </div>
      <br><br>
  </div>
    <div class="row">
      <div class="col-md-6">

      </div>

      <div class="col-md-6">

      </div>
    </div>
  </div>
</section>





@endsection

