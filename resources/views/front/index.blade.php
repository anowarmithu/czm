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
        <img src="{{ asset('images/other/czm.png') }}" alt="" style="display: block;  margin-left: auto; margin-right: auto; width:60%">
      </div>

      <div class="col-md-4">
        <div class="textwidget custom-html-widget padding-top">
            <a href="/sponsor-czm-projects-2/"><button class="side-btns2" style="background:#408AC7"> Sponsor CZM Project
    </button></a>
    <a href="/pay_zakat/"><button class="side-btns2" style="background:#BE1B55"> Pay Your Zakat
    </button></a>
    <a href="/success-stories/"><button class="side-btns2" style="background:#228B22"> Success Stories
    </button></a>
  
    <a href="https://czm-bd.org/zakat_calculator/"><button class="side-btns2" style="background:#581845"> Zakat Calculator
    </button></a>
      </div>

      </div>
    </div>
  </div>
</section>


<section id="ts-team" class="ts-team">
  <div class="container">
    <div class="row text-center">
        <div class="col-lg-12">
          <h2 class="section-title">Zakat Based Success Stories</h2><br>
        </div>
    </div><!--/ Title row end -->

    <div class="row">
        <div class="col-lg-12">
          <div id="team-slide" class="team-slide">

              <div class="card item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      {{-- <img loading="lazy" class="w-100" src="images/team/team1.jpg" alt="team-img"> --}}
                      <a href="/successStories/story"><img class="card-img-top" src="{{ asset('images/stories/Maya-Begum.jpg') }}"  width="100%" height="180"  alt=""></a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title crop-text-2">Nats Stenman</h5>
                      <p class="card-text crop-text-1">Nats Stenman began his career in construction with boots career in construction with boots career in construction with boots on the ground</p>
                     <!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 1 end -->

              <div class="card item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      {{-- <img loading="lazy" class="w-100" src="images/team/team1.jpg" alt="team-img"> --}}
                      <a href="#"><img class="card-img-top" src="{{ asset('images/stories/Maya-Begum.jpg') }}"  width="100%" height="180"  alt=""></a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title crop-text-2">Nats Stenman</h5>
                      <p class="card-text crop-text-1">Nats Stenman began his career in construction with boots career in construction with boots career in construction with boots on the ground</p>
                     <!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 2 end -->

              <div class="card item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      {{-- <img loading="lazy" class="w-100" src="images/team/team1.jpg" alt="team-img"> --}}
                      <a href="#"><img class="card-img-top" src="{{ asset('images/stories/Maya-Begum.jpg') }}"  width="100%" height="180"  alt=""></a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title crop-text-2">Nats Stenman</h5>
                      <p class="card-text crop-text-1">Nats Stenman began his career in construction with boots career in construction with boots career in construction with boots on the ground</p>
                     <!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 1 end -->

              <div class="card item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      {{-- <img loading="lazy" class="w-100" src="images/team/team1.jpg" alt="team-img"> --}}
                      <a href="#"><img class="card-img-top" src="{{ asset('images/stories/Maya-Begum.jpg') }}"  width="100%" height="180"  alt=""></a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title crop-text-2">Nats Stenman</h5>
                      <p class="card-text crop-text-1">Nats Stenman began his career in construction with boots career in construction with boots career in construction with boots on the ground</p>
                     <!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 1 end -->

              <div class="card item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      {{-- <img loading="lazy" class="w-100" src="images/team/team1.jpg" alt="team-img"> --}}
                      <a href="#"><img class="card-img-top" src="{{ asset('images/stories/Maya-Begum.jpg') }}"  width="100%" height="180"  alt=""></a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title crop-text-2">Nats Stenman</h5>
                      <p class="card-text crop-text-1">Nats Stenman began his career in construction with boots career in construction with boots career in construction with boots on the ground</p>
                     <!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 1 end -->

              <div class="card item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      {{-- <img loading="lazy" class="w-100" src="images/team/team1.jpg" alt="team-img"> --}}
                      <a href="#"><img class="card-img-top" src="{{ asset('images/stories/Maya-Begum.jpg') }}"  width="100%" height="180"  alt=""></a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title crop-text-2">Nats Stenman</h5>
                      <p class="card-text crop-text-1">Nats Stenman began his career in construction with boots career in construction with boots career in construction with boots on the ground</p>
                     <!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 1 end -->

              <div class="card item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      {{-- <img loading="lazy" class="w-100" src="images/team/team1.jpg" alt="team-img"> --}}
                      <a href="#"><img class="card-img-top" src="{{ asset('images/stories/Maya-Begum.jpg') }}"  width="100%" height="180"  alt=""></a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title crop-text-2">Nats Stenman</h5>
                      <p class="card-text crop-text-1">Nats Stenman began his career in construction with boots career in construction with boots career in construction with boots on the ground</p>
                     <!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 1 end -->

          </div><!-- Team slide end -->
        </div>
    </div><!--/ Content row end -->
  </div><!--/ Container end -->
  <div class="col-12">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="projects.html">View All Stories</a>
        </div>
  </div>
