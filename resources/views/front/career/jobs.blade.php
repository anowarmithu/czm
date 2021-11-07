@extends('front.layouts.main')

@section('title', 'Center for Zakat Management')
@section('content')

<div class="row text-center"
     style="margin-top: 25px">
    <div class="col-lg-12">
        {{-- <h2 class="section-title">URL Working</h2> --}}
        <h3 class="section-sub-title"> Job Openings</h3>
    </div>
</div>


<div class="container ">
    <div class="row position-relative">
        <div class="col-md-9 col-sm-12">

      <div class="alert alert-success"
          style="">

         <div class="ts-service-box">
             <span class="ts-service-icon">
                 <i class="fas fa-briefcase"></i>
             </span>
             <div class="ts-service-box-content">
                 <h3 class="service-box-title">
                     <a href="/career/job_details">Manager, Branding and Dawah</a>
                 </h3>
                 <div>
                     <span>
                         <i class="fas fa-map-marker-alt mr-2"> </i>Gulshan, Dhaka</span>
                     <span class="ml-3"><b> Vacencies: </b>01</span>
                 </div>
                 <div>
                     <span>
                         <i class="fas fa-graduation-cap mr-2"> </i>Masters
                     </span>
                     <span>
                         <i class="far fa-money-bill-alt mr-2 ml-2"> </i>BDT 40,000
                     </span>
                 </div>
             </div>
         </div>
     </div>

     <div class="alert alert-success"
                 style="">

                <div class="ts-service-box">
                    <span class="ts-service-icon">
                        <i class="fas fa-briefcase"></i>
                    </span>
                    <div class="ts-service-box-content">
                        <h3 class="service-box-title">
                            <a href="">Porject Manager</a>
                        </h3>
                        <div>
                            <span>
                                <i class="fas fa-map-marker-alt mr-2"> </i>Sonaimuri, Noakhali</span>
                            <span class="ml-3"><b> Vacencies: </b>01</span>
                        </div>
                        <div>
                            <span>
                                <i class="fas fa-graduation-cap mr-2"> </i>Masters
                            </span>
                            <span>
                                <i class="far fa-money-bill-alt mr-2 ml-2"> </i>BDT 24,000
                            </span>
                        </div>
                    </div>
                </div>
      </div>

      <div class="alert alert-success"
                 style="">

                <div class="ts-service-box">
                    <span class="ts-service-icon">
                        <i class="fas fa-briefcase"></i>
                    </span>
                    <div class="ts-service-box-content">
                        <h3 class="service-box-title">
                            <a href="">Field Office</a>
                        </h3>
                        <div>
                            <span>
                                <i class="fas fa-map-marker-alt mr-2"> </i>Sonaimuri, Noakhali</span>
                            <span class="ml-3"><b> Vacencies: </b>03</span>
                        </div>
                        <div>
                            <span>
                                <i class="fas fa-graduation-cap mr-2"> </i>Masters
                            </span>
                            <span>
                                <i class="far fa-money-bill-alt mr-2 ml-2"> </i>BDT 14,000
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="alert alert-success"
                 style="">

                <div class="ts-service-box">
                    <span class="ts-service-icon">
                        <i class="fas fa-briefcase"></i>
                    </span>
                    <div class="ts-service-box-content">
                        <h3 class="service-box-title">
                            <a href="">Health Assistant</a>
                        </h3>
                        <div>
                            <span>
                                <i class="fas fa-map-marker-alt mr-2"> </i>Sonaimuri, Noakhali</span>
                            <span class="ml-3"><b> Vacencies: </b>03</span>
                        </div>
                        <div>
                            <span>
                                <i class="fas fa-graduation-cap mr-2"> </i>Diploma
                            </span>
                            <span>
                                <i class="far fa-money-bill-alt mr-2 ml-2"> </i>BDT 12,000
                            </span>
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
