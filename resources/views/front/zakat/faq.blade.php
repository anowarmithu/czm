@extends('front.layouts.main')

@section('title', 'Center for Zakat Management')
@section('content')

<div class="row text-center" style="margin-top: 25px">
    <div class="col-lg-12">
      <h2 class="section-title">URL Working</h2>
      <h3 class="section-sub-title"> FAQ Page</h3>
    </div>
</div>


<div class="container ">
    <div class="row position-relative">
      <div class="col-md-9 col-sm-12">

        <h3 class="border-title border-left mar-t0">Construction general</h3>

        <div class="accordion accordion-group accordion-classic" id="construction-accordion">
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  Does the law require head protection on construction sites?
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
              data-parent="#construction-accordion">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                moon officia aute, non cupidata
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                  data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  What are the first aid requirements for sites?
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#construction-accordion">
              <div class="card-body">
                Anemi nim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupid henderit in voluptate velit esse cillu oris nisi ut aliquip ex ea com
                matat.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                  data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  What is an appointed person?
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
              data-parent="#construction-accordion">
              <div class="card-body">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.
              </div>
            </div>
          </div>
        </div>
        <!--/ Accordion end -->

        <div class="gap-40"></div>

        <h3 class="border-title border-left">Safety</h3>

        <div class="accordion accordion-group accordion-classic" id="safety-accordion">
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingFour">
              <h2 class="mb-0">
                <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour"
                  aria-expanded="true" aria-controls="collapseFour">
                  Mauris rhoncus pretium porttitor cras scelerisque commodo odio ?
                </button>
              </h2>
            </div>

            <div id="collapseFour" class="collapse show" aria-labelledby="headingFour"
              data-parent="#safety-accordion">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                moon officia aute, non cupidata
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingFive">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                  data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  What are the first aid requirements for sites?
                </button>
              </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#safety-accordion">
              <div class="card-body">
                Anemi nim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupid henderit in voluptate velit esse cillu oris nisi ut aliquip ex ea com
                matat.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingSix">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                  data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  What is an appointed person?
                </button>
              </h2>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
              data-parent="#safety-accordion">
              <div class="card-body">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.
              </div>
            </div>
          </div>
        </div>
        <!--/ Accordion end -->
     
      </div>

      <div class="col-md-3 col-sm-12">
        @include("front.layouts.sidebar")
      </div>

    </div>
  </div>




@endsection