</section><!--/ Team end -->

<br>

<section class="project-area solid-bg">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h2 class="section-title">Photo Gallery</h2><br>
      </div>
    </div>
    <!--/ Title row end -->

    <!-- Gallery -->
  <div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>
  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>
  <div class="col-lg-4 mb-4 mb-lg-0">
      <img
      src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
    
  </div>

  
  </div>

    {{-- <div class="row">
      <div class="col-12">
        <div class="shuffle-btn-group">
          <label class="active" for="all">
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Show All
          </label>
          <label for="commercial">
            <input type="radio" name="shuffle-filter" id="commercial" value="commercial">Jeebika
          </label>
          <label for="education">
            <input type="radio" name="shuffle-filter" id="education" value="education">Genius
          </label>
          <label for="government">
            <input type="radio" name="shuffle-filter" id="government" value="government">Insaniat
          </label>
          <label for="infrastructure">
            <input type="radio" name="shuffle-filter" id="infrastructure" value="infrastructure">Health
          </label>
          <label for="residential">
            <input type="radio" name="shuffle-filter" id="residential" value="residential">Vocational
          </label>
          <label for="healthcare">
            <input type="radio" name="shuffle-filter" id="healthcare" value="healthcare">Healthcare
          </label>
        </div><!-- project filter end -->


        <div class="row shuffle-wrapper">
          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;government&quot;,&quot;healthcare&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project1.jpg" aria-label="project-img">
                <img class="w-100 shadow-1-strong rounded mb-4" src="images/projects/project1.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              
            </div>
          </div><!-- shuffle item 1 end -->

          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project2.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project2.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
            </div>
          </div><!-- shuffle item 2 end -->

          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;infrastructure&quot;,&quot;commercial&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project3.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
            </div>
          </div><!-- shuffle item 3 end -->

          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;education&quot;,&quot;infrastructure&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project4.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project4.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
            </div>
          </div><!-- shuffle item 4 end -->

          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;infrastructure&quot;,&quot;education&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project5.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project5.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
            </div>
          </div><!-- shuffle item 5 end -->

          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;residential&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project6.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project6.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
            </div>
          </div><!-- shuffle item 6 end -->
        </div><!-- shuffle end -->
      </div>

      <div class="col-12">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="projects.html">View All Images</a>
        </div>
      </div>

    </div> --}}
  <!-- Gallery -->
  </div>
  <div class="col-12" style="margin-top:-40px;">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="/gallery/image"> All Photos</a>
        </div>
  </div>
  <br>
</section>





