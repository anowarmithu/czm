@extends('front.layouts.main')

@section('title', 'Center for Zakat Management')
@section('content')

<div class="row text-center" style="margin-top: 25px">
    <div class="col-lg-12">
      <h2 class="section-title">URL Working</h2>
      <h3 class="section-sub-title"> Books Page</h3>
    </div>
</div>

  <div class="container " style="margin-bottom: 50px">
        <div class="row position-relative">
          <div class="col-md-9 col-sm-12">
            <div class="container">
  
  <div class="row">

    <div class="col-md-4" style="margin-bottom: 10px">
      <div class="card">
        <img src="{{ asset('images/publications/pub1.jpg') }}" class="card-img-top" style="" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title ">Zakat for Sustainable Livelihoods</h5>
          
          <p class="card-text"> <a href="/">Download</a></p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="{{ asset('images/publications/pub2.jpg') }}" class="card-img-top" style="" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title ">Zakat for Sustainable Livelihoods</h5>
          
          <p class="card-text"> <a href="/">Download</a></p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="{{ asset('images/publications/pub1.jpg') }}" class="card-img-top" style="" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title ">Zakat for Sustainable Livelihoods</h5>
          
          <p class="card-text"> <a href="/">Download</a></p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="{{ asset('images/publications/pub1.jpg') }}" class="card-img-top" style="" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title ">Zakat for Sustainable Livelihoods</h5>

          <p class="card-text"> <a href="/">Download</a></p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="{{ asset('images/publications/pub1.jpg') }}" class="card-img-top" style="" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title ">Zakat for Sustainable Livelihoods</h5>
          <p class="card-text"> <a href="/">Download</a></p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="{{ asset('images/publications/pub1.jpg') }}" class="card-img-top" style="" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title ">Zakat for Sustainable Livelihoods</h5>
          
          <p class="card-text"> <a href="/">Download</a></p>
        </div>
      </div>
    </div>
    
  </div>
</div>
            
  
          </div>
          
          

          <div class="col-md-3 col-sm-12">
            @include("front.layouts.sidebar")
          </div>

        </div>
  </div>





@endsection