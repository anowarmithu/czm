@extends('front.layouts.main')

@section('title', 'Center for Zakat Management')
@section('content')

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


@endsection