<section>
  <div class="container ">
    <div class="row text-center">
      <div class="col-12">
         <h2 class="section-title">Work of Excellence</h2>
        <h3 class="section-sub-title">Video Gallery</h3>
      </div>
      <br><br>
  </div>

  <div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <a href="https://youtu.be/YTsY8CepMmY?list=PLqGW84RLvtT3wT150rpykmReEcWWGa7PJ">
      <img
        src="{{ asset('images/youtube/v11.jpg') }}"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
      <p style="margin-top:-20px; text-align: center;">যাকাত কি এবং কেন?</p>
    </a>
  </div>

   <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <a href="https://youtu.be/HvDfI-12ah8?list=PLqGW84RLvtT3wT150rpykmReEcWWGa7PJ">
      <img
        src="{{ asset('images/youtube/v21.jpg') }}"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
      <p style="margin-top:-20px; text-align: center;">যাকাত, সদাক্বাহ এবং ট্যাক্সের মধ্যে পার্থক্য কি?</p>
    </a>
  </div>

  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <a href="https://youtu.be/HvDfI-12ah8?list=PLqGW84RLvtT3wT150rpykmReEcWWGa7PJ" target="_blank">
      <img
        src="{{ asset('images/youtube/v11.jpg') }}"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
      <p style="margin-top:-20px; text-align: center;">যাকাত কি এবং কেন?</p>
    </a>
  </div>
  
  <div class="col-lg-4 mb-4 mb-lg-0" style="height: 220px">
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/HvDfI-12ah8?list=PLqGW84RLvtT3wT150rpykmReEcWWGa7PJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0" style="height: 220px">
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/HvDfI-12ah8?list=PLqGW84RLvtT3wT150rpykmReEcWWGa7PJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0" style="height: 220px">
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/HvDfI-12ah8?list=PLqGW84RLvtT3wT150rpykmReEcWWGa7PJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  
  </div>
  <div class="col-12" style="margin-top:-30px;">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="/gallery/video"> All Videos</a>
        </div>
  </div>
  <br>
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
        <div class="col-lg-12">
          
          <div id="team-slide" class="team-slide">

              <div class="card item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      {{-- <img loading="lazy" class="w-100" src="images/team/team1.jpg" alt="team-img"> --}}
                      <a href="#"><img class="card-img-top" src="{{ asset('images/stories/Maya-Begum.jpg') }}"  width="100%" height="180"  alt=""></a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title crop-text-2">Nats Stenman</h5>
                      <p class="card-text crop-text-1">Nats Stenman began his career in construction with boots career in construction with boots career in construction with boots on the ground</p>
                     <!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 1 end -->

              <div class="card item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      {{-- <img loading="lazy" class="w-100" src="images/team/team1.jpg" alt="team-img"> --}}
                      <a href="#"><img class="card-img-top" src="{{ asset('images/stories/Nusrat.jpg') }}"  width="100%" height="180"  alt=""></a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title crop-text-2">Nats Stenman</h5>
                      <p class="card-text crop-text-1">Nats Stenman began his career in construction with boots career in construction with boots career in construction with boots on the ground</p>
                     <!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 2 end -->

              <div class="card item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      {{-- <img loading="lazy" class="w-100" src="images/team/team1.jpg" alt="team-img"> --}}
                      <a href="#"><img class="card-img-top" src="{{ asset('images/stories/Maya-Begum.jpg') }}"  width="100%" height="180"  alt=""></a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title crop-text-2">Nats Stenman</h5>
                      <p class="card-text crop-text-1">Nats Stenman began his career in construction with boots career in construction with boots career in construction with boots on the ground</p>
                     <!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 1 end -->

              <div class="card item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      {{-- <img loading="lazy" class="w-100" src="images/team/team1.jpg" alt="team-img"> --}}
                      <a href="#"><img class="card-img-top" src="{{ asset('images/stories/Nusrat.jpg') }}"  width="100%" height="180"  alt=""></a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title crop-text-2">Nats Stenman</h5>
                      <p class="card-text crop-text-1">Nats Stenman began his career in construction with boots career in construction with boots career in construction with boots on the ground</p>
                     <!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 1 end -->

              <div class="card item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      {{-- <img loading="lazy" class="w-100" src="images/team/team1.jpg" alt="team-img"> --}}
                      <a href="#"><img class="card-img-top" src="{{ asset('images/stories/Maya-Begum.jpg') }}"  width="100%" height="180"  alt=""></a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title crop-text-2">Nats Stenman</h5>
                      <p class="card-text crop-text-1">Nats Stenman began his career in construction with boots career in construction with boots career in construction with boots on the ground</p>
                     <!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 1 end -->

              <div class="card item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      {{-- <img loading="lazy" class="w-100" src="images/team/team1.jpg" alt="team-img"> --}}
                      <a href="#"><img class="card-img-top" src="{{ asset('images/stories/Maya-Begum.jpg') }}"  width="100%" height="180"  alt=""></a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title crop-text-2">Nats Stenman</h5>
                      <p class="card-text crop-text-1">Nats Stenman began his career in construction with boots career in construction with boots career in construction with boots on the ground</p>
                     <!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 1 end -->

              <div class="card item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      {{-- <img loading="lazy" class="w-100" src="images/team/team1.jpg" alt="team-img"> --}}
                      <a href="#"><img class="card-img-top" src="{{ asset('images/stories/Maya-Begum.jpg') }}"  width="100%" height="180"  alt=""></a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title crop-text-2">Nats Stenman</h5>
                      <p class="card-text crop-text-1">Nats Stenman began his career in construction with boots career in construction with boots career in construction with boots on the ground</p>
                     <!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 1 end -->

          </div><!-- Team slide end -->
        </div>
    </div><!--/ Content row end -->
  </div><!--/ Container end -->
  <div class="col-12">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="/news"> All Stories</a>
        </div>
  </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h2 class="section-title">Reaching our Office</h2>
        <h3 class="section-sub-title">Find Our Location</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fas fa-map-marker-alt mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Visit Our Office</h4>
            <p class="text-justify">House # 26, Road # 07, Block - C
              Niketan, Gulshan-1, Dhaka-1212</p>
          </div>
        </div>
      </div><!-- Col 1 end -->

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-envelope mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Email Us</h4>
            <p class="text-justify">info@czm-bd.org</p>
          </div>
        </div>
      </div><!-- Col 2 end -->

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-phone-square mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Call Us</h4>
            <p class="text-justify">+88 02 2222 98255</p>
          </div>
        </div>
      </div><!-- Col 3 end -->

    </div><!-- 1st row end -->

    <div class="gap-60"></div>

    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=center for zakat&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fnfgo.com/">FNF Online</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>

  </div>
</section>

<br>

@endsection